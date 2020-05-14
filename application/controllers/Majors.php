<?php 

class Majors extends CI_Controller{

	public function index()
	{
		$data['title'] = 'Majors Data';
		$data['majors'] = $this->majors_model->getAllMajors();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('majors', $data);
		$this->load->view('templates/footer');
	}

	public function add_major()
	{
		$data['title'] = 'Major Input Form';
		$this->form_validation->set_rules('majors_code', 'Majors Code', 'required|min_length[3]');
		$this->form_validation->set_rules('majors_name', 'Majors Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('form_major', $data);
			$this->load->view('templates/footer');
		} else {
			$this->majors_model->AddMajor();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Major Added!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('majors');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Major Edit Form';
		$data['major'] = $this->majors_model->getMajorById($id);
		$this->form_validation->set_rules('majors_code', 'Majors Code', 'required|min_length[3]');
		$this->form_validation->set_rules('majors_name', 'Majors Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('form_edit_major', $data);
			$this->load->view('templates/footer');
		} else {
			$this->majors_model->EditMajor($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Major Edited!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('majors');
		}
	}

	public function delete($id)
	{
		$this->majors_model->deleteMajor($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		Major Deleted!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>');
		redirect('majors');
	}
}
 
?>
