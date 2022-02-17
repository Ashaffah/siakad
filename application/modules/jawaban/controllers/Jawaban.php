<?php

Class Jawaban extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('jawaban')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','jawaban/list',$data);
    }

function add() {
    $isi = array(

            'nim'    	=> $this->input->post('nim'),
			'jawaban'   	=> $this->input->post('jawaban')
        );
        $this->db->insert('jawaban',$isi);
        redirect('jawaban');
    }


function edit(){
	if(isset($_POST['submit'])){
            $data = array(
            'nim'    	=> $this->input->post('nim'),
			'jawaban'   	=> $this->input->post('jawaban')
		);
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update('jawaban',$data);
        redirect('jawaban');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('jawaban',array('id'=>$id))->row_array();
            $this->template->load('template', 'jawaban/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('jawaban');
        }
        redirect('jawaban');
    }

}