<?php
  class Admin_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }
    
    public function login($Uname, $Pword){
      $this->db->where('Uname', $Uname);
      $this->db->where('Pword', $Pword);

      $result = $this->db->get('accounts');

      if($result->num_rows() == 1){
        return $result->row(0)->$acc_id;
      }
      return false;
    }
  }
?>
