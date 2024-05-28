
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function test()
	{
		$input = $this->input->post('input');
		$bagi = explode(",", $input[0]);

		echo json_encode($input);
		echo "<pre>";
		print_r($bagi);
		echo "<br>";
		print_r($input);
		echo "</pre>";

		$this->load->view('test');
	}

	public function index()
	{
		$data['containerview'] = "dashboard";
		$this->load->view('index', $data);
	}
	public function listdata()
	{
		$data['containerview'] = "listdata";
		$this->load->view('index', $data);
	}

	public function login()
	{
		$data['containerview'] = "login";
		$this->load->view('formsign', $data);
	}

	public function register()
	{
		$data['containerview'] = "register";
		$this->load->view('formsign', $data);
	}
}
