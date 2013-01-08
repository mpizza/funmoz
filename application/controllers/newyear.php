<?php
class Newyear extends CI_Controller {
  public function __construct() {
      parent::__construct();
      // Your own constructor code
  }
  
	public function index(){
	  $this->load->library('Layout');
		$data['title'] = 'Firefox 跨年許願卡';
		$data['meta_desc'] = '我的新年願望是與 Firefox 一同捍衛網路的開放自由與創新，相信每個人都可以依個人意願決定自己的網路使用方式！我愛網路！';
		$data['keyword'] = 'Firefox OS,Firefox 繁體中文,Firefox 繁體中文下載,Firefox 下載,Firefox for Android,Firefox Mobile,Firefox 行動版,Firefox Android,Mozilla, Firefox, Thunderbird, Gecko, Boot to Gecko, B2G, Boot 2 Gecko, 謀智, 火狐, 雷鳥, Open Source, Free Software, Open Web, 開放原始碼, 開放源碼, 開源, 自由軟體, 開放網';
		$data['ogimage'] = 'http://fun.mozilla.com.tw/assets/pic/newyear2013/FB-share.jpg';
		$data['js_arr'] ='<script type="text/javascript" src="/assets/js/newyear.js"></script>';
		$data['css_arr'] = '<link rel="stylesheet" href="/assets/less/newyear.css"/>';
		$this->layout->view('newyear_page.php', $data);
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
		$data['title'] = 'Firefox 跨年許願卡';
		$data['meta_desc'] = '我的新年願望是與 Firefox 一同捍衛網路的開放自由與創新，相信每個人都可以依個人意願決定自己的網路使用方式！我愛網路！';
		$data['keyword'] = 'Firefox OS,Firefox 繁體中文,Firefox 繁體中文下載,Firefox 下載,Firefox for Android,Firefox Mobile,Firefox 行動版,Firefox Android,Mozilla, Firefox, Thunderbird, Gecko, Boot to Gecko, B2G, Boot 2 Gecko, 謀智, 火狐, 雷鳥, Open Source, Free Software, Open Web, 開放原始碼, 開放源碼, 開源, 自由軟體, 開放網';
		$data['ogimage'] = 'http://fun.mozilla.com.tw/assets/pic/newyear2013/FB-share.jpg';
		$data['cards_url'] = 'http://fun.mozilla.com.tw/newyear/cards/'.$id.'/';
		$data['css_arr'] = '<link rel="stylesheet" href="/assets/less/newyear.css"/>';
		$data['js_arr'] = '';
		$this->load->model('Xmas_db_model');
		$getPath = $this->Xmas_db_model->get_path($id);
		if($getPath!==0){
      $data['content'] = '<img class="img-card" src="/assets/upload/'.$getPath.'" alt="Firefox 電子聖誕卡" />';
      $data['u_imgsrc'] = '/assets/upload/'.$getPath;
      $this->layout->view('newyear_card', $data);
    }else{
      header ('HTTP/1.1 301 Moved Permanently');
      header ('Location: /newyear/');
    }
	}
  function card_list($dedubp = 'ok'){
   $this->load->model('Xmas_db_model'); 
   $card_list_info = $this->Xmas_db_model->get_list($dedubp);
   foreach ($card_list_info->result_array() as $row){
     echo $row['id'];
     echo ",";
     echo $row['u_email'];
     echo ",";
     echo $row['upload_date'];
     echo "<br />";
    }
  }
  private function _utility(){  
    // private function
  }
}


/* End of file index.php */
/* Location: ./application/controllers/index.php */