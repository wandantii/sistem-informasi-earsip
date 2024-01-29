<?php

    class Mpetugas extends CI_Model {

        public function getData($enc_password) {
            $data = array(
                'name' => $this->input->post('name'),
                'class' => $this->input->post('class'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password
            );

            $this->db->insert('users',$data);
        }

        public function tampil() {
            $query = $this->db->get('users');

            return $query->result();
        }

        public function delete($id) {
            $this->db->where('id', $id);
            
			$this->db->delete('users');
        }
        
        public function getUpdate() {
            $data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'class' => $this->input->post('class'),
                'email' => $this->input->post('email')
            );

            $this->db->where('id',$data['id']);

            $this->db->update('users',$data);

            $arsip = array(
                'arsiparis' => $this->input->post('name')
            );
            $pinjam = array(
                'petugas' => $this->input->post('name')
            );

            $belum = $this->input->post('name2');

            $query = $this->db->get_where('tbl_arsip', array('arsiparis'=>$belum))->row();
            echo $query->arsiparis;

            if ($this->input->post('name2') != $this->input->post('arsiparis')){
                $this->db->where('arsiparis', $query->arsiparis);
                $this->db->update('tbl_arsip', $arsip);
            }

            $query2 = $this->db->get_where('tbl_pinjam', array('petugas'=>$belum))->row();
            echo $query2->petugas;

            if ($this->input->post('name2') != $this->input->post('petugas')){
                $this->db->where('petugas', $query2->petugas);
                $this->db->update('tbl_pinjam', $pinjam);
            }
        }

        public function check_username_exists ($username) {
            $query = $this->db->get_where('users', array('username' => $username));

            if (empty($query->row_array())) {
                return true;
            }
            else {
                return false;
            }
        }

        public function check_email_exists ($email) {
            $query = $this->db->get_where('users', array('email' => $email));

            if (empty($query->row_array())) {
                return true;
            }
            else {
                return false;
            }
        }
        
    }

?>