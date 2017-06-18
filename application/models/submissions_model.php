<?php
  class Submissions_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function submit_article($sub_article){

      $data = array(
        'Name' => $this->input->post('name'),
        'StudNum' => $this->input->post('studNum'),
        'Contact' => $this->input->post('contact'),
        'Email' => $this->input->post('email'),
        'sub_article' => $sub_article,
        'Description' => $this->input->post('message')
      );

      return $this->db->insert('articles', $data);
    }

    public function submit_photo($sub_photo){
      $data = array(
        'Name' => $this->input->post('name'),
        'StudNum' => $this->input->post('studNum'),
        'Contact' => $this->input->post('contact'),
        'Email' => $this->input->post('email'),
        'sub_photo' => $sub_photo,
        'Description' => $this->input->post('message')
      );

      return $this->db->insert('photos', $data);
    }
  }
?>
