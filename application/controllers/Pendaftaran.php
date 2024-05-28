<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{


	public function index()
	{
		$this->load->model('m_pendaftaran');
		$data['kegiatan'] = $this->m_pendaftaran->get_data();
		$data['containerview'] = "pendaftaran";

		$this->load->view('index', $data);
	}

	public function daftar()
	{
		$kegiatan = $this->input->post('kegiatan');
		$id_user = 1;

		$payloadPendaftaran = [
			'id_user' => $id_user,
			'id_prodi' => 1,
			'id_kegiatan' => json_encode($kegiatan),
		];

		$total = 0;
		$nama = [];
		foreach (json_decode($payloadPendaftaran['id_kegiatan']) as $key => $id_kegiatan) {
			$kegiatan = $this->m_pendaftaran->findData($id_kegiatan)[0];
			$total += (int) $kegiatan->biaya;
			$nama[] = $kegiatan->kegiatan;
		}
		$payloadPendaftaran['total'] = $total;
		$payloadPendaftaran['nama_kegiatan'] = $nama;
		// $newPendaftaran = $this->m_pendaftaran->storeData($payloadPendaftaran);
		$data['detail_invoice'] = $payloadPendaftaran;
		$data['containerview'] = "pendaftaran";


		$this->load->view('invoice', $data);
	}
}
