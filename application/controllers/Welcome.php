<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('Tbl_berita_model');

		}

		public function index()
		{
			$q = urldecode($this->input->get('tag', TRUE));
			$start = intval($this->input->get('start'));

			if ($q <> '') {
				$config['base_url'] = base_url() . 'welcome?q=' . urlencode($q);
				$config['first_url'] = base_url() . 'welcome?q=' . urlencode($q);
			} else {
				$config['base_url'] = base_url() . 'welcome';
				$config['first_url'] = base_url() . 'welcome';
			}

			$config['per_page'] = 6;
			$config['page_query_string'] = TRUE;
			$config['total_rows'] = $this->Tbl_berita_model->total_rows($q);
			$tbl_berita = $this->Tbl_berita_model->get_limit_data($config['per_page'], $start, $q);

			$this->load->library('pagination');
			$this->pagination->initialize($config);

			$data = array(

				'halaman' => 'index',
				'tbl_berita_data' => $tbl_berita,
				'q' => $q,
				'pagination' => $this->pagination->create_links(),
				'total_rows' => $config['total_rows'],
				'start' => $start,
			);
			$this->load->view('welcome_message', $data);
		}
}
