<?php
  class News_model extends CI_Model{
    public function __construct(){
      $this->load->database(); // Loads database
    }

    public function get_news_categories(){
      $this->db->order_by('name'); // Order results by alphabetical order
      $query = $this->db->get('categories'); // Search on categories table
      return $query->result_array(); // Get results
    }

    public function get_category($cat_id){
      $query = $this->db->get_where('categories', array('cat_id' => $cat_id)); // Get categories by ID
      return $query->row(); // Display results
    }

    public function delete_category($id){
      $this->db->where('cat_id', $id); // Search by categories ID
      $this->db->delete('categories'); // Execute delete
      return true;
    }

    public function create_category(){
      $data = array( // Get data in inputs
        'name' => $this->input->post('name')
      );

      return $this->db->insert('categories', $data); // Execute insert
    }
  }
?>
