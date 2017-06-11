<?php
  class Pages extends CI_Controller{
    public function view($page = 'home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = ucfirst($page);
      $data['isAdmin'] = false;
      $data['Login'] = false;

      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);

    }
  }
?>
