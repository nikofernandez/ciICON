<?php
  class Submissions_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function submit_article($sub_article){

      $data = array(
        'ArtName' => $this->input->post('artname'),
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
        'PhotoName' => $this->input->post('photoname'),
        'Name' => $this->input->post('name'),
        'StudNum' => $this->input->post('studNum'),
        'Contact' => $this->input->post('contact'),
        'Email' => $this->input->post('email'),
        'sub_photo' => $sub_photo,
        'Description' => $this->input->post('message')
      );

      return $this->db->insert('photos', $data);
    }

    public function submit_team(){

      $var = $this->input->post('skills');
      $skillset = explode(',', $var); // Collects all skills to an array
      $cnt = count(explode(',', $var)); // Count number of data inside the array
      for ($ktr=0; $ktr < $cnt; $ktr++) {
        $data = array(
          'StudNum' => $this->input->post('studNum'),
          'skills' => $skillset[$ktr]
        );
        $this->db->insert('skills', $data);
      }
      $data = array(
        'StudNum' => $this->input->post('studNum'),
        'Name' => $this->input->post('name'),
        'Email' => $this->input->post('email'),
        'Contact' => $this->input->post('contact'),
        'Course' => $this->input->post('course'),
        'Job' => $this->input->post('job')
      );

      return $this->db->insert('team', $data);
    }

    public function view_alistings(){
      $this->db->order_by('articles.article_id', 'DESC'); // Outputs the data by ID in descending order
      $query = $this->db->get('articles'); // Get the table "news"
      return $query->result_array(); // Outputs the array
    }

    public function view_plistings(){
      $this->db->order_by('photos.photo_id', 'DESC'); // Outputs the data by ID in descending order
      $query = $this->db->get('photos'); // Get the table "news"
      return $query->result_array(); // Outputs the array
    }
  }
?>
