<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('about/index');
	}
}

/* End of file about.php */
/* Location: ./application/modules/about/controllers/about.php */