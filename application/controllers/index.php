<?php
class Index extends CI_Controller {
  public function __construct() {
      parent::__construct();
      // Your own constructor code
  }
  
	public function index(){
	   header ('HTTP/1.1 301 Moved Permanently');
     header ('Location: /xmas/');
	}

  private function _utility(){  
      
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */