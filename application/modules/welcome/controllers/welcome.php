<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller {

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

/* End of file welcome.php */
/* Location: ./application/modules/welcome/controllers/welcome.php */