<?php
  class News extends CI_Controller{
    public function index(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'News';
      $data['LoginPage'] = false; // Required variable
      $data['categories'] = $this->news_model->get_news_categories();

      $this->load->view('templates/header', $data);
      $this->load->view('news/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function posts($cat_id, $offset = 0){
      $data['LoginPage'] = false; // Required variable
      $config['base_url'] = base_url() . 'news/posts/' . $cat_id . '/';
      $config['total_rows'] = $this->db->where('cat_id', $cat_id)->from('news')->count_all_results();
      $config['per_page'] = 4;
      $config['uri_segment'] = 4;

      $this->pagination->initialize($config);

      $data['title'] = $this->news_model->get_category($cat_id)->name;

      $data['posts'] = $this ->post_model->get_posts_by_category($cat_id, $config['per_page'], $offset);

      $this->load->view('templates/header', $data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer', $data);
    }

    public function delete($id){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      $this->news_model->delete_category($id);
      redirect('news/index');
    }

    public function create(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }
      // $data array passes any variable or data to the view page
      $data['title'] = 'Create New Category';
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
