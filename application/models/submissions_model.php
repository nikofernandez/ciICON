<?php
  class Submissions_model extends CI_Model{
    public function __construct(){
      $this->load->database(); // Load database
    }

    public function submit_article($sub_article){

      $data = array( // Collect data in inputs (article_id and send_at have default values)
        'ArtName' => $this->input->post('artname'),
        'Name' => $this->input->post('name'),
        'StudNum' => $this->input->post('studNum'),
        'Contact' => $this->input->post('contact'),
        'Email' => $this->input->post('email'),
        'sub_article' => $sub_article,
        'Description' => $this->input->post('message')
      );

      return $this->db->insert('articles', $data); // Execute insert
    }

    public function submit_photo($sub_photo){
      $data = array( // Collect data in inputs (photo_id and send_at have default values)
        'PhotoName' => $this->input->post('photoname'),
        'Name' => $this->input->post('name'),
        'StudNum' => $this->input->post('studNum'),
        'Contact' => $this->input->post('contact'),
        'Email' => $this->input->post('email'),
        'sub_photo' => $sub_photo,
        'Description' => $this->input->post('message')
      );

      return $this->db->insert('photos', $data); // Execute insert
    }

    public function submit_team(){
      $var = $this->input->post('skills'); // Get data from inputs
      $skillset = explode(',', $var); // Collects all skills to an array
      $cnt = count(explode(',', $var)); // Count number of data inside the array

      // Loop until $ktr is greater than the number of skills ($cnt)
      for ($ktr=0; $ktr < $cnt; $ktr++) {
        $data = array( // Collect data from input
          'StudNum' => $this->input->post('studNum'),
          'skills' => $skillset[$ktr] // Store skills using array ID ($ktr)
        );
        $this->db->insert('skills', $data); // Execute insert
      }

      $data = array( // Collect other single data in inputs
        'StudNum' => $this->input->post('studNum'),
        'Name' => $this->input->post('name'),
        'Email' => $this->input->post('email'),
        'Contact' => $this->input->post('contact'),
        'Course' => $this->input->post('course'),
        'Job' => $this->input->post('job')
      );

      return $this->db->insert('team', $data); // Execute insert
    }

    public function submit_feed(){
      $data = array( // Collect data in inputs (feed_id and send_at have default values)
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'contact' => $this->input->post('contact'),
        'message' => $this->input->post('message')
      );

      return $this->db->insert('feedback', $data); // Execute insert
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

    public function view_tlistings(){
      $this->db->order_by('team.team_id', 'DESC'); // Outputs the data by ID in descending order
      $query = $this->db->get('team'); // Get the table "news"
      return $query->result_array(); // Outputs the array
    }

    public function view_flistings(){
      $this->db->order_by('feedback.feed_id', 'DESC');
      $query = $this->db->get('feedback');
      return $query->result_array();
    }

    public function get_skills($studnum = FALSE){
      if($studnum === FALSE){
        redirect('submissions/tlistings');
      }

      $query = $this->db->get_where('skills', array('StudNum' => $studnum));
      return $query->result_array();
    }

    public function get_team_singles($studnum = FALSE){
      if($studnum === FALSE){
        redirect('submissions/tlistings');
      }

      $query = $this->db->get_where('team', array('StudNum' => $studnum));
      return $query->row_array();
    }

    public function get_article_singles($article_id = FALSE){
      if($article_id === FALSE){
        redirect('submissions/alistings');
      }

      $query = $this->db->get_where('articles', array('article_id' => $article_id));
      return $query->row_array();
    }

  }
?>
