<?php

    class Marsipbaru extends CI_Model {

        public function getData($post_file) {
            $data = array(
                'dari_kepada' => $this->input->post('dari_kepada'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'indeks' => $this->input->post('indeks'),
                'no_surat' => $this->input->post('no_surat'),
                'tgl_surat' => $this->input->post('tgl_surat'),
                'lampiran' => $this->input->post('lampiran'),
                'perihal' => $this->input->post('perihal'),
                'tgl_simpan' => $this->input->post('tgl_simpan'),
                'file' => $post_file,
                'jenis_surat' => $this->input->post('jenis_surat'),
                'unit' => $this->input->post('unit'),
                'brsr' => $this->input->post('brsr'),
                'sistem_simpan' => $this->input->post('sistem_simpan'),
                'kode_simpan' => $this->input->post('kode_simpan'),
                'isi_ringkas' => $this->input->post('isi_ringkas'),
                'arsiparis' => $this->input->post('arsiparis'),
                'catatan' => $this->input->post('catatan'),
                'diteruskan_kepada' => $this->input->post('diteruskan_kepada'),
                'tgl_diterima' => $this->input->post('tgl_diterima'),
                'penerima' => $this->input->post('penerima')
            );

            $this->db->insert('tbl_arsip',$data);
        }

        public function tampil() {
            $query = $this->db->get('tbl_arsip');

            return $query->result();
        }

        public function tampilDua($id) {
            $query = $this->db->get_where('tbl_arsip', array('id_arsip'=>$id));

            return $query->result();
        }

        public function delete($id) {
            $query = $this->db->get_where('tbl_arsip', array('id_arsip'=>$id))->row();
            $ini = $query->id_arsip;
            echo $ini;

            $sql = $this->db->get('tbl_pinjam');
            foreach($sql->result() as $s){
                if ($s->id_arsip == $ini){
                    $this->db->where('id_arsip', $s->id_arsip);
            
                    $this->db->delete('tbl_pinjam');
                }
            }

            $this->db->where('id_arsip', $id);
            
			$this->db->delete('tbl_arsip');
        }
        
        public function getUpdate($post_file) {
            $data = array(
                'id_arsip' => $this->input->post('id'),
                'dari_kepada' => $this->input->post('dari_kepada'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'indeks' => $this->input->post('indeks'),
                'no_surat' => $this->input->post('no_surat'),
                'tgl_surat' => $this->input->post('tgl_surat'),
                'lampiran' => $this->input->post('lampiran'),
                'perihal' => $this->input->post('perihal'),
                'tgl_simpan' => $this->input->post('tgl_simpan'),
                'file' => $post_file,
                'jenis_surat' => $this->input->post('jenis_surat'),
                'unit' => $this->input->post('unit'),
                'brsr' => $this->input->post('brsr'),
                'sistem_simpan' => $this->input->post('sistem_simpan'),
                'kode_simpan' => $this->input->post('kode_simpan'),
                'isi_ringkas' => $this->input->post('isi_ringkas'),
                'arsiparis' => $this->input->post('arsiparis'),
                'catatan' => $this->input->post('catatan'),
                'diteruskan_kepada' => $this->input->post('diteruskan_kepada'),
                'tgl_diterima' => $this->input->post('tgl_diterima'),
                'penerima' => $this->input->post('penerima')
            );

            $this->db->where('id_arsip',$data['id_arsip']);

            $this->db->update('tbl_arsip',$data);
        }
        
        public function getDisposisiUpdate() {
            $data = array(
                'id_arsip' => $this->input->post('id'),
                'tgl_diterima' => $this->input->post('tgl_diterima'),
                'penerima' => $this->input->post('penerima')
            );

            $this->db->where('id_arsip',$data['id_arsip']);
            $this->db->update('tbl_arsip',$data);
        }

        public function getOption() {
            $query = $this->db->get('tbl_unit');

            return $query->result();
        }

        public function getPokoks($unit) {
            //$query = $this->db->get('tbl_pokoksoal');
            $query = $this->db->get_where('tbl_pokoksoal', array('unit' => $unit));

            return $query->result();
        }
        
    }

?>