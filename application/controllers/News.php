<?php
  class News extends CI_Controller{
    public function index(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'News';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable
      $data['categories'] = $this->news_model->get_news_categories();

      $this->load->view('templates/header', $data);
      $this->load->view('news/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function posts($cat_id){

      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

      $data['title'] = $this->news_model->get_category($cat_id)->name;

      $data['posts'] = $this ->post_model->get_posts_by_category($cat_id);

      $this->load->view('templates/header', $data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function delete($id){
      $this->news_model->delete_category($id);
      redirect('news/index');
    }

    public function create(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Create New Category';
      $data['isAdmin'] = true; // Required variable
      $data['LoginPage'] = false; // Required variable

      $this->form_validation->set_rules('name', 'Name', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('news/create', $data);
        $this->load->view('templates/footer', $data);
      }else{
        $this->news_model->create_category();
        $slug = url_title($this->input->post('title'));
        redirect('news/index/');
      }
    }
  }
?>
