<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Pluggins {

	public function __construct() {
		include(APPPATH . "plugins/admin_index_page.php");
		include(APPPATH . "plugins/admin_career.php");
	}

}

/* End of file Pluggins.php */