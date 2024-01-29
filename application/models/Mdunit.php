<?php

    class Mdunit extends CI_Model {

        public function getData() {
            $data = array(
                'kode_unit' => $this->input->post('kode_unit'),
                'unit' => $this->input->post('unit')
            );

            $this->db->insert('tbl_unit',$data);
        }

        public function tampil() {
            $this->db->order_by('unit');

            $query = $this->db->get('tbl_unit');

            return $query->result();
        }

        public function delete($id) {
            $query = $this->db->get_where('tbl_unit', array('id_unit'=>$id))->row();
            $ini = $query->unit;
            echo $ini;

            $sql = $this->db->get('tbl_arsip');
            foreach($sql->result() as $s){
                if ($s->unit == $ini){
                    $sqli = $this->db->get('tbl_pinjam');
                    foreach($sqli->result() as $q){
                        if ($q->id_arsip == $s->id_arsip){
                            echo $s->unit;
                            echo $q->id_arsip;

                            $this->db->where('id_arsip', $q->id_arsip);
            
                            $this->db->delete('tbl_pinjam');
                            
                            $this->db->where('unit', $s->unit);
            
                            $this->db->delete('tbl_arsip');
                        }
                    }
                }
            }

            $this->db->where('unit', $ini);
            
            $this->db->delete('tbl_pokoksoal');

            $this->db->where('id_unit', $id);
            
            $this->db->delete('tbl_unit');
        }
        
        public function getUpdate() {
            $data = array(
                'id_unit' => $this->input->post('id'),
                'kode_unit' => $this->input->post('kode_unit'),
                'unit' => $this->input->post('unit')
            );

            $this->db->where('id_unit',$data['id_unit']);

            $this->db->update('tbl_unit',$data);

            $arsip = array(
                'unit' => $this->input->post('unit')
            );

            $belum = $this->input->post('unit2');

            $query2 = $this->db->get_where('tbl_pokoksoal', array('unit'=>$belum))->row();
            echo $query2->unit;

            if ($this->input->post('unit2') != $this->input->post('unit')){
                $this->db->where('unit', $query2->unit);
                $this->db->update('tbl_pokoksoal', $arsip);
            }

            $query = $this->db->get_where('tbl_arsip', array('unit'=>$belum))->row();
            echo $query->unit;

            if ($this->input->post('unit2') != $this->input->post('unit')){
                $this->db->where('unit', $query->unit);
                $this->db->update('tbl_arsip', $arsip);
            }
        }
        
    }

?>