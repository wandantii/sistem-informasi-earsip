<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dunit extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('mdunit');
		}

		public function index() {
			$data['data'] = $this->mdunit->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/dunit/select', $data);
			$this->load->view('layout/footer');
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 
				$this->load->view('layout/header');
				$this->load->view('pages/dunit/insert');
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dunit/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				$this->mdunit->getdata();

				redirect(base_url('data_unit'));
			}
			else {
				$data['data'] = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dunit/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('tbl_unit', array('id_unit'=>$id))->row(); 

				$this->load->view('layout/header');
				$this->load->view('pages/dunit/update', array('data'=>$data));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dunit/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$this->mdunit->getupdate();

				redirect(base_url('data_unit'));
			}
			else {
				$data['data'] = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dunit/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->mdunit->delete($id);

				redirect(base_url('data_unit'));
			}
			else {
				$data['data'] = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dunit/select', $data);
				$this->load->view('layout/footer');
			}
		}

	}
	

?>