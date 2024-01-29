<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Identitas extends CI_Controller {
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

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('tbl_identitas', array('id_identitas'=>$id))->row(); 

				$this->load->view('layout/header');
				$this->load->view('pages/identitas/update', array('data'=>$data));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->midentitas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/identitas/select', $data);
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
				
				$this->midentitas->getupdate($post_image);
				
				redirect(base_url('identitas'));
			}
			else {
				$data['data'] = $this->midentitas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/identitas/select', $data);
				$this->load->view('layout/footer');
			}
		}
	}

?>