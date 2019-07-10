<?php 

class Dashboard_model extends CI_Model{

	function fetch_estimates($id){
		$this->db->where('user_id',$id);
		$this->db->order_by('moving_on','asc');
		$query = $this->db->get('estimate');
		if($query->num_rows() > 0){
			$result = $query->result();
			return $result;
		}else{
			return false;
		}
	}

}

?>