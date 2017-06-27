<?php
  class Pages extends CI_Controller{
    public function view($page = 'home', $offset = 0){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = ucfirst($page);
      $data['LoginPage'] = false; // Required variable

      $data['latest_posts'] = $this ->post_model->get_posts(FALSE, 3, $offset);

      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);

    }
  }
?>
