<?php
  class Submissions extends CI_Controller{
    public function article(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Article';
      $data['LoginPage'] = false; // Required variable

      $this->form_validation->set_rules('artname', 'Article Name', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('studNum', 'Student #', 'required');
      $this->form_validation->set_rules('contact', 'Contact #', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('message', 'Description', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('submissions/article', $data);
        $this->load->view('templates/footer', $data);
      }else{
        // Upload Docs
        $config['upload_path'] = './assets/documents/articles';
        $config['allowed_types'] = 'doc|docx|pdf';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
          $errors = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata('article_failed', 'Upload Error, please try again :(');
          redirect('submissions/article');
        } else {
          $data = array('upload_data' => $this->upload->data());
          $sub_article  = $this->upload->data('file_name');
        }

        $this->submissions_model->submit_article($sub_article);
        $this->session->set_flashdata('article_success', 'Upload Success, Thank you! :D');
        redirect('submissions/article');
      }
    }

    public function photo(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Photo';
      $data['LoginPage'] = false; // Required variable

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('studNum', 'Student #', 'required');
      $this->form_validation->set_rules('contact', 'Contact #', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('message', 'Description', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('submissions/photo', $data);
        $this->load->view('templates/footer', $data);
      }else{
        // Upload Docs
        $config['upload_path'] = './assets/documents/photos';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
          $errors = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata('photo_failed', 'Upload Error, please try again :(');
          redirect('submissions/photo');
        } else {
          $data = array('upload_data' => $this->upload->data());
          $sub_photo  = $this->upload->data('file_name');
        }

        $this->submissions_model->submit_photo($sub_photo);
        $this->session->set_flashdata('photo_success', 'Upload Success, Thank you! :D');
        redirect('submissions/photo');
      }
    }

    public function team(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Team';
      $data['LoginPage'] = false; // Required variable


      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('studNum', 'Student #', 'required');
      $this->form_validation->set_rules('contact', 'Contact #', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('course', 'Course', 'required');
      $this->form_validation->set_rules('job', 'Job Position', 'required');
      $this->form_validation->set_rules('skills', 'Skills', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header', $data);
        $this->load->view('submissions/team', $data);
        $this->load->view('templates/footer', $data);
      }else{
        $this->submissions_model->submit_team();
        $this->session->set_flashdata('team_success', 'Sign Up Success, Thank you! :D. Taking too long? contact feudicon.web@gmail.com');
        redirect('submissions/team');
      }
    }

    public function contact(){
      $data['title'] = 'Contact Us';
      $data['LoginPage'] = false;

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('contact', 'Contact #', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('message', 'Message', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header', $data);
        $this->load->view('submissions/contact', $data);
        $this->load->view('templates/footer', $data);
      }else{
        $this->submissions_model->submit_feed();
        $this->session->set_flashdata('feed_sucess', 'Your feedback is appreciated :D');
        redirect('submissions/contact');
      }
    }

    public function view(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }

      $data['title'] = 'Submissions';
      $data['LoginPage'] = false;

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/view', $data);
      $this->load->view('templates/footer', $data);
    }

    public function alistings(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }

      $data['title'] = 'Article Submissions';
      $data['LoginPage'] = false;

      $data['articles'] = $this->submissions_model->view_alistings();

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/alistings', $data);
      $this->load->view('templates/footer', $data);
    }

    public function plistings(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }

      $data['title'] = 'Photos Submissions';
      $data['LoginPage'] = false;

      $data['photos'] = $this->submissions_model->view_plistings();

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/plistings', $data);
      $this->load->view('templates/footer', $data);
    }

    public function tlistings(){
      if(!$this->session->userdata('logged_in')){
        redirect('/');
      }

      $data['title'] = 'Team Sign up';
      $data['LoginPage'] = false;

      $data['teams'] = $this->submissions_model->view_tlistings();

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/tlistings', $data);
      $this->load->view('templates/footer', $data);
    }

    public function flistings(){
      if (!$this->session->userdata('logged_in')) {
        redirect('/');
      }

      $data['title'] = 'Feedback';
      $data['LoginPage'] = false;

      $data['feedbacks'] = $this->submissions_model->view_flistings();

      $this->load->view('templates/header', $data);
      $this->load->view('submissions/flistings', $data);
      $this->load->view('templates/footer', $data);
    }
  }
?>
