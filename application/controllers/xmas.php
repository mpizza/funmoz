<?php
class Xmas extends CI_Controller {
  public function __construct() {
      parent::__construct();
      // Your own constructor code
  }
  
	public function index(){
	  $this->load->library('Layout');
		$data['title'] = 'Firefox 聖誕報佳音';
		$data['meta_desc'] = '我願意和 Firefox 一同守護網路的開放自由創新，相信每個人都可以依個人意願決定自己的網路使用方式！我就是愛網路！';
		$data['keyword'] = 'Firefox OS,Firefox 繁體中文,Firefox 繁體中文下載,Firefox 下載,Firefox for Android,Firefox Mobile,Firefox 行動版,Firefox Android,Mozilla, Firefox, Thunderbird, Gecko, Boot to Gecko, B2G, Boot 2 Gecko, 謀智, 火狐, 雷鳥, Open Source, Free Software, Open Web, 開放原始碼, 開放源碼, 開源, 自由軟體, 開放網';
		$data['ogimage'] = 'http://fun.mozilla.com.tw/assets/pic/xmas2012/share_FB.jpg';
		$data['js_arr'] ='<script type="text/javascript" src="/assets/js/snowfall.min.jquery.js"></script><script type="text/javascript" src="/assets/js/xmas.js"></script>';
		
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
		$data['title'] = 'Firefox 聖誕報佳音';
		$data['meta_desc'] = '我願意和 Firefox 一同守護網路的開放自由創新，相信每個人都可以依個人意願決定自己的網路使用方式！我就是愛網路！';
		$data['keyword'] = 'Firefox OS,Firefox 繁體中文,Firefox 繁體中文下載,Firefox 下載,Firefox for Android,Firefox Mobile,Firefox 行動版,Firefox Android,Mozilla, Firefox, Thunderbird, Gecko, Boot to Gecko, B2G, Boot 2 Gecko, 謀智, 火狐, 雷鳥, Open Source, Free Software, Open Web, 開放原始碼, 開放源碼, 開源, 自由軟體, 開放網';
		$data['ogimage'] = 'http://fun.mozilla.com.tw/assets/pic/xmas2012/share_FB.jpg';
		$data['cards_url'] = 'http://fun.mozilla.com.tw/xmas/cards/'.$id.'/';
		$data['js_arr'] = '';
		$this->load->model('Xmas_db_model');
		$getPath = $this->Xmas_db_model->get_path($id);
		$data['content'] = '<img class="img-card" src="/assets/upload/'.$getPath.'" alt="Firefox 電子聖誕卡" />';
		$data['u_imgsrc'] = '/assets/upload/'.$getPath;
		
		$this->layout->view('xmas_card', $data);
	}

  private function _utility(){  
    // private function
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */