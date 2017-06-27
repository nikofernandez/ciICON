<?php
  class Admin_model extends CI_Model{
    public function login($email, $pword){
      // Validate
      $this->db->where('Email', $email);
      $this->db->where('Pword', $pword);

      $result = $this->db->get('accounts'); // Execute Search

      if($result->num_rows() == 1){ // If results is true
        return $result->row(0)->acc_id;
      }else{ // If no records found
        return false;
      }
    }
  }
?>
