<?php
  class Admin extends CI_Controller{
    public function login(){
      $data['title'] = 'Login';
      $data['LoginPage'] = true; // Required variable

      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('templates/footer', $data);
      }else{
        $email = $this->input->post('email');

        // Get and encrypt password
        $pword = md5($this->input->post('password'));

        // Login users
        $admin_id = $this->admin_model->login($email, $pword);

        if($admin_id){
          // Create session
          $admin_data = array(
            'acc_id' => $admin_id,
            'Uname' => $uname,
            'logged_in' => true
          );

          $this->session->set_userdata($admin_data);

          $this->session->set_flashdata('admin_loggin_success', 'Welcome Back! :D');
          redirect('news/index');

        }else{
          $this->session->set_flashdata('admin_loggin_failed', 'Login Failed! :(');
          redirect('admin/login');
        }

        // $this->load->view('templates/header', $data);
        // $this->load->view('admin/login', $data);
        // $this->load->view('templates/footer', $data);
      }

    }

    public function logout(){
      // Unset admin data
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('acc_id');
      $this->session->unset_userdata('Uname');

      $this->session->set_flashdata('admin_loggedout', 'Goodbye! You are now logged out');
      redirect('admin/login');
    }
  }
?>
