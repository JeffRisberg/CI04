<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_Admin extends MX_Controller {

	public $layout = 'admin';
	
	public function __construct() {
		parent::__construct();
		$this->load->model('comment_model');
		$this->load->model('post_model');

		// Load the URL helper so redirects work.
		$this->load->helper('url');
	}

	public function index() {
		$data['posts'] = $this->post_model->get_all();
		$data['title'] = 'Posts List';

		$this->load->view('post_admin/index', $data);
	}
}
