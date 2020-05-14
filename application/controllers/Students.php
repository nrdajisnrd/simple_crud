<?php 

class Students extends CI_Controller{

	public function index()
	{
		$data['title'] = 'All Students';
		$data['students'] = $this->students_model->getAllStudents();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('students', $data);
		$this->load->view('templates/footer');
	}

	public function add_student()
	{
		$data['title'] = 'Student Input Form';
		$data['majors'] = $this->students_model->getAllMajors();
		$this->form_validation->set_rules('sidn', 'SIDN', 'required|min_length[8]');
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('major', 'Major', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('form_student', $data);
			$this->load->view('templates/footer');
		} else {
			$this->students_model->AddStudent();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Student Added!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('students');
		}
	}

	public function edit($sidn)
	{
		$data['title'] = 'Student Edit Form';
		$data['majors'] = $this->students_model->getAllMajors();
		$data['gender'] = ['Male', 'Female'];
		$data['student'] = $this->students_model->getStudentBySidn($sidn);
		$this->form_validation->set_rules('sidn', 'SIDN', 'required|min_length[8]');
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('major', 'Major', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('form_edit_student', $data);
			$this->load->view('templates/footer');
		} else {
			$this->students_model->EditStudent($sidn);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Student Edited!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('students');
		}
	}

	public function delete($sidn)
	{
		$this->students_model->deleteStudent($sidn);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Student Deleted!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('students');
	}

	public function detail($sidn)
	{
		$data['title'] = 'Detail Student';
		$data['detail'] = $this->students_model->getStudentBySidn($sidn);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('detail_student', $data);
		$this->load->view('templates/footer');
	}
}
?>