<?php
class Ecommers_model extends MY_Model{
	function __construct()
	{
		parent::__construct();
	}

	function addProgramComment($postVal){
		$data = array("id_product"=>$postVal['id_product'],
			"star"=>$postVal['rating'],
			"name"=>$postVal['name'],
			"email"=>$postVal['email'],
			"ip_address"=>$postVal['ip'],
			"browser_name"=>$postVal['browser_name'],
			"desc"=>$postVal['desc'],
			"image"=>"https://res.cloudinary.com/dtehhjrt7/image/upload/v1650819053/user2_cquvuh.jpg",
			"created_on"=>getCurrentDateTime());
		$this->db->insert(TBL_REVIEW,$data);
		$id = $this->db->insert_id();
		if($id > 0){
			return array('status'=>STATUS_SUCCESS,'msg'=>GET_IN_MSG,'data'=>array());
		}
		return array('status'=>STATUS_FAIL,'msg'=>'Please try again!','data'=>array());
	}

	function getAllData($postVal=array()){
		$result = array();
		$fields = "sp.*";
		$this->db->select($fields);
		$this->db->from(TBL_NEW_SELLING_PRODUCTION.' sp');
		$this->db->where('sp.is_bestselling','Y');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where_in('sp.id',$postVal['id']);
		}
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('sp.id',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
		}
		return $result;
	}
	function getbestSelling($postVal=array()){
		$result = array();
		$fields = "sp.*";
		$this->db->select($fields);
		$this->db->from(TBL_NEW_SELLING_PRODUCTION.' sp');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('sp.id_new',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->row_array();
		}
		return $result;
	}
	function getEcommData($postVal=array()){
		$result = array();
		$fields = "ae.*";
		$this->db->select($fields);
		$this->db->from(TBL_ABOUT_ECOMM.' ae');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('ae.id_ecomm',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->row_array();
		}
		return $result;
	}
	function getnewProductionData($postVal=array()){
		$result = array();
		$fields = "sp.*";
		$this->db->select($fields);
		$this->db->from(TBL_NEW_SELLING_PRODUCTION.' sp');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('sp.id_new',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
		}
		return $result;
	}

	function getNewsData($postVal=array()){
		$result = array();
		$fields = "n.*";
		$this->db->select($fields);
		$this->db->from(TBL_LATEST_NEWS.' n');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('sp.id_news',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
		}
		return $result;
	}

	function getComment($postVal=array()){
		$result = array();
		$fields = "r.*";
		$this->db->select($fields);
		$this->db->from(TBL_REVIEW.' r');
		if(isset($postVal['id']) && !empty($postVal['id'])){
			$this->db->where('r.id_product',$postVal['id']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
		}
		return $result;
	}


	function getCartData($postVal=array()){
		$result = array();
		$fields = "cp.*";
		$this->db->select($fields);
		$this->db->from(TBL_CART_PRODUCT.' cp');
		if(isset($postVal['ip_address']) && !empty($postVal['ip_address'])){
			$this->db->where('cp.ip_address',$postVal['ip_address']);
		}
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$result = $query->result_array();
		}
		return $result;
	}

	function addCartProduct($postVal){
		$data = array("id_new_product"=>$postVal['id_new_product'],
			"image"=>$postVal['image'],
			"price"=>$postVal['price'],
			"ip_address"=>$postVal['ip'],
			"name"=>$postVal['name'],
			"quantity"=>$postVal['quantity'],
			"created_on"=>getCurrentDateTime());
		$this->db->insert(TBL_CART_PRODUCT,$data);
		$id = $this->db->insert_id();
		if($id > 0){
			return array('status'=>STATUS_SUCCESS,'msg'=>GET_IN_MSG,'data'=>array());
		}
		return array('status'=>STATUS_FAIL,'msg'=>'Please try again!','data'=>array());
	}

	function updateCart($postVal){
		$data = array("quantity"=>$postVal['qty']);
		$this->db->where("id_new_product",$postVal['id_product']);
		$this->db->where("ip_address",$postVal['ip_address']);
		$this->db->update(TBL_CART_PRODUCT,$data);
		return array('status'=>STATUS_SUCCESS,'msg'=>UPDATE_MSG,'data'=>array());
	}

}

?>
