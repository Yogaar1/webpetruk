<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_map extends CI_Controller {
	public function index()
	{
		$data['tb_peta']=$this->db->query("SELECT * FROM tb_peta")->result();
		$this->load->view('index_map',$data);
	}
}
