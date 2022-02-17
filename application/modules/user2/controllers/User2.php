<?php

Class User2 extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('user')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','user/list',$data);	
    }

function add() {
    $isi = array(
            
            'username'     => $this->input->post('username'),
			'password'     => $this->input->post('password')
			
		
        );
        $this->db->insert('user',$isi);
        redirect('user');
    }

	    
function edit(){
	if(isset($_POST['submit'])){
            $data = array(
           'username'     => $this->input->post('username'),
			'password'     => $this->input->post('password')
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update('user',$data);
        redirect('user');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('user',array('id'=>$id))->row_array();
            $this->template->load('template', 'user/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('user');
        }
        redirect('user');
    }

}