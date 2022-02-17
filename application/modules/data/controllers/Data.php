<?php

Class Data extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('data')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','data/list',$data);	
    }

function add() {
    $isi = array(
            
            'data1'     => $this->input->post('data1'),
			'data2'     => $this->input->post('data2'),
			'data3'     => $this->input->post('data3')
			
		
        );
        $this->db->insert('data',$isi);
        redirect('data');
    }

	    
function edit(){
	if(isset($_POST['submit'])){
            $data = array(
            'data1'     => $this->input->post('data1'),
			'data2'     => $this->input->post('data2'),
			'data3'     => $this->input->post('data3')
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update('data',$data);
        redirect('data');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('data',array('id'=>$id))->row_array();
            $this->template->load('template', 'data/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('data');
        }
        redirect('data');
    }

}