<?php
  class Posts extends CI_Controller{
    public function index(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Posts';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

      $data['posts'] = $this->post_model->get_posts();
      //print_r($data['posts']);

      $this->load->view('templates/header', $data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function view($slug = NULL){
      $data['post'] = $this->post_model->get_posts($slug);

      if(empty($data['post'])){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = $data['post']['title'];
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer', $data);
    }
  }
?>
