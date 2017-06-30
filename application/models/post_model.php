<?php
  class Post_model extends CI_Model{
    public function __construct(){ // Constructer
      $this->load->database(); // Loads database
    }

    public function get_posts($slug = FALSE){

      if($slug === FALSE){
        $this->db->order_by('news.id', 'DESC'); // Outputs the data by ID in descending order
        $this->db->join('categories', 'categories.cat_id = news.cat_id'); // INNER JOIN tables categories and news table
        $query = $this->db->get('news'); // Get the table "news"
        return $query->result_array(); // Outputs the array
      }

      $query = $this->db->get_where('news', array('slug' => $slug));
      return $query->row_array();
    }

    public function get_posts_by_category($cat_id, $limit = FALSE, $offset = FALSE){
      if ($limit) { // Set results limit w/ offset 0
        $this->db->limit($limit, $offset);
      }

      $this->db->order_by('news.id', 'DESC'); // Set results view descending order
      $this->db->join('categories', 'categories.cat_id = news.cat_id'); // Join categories table
      $query = $this->db->get_where('news', array('news.cat_id' => $cat_id)); // Search news by category ID
      return $query->result_array(); // Show results
    }

    public function create_post($sub_photo){
      $slug = url_title($this->input->post('title')); // Create slug

      $data = array( // Collect data inputs (Timestamp and ID have default values)
        'title' => $this->input->post('title'),
        'author' => $this->input->post('author'),
        'slug' => $slug,
        'body' => $this->input->post('body'),
        'cat_id' => $this->input->post('category'),
        'photo_name' => $sub_photo
      );

      return $this->db->insert('news', $data); // Execute insert on news
    }

    public function delete_post($id){
      $this->db->where('id', $id); // Delete specific data using ID
      $this->db->delete('news'); // Execute delete on news table
      return true;
    }

    public function update_post(){
      $slug = url_title($this->input->post('title')); // Update slug

      $data = array( // Update the following data
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'body' => $this->input->post('body')
      );

      $this->db->where('id', $this->input->post('id')); // Update specific data using ID
      return $this->db->update('news', $data); // Execute update on news table
    }
  }
?>
