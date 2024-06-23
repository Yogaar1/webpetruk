<?php 
class Leafletdrawinghasil extends CI_Controller {

	public function index()
	{
		$query = $this->db->query("SELECT GeoJson FROM tb_peta")->result();
		$a["json"] = $query;

		$this->load->view('leafletdrawinghasil',$a);
	}
		
}
?>