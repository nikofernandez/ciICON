<?php
  class Posts extends CI_Controller{
    public function index(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Posts';
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
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer', $data);
    }

    public function create(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      // $data array passes any variable or data to the view page
      $data['title'] = 'Create New Post';
      $data['LoginPage'] = false; // Required variable

      $data['categories'] = $this->news_model->get_news_categories();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('posts/create', $data);
        $this->load->view('templates/footer', $data);
      }else{
        // Upload Docs
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpeg|png|jpg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
          $errors = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata('post_failed', 'Upload Error, please try again :(');
          redirect('posts/create');
        } else {
          $data = array('upload_data' => $this->upload->data());
          $sub_photo  = $this->upload->data('file_name');
        }

        $this->post_model->create_post($sub_photo);
        $slug = url_title($this->input->post('title'));
        redirect('posts/view/'.$slug);
      }
    }

    public function delete($id){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      $this->post_model->delete_post($id);
      redirect('news/index');
    }

    public function edit($slug){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }

      $data['post'] = $this->post_model->get_posts($slug);

      if(empty($data['post'])){
        show_404();
      }

      // $data array passes any variable or data to the view page
      $data['title'] = 'Edit Post';
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer', $data);
    }

    public function update(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      $this->post_model->update_post();
      $slug = url_title($this->input->post('title'));
      redirect('posts/view/'. $slug);
    }
  }
?>
