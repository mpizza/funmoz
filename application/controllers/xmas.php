<?php
class Xmas extends CI_Controller {
  public function __construct() {
      parent::__construct();
      // Your own constructor code
  }
  
	public function index(){
	  $this->load->library('Layout');
		$data['title'] = 'title';
		$data['heading'] = 'heading text';
		$this->layout->view('xmas_index', $data);
	}
	
	public function save_canvas(){
	  $u_email = $this->input->post('u_email', TRUE);
	  $u_checked = $this->input->post('u_checked', TRUE);
	  $data_url = $this->input->post('dataurl');
	  
	  $image = base64_decode( str_replace('data:image/png;base64,', '', $data_url) );
    
    $filename = date('Ymt-mis').'.jpg';
    $fp = fopen('assets/upload/'.$filename, 'w');
    fwrite($fp, $image);
    fclose($fp);
    
	  $this->load->model('Xmas_db_model');
	  $getID = 'failed';
    $getID = $this->Xmas_db_model->insert_entry($filename, $u_email, $u_checked); 
    
    echo $getID;
  }
	
	function cards($id){
	  $this->load->library('Layout');
		$data['title'] = 'title';
		$data['heading'] = 'heading text';
		$this->load->model('Xmas_db_model');
		$getPath = $this->Xmas_db_model->get_path($id);
		$data['content'] = '<img src="/assets/upload/'.$getPath.'" alt="Firefox 電子聖誕卡" />';
		
		$this->layout->view('xmas_card', $data);
	}

  private function _utility(){  
    // private function
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */