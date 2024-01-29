<?php

    class Mparsip extends CI_Model {

        public function getData() {
            $data = array(
                'id_arsip' => $this->input->post('id_arsip'),
                'nama_peminjam' => $this->input->post('nama_peminjam'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'petugas' => $this->input->post('petugas'),
                'kondisi_pinjam' => $this->input->post('kondisi_pinjam')
            );

            $status = array(
                'status' => '1'
            );

            $this->db->insert('tbl_pinjam',$data);

            $this->db->where('id_arsip', $this->input->post('id_arsip'));

            $this->db->update('tbl_arsip',$status);
        }

        public function tampil() {
            $query = $this->db->get('tbl_pinjam');

            return $query->result();
        }

        public function delete($id) {
            $status = array(
                'status' => '0'
            );

            $query = $this->db->get_where('tbl_pinjam', array('id_pinjam'=>$id))->row();
            $adata = $query->id_arsip;

            $this->db->where('id_arsip', $adata);
            $this->db->update('tbl_arsip',$status);

            $this->db->where('id_pinjam', $id);
            $this->db->delete('tbl_pinjam');
        }
        
        public function getUpdate() {
            $data = array(
                'id_pinjam' => $this->input->post('id'),
                'id_arsip' => $this->input->post('id_arsip'),
                'nama_peminjam' => $this->input->post('nama_peminjam'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'petugas' => $this->input->post('petugas'),
                'kondisi_pinjam' => $this->input->post('kondisi_pinjam')
            );

            $ars = array(
                'status' => '0'
            );

            $arsip = array(
                'status' => '1'
            );

            $this->db->where('id_pinjam',$data['id_pinjam']);

            $this->db->update('tbl_pinjam',$data);

            if ($this->input->post('id_ars') != $this->input->post('id_arsip')){
                $this->db->where('id_arsip',$this->input->post('id_ars'));

                $this->db->update('tbl_arsip', $ars);

                $this->db->where('id_arsip',$this->input->post('id_arsip'));

                $this->db->update('tbl_arsip', $arsip);
            }
        }
        
    }

?>