<?php

Class Peserta extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('peserta')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','peserta/list',$data);
    }

function add() {
    $isi = array(

            'nim'    	=> $this->input->post('nim'),
			'nama'   	=> $this->input->post('nama'),
			'password'  => $this->input->post('password')
        );
        $this->db->insert('peserta',$isi);
        redirect('peserta');
    }


function edit(){
	if(isset($_POST['submit'])){
            $data = array(
            'nim'    	=> $this->input->post('nim'),
			'nama'   	=> $this->input->post('nama'),
			'password'  => $this->input->post('password')
		);
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update('peserta',$data);
        redirect('peserta');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('peserta',array('id'=>$id))->row_array();
            $this->template->load('template', 'peserta/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('peserta');
        }
        redirect('peserta');
    }

}