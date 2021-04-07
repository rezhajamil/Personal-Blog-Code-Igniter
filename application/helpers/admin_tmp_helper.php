<?php
if (! function_exists('renderPage')) { 
	function renderPage($view,$data){
		$ci = &get_instance();
		$ci->load->view('admin/1_tmp'); 
		$ci->load->view($view,$data);
		$ci->load->view('admin/2_tmp');
	 
	}
}