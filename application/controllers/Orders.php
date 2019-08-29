<?php
class Orders extends CI_Controller{
	public function index(){

		$data['title'] = 'Menu';

		$data['orders'] = $this->order_model->get_orders();


		$this->load->view('orders/index', $data);
	}
}
