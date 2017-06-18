<?php
  class Submissions extends CI_Controller{
    public function article(){
      // $data array passes any variable or data to the view page
      $data['title'] = 'Article';
      $data['isAdmin'] = false; // Required variable
      $data['LoginPage'] = false; // Required variable

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
