<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {

	public $layout = 'admin';
	
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');

		// Load the URL helper so redirects work.
		$this->load->helper('url');
	}

	public function index() {
		$data['users'] = $this->user_model->get_all();
		$data['title'] = 'Users List';

		$this->load->view('users/index', $data);
	}

	public function view($id)	{
		$data['user'] = $this->user_model->get($id);

		if (empty($data['user'])) {
			show_404();
		}

		$data['title'] = 'User';

		$this->load->view('users/view', $data);
	}

	public function edit($id) {
		$data['user'] = $this->user_model->get($id);

		if (empty($data['user'])) {
			show_404();
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Edit a User';
	
		$this->load->view('users/edit', $data);	
	}

	public function update() {
		$this->load->helper('form');
		$this->load->library('form_validation');
			
		$this->form_validation->set_rules('email', 'Email', 'required');
			
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Edit a User';
		
			$this->load->view('users/edit');		
		}
		else {
			$this->user_model->update();
			redirect('users/index');
		}
	}

	public function create() {		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a user';
	
		$this->load->view('users/create', $data);	
	}

	public function save() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a user';

		$this->form_validation->set_rules('email', 'Email', 'required');
			
		if ($this->form_validation->run() === FALSE) {
			$this->create();
		}
		else {
			$this->user_model->insert();
			redirect('users/index');
		}
	}
}
