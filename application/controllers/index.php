<?php
class Index extends CI_Controller {
  public function __construct() {
      parent::__construct();
      // Your own constructor code
  }
  
	public function index(){
		$this->layout->view('index_page', $data);
	}

  private function _utility(){  
      
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */