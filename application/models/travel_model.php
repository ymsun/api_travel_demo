<?php
class Travel_Model extends Tra_db {

	function Travel_Model (){
		parent::__construct();
	}	
	//clean some fields in a array
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
	function get_provlist(){
		$pres = $this->db->get_where('procity',array('pid'=>'0'));
		$rs = $pres->result_array();
		//echo "<pre>";
		//var_dump($pres);exit;
		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'done',
			
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}	
	function get_citylist($pid,$sl){
		//$pres = $this->db->get_where('procity',array('pid'=>$pid),$sl['limit'],$sl['start']);
		$pres = $this->db->get_where('procity',array('pid'=>$pid));

		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}	
	function get_arealist($cid,$sl,$ccname=''){
		if($ccname==''){
		 $sql = 'SELECT * FROM area_new where cid='.$cid.' and source is not NULL';
		 $sqlm = 'SELECT * FROM area_new where cid='.$cid.' and source is not NULL LIMIT '.$sl['start'].' ,'.$sl['limit'];
	
		}else{
		 $sql = 'SELECT * FROM area_new where source is not NULL and name like "%'.$ccname.'%"';
		 $sqlm = 'SELECT * FROM area_new where source is not NULL and name like "%'.$ccname.'%" LIMIT '.$sl['start'].' ,'.$sl['limit'];
		}
		$query = $this->db->query($sql);
		$num = $query->num_rows();
		$pres = $this->db->query($sqlm);
		//$pres = $this->db->get_where('area_new',array('cid'=>$cid),$sl['limit'],$sl['start']);
		$ret['kind'] = "travel#travel";
		$ret['rows'] = $num;
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		$ret['items'] = $this->get_lgt($ret['items']);
		return $ret;
	}	
	function get_area($aid){
		$pres = $this->db->get_where('attractions',array('id'=>$aid));
		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}	
	function get_sceniclist($aid,$sl){
		$pres = $this->db->get_where('scenic_new',array('aid'=>$aid),$sl['limit'],$sl['start']);

		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		$ret['items'] = $this->get_lgt($ret['items']);
		return $ret;
	}	
	function get_scenic($sid){
		$pres = $this->db->get_where('scenic_new',array('id'=>$sid));

		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}	
	function get_pointlist($sid){
		$pres = $this->db->get_where('point',array('sid'=>$sid));

		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}	
	function get_pidbycid($cid){
		$pres = $this->db->get_where('procity',array('id'=>$cid));

		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}	
	function get_lgt($ret){
		if(count($ret)>0){
			foreach($ret as $k => $v){
				if($v['lgt']==""){
					$ret[$k]['lgt'] = $v['glgt'];
				}
				if($v['lat']==""){
					$ret[$k]['lat'] = $v['glat'];
				}
			}
		}
		return $ret;
	}
	function getId($ccname){
		$sql =	'SELECT * FROM area_new where name like "%'.$ccname.'%" and source is not null'; 
		$pres = $this->db->query($sql);
		$ret['kind'] = "travel#travel";
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		$ret['items'] = $this->get_lgt($ret['items']);
		return $ret;
	}
	function get_hotel($cid,$sl){
		$sql = 'select * from hotels where city_id ='.$cid;
		$pres = $this->db->get_where('hotels',array('city_id'=>$cid),$sl['limit'],$sl['start']);
		$query = $this->db->query($sql);
		$num = $query->num_rows();
		$ret['kind'] = "travel#travel";
		$ret['rows'] = $num;
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}
	function get_restaurants($cid,$sl,$foodtype,$keyword){
		if($foodtype && $keyword){
			if($foodtype=='cuisines'){
			$sql1 = 'select * from restaurants where city_id ='.$cid.' and (cuisines like "%'.$keyword.'%" or recommend_foods like "%'.$keyword.'%" or name like"%'.$keyword.'%" or subname like "%'.$keyword.'%" or feature like "%'.$keyword.'%") order by grade desc';
			}else{
			$sql1 = 'select * from restaurants where city_id ='.$cid.' and comm_circle like "%'.$keyword.'%" order by grade desc';
			}
		}else{
			$sql1 = 'select * from restaurants where city_id ='.$cid.' order by grade desc';
		}

		if($foodtype && $keyword){
			if($foodtype=='cuisines'){
			$sql = 'select * from restaurants where city_id ='.$cid.' and (cuisines like "%'.$keyword.'%" or recommend_foods like "%'.$keyword.'%" or name like"%'.$keyword.'%" or subname like "%'.$keyword.'%" or feature like "%'.$keyword.'%") order by grade desc limit '.$sl['start'].','.$sl['limit'];
			}else{
			$sql = 'select * from restaurants where city_id ='.$cid.' and comm_circle like "%'.$keyword.'%" order by grade desc limit '.$sl['start'].','.$sl['limit'];
			}
		}else{
			$sql = 'select * from restaurants where city_id ='.$cid.' order by grade desc limit '.$sl['start'].','.$sl['limit'];
		}
		//$pres = $this->db->get_where('restaurants like',array('city_id'=>$cid),$sl['limit'],$sl['start']);
		$query1 = $this->db->query($sql1);
		$query = $this->db->query($sql);
		$pres = $query->result_array();
		$num = $query1->num_rows();
		$ret['kind'] = "travel#travel";
		$ret['rows'] = $num;
		$ret['totalResults'] = $query->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($query->result_array(),$filt);
		return $ret;
	}
	function get_restimages($id){
		$sql = 'select * from restaurants where id ='.$id;
		$pres = $this->db->get_where('restaurants',array('id'=>$id));
		$query = $this->db->query($sql);
		$num = $query->num_rows();
		$ret['kind'] = "travel#travel";
		$ret['rows'] = $num;
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}
	function get_hotelimages($id){
		$sql = 'select * from hotels where id ='.$id;
		$pres = $this->db->get_where('hotels',array('id'=>$id));
		$query = $this->db->query($sql);
		$num = $query->num_rows();
		$ret['kind'] = "travel#travel";
		$ret['rows'] = $num;
		$ret['totalResults'] = $pres->num_rows;
		$ret['start'] = '0';
		$filt = array(
			'click',
			'update_at',
			'done',
			);
		$ret['items'] =$this->clean_fields($pres->result_array(),$filt);
		return $ret;
	}
	function update_targetfood($city){
		exit('停止服务');
		foreach($city as $key =>$value){
			$sql = 'select id, name from procity where pid !=0 and name like"%'.$key.'%"';
			$pres = $this->db->query($sql)->row_array();
			$id = $pres['id'];		
			$name = $pres['name'];		
			if(!isset($value['places'])){$value['places']=NULL;}
			$data = array(
					'city_id' => $id,
					'name' => $name,
					'food' => $value['food'],
					'places' => $value['places'],
			);
			$this->db->insert('target_food', $data);
		}	
	}
	function update_restaurants($handle){ // {{{
		exit('程序已经被停止');
		foreach($handle as $key => $value){
			$sql = 'select id, name from procity where pid !=0 and name like"%'.$key.'%"';
			$pres = $this->db->query($sql)->row_array();
			$id = $pres['id'];		
			foreach($value as $type => $v){
				if($type == 'food')
					foreach($v as $k =>$content){
						$sqlre = 'select id, grade from restaurants where city_id='.$id.' and (cuisines like"%'.$content.'%" or recommend_foods like "%'.$content.'%")';
						$res = $this->db->query($sqlre)->result_array();
						if($res){
							foreach($res as $kel => $vl){
								$restaurants_id = $vl['id'];		
								$grade = $vl['grade'];		
								$data = array(
											'restaurants_id' => $restaurants_id,
											'city_id' => $id,
											'name' => $content,
											'type' => $type,
											'grade' => $grade,
										);
								$this->db->insert('target_restaurants', $data);
							}
						}
					}
				if($type == 'places'){
					foreach($v as $k =>$content){
						$sqlre = 'select id, grade from restaurants where city_id='.$id.' and comm_circle like"%'.$content.'%"';
						$res = $this->db->query($sqlre)->result_array();
						if($res){
							foreach($res as $kel => $vl){
								$restaurants_id = $vl['id'];		
								$grade = $vl['grade'];		
								$data = array(
											'restaurants_id' => $restaurants_id,
											'city_id' => $id,
											'name' => $content,
											'type' => $type,
											'grade' => $grade,
										);
								$this->db->insert('target_restaurants', $data);
							}
						}
					}
				}
			}
			echo $key.'完成<br>';
		}
		echo '结束';
	}// }}}
}
