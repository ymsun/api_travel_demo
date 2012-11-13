<?php
class Google_Model extends CI_Model {
	var $gdb;
	function __construct(){ 
		$this->gdb = $this->load->database('google', TRUE);
		parent::__construct();
	}
	function clean_fields($source,array $fields){
		foreach($source as $k => $v){
			foreach($source[$k] as $kb => $vb){
				foreach($fields as $kc => $vc){
					if(array_key_exists($vc,$source[$k])){
					unset($source[$k][$vc]);
					}
				}
			}
		}
		return $source;
	
	}
	function get_imagecity(){
		$sql = 'select distinct(city)  from image';
		$pres = $this->gdb->query($sql);
		$row = $pres->result_array();
		return $row;
	}
	function get_images($city){
		$keyword = $this->get_keyword($city);
		$word = $keyword[0]['keyword'];
		$where = array(
			'city'=>$city,
			'down'=>'Y',
			'keyword' => $word,
			);
		$row = $this->gdb
			->from('image')
			->where($where)
			->order_by("id asc")
			->get()
			->result_array();
		return $row;
	}
	function search_images($city,$keyword,$sl){
		$where = array(
			'city'=>$city,
			'down'=>'Y',
			'keyword' => $keyword,
			);
		$row = $this->gdb
			->from('image')
			->where($where)
			->order_by("id asc")
			->get()
			->result_array();
		return $row;
	}
	function get_keyword($city){
		$sql = 'select distinct(keyword)  from image where down = "Y" and city ="'.$city.'"';
		$pres = $this->gdb->query($sql);
		$row = $pres->result_array();
		foreach($row as $key => $value){
			$row[$key]['city'] = $city;	
		}
		return $row;
	}
	function set_choose($s,$id){
		$sql = 'update image set choose = "'.$s.'" where id ='.$id;
		$this->gdb->query($sql);
	}
	function set_write($s,$id){
		if($s){
		$sql = 'update image set rewrite = "'.$s.'" where id ='.$id;
		$this->gdb->query($sql);
		}else{
		$sql = 'update image set rewrite = null where id ='.$id;
		$this->gdb->query($sql);
		}
	}
}
?>
