<?php
  class Posts extends CI_Controller{
    public function index(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Posts';
      $data['LoginPage'] = false; // Required variable

      // Load model
      $data['posts'] = $this->post_model->get_posts();
      // TODO: Delete before Production
      // For debug use
      //print_r($data['posts']);

      // Load page
      $this->load->view('templates/header', $data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function view($slug = NULL){
      // Load model
      $data['post'] = $this->post_model->get_posts($slug);

      // Check if page exists
      if(empty($data['post'])){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = $data['post']['title'];
      $data['LoginPage'] = false; // Required variable

      // Load page
      $this->load->view('templates/header', $data);
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer', $data);
    }

    public function create(){
      // Check if admin is logged in
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      // $data array passes any variable or data to the view page
      $data['title'] = 'Create New Post';
      $data['LoginPage'] = false; // Required variable

      // Load model
      $data['categories'] = $this->news_model->get_news_categories();

      // Set validation rules to required
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');
      $this->form_validation->set_rules('author', 'Author', 'required');

      if ($this->form_validation->run() === FALSE) { // If validation is FALSE
        // Reload page
        $this->load->view('templates/header', $data);
        $this->load->view('posts/create', $data);
        $this->load->view('templates/footer', $data);
      }else{ // If TRUE
        // Upload Docs
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpeg|png|jpg';

        $this->load->library('upload', $config); // Initialize upload

        if (!$this->upload->do_upload()) { // Check if upload error is TRUE
          $errors = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata('post_failed', 'Upload Error, please try again :(');
          redirect('posts/create');
        } else { // if error is FALSE
          $data = array('upload_data' => $this->upload->data()); // Execute upload
          $sub_photo = $this->upload->data('file_name'); // Set file name
        }

        // Load model
        $this->post_model->create_post($sub_photo);

        $slug = url_title($this->input->post('title')); // Set slug
        redirect('posts/view/'.$slug); // Load page
      }
    }

    public function delete($id){
      // Check if admin is logged in
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      $this->post_model->delete_post($id); // Load model
      redirect('news/index'); // Load page
    }

    public function edit($slug){
      // Check if admin is logged in
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }

      // Load model
      $data['post'] = $this->post_model->get_posts($slug);

      // Check if post exists
      if(empty($data['post'])){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = 'Edit Post';
      $data['LoginPage'] = false; // Required variable

      // Load page
      $this->load->view('templates/header', $data);
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer', $data);
    }

    public function update(){
      // Check if admin is logged in
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      $this->post_model->update_post(); // Load model
      $slug = url_title($this->input->post('title')); // Set slug
      redirect('posts/view/'. $slug); // Load page
    }
  }
?>
