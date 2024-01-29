<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Karsip extends CI_Controller {
		public function __construct() {
			parent::__construct();

			$this->load->model('mkarsip');
			$this->load->model('marsipbaru');
			$this->load->model('midentitas');
			$this->load->model('mpetugas');
		}

		public function index() {
			$data['data'] = $this->mkarsip->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/karsip/select', $data);
			$this->load->view('layout/footer');
		}

		public function view($id) {
			$data = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row(); 

			$this->mkarsip->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/karsip/view', array('data'=>$data));
			$this->load->view('layout/footer');
		}

		public function cetak($id) {
			$data = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row(); 

			$this->mkarsip->tampil();

			$arsip = $this->db->get_where('tbl_arsip', array('id_arsip'=>$data->id_arsip))->row();

			$this->marsipbaru->tampil();
			
			$this->load->library('Pdf');

			$this->load->view('pages/karsip/cetak', array('data'=>$data, 'arsip'=>$arsip));
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 
				$data['data'] = $this->mkarsip->tampil();

				$data['petugas'] = $this->db->get_where('users', array('username'=>$this->session->userdata('username')))->row();

				$this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/karsip/insert', $data);
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mkarsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/karsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				if ($this->input->post('id_arsip') != ''){
					$this->mkarsip->getdata();

					redirect(base_url('kembali_arsip'));
				}
				else {
					echo "<script>alert('Inputkan ID Arsip')</script>";
					?> <script>history.go(-1);</script> <?php
				}
			}
			else {
				$data['data'] = $this->mkarsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/karsip/select', $data);
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
				$this->load->view('pages/karsip/update', array('data'=>$data,'cari'=>$cari,'petugas'=>$petugas));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->mkarsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/karsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$this->mkarsip->getupdate();

				redirect(base_url('kembali_arsip'));
			}
			else {
				$data['data'] = $this->mkarsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/karsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->mkarsip->delete($id);
				
				redirect(base_url('kembali_arsip'));
			}
			else {
				$data['data'] = $this->mkarsip->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/karsip/select', $data);
				$this->load->view('layout/footer');
			}
		}

		public function eksport() {
			$data['pinjam'] = $this->mkarsip->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/karsip/eksport',$data);
		}
	}

?>