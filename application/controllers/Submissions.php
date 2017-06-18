<?php
  class Submissions extends CI_Controller{
    public function article(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Article';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/article', $data);
      $this->load->view('templates/footer', $data);
    }

    public function photo(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Photo';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/photo', $data);
      $this->load->view('templates/footer', $data);
    }

    public function team(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Team';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/team', $data);
      $this->load->view('templates/footer', $data);
    }
  }
?>
