<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Arsipbaru extends CI_Controller {

		public function __construct() {
			parent::__construct();

			$this->load->model('marsipbaru');
			$this->load->model('mdunit');
			$this->load->model('mpokoksoal');
			$this->load->model('midentitas');
			$this->load->model('mpetugas');
			$this->load->model('mdinstansi');
		}

		public function index() {
			$data['data'] = $this->marsipbaru->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/select',$data);
			$this->load->view('layout/footer');
		}

		public function masuk() {
			$data['data'] = $this->marsipbaru->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/masuk',$data);
			$this->load->view('layout/footer');
		}

		public function keluar() {
			$data['data'] = $this->marsipbaru->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/keluar',$data);
			$this->load->view('layout/footer');
		}

		public function ekstern() {
			$data['data'] = $this->marsipbaru->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/ekstern',$data);
			$this->load->view('layout/footer');
		}

		public function intern() {
			$data['data'] = $this->marsipbaru->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/intern',$data);
			$this->load->view('layout/footer');
		}

		public function view($id) {
			$data = $this->db->get_where('tbl_arsip', array('id_arsip'=>$id))->row(); 
			$this->marsipbaru->tampil();

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/view', array('data'=>$data));
			$this->load->view('layout/footer');
		}

		public function cetak($id) {
			$data = $this->db->get_where('tbl_arsip', array('id_arsip'=>$id))->row(); 

			$this->marsipbaru->tampil();

			$this->load->library('Pdf');

			$this->load->view('pages/arsipbaru/cetak', array('data'=>$data));
		}

		public function insert() {
			if ($this->session->userdata('logged_in')) { 
				$data['units'] = $this->mdunit->tampil();
				$data['pokoks'] = $this->mpokoksoal->tampil();

				$data['data'] = $this->mdinstansi->tampil();

				$data['petugas'] = $this->db->get_where('users', array('username'=>$this->session->userdata('username')))->row();

				$this->mpetugas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/insert', $data);
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function getData() {
			if ($this->session->userdata('logged_in')) { 
				if (($this->input->post('dari_kepada') != '') && ($this->input->post('alamat') != '')){
					$config['upload_path'] = './assets/file';
					$config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx';
					
					$this->load->library('upload', $config);
					
					if (!$this->upload->do_upload()) {
						$errors = array('error' => $this->upload->display_errors());
						$post_file = 'nofile';
					}
					else {
						$data = array('upload_data' => $this->upload->data());
						$post_file = $_FILES['userfile']['name'];
					}

					$this->marsipbaru->getdata($post_file);
					
					redirect(base_url('arsip_baru'));
				}
				else {
					echo "<script>alert('Inputkan instansi dan alamat')</script>";
					?> <script>history.go(-1);</script> <?php
				}
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function update($id) {
			if ($this->session->userdata('logged_in')) { 
				$data = $this->db->get_where('tbl_arsip', array('id_arsip'=>$id))->row(); 
				$units = $this->mdunit->tampil();
				$pokoks = $this->mpokoksoal->tampil();

				$petugas = $this->db->get_where('users', array('username'=>$this->session->userdata('username')))->row();

				$this->mpetugas->tampil();

				$cari = $this->mdinstansi->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/update', array('data'=>$data,'units'=>$units,'pokoks'=>$pokoks,'petugas'=>$petugas,'cari'=>$cari));
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function getUpdate() {
			if ($this->session->userdata('logged_in')) { 
				$config['upload_path'] = './assets/file';
				$config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx';
				
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload()) {
					$errors = array('error' => $this->upload->display_errors());
					$post_file = $this->input->post('userfile2');
				}
				else {
					$data = array('upload_data' => $this->upload->data());
					$post_file = $_FILES['userfile']['name'];
				}
				
				$this->marsipbaru->getupdate($post_file);
				
				redirect(base_url('arsip_baru'));
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function getDisposisiUpdate() {
			if ($this->session->userdata('logged_in')) {
				$this->marsipbaru->getDisposisiUpdate();
				
				redirect(base_url('arsip_baru/intern'));
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function delete($id) {
			if ($this->session->userdata('logged_in')) { 
				$this->marsipbaru->delete($id);

				redirect(base_url('arsip_baru'));
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function getOption() {
			if ($this->session->userdata('logged_in')) { 
				$data = array('unit'=> $this->marsipbaru->getOption()); 

				$this->load->view('pages/arsipbaru/insert', $data);
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}
		}

		public function getPokoks() {
			$units = $this->input->post('unit');
			$pokoks = $this->marsipbaru->getPokoks($unit);
			if(count($pokoks) > 0) { 
				$pro_select_box = '';
				$pro_select_box .= '<option value="">Pilih Perihal</option>';
				foreach ($pokoks as $pokok) {
					$pro_select_box .= '<option value="'.$pokok->pokoksoal.'">'.$pokok->pokoksoal.'</option>';
				}
				echo json_encode($pro_select_box);
			}
			/*if ($this->session->userdata('logged_in')) { 
				$data = array('pokok_soal'=> $this->marsipbaru->getPokoks());  

				$this->load->view('pages/arsipbaru/insert', $data);
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/select',$data);
				$this->load->view('layout/footer');
			}*/
		}

		public function eksport() {
			$data['arsip'] = $this->marsipbaru->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/arsipbaru/eksport',$data);
		}

		public function emasuk() {
			$data['arsip'] = $this->marsipbaru->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/arsipbaru/emasuk',$data);
		}

		public function ekeluar() {
			$data['arsip'] = $this->marsipbaru->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/arsipbaru/ekeluar',$data);
		}

		public function eksterne() {
			$data['arsip'] = $this->marsipbaru->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/arsipbaru/eksterne',$data);
		}

		public function interne() {
			$data['arsip'] = $this->marsipbaru->tampil();
			$data['identitas'] = $this->midentitas->tampil();

			$this->load->view('pages/arsipbaru/interne',$data);
		}

		public function disposisie($id) {
			$data['arsip'] = $this->marsipbaru->tampilDua($id);
			$data['identitas'] = $this->midentitas->tampil();
			$this->load->view('pages/arsipbaru/disposisie', $data);
		}

		public function surat($id) {
			$data = $this->db->get_where('tbl_arsip', array('id_arsip'=>$id))->row(); 

			$this->load->view('layout/header');
			$this->load->view('pages/arsipbaru/surat', array('data'=>$data));
			$this->load->view('layout/footer');
		}

		public function lembar_disposisi($id) {
			if ($this->session->userdata('logged_in')) { 
				$data['petugas'] = $this->db->get_where('users', array('username'=>$this->session->userdata('username')))->row();
				$data['arsip'] = $this->marsipbaru->tampilDua($id);
				$data['identitas'] = $this->midentitas->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/disposisi', $data);
				$this->load->view('layout/footer');
			}
			else {
				$data['data'] = $this->marsipbaru->tampil();

				$this->load->view('layout/header');
				$this->load->view('pages/arsipbaru/disposisi',$data);
				$this->load->view('layout/footer');
			}
		}

	}
	
?>