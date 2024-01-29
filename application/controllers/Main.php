<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('midentitas');
		}

		public function index() {
			$data['data'] = $this->midentitas->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/identitas/select', $data);
			$this->load->view('layout/footer');
		}
		
	}

?>