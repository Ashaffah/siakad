<?php 
class Auth_model extends CI_Model {
   

function loginadmin($nim,$password) {
        $this->db->where('nim', $nim);
        $this->db->where('password', $password);
        $query =  $this->db->get('peserta');
        return $query->num_rows();
    }

    

}
