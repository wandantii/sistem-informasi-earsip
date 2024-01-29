<?php

    class Mkarsip extends CI_Model {

        public function getData() {
            $data = array(
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
                'kondisi_kembali' => $this->input->post('kondisi_kembali')
            );

            $status = array(
                'status' => '0'
            );

            $this->db->where('id_arsip', $this->input->post('id_arsip'));

            $this->db->update('tbl_pinjam',$data);

            $this->db->where('id_arsip', $this->input->post('id_arsip'));
            $this->db->update('tbl_arsip',$status);
        }

        public function tampil() {
            $query = $this->db->get('tbl_pinjam');

            return $query->result();
        }

        public function delete($id) {
            $status = array(
                'status' => '1'
            );

            $query = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row();
            $adata = $query->id_arsip; echo $adata;

            $pinjam = array(
                'tanggal_kembali' => '',
                'kondisi_kembali' => ''
            );

            $this->db->where('id_pinjam', $id);
            $this->db->update('tbl_pinjam', $pinjam);

            $this->db->where('id_arsip', $adata);
            $this->db->update('tbl_arsip',$status);
        }
        
        public function getUpdate() {
            $data = array(
                'id_pinjam' => $this->input->post('id'),
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
                'kondisi_kembali' => $this->input->post('kondisi_kembali')
            );

            $this->db->where('id_pinjam',$data['id_pinjam']);

            $this->db->update('tbl_pinjam',$data);
        }
        
    }

?>