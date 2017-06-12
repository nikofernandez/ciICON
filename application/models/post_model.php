<?php
  class Post_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function get_posts($slug = FALSE){
      if($slug === FALSE){
        $query = $this->db->get('news');
        return $query->result_array();
      }

      $query = $this->db->get_where('news', array('slug' => $slug));
      return $query->row_array();
    }

    public function get_posts_by_category($cat_id){
      $this->db->order_by('news.id');
      $this->db->join('categories', 'categories.cat_id = news.cat_id');
      $query = $this->db->get_where('news', array('cat_id' => $cat_id));
      return $query->result_array();
    }
  }
?>
