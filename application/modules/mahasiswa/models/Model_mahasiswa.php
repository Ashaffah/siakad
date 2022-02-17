<?php

class Model_mahasiswa extends CI_Model {
      


  function data_list(){
        $hasil=$this->db->query("SELECT * FROM mahasiswa");
        return $hasil->result();
    }
 
    function simpan_data($data1,$data2,$data3){
        $hasil=$this->db->query("INSERT INTO mahasiswa (nama,nim,kelas)VALUES('$data1','$data2','$data3')");
        return $hasil;
    }
 
    function get_data_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM mahasiswa WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'data1' => $data->nama,
                    'data2' => $data->nim,
					'data3' => $data->kelas,
					'id' => $data->id,
                    );
            }
        }
        return $hasil;
    }
 
    function update_data($data1,$data2,$data3,$id){
        $hasil=$this->db->query("UPDATE mahasiswa SET nama='$data1',nim='$data2',kelas='$data3' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_data($id){
        $hasil=$this->db->query("DELETE FROM mahasiswa WHERE id='$id'");
        return $hasil;
    }

}