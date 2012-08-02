<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index() {
		$data = array();
		
		$this->template
		   ->set_partial('metadata', 'partials/metadata')
		   ->set_partial('header', 'partials/header')
		   ->set_partial('footer', 'partials/footer')
		   ->build('index', $data);
	}
}

/* End of file about.php */
/* Location: ./application/modules/about/controllers/about.php */