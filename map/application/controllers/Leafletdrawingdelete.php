<?php 
class Leafletdrawingdelete extends CI_Controller {

	public function index()
	{
		$Id = $this->input->get('Id');

		$query = $this->db->query("DELETE FROM tb_peta WHERE Id = '$Id'");
		$data['tb_peta']=$this->db->query("SELECT * FROM tb_peta")->result();
		$this->load->view('index_map',$data);
	}
	
		
}
?>