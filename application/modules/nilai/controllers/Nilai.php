<?php

Class Nilai extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('nilai')->get()->result(); //Untuk mengambil data dari database webinar
		$data['rule'] = $this->db->select('*')->from('nilairule')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','nilai/list',$data);	
    }

 function grafik(){
	$data = $this->db->select('*')->from('nilai')->get()->result();
	echo json_encode($data);

}

function add() {
    $isi = array(
            'nilai'     => $this->input->post('nilai'),
			'nama'     => $this->input->post('nama'),
			'nim'     => $this->input->post('nim')
        );
        $this->db->insert('nilai',$isi);
        redirect('nilai');
    }

	    
function edit(){
	if(isset($_POST['submit'])){
            $data = array(
            'min'     => $this->input->post('min'),
			'mid'     => $this->input->post('mid'),
			'max'     => $this->input->post('max')
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update('nilairule',$data);
        redirect('fuzzy');
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('nilai');
        }
        redirect('nilai');
    }
}