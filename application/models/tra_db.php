<?php
class Tra_db extends CI_Model {


	function  __construct(){
		parent::__construct();
		$gg = $this->load->database('google');
    }

	function row ($table, $where){	//查询单条数据{{{
		$row = $this->db
				->from($table)
				->where($where)
				->get()
				->row_array();
		return $row;
	}	//}}}

	function rows ($table, $where, $limit = NULL, $start = NULL){	//查询单条数据{{{
		$this->db
				->from($table)
				->where($where);
		if ($limit){
			$this->db
				->limit($limit)
				->offset($start);
		}
		$result = $this->db
				->get()
				->result_array();
		return $result;
	}	//}}jW}
    function get_in_orderby_str_for_values($field, $values) {
	    $vstr = "'" . implode("','", $values) . "'";
		$in_str = "$field IN ($vstr)";
		$orderby_str = "FIELD ($field, $vstr)";
		return array($in_str, $orderby_str);
	}
}
