<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Jeff Risberg
 * @since 2012
 */
class Comments extends MX_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('posts_model');
		$this->load->model('comments_model');
	}
}

/* End of file comment.php */
/* Location: ./modules/comments/controllers/comment.php */