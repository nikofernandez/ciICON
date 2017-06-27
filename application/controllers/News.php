<?php
  class News extends CI_Controller{
    public function index(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'News';
      $data['LoginPage'] = false; // Required variable

      // Load models
      $data['categories'] = $this->news_model->get_news_categories();

      // Load page
      $this->load->view('templates/header', $data);
      $this->load->view('news/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function posts($cat_id, $offset = 0){
      $data['LoginPage'] = false; // Required variable

      // Set configuration for pagination
      $config['base_url'] = base_url() . 'news/posts/' . $cat_id . '/';
      $config['total_rows'] = $this->db->where('cat_id', $cat_id)->from('news')->count_all_results();
      $config['per_page'] = 4;
      $config['uri_segment'] = 4;

      $this->pagination->initialize($config); // Initialize configuration of pagination

      // Load models
      $data['title'] = $this->news_model->get_category($cat_id)->name;

      $data['posts'] = $this ->post_model->get_posts_by_category($cat_id, $config['per_page'], $offset);

      // Load page
      $this->load->view('templates/header', $data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function delete($id){
      // Validate if admin is logged in
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      // Load model
      $this->news_model->delete_category($id);
      // Load page
      redirect('news/index');
    }

    public function create(){
      // Validate if admin is logged in
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      // $data array passes any variable or data to the view page
      $data['title'] = 'Create New Category';
      $data['LoginPage'] = false; // Required variable

      // Set validation rules
      $this->form_validation->set_rules('name', 'Name', 'required');

      if ($this->form_validation->run() === FALSE) { // If validation is false
        // Reload page
        $this->load->view('templates/header', $data);
        $this->load->view('news/create', $data);
        $this->load->view('templates/footer', $data);
      }else{ // If true
        // Load models
        $this->news_model->create_category();

        $slug = url_title($this->input->post('title')); // Set slug
        redirect('news/index/'); // Load page
      }
    }
  }
?>
