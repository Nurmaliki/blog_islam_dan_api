<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
    {
            parent::__construct();
            $this->load->model('usersmod','ModelUsers');
    }
	
	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            $this->session->sess_destroy();
			$this->load->view('login/index');
        }else{
			redirect('Home');
		}
		
    }

    public function ForgotPassword(){
        $this->load->view('login/reset');
    }
    
	public function login()
    {   
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $log=$this->authio->login(array(
                                    'username'=>$username,
                                    'password'=>$password
                                    ));
        
        if (!$log) {
            $this->session->set_flashdata('info', 'Invalid username or password');
            return redirect('Login');
        }
        $this->session->set_userdata([
            'id' => $log['id'],
            'nama' => $log['nama'],
            'logged_in' => true,
        ]);

        $this->session->set_flashdata('flash_success', 'You are now logged in');
        redirect('home');  

    }

	public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash_success', 'You are now logged out');
        $this->inc->logActvity(
            array(
                'log'=>'0', // 0 query 1 add 2 update 3 delete
                'table'=>'Login',
                'massage'=>'Logout System App',
                'baru'=>'',
            )
        );
        redirect('Login');
    }
	
    public function ResetPass(){
        $username = $this->input->post('username');
        $reset = $this->authio->resetpassword($username);
        
        if ($reset == 1){
            $update = $this->ModelUsers->updatePassword($username);
            $this->session->set_flashdata('info', '<b>Your new password is YYYYMMDD based on your birth of date.</b>');
        }else{
            $this->session->set_flashdata('info', '<b>Email not registered.</b>');
        }
        redirect('forgot');
    }

}
