<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('m_prodi');
    }

    public function index()
    {

        $data['prodi'] = $this->m_prodi->get_data();
        $data['containerview'] = "prodi/prodi";
        $this->load->view('index', $data);
    }

    public function create()
    {
        $data['containerview'] = "prodi/create";
        $this->load->view('index', $data);
    }

    public function store()
    {
        $kode_prodi  = $this->input->post('kode_prodi');
        $nama_prodi  = $this->input->post('nama_prodi');
        $batas_pendaftaran  = $this->input->post('batas_pendaftaran');
        $ArrInsert = array(
            'kode_prodi' => $kode_prodi,
            'nama_prodi' => $nama_prodi,
            'batas_pendaftaran' => $batas_pendaftaran,
        );
        $this->m_prodi->insert($ArrInsert);
        redirect(base_url('prodi/index'));
    }

    public function edit($id)
    {
        $queryDataDetail = $this->m_prodi->getDataDetail($id);
        $data = array('querydetail' => $queryDataDetail);


        $data['containerview'] = "prodi/edit";
        $this->load->view('index', $data,);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $kode_prodi = $this->input->post('kode_prodi');
        $nama_prodi = $this->input->post('nama_prodi');
        $batas_pendaftaran = $this->input->post('batas_pendaftaran');

        $ArrUpdate = array(

            'id' => $id,
            'kode_prodi' => $kode_prodi,
            'nama_prodi' => $nama_prodi,
            'batas_pendaftaran' => $batas_pendaftaran
        );
        $this->m_prodi->update($id, $ArrUpdate);
        redirect(base_url('prodi/index'));
    }

    public function delete($id)
    {
        $this->m_prodi->delete($id);
        redirect(base_url('prodi/index'));
    }
}
