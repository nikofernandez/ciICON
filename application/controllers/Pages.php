<?php
  class Pages extends CI_Controller{
    public function view($page = 'home', $offset = 0){
      // Check if file does not exists
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = ucfirst($page);
      $data['LoginPage'] = false; // Required variable

      // Load model with a limit of 3
      $data['latest_posts'] = $this ->post_model->get_posts(FALSE, 3, $offset);

      // Load page
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);

    }
  }
?>
