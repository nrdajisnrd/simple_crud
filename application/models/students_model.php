<?php 

class Students_model extends CI_Model{

	public function getAllStudents()
	{
		return $this->db->get('tb_student')->result_array();
	}

	public function getAllMajors()
	{
		return $this->db->get('tb_majors')->result_array();
	}

	public function AddStudent()
	{
		$data = [
			'sidn'			=> $this->input->post('sidn'),
			'fullname'		=> $this->input->post('fullname'),
			'dateofbirth'	=> $this->input->post('dob'),
			'gender'		=> $this->input->post('gender'),
			'major'			=> $this->input->post('major'),
			'email'			=> $this->input->post('email')
		];
		$this->db->insert('tb_student', $data);
	}

	public function EditStudent($sidn)
	{
		$data = [
			'sidn'			=> $this->input->post('sidn'),
			'fullname'		=> $this->input->post('fullname'),
			'dateofbirth'	=> $this->input->post('dob'),
			'gender'		=> $this->input->post('gender'),
			'major'			=> $this->input->post('major'),
			'email'			=> $this->input->post('email')
		];
		$this->db->where('sidn', $sidn);
		$this->db->update('tb_student', $data);
	}

	public function deleteStudent($sidn)
	{
		$this->db->where('sidn', $sidn);
		$this->db->delete('tb_student');
	}

	public function getStudentBySidn($sidn)
	{
		$this->db->from('tb_student');
		$this->db->join('tb_majors', 'tb_majors.id_majors=tb_student.major');
		$this->db->where('sidn', $sidn);
		return $this->db->get()->row_array();
	}
}
?>