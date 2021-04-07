<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap_model extends CI_Model {

	function get_berita() {
		return $this->db->order_by('update', 'desc')->get('tbl_berita')->result_array();
	}


	function get_shop() {
		return $this->db->order_by('update', 'desc')->get('tbl_shop')->result_array();
	}

}