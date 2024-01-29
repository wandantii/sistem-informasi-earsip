<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Petugas extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('mpetugas');
		}

		public function index() {
			$data['data'] = $this->mpetugas->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/petugas/select', $data);
			$this->load->view('layout/footer');
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 
				$this->load->view('layout/header');
				$this->load->view('pages/petugas/insert');
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/petugas/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				$enc_password = md5($this->input->post('password'));

				$this->mpetugas->getdata($enc_password);
	
				redirect(base_url('petugas'));
			}
			else {
				$data['data'] = $this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/petugas/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('users', array('id'=>$id))->row(); 

				$this->load->view('layout/header');
				$this->load->view('pages/petugas/update', array('data'=>$data));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/petugas/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$this->mpetugas->getupdate();

				redirect(base_url('petugas'));
			}
			else {
				$data['data'] = $this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/petugas/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->mpetugas->delete($id);

				redirect(base_url('petugas'));
			}
			else {
				$data['data'] = $this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/petugas/select', $data);
				$this->load->view('layout/footer');
			}
		}

        public function check_username_exists ($username) {
            $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			
			if ($this->mpetugas->check_username_exists($username)) {
                return true;
            }
            else {
                return false;
            }
        }

        public function check_email_exists ($email) {
            $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			
			if ($this->mpetugas->check_email_exists($email)) {
                return true;
            }
            else {
                return false;
            }
		}
		
	}

?>