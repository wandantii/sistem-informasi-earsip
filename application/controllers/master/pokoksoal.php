<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pokoksoal extends CI_Controller {
		public function __construct() {
			parent::__construct();
			
			$this->load->model('mpokoksoal');
			$this->load->model('mdunit');
		}

		public function index() {
			$data['data'] = $this->mpokoksoal->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/pokoksoal/select', $data);
			$this->load->view('layout/footer');
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 

				$unit['unit'] = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/insert', $unit);
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mpokoksoal->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				$this->mpokoksoal->getdata();

				redirect(base_url('pokok_soal'));
			}
			else {
				$data['data'] = $this->mpokoksoal->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('tbl_pokoksoal', array('id_pokoksoal'=>$id))->row(); 

				$units = $this->mdunit->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/update', array('data'=>$data, 'units'=>$units));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mpokoksoal->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$this->mpokoksoal->getupdate();

				redirect(base_url('pokok_soal'));
			}
			else {
				$data['data'] = $this->mpokoksoal->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->mpokoksoal->delete($id);

				redirect(base_url('pokok_soal'));
			}
			else {
				$data['data'] = $this->mpokoksoal->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/pokoksoal/select', $data);
				$this->load->view('layout/footer');
			}
		}
	}

?>