<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Student extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('student_model','',TRUE);
		}

		public function index(){
			$this->db->select('last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', "student1");
			$this->db->where('password', "student1");
			$query = $this->db->get();
			$data['student'] = $query->result();
			
			$this->load->view('student_profile', $data);		
		}

		public function grades(){
			$this->load->view('student_grades');
		}

		function update_student() {
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$data = array(
			'last_name' => $this->input->post('last_name'),
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'student_number' => $this->input->post('student_number'),
			'classification' => $this->input->post('classification'),
			'curriculum' => $this->input->post('curriculum'),
			'contact_number' => $this->input->post('contact_number'),
			'email_address' => $this->input->post('email_address'),
			'college_address' => $this->input->post('college_address'),
			'home_address' => $this->input->post('home_address')
			);
			$this->student_model->update_student($username,$password,$data);

			$this->load->view('update_success');
		}

		function update(){			
			$this->load->helper('form');
			$this->db->select('username, password,last_name, first_name, middle_name, student_number, classification, curriculum, contact_number, email_address, college_address, home_address');
			$this->db->from('student');
			$this->db->where('username', "student1");
			$this->db->where('password', "student1");
			$query = $this->db->get();
			$data['student'] = $query->result();
			$this->load->view('student_update', $data);
		}
	}
/* End of file student.php */
/* Location: ./application/controllers/student.php */