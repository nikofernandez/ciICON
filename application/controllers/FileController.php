<?php
  defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
  class FileController extends CI_Controller{
    public function download($fileName = NULL){

      $this->load->helper('download');
      $data = file_get_contents(base_url('/assets/documents/articles/'.$fileName));
      force_download($filename, $data);
    }
  }
?>
