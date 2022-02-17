<?php

Class Soal2 extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('soal2')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','soal2/list',$data);
    }

function add() {
    $isi = array(

            'pertanyaan'    => $this->input->post('pertanyaan'),
			'jawaban'         => $this->input->post('jawaban')

        );
        $this->db->insert('soal2',$isi);
        redirect('soal2');
    }


function edit(){
	if(isset($_POST['submit'])){
            $data = array(
                'pertanyaan'    => $this->input->post('pertanyaan'),
                'jawaban'         => $this->input->post('jawaban')
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->update('soal2',$data);
        redirect('soal2');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('soal2',array('id'=>$id))->row_array();
            $this->template->load('template', 'soal2/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('soal2');
        }
        redirect('soal2');
    }

}