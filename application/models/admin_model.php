<?php
  class Admin_model extends CI_Model{
    public function login($email, $pword){
      // Validate
      $this->db->where('Email', $email);
      $this->db->where('Pword', $pword);

      $result = $this->db->get('accounts');

      if($result->num_rows() == 1){
        return $result->row(0)->acc_id;
      }else{
        return false;
      }
    }
  }
?>
