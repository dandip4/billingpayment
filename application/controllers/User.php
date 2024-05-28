<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('m_user');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['user'] = $this->m_user->get_data();
        $data['containerview'] = "user/user";
        $this->load->view('index', $data);
    }

    public function create()
    {
        $data['containerview'] = "user/create";
        $this->load->view('index', $data);
    }

    public function store()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules(
            'confirm',
            'Confirmasi Password',
            'required|matches[password]',
            array('matches' => '%s tidak sesuai dengan password')
        );
        $this->form_validation->set_rules('no_hp', 'Nomor Telephone', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['containerview'] = "user/create";
            $this->load->view('index', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_user->insert($post);
            if ($this->db->affected_rows() > 0) {
                echo " <script>
                alert('data berhasil');
                </script>
                ";
            }
            echo " <script>
                window.location='" . site_url('user/index') . "';
                </script>
                ";
            // redirect(base_url('user/index'));
        }
    }

    // public function edit($id)
    // {
    //     $queryDataDetail = $this->m_user->getDataDetail($id);
    //     $data = array('querydetail' => $queryDataDetail);


    //     $data['containerview'] = "user/edit";
    //     $this->load->view('index', $data,);
    // }

    public function update($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]|callback_email_check');
        if ($this->input->post('passsword')) {
            $this->form_validation->set_rules('password', 'Password');
            $this->form_validation->set_rules(
                'confirm',
                'Confirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        if ($this->input->post('confirm')) {
            $this->form_validation->set_rules(
                'confirm',
                'Confirmasi Password',
                'matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );
        }
        $this->form_validation->set_rules('no_hp', 'Nomor Telephone', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $queryDataDetail = $this->m_user->getDataDetail($id);
            if ($queryDataDetail->num_rows() > 0) {
                $data['row'] = $queryDataDetail->row();
                $data['containerview'] = "user/edit";
                $this->load->view('index', $data);
            } else {
                echo " <script> alert('data tidak ditemukan');";
                echo " window.location='" . site_url('user/index') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->m_user->update($post);
            if ($this->db->affected_rows() > 0) {
                echo " <script>
                    window.location='" . site_url('user/index') . "';
                    </script>
                    ";
            }
            // $data = array('querydetail' => $queryDataDetail);
            // $data['containerview'] = "user/edit";
            // $this->load->view('index', $data,);
            // redirect(base_url('user/index'));
        }
    }

    function email_check()
    {
        $post = $this->input->post(null, TRUE);
        $queryDataDetail = $this->db->query("SELECT * FROM user WHERE email = '$post[email]' AND id != '$post[id]'");
        if ($queryDataDetail->num->rows() > 0) {
            $this->form_validation->set_message('email_check', '{field} ini sudah dipakai');
        }
    }

    // public function update()
    // {
    //     $id = $this->input->post('id');
    //     $nama = $this->input->post('nama');
    //     $email = $this->input->post('email');
    //     $password = sha1($this->input->post("password"));
    //     $no_hp = $this->input->post('no_hp');
    //     $jk = $this->input->post('jk');
    //     $level = $this->input->post('level');

    //     $ArrUpdate = array(

    //         'id' => $id,
    //         'nama' => $nama,
    //         'email' => $email,
    //         'password' => $password,
    //         'no_hp' => $no_hp,
    //         'jk' => $jk,
    //         'level' => $level,
    //     );
    //     $this->m_user->update($id, $ArrUpdate);
    //     redirect(base_url('user/index'));
    // }

    public function delete($id)
    {
        $this->m_user->delete($id);
        redirect(base_url('user/index'));
    }
}
