<?php
include 'magazine.php';
class About extends Magazine {
	
	function __construct(){
		parent::__construct();
	}
	
	function foot_link($link){		//网站底部链接及跳转{{{
		$pageid = $link;
		$common_data = $this->_get_common_data($pageid);
		$this->smarty->view('about/'.$link.'.tpl', $common_data);
	}//}}}
}
