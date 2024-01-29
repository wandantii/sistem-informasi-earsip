<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Parsip extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('mparsip');
			$this->load->model('marsipbaru');
			$this->load->model('midentitas');
			$this->load->model('mpetugas');
		}

		public function index() {
			$data['data'] = $this->mparsip->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/parsip/select', $data);
			$this->load->view('layout/footer');
		}

		public function view($id) {
			$data = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row(); 

			$this->mparsip->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/parsip/view', array('data'=>$data));
			$this->load->view('layout/footer');
		}

		public function cetak($id) {
			$data = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row(); 

			$this->mparsip->tampil();

			$arsip = $this->db->get_where('tbl_arsip', array('id_arsip'=>$data->id_arsip))->row();

			$this->marsipbaru->tampil();
			
			$this->load->library('Pdf');

			$this->load->view('pages/parsip/cetak', array('data'=>$data, 'arsip'=>$arsip));
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 
				$data['data'] = $this->marsipbaru->tampil();

				$data['petugas'] = $this->db->get_where('users', array('username'=>$this->session->userdata('username')))->row();

				$this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/insert', $data);
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mparsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				if ($this->input->post('id_arsip') != ''){
					$this->mparsip->getdata();

					redirect(base_url('pinjam_arsip'));
				}
				else {
					echo "<script>alert('Inputkan ID Arsip')</script>";
					?> <script>history.go(-1);</script> <?php
				}
			}
			else {
				$data['data'] = $this->mparsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row(); 

				$cari = $this->marsipbaru->tampil();

				$petugas = $this->db->get_where('users', array('username'=>$this->session->userdata('username')))->row();

				$this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/update', array('data'=>$data,'cari'=>$cari,'petugas'=>$petugas));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mparsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$this->mparsip->getupdate();

				redirect(base_url('pinjam_arsip'));
			}
			else {
				$data['data'] = $this->mparsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->mparsip->delete($id);
				
				redirect(base_url('pinjam_arsip'));
			}
			else {
				$data['data'] = $this->mparsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/parsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function eksport() {
			$data['pinjam'] = $this->mparsip->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/parsip/eksport',$data);
		}
	}

?>