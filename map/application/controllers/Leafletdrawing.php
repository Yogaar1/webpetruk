<?php 
class Leafletdrawing extends CI_Controller {

	public function index()
	{

		$this->load->view('leafletdrawing');
	}
	public function tambah() {
	
		$GeoJson 		= $this->input->post('result');
		// ---
		$data['GeoJson'] = $GeoJson;
		// ----
		$this->db->insert('tb_peta', $data);
		echo 'Data Berhasil Ditambahkan';
			
	}
		
}
?>