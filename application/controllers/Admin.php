<?php
  class Admin extends CI_Controller{
    public function login($page = 'login'){
      if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
        show_404();
      }

      $data['title'] = 'Login';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = true; // Required variable

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('templates/footer', $data);
      }else{
        $Uname = $this->input->post('username');

        $Pword = md5($this->input->post('password')); //Get and encrypt the password. md5 is the lowest security encryption

        $acc_id = $this->admin_model->login($Uname, $Pword);

        if($acc_id){
          die('SUCCESS');

          $this->session->set_flashdata('user_loggedin', 'You are now logged in');

          redirect('admin/dashboard');
        }else{
          $this->session->set_flashdata('login_failed', 'Invalid Login');

          redirect('admin/dashboard');
        }
      }

    }

    public function dashboard(){

      // $data array passes any variable or data to the view page
      $data['title'] = 'Dashboard';
      $data['isAdmin'] = true; // Required variable
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('admin/dashboard', $data);
      $this->load->view('templates/footer', $data);

    }
  }
?>
