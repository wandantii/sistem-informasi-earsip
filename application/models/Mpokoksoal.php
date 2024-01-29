<?php

    class Mpokoksoal extends CI_Model {

        public function getData() {
            $data = array(
                'kode_pokoksoal' => $this->input->post('kode_pokoksoal'),
                'pokoksoal' => $this->input->post('pokoksoal'),
                'unit' => $this->input->post('unit')
            );

            $this->db->insert('tbl_pokoksoal',$data);
        }

        public function tampil() {
            $query = $this->db->get('tbl_pokoksoal');

            return $query->result();
        }

        public function delete($id) {
            $query = $this->db->get_where('tbl_pokoksoal', array('id_pokoksoal'=>$id))->row();
            $ini = $query->pokoksoal;
            echo $ini;

            $sql = $this->db->get('tbl_arsip');
            foreach($sql->result() as $s){
                if ($s->perihal == $ini){
                    $sqli = $this->db->get('tbl_pinjam');
                    foreach($sqli->result() as $q){
                        if ($q->id_arsip == $s->id_arsip){
                            echo $s->perihal;
                            echo $q->id_arsip;

                            $this->db->where('id_arsip', $q->id_arsip);
            
                            $this->db->delete('tbl_pinjam');
                            
                            $this->db->where('perihal', $s->perihal);
            
                            $this->db->delete('tbl_arsip');
                        }
                    }
                }
            }

            $this->db->where('id_pokoksoal', $id);
            
			$this->db->delete('tbl_pokoksoal');
        }
        
        public function getUpdate() {
            $data = array(
                'id_pokoksoal' => $this->input->post('id'),
                'kode_pokoksoal' => $this->input->post('kode_pokoksoal'),
                'pokoksoal' => $this->input->post('pokoksoal'),
                'unit' => $this->input->post('unit')
            );

            $this->db->where('id_pokoksoal',$data['id_pokoksoal']);

            $this->db->update('tbl_pokoksoal',$data);

            $pokok = array(
                'perihal' => $this->input->post('pokoksoal'),
                'kode_simpan' => $this->input->post('kode_pokoksoal'),
                'unit' => $this->input->post('unit')
            );

            $belum = $this->input->post('kode_pokoksoal2');
            $belum2 = $this->input->post('pokoksoal2');
            $belum3 = $this->input->post('unit2');

            echo $belum.$belum2;

            $query = $this->db->get_where('tbl_arsip', array('perihal'=>$belum2))->row();
            echo $query->perihal;

            if (($this->input->post('kode_pokoksoal2') != $this->input->post('kode_pokoksoal')) || ($this->input->post('pokoksoal2') != $this->input->post('pokoksoal')) || ($this->input->post('unit2') != $this->input->post('unit'))){
                $this->db->where('perihal', $query->perihal);
                $this->db->update('tbl_arsip', $pokok);
            }
        }
        
    }

?>