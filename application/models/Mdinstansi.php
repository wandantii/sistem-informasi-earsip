<?php

    class Mdinstansi extends CI_Model {

        public function getData($post_image) {
            $data = array(
                'instansi' => $this->input->post('instansi'),
                'keterangan' => $this->input->post('keterangan'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'),
                'logo' => $post_image
            );

            $this->db->insert('tbl_instansi',$data);
        }

        public function tampil() {
            $query = $this->db->get('tbl_instansi');

            return $query->result();
        }

        public function delete($id) {
            $query = $this->db->get_where('tbl_instansi', array('id_instansi'=>$id))->row();
            $ini = $query->instansi;
            echo $ini;

            $sql = $this->db->get('tbl_arsip');
            foreach($sql->result() as $s){
                if ($s->dari_kepada == $ini){
                    $sqli = $this->db->get('tbl_pinjam');
                    foreach($sqli->result() as $q){
                        if ($q->id_arsip == $s->id_arsip){
                            echo $s->dari_kepada;
                            echo $q->id_arsip;

                            $this->db->where('id_arsip', $q->id_arsip);
            
                            $this->db->delete('tbl_pinjam');
                            
                            $this->db->where('dari_kepada', $s->dari_kepada);
            
                            $this->db->delete('tbl_arsip');
                        }
                    }
                }
            }

            $this->db->where('id_instansi', $id);
            
			$this->db->delete('tbl_instansi');
        }
        
        public function getUpdate($post_image) {
            $data = array(
                'id_instansi' => $this->input->post('id'),
                'instansi' => $this->input->post('instansi'),
                'keterangan' => $this->input->post('keterangan'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'),
                'logo' => $post_image
            );

            $this->db->where('id_instansi',$data['id_instansi']);

            $this->db->update('tbl_instansi',$data);

            $instansi = array(
                'dari_kepada' => $this->input->post('instansi'),
                'alamat' => $this->input->post('alamat')
            );

            $belum = $this->input->post('dari_kepada2');
            $belum2 = $this->input->post('alamat2');

            echo $belum.$belum2;

            $query = $this->db->get_where('tbl_arsip', array('dari_kepada'=>$belum))->row();
            echo $query->dari_kepada;
            echo $query->alamat;

            if (($this->input->post('dari_kepada2') != $this->input->post('dari_kepada')) || ($this->input->post('alamat2') != $this->input->post('alamat'))){
                $this->db->where('dari_kepada', $query->dari_kepada);
                $this->db->update('tbl_arsip', $instansi);
            }
        }
        
    }

?>