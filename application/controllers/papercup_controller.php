<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class papercup_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('temp');
		$this->load->view('footer');
	}

	public function admin_login_view()
	{
		$this->load->view('header');
		$this->load->view('admin_login');
		$this->load->view('footer');
	}

	public function admin_view()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_footer');
	}

	public function admin_login_check()
	{
		$posted_data=$this->input->post();
		
		if (isset($posted_data['submit'])) {

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			$this->form_validation->set_rules('admin_username','Admin id','required');
			$this->form_validation->set_rules('admin_password','Admin password','required');

			if($this->form_validation->run() == FALSE)
			{
				$this->admin_login_view();
			}
			else
			{
				$username = $this->input->post('admin_username');
				$password = $this->input->post('admin_password');
				if ($this->papercup_model->admin_login($username,$password)) {
					
					$session_data = array(
						'username' => $username
					);
					$this->session->set_userdata($session_data);
					redirect(site_url("papercup_controller/admin_view"),'refresh');
				}
				else
				{
					$this->admin_login_view();
					$this->session->set_flashdata('error', 'Invelid username and password');
				}
			}
		}


		else
		{
			$this->admin_login_view();
		}

		

	}

	public function manager_login_view()
	{
		$this->load->view('header');
		$this->load->view('manager_login');
		$this->load->view('footer');
	}
	public function user_login_view()
	{
		$this->load->view('header');
		$this->load->view('user_login');
		$this->load->view('footer');
	}

	public function user_regestation()
	{
		$this->load->view('header');
		$this->load->view('user_regestration_form');
		$this->load->view('footer');
	}


}

/* End of file Papercup_controller.php */
/* Location: ./application/controllers/Papercup_controller.php */