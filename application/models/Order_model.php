<?php
class Order_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function get_orders($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('orders');
			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('slug' => $slug));
		return $query->row_array();
	}
}
