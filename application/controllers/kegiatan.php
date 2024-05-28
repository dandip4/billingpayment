<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('m_kegiatan');
    }

    public function index()
    {

        $data['kegiatan'] = $this->m_kegiatan->get_data();
        $data['containerview'] = "kegiatan/kegiatan";
        $this->load->view('index', $data);
    }

    public function create()
    {
        $data['containerview'] = "kegiatan/create";
        $this->load->view('index', $data);
    }

    public function store()
    {
        $kegiatan  = $this->input->post('kegiatan');
        $biaya  = $this->input->post('biaya');
        $ArrInsert = array(
            'kegiatan' => $kegiatan,
            'biaya' => $biaya
        );
        $this->m_kegiatan->insert($ArrInsert);
        redirect(base_url('kegiatan/index'));
    }

    public function edit($id)
    {
        $queryDataDetail = $this->m_kegiatan->getDataDetail($id);
        $data = array('querydetail' => $queryDataDetail);


        $data['containerview'] = "kegiatan/edit";
        $this->load->view('index', $data,);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $kegiatan = $this->input->post('kegiatan');
        $biaya = $this->input->post('biaya');

        $ArrUpdate = array(

            'id' => $id,
            'kegiatan' => $kegiatan,
            'biaya' => $biaya
        );
        $this->m_kegiatan->update($id, $ArrUpdate);
        redirect(base_url('kegiatan/index'));
    }

    public function delete($id)
    {
        $this->m_kegiatan->delete($id);
        redirect(base_url('kegiatan/index'));
    }





    // public function store()
    // {
    //     $Nim = $This->Input->Post('Nim');
    //     $Nama = $This->Input->Post('Nama');
    //     $Jurusan = $This->Input->Post('Jurusan');
    //     $ArrInsert = array(
    //         'Nim' => $Nim,
    //         'Nama' => $Nama,
    //         'Jurusan' => $Jurusan
    //     );
    //     $This->M_Mahasiswa->InsertDataMahasiswa($ArrInsert);
    //     Redirect(Base_url(''));
    // }
}
