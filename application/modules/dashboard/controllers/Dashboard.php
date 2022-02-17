<?php

Class Dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('magic')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','dashboard/list',$data);	
    }

function add() {
    $isi = array(
            
            'suhu'     => $this->input->post('suhu'),
			'lembap'     => $this->input->post('lembap')
			
		
        );
        $this->db->insert('magic',$isi);
        redirect('dashboard');
    }

	    
function edit(){
	if(isset($_POST['submit'])){
            $data = array(
             'suhu'     => $this->input->post('suhu'),
			'lembap'     => $this->input->post('lembap')
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id); //difilter dulu berdasarkan id
        $this->db->update('magic',$data); // Eksekusi Update
        redirect('dashboard');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('magic',array('id'=>$id))->row_array();
            $this->template->load('template', 'dashboard/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('magic');
        }
        redirect('dashboard');
    }

}