<?php

    class Users extends CI_Controller {

        public function __construct() {
			parent::__construct();

			$this->load->model('marsipbaru');
		}

		public function cari() {
			$data['data'] = $this->marsipbaru->tampil();

			$this->load->view('layout/uheader');
			$this->load->view('users/cari',$data);
			$this->load->view('layout/ufooter');
		}

        public function register () {
            $data['title'] = 'Daftar Akun';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('class', 'Class', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('layout/header');
                $this->load->view('users/register', $data);
            }
            else {
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);

                redirect(base_url()); 
            }
        }

        public function login () {
            $data['title'] = 'Masuk Akun';

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
    
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('layout/header');
                $this->load->view('users/login', $data);
            }
            else {
                $username = $this->input->post('username');

                $password = md5($this->input->post('password'));
    
                $user_id = $this->user_model->login($username, $password);
    
                if ($user_id) {
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );
    
                    $this->session->set_userdata($user_data);
    
                    redirect(base_url('identitas'));
                }
                else {
                    redirect('users/login');
                }
            }
        }

        public function logout () {
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');
            
            redirect(base_url());
        }

        public function check_username_exists ($username) {
            $alert = '
                <script>alert("Username sudah tersedia. Buat username yang lain")</script>
            ';

            $this->form_validation->set_message('check_username_exists', $alert);
            
            if ($this->user_model->check_username_exists($username)) {
                return true;
            }
            else {
                return false;
            }
        }

        public function check_email_exists ($email) {
            $alert = '
                <script>alert("Email sudah tersedia. Buat Email yang lain")</script>
            ';

            $this->form_validation->set_message('check_email_exists', $alert);
            
            if ($this->user_model->check_email_exists($email)) {
                return true;
            }
            else {
                return false;
            }
        }
        
    }

?>