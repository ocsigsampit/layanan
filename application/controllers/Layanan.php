<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends MY_Controller{
	public function __construct(){
		parent::__construct();
		// Load model
		$this->load->model('model_layanan');
		$this->load->library('form_validation');
	}
	
	public function index(){
		// Data untuk page index
		
		$data['pageTitle']   = 'Cek Status Layanan';
		$data['pageContent'] = $this->load->view('layanan/cekStatus', $data, TRUE);

		// Jalankan view template/layout
		$this->load->view('template/layout', $data);

	}
	
	public function cek_status(){
		$no_bps = trim($this->input->post("no_bps"));
		
		$hasil  = $this->model_layanan->cek_status($no_bps);
		
		if($hasil == "1"){
			$status = "Selesai";
		}elseif($hasil == "0"){
			$status = "Proses";
		}elseif($hasil == "Err"){
			$status = "Err";
		}
		
		///$status = ($hasil == "1") ? "Selesai" : "Proses";
		
		$data['pageTitle']   = 'Status Layanan';
		$data['status']      = $status;
		$data['pageContent'] = $this->load->view('layanan/hasilCekStatus', $data, TRUE);

		$this->load->view('template/layout', $data);

	}
	
}