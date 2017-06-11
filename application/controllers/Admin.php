<?php
  class Admin extends CI_Controller{
    public function index($page = 'index'){
      if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
        show_404();
      }

      if($page === 'index'){
        // $data array passes any variable or data to the view page
        $data['title'] = ucfirst($page);
        $data['isAdmin'] = true;
        $data['Login'] = true;

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
      }else{
        // $data array passes any variable or data to the view page
        $data['title'] = ucfirst($page);
        $data['isAdmin'] = true;

        $this->load->view('templates/header', $data);
        $this->load->view('admin/'.$page, $data);
        $this->load->view('templates/footer', $data);
      }

    }
  }
?>
