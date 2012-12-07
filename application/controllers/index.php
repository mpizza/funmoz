<?php
class Index extends CI_Controller {
  public function __construct() {
      parent::__construct();
      // Your own constructor code
  }
  
	public function index(){
	  $this->load->library('Layout');
		$data['title'] = 'title';
		$data['heading'] = 'heading text';
		$data['content'] = 'hi';
		
		$this->layout->view('index_page', $data);
		//$this->load->view('blog_message');
	}

  private function _utility(){  
      
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */