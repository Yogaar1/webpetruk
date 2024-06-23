<?php 
class Leafletdrawingedit extends CI_Controller {

	public function index()
	{
		$Id = $this->input->get('Id');

		$query = $this->db->query("SELECT GeoJson FROM tb_peta WHERE Id = '$Id'")->result();
		$data["json"] = $query;
		$data["Id"] = $Id;
		$this->load->view('leafletdrawingedit',$data);
	}
	public function edit() {
		$Id 		= $this->input->post('Id');
		$GeoJson 	= $this->input->post('result');

		$data['GeoJson'] = $GeoJson;
		$this->db->where('Id', $Id);
		$this->db->update('tb_peta', $data);
		echo "Berhasil Diedit";
			
	}
		
}
?>