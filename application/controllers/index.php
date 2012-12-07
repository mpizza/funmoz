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
		$db = $this->load->database();
		$sql = 'SELECT * FROM imagedata WHERE id = ?';
    $query = $this->db->query($sql, array(1)); 
    $row = $query->row_array(0);
		$data['content'] = $row['dataurl'];
		
		$this->layout->view('index_page', $data);
		//$this->load->view('blog_message');
	}

  private function _utility(){  
      
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */