<?php
/**
 *
 */
class Engineer extends CI_Controller {

	function index() {
		if ($this -> session -> userdata('logged_in'))
			redirect("engineer/dashboard");
		else
			redirect('login');
	}

}
?>