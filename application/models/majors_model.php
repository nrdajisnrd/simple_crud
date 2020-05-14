<?php 

class Majors_model extends CI_Model{

	public function getAllMajors()
	{
		return $this->db->get('tb_majors')->result_array();
	}

	public function AddMajor()
	{
		$data = [
			'majors_code'	=> $this->input->post('majors_code'),
			'majors_name'	=> $this->input->post('majors_name')
		];
		$this->db->insert('tb_majors', $data);
	}

	public function EditMajor($id)
	{
		$data = [
			'majors_code'	=> $this->input->post('majors_code'),
			'majors_name'	=> $this->input->post('majors_name')
		];
		$this->db->where('id_majors', $id);
		$this->db->update('tb_majors', $data);
	}

	public function getMajorById($id)
	{
		$this->db->where('id_majors', $id);
		return $this->db->get('tb_majors')->row_array();
	}

	public function deleteMajor($id)
	{
		$this->db->where('id_majors', $id);
		$this->db->delete('tb_majors');
	}
}

 ?>
