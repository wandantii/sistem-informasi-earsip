<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dinstansi extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('mdinstansi');
		}

		public function index() {
			$data['data'] = $this->mdinstansi->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/dinstansi/select', $data);
			$this->load->view('layout/footer');
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 
				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/insert');
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mdinstansi->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				$config['upload_path'] = './assets/img';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload()) {
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';
				}
				else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}
				
				$this->mdinstansi->getdata($post_image);

				redirect(base_url('data_instansi'));
			}
			else {
				$data['data'] = $this->mdinstansi->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('tbl_instansi', array('id_instansi'=>$id))->row(); 

				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/update', array('data'=>$data));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mdinstansi->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$config['upload_path'] = './assets/img';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload()) {
					$errors = array('error' => $this->upload->display_errors());
					$post_image = $this->input->post('userfile2');
				}
				else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}
				
				$this->mdinstansi->getupdate($post_image);
				
				redirect(base_url('data_instansi'));
			}
			else {
				$data['data'] = $this->mdinstansi->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->mdinstansi->delete($id);

				redirect(base_url('data_instansi'));
			}
			else {
				$data['data'] = $this->mdinstansi->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/dinstansi/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function view($id) {
			$data = $this->db->get_where('tbl_instansi', array('id_instansi'=>$id))->row(); 

			$this->mdinstansi->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/dinstansi/view', array('data'=>$data));
			$this->load->view('layout/footer');
		}

	}
	

?>