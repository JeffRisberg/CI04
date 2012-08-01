<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('welcome/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/modules/welcome/controllers/welcome.php */