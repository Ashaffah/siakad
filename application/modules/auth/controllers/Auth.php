<?php 

class Auth extends MX_Controller {

   public function index($error = NULL) {
        $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );
        $this->load->view('login2', $data);
    }
		
    public function login() {
       $this->load->model('auth_model');
	   $ceklogin = $this->auth_model->loginadmin($this->input->post('username'), $this->input->post('password'));
	   if ($ceklogin == 1){
	   
$data = array(
                'logged' => TRUE,
				'login_status' => 'admin',
				
            );
            $this->session->set_userdata($data);

//            redirect ke halaman sukses
            redirect('peserta');
		} 
		else {
//            tampilkan pesan error
            
             $error = 'Salah';
            
            $this->index($error);
        }
}

    function logout() {
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('auth'));
    }

	

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */