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

    // public function get_category

    public function get_posts_by_category($cat_id){
      $this->db->order_by('news.id', 'DESC');
      $this->db->join('categories', 'categories.cat_id = news.cat_id');
      $query = $this->db->get_where('news', array('news.cat_id' => $cat_id));
      return $query->result_array();
    }
  }
?>
