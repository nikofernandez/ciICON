<?php
  class News_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function get_news_categories(){
      $this->db->order_by('name');
      $query = $this->db->get('categories');
      return $query->result_array();
    }

    public function get_category($cat_id){
      $query = $this->db->get_where('categories', array('cat_id' => $cat_id));
      return $query->row();
    }
  }
?>
