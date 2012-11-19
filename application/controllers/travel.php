<?php
class Travel extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('tra_db');
		$this->load->model('travel_model');
		$this->load->model('Google_Model');

	
	}
    /* Get value of start and limit
	 * from $_GET or configed array
	 */
	function _getsl($page=0){
		$ret = array();
		$defaultval = array(
			'start' => $page*10,
			'limit' => 10,
			);
		foreach($defaultval as $k =>$v){
			if(isset($_GET[$k])&&strlen($_GET[$k])){
				$ret[$k] = (int)$_GET[$k];
			}
			else{
				$ret[$k] = $v;
			}
		}
		return $ret;

	
	}
	
	function _gethl($page=0){
		$ret = array();
		$defaultval = array(
			'start' => $page*12,
			'limit' => 12,
			);
		foreach($defaultval as $k =>$v){
			if(isset($_GET[$k])&&strlen($_GET[$k])){
				$ret[$k] = (int)$_GET[$k];
			}
			else{
				$ret[$k] = $v;
			}
		}
		return $ret;

	
	}
	
	
	function index(){		
	}
	//get province list ,no param
	function provincelist(){		
		$provlist = $this->travel_model->get_provlist();
		$this->_json_output($provlist);
	}
	function search() {
		$ccname = isset($_GET['name'])?$_GET['name']:'';
		$cid = isset($_GET['pid'])?$_GET['pid']:'36';
		$page= isset($_GET['page'])?$_GET['page']:0;
		$sl = $this->_getsl($page);
		$arealist = $this->travel_model->get_arealist($cid,$sl,$ccname);
		$this->_json_output($arealist);
	}
	function citylist($id){		
		$sl = $this->_getsl();
		$citylist = $this->travel_model->get_citylist($id,$sl);
		$this->_json_output($citylist);
	}
	function arealist($cid,$page=0){		
		$sl = $this->_getsl($page);
		$arealist = $this->travel_model->get_arealist($cid,$sl);
		$this->_json_output($arealist);
	}
	function newarealist($cid,$page=0){		
		$sl = $this->_getsl($page);
		$arealist = $this->travel_model->get_newarealist($cid,$sl);
		$this->_json_output($arealist);
	}
	function area($aid){		
		$area= $this->travel_model->get_area($aid);
		$this->_json_output($area);
	}
	function sceniclist($sid){		
		$sl = $this->_getsl();
		$sceniclist = $this->travel_model->get_sceniclist($sid,$sl);
		$this->_json_output($sceniclist);
	}
	function scenic($sid){		
		$scenic= $this->travel_model->get_scenic($sid);
		$this->_json_output($scenic);
	}
	function pointlist($sid){		
		$sl['limit'] = 100;
		$pointlist = $this->travel_model->get_pointlist($sid);
		$this->_json_output($pointlist);
	}
	function getpidbycid($cid){		
		$sl['limit'] = 100;
		$cid = $this->travel_model->get_pidbycid($cid);
		$this->_json_output($cid);
	}
	function getid(){
		$ccname = isset($_GET['name'])?$_GET['name']:'';
		$id = '';
		$id = $this->travel_model->getId($ccname);
		$this->_json_output($id);
		return $id;
	}

	function imagelist(){
		$sl['limit'] = '';
		$city = isset($_GET['city'])?$_GET['city']:'';
		$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
		$keyword = str_replace(" ","+", $keyword);
		if($keyword){
			$imagelist = $this->Google_Model->search_images($city,$keyword,$sl);
		}else{
			$imagelist = $this->Google_Model->get_images($city,$sl);
		}
		$this->_json_output($imagelist);
	}
	function imagecity(){
		$imagecity = $this->Google_Model->get_imagecity();
		$this->_json_output($imagecity);
	}
	function keyword(){
		$city = isset($_GET['city'])?$_GET['city']:'北京';
		$keywordlist = $this->Google_Model->get_keyword($city);
		$this->_json_output($keywordlist);
	}
	function setimages(){
		$s = isset($_GET['statue'])?$_GET['statue']:'';
		$id = isset($_GET['id'])?$_GET['id']:'';
		if($s && $id){
			$set = $this->Google_Model->set_choose($s,$id);
		}else{
			echo 'api error';
		}
	}
	function setwrite(){
		$s = isset($_GET['content'])?$_GET['content']:'';
		$id = isset($_GET['id'])?$_GET['id']:'';
		if($id){
			$set = $this->Google_Model->set_write($s,$id);
		}else{
			echo 'api error';
		}
	}
	function hotellist($cid,$page=0){
		$sl = $this->_gethl($page);
		$hotellist = $this->travel_model->get_hotel($cid,$sl);
		$this->_json_output($hotellist);
	}
	function restaurants($cid,$page=0){
		$sl = $this->_gethl($page);
		$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
		$foodtype = isset($_GET['foodtype'])?$_GET['foodtype']:'';
		$restaurants = $this->travel_model->get_restaurants($cid,$sl,$foodtype,$keyword);
		$this->_json_output($restaurants);
	}
	function restimages($id){
		$restimages = $this->travel_model->get_restimages($id);
		$this->_json_output($restimages);
	}
	function hotelimages($id){
		$restimages = $this->travel_model->get_hotelimages($id);
		$this->_json_output($restimages);
	}
	function lll(){
		require_once('b.php');
		$city = array();
		foreach($handle as $key =>$value){
			if(is_array($value['food'])){
			$city[$key]['food']=implode(',',$value['food']);
			}
			if(isset($value['places']) && is_array($value['places'])){
			$city[$key]['places'] = implode(',',$value['places']);	
			}
		}
		$restimages = $this->travel_model->update_targetfood($city);
	}
	function insertfood(){
		require_once('b.php');
		$city = array();
		/*
		foreach($handle as $key =>$value){
			if(is_array($value['food'])){
			$city[$key]['food']=implode(',',$value['food']);
			}
			if(isset($value['places']) && is_array($value['places'])){
			$city[$key]['places'] = implode(',',$value['places']);	
			}
		}*/
		$restimages = $this->travel_model->update_restaurants($handle);
	}
	function get_ceshi(){
		$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
		$foodtype = isset($_GET['foodtype'])?$_GET['foodtype']:'';
		$cityid = isset($_GET['cityid'])?$_GET['cityid']:'';
		$this->travel_model->get_targetrestaurants('target_restaurants',$foodtype,$keyword, $cityid);
	}
	function get_jieimg(){
		$id = isset($_GET['id'])?$_GET['id']:'';
		$pres = $this->travel_model->get_jieimglist($id);
		$this->_json_output($pres);
	}	
	function set_jieimg(){
		$id = isset($_GET['id'])?$_GET['id']:'';
		$choose = isset($_GET['statue'])?$_GET['statue']:'';
		$pres = $this->travel_model->set_jieimg($id,$choose);
		$this->_json_output($pres);
	}	
	function foodimg($cid){
		$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
		$pres = $this->travel_model->get_foodimg($cid,$keyword);
		$this->_json_output($pres);
	}
}
