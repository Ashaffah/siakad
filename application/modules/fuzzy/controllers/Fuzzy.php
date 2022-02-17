<?php

Class Fuzzy extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('fuzzy')->get()->result(); //Untuk mengambil data dari database webinar
		$data['rule'] = $this->db->select('*')->from('fuzzyrule')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','fuzzy/list',$data);	
    }

 function grafik(){
	$data = $this->db->select('*')->from('fuzzy')->get()->result();
	echo json_encode($data);

}

function add() {
    $isi = array(
            'nilai'     => $this->input->post('nilai')
        );
        $this->db->insert('fuzzy',$isi);
        redirect('fuzzy');
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
        $this->db->update('fuzzyrule',$data);
        redirect('fuzzy');
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('fuzzy');
        }
        redirect('fuzzy');
    }
}