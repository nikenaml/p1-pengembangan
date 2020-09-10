<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// function __construct()
	// {
		// parent::__construct();
		// $this->load->model("buku_model");
		// $this->load->helper(array('form', 'url'));
		// if(!$this->session->userdata('username')){
			// redirect('login');}
	// }

	function __construct(){
        parent::__construct();
        //load libary pagination
		$this->load->library('pagination');

		//load the department_model
		$this->load->model("downloader_model");
	}
	
	// public function daftar_downloder()
	// {
	// 	$this->load->model("downloader_model");
	// 	$buku = $this->downloader_model->get();
	// 	// var_dump($buku);
	// 	// die();
		
	// 	$view_data = array();
	// 	$view_data ["camaba"] = $camaba;
		
	// 	$this->load->view("daftar_nama_buku",$view_data);
	// }


	public function index()
	{
			// load data dari database
		$this->load->model("downloader_model");
		$daftar_downloader = $this ->downloader_model->read();


		// lempar data ke view
		// $view_data = array();
		$view_data['daftar_downloader'] = $daftar_downloader;

		$view_data['body_page'] = 'Halaman Admin';
		$view_data['pagination'] = $this->pagination->create_links();
		$this->load->view('templates/header', $view_data);
		$this->load->view('templates/navbar', $view_data);
		$this->load->view('templates/sidebar', $view_data);
		$this->load->view('downloader/read', $view_data);
		// $this->load->view('templates/content', $view_data);
		$this->load->view('templates/footer', $view_data);

		
	}
}

//Controller File
// function yourControllerMethod()
// {
//     $this->main();
//     $this->load->model('yourModel');
//     $data['result']  = $this->yourModel->getResultMethod();
//     $this->load->view('yourView',$data);
// }

