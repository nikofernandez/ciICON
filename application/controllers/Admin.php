<?php
  class Admin extends CI_Controller{
    public function index($page = 'index'){
      if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = ucfirst($page);
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = true; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('admin/index', $data);
      $this->load->view('templates/footer', $data);

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
