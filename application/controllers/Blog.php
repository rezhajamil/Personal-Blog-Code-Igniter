<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Tbl_berita_model');
		$this->load->model('Tbl_komentar_model');

	}

	public function index()
	{
		$q = urldecode($this->input->get('tag', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'blog?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'blog?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'blog';
			$config['first_url'] = base_url() . 'blog';
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
		$this->load->view('blog', $data);
	}

	public function read($url_slug) 
	{
		$tbl_berita = $this->Tbl_berita_model->get_limit_2($url_slug);
		$tbl_berita_detail = $this->Tbl_berita_model->get_by_url_slug($url_slug);
		if ($tbl_berita) {
			$data = array(

				'img_path'      => './assets/captcha/',
				'img_url'       => base_url('assets/captcha'),
				'word_length'   => 4,
				'font_size'     => 26,	
				'img_width'     => '150',
				'img_height'    => 50,
				'expiration'    => 7200,

				'tbl_berita_data' => $tbl_berita, 
				'tbl_berita_detail_data' => $tbl_berita_detail, 

				'button' => 'Create',
				'action' => site_url('welcome/create_action/'.$url_slug),
				'id_komen' => set_value('id_komen'),
				'id_berita' => set_value('id_berita'),
				'nama' => set_value('nama'),
				'email' => set_value('email'),
				'komen' => set_value('komen'),
				'captcha' => set_value('captcha'),
				'tgl_input' => set_value('tgl_input'),
				'status' => set_value('status'),

				'halaman' => 'read',
				'id_berita' => $tbl_berita_detail->id_berita,
				'judul_berita' => $tbl_berita_detail->judul_berita,
				'url_slug' => $tbl_berita_detail->url_slug,
				'desk' => $tbl_berita_detail->desk,
				'berita' => $tbl_berita_detail->berita,
				'foto' => $tbl_berita_detail->foto,
				'tgl_input' => $tbl_berita_detail->tgl_input,
				'tags' => $tbl_berita_detail->tags,
			);

		$captcha = create_captcha($data);

		$sessionCaptcha = $this->session->unset_userdata('captchacode');
		$sessionCaptcha = $this->session->set_userdata('captchacode', $captcha['word']);

		$data['cap_img'] = $captcha['image'];
			$this->load->view('blog_single', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('blog'));
		}
	}

	 public function kirim() {
        $id             = $this->input->post('id_berita');
        $url_slug       = $this->input->post('url_slug');
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $isi_komentar   = $this->input->post('komen');
        $captcha  	 	= $this->input->post('captcha');
        $this->db->query("INSERT INTO tbl_komentar VALUES('','0','$id','$email','$nama','$isi_komentar','$captcha',current_timestamp(),'tampil')");
        redirect($url_slug); 
    } 

    public function balas() {
        $comment_id = $this->input->post('id_komen');
        $id_berita 	= $this->input->post('id_berita');
        $url_slug   = $this->input->post('url_slug');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $isi        = $this->input->post('komen');
        $captcha  	= $this->input->post('captcha');
        $this->db->query("INSERT INTO tbl_komentar VALUES('','$comment_id','$id_berita','$email','$nama','$isi','$captcha',current_timestamp(),'tampil')");
        redirect($url_slug); 
    }
}
