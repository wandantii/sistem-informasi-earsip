<?php

    class Midentitas extends CI_Model {

        public function tampil() {
            $query = $this->db->get('tbl_identitas');

            return $query->result();
        }

        public function getUpdate($post_image) {
            $data = array(
                'id_identitas' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'keterangan' => $this->input->post('keterangan'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'web' => $this->input->post('web'),
                'logo' => $post_image
            );

            $this->db->where('id_identitas',$data['id_identitas']);

            $this->db->update('tbl_identitas',$data);
        }
        
    }

?>