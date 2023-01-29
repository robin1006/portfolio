<?php
class Welcome_model extends MY_Model{
	function __construct()
	{
		parent::__construct();
	}

	function addProgramComment($postVal){
		$data = array("name"=>$postVal['name'],
			"ip_address"=>$postVal['ip'],
			"browser_name"=>$postVal['browser_name'],
			"host_name"=>$postVal['host_name'],
			"email"=>$postVal['email'],
			"phone_number"=>$postVal['phone_number'],
			"msg_subject"=>$postVal['msg_subject'],
			"message"=>$postVal['message'],
			"created_on"=>getCurrentDateTime());
		$this->db->insert(TBL_GET_IN_TOUCH,$data);
		$id = $this->db->insert_id();
		if($id > 0){
			return array('status'=>STATUS_SUCCESS,'msg'=>GET_IN_MSG,'data'=>array());
		}
		return array('status'=>STATUS_FAIL,'msg'=>'Please try again!','data'=>array());
	}

	function getData($postVal=array()){
		$result = array();
		$fields = "gt.*";
		$this->db->select($fields);
		$this->db->from(TBL_GET_IN_TOUCH.' gt');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where_in('gt.id',$postVal['id']);
		}
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('gt.id',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->row_array();
		}
		return $result;
	}

	function getAllData($postVal=array()){
		$result = array();
		$fields = "gt.*";
		$this->db->select($fields);
		$this->db->from(TBL_GET_IN_TOUCH.' gt');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where_in('gt.id',$postVal['id']);
		}
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('gt.id',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
		}
		return $result;
	}
}

?>
