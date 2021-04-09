<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_berita_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_berita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_berita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_berita/index.html';
            $config['first_url'] = base_url() . 'tbl_berita/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_berita_model->total_rows($q);
        $tbl_berita = $this->Tbl_berita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_berita_data' => $tbl_berita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_berita/tbl_berita_list', $data);
    }

    public function read($url_slug) 
    {
        $row = $this->Tbl_berita_model->get_by_url_slug($url_slug);
        if ($row) {
            $data = array(
		'id_berita' => $row->id_berita,
		'judul_berita' => $row->judul_berita,
		'desk' => $row->desk,
		'berita' => $row->berita,
		'foto' => $row->foto,
		'tgl_input' => $row->tgl_input,
		'tgl_update' => $row->tgl_update,
		'url_slug' => $row->url_slug,
		'tags' => $row->tags,
	    );
            $this->load->view('blog_single', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('blog'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_berita/create_action'),
	    'id_berita' => set_value('id_berita'),
	    'judul_berita' => set_value('judul_berita'),
	    'desk' => set_value('desk'),
	    'berita' => set_value('berita'),
	    'foto' => set_value('foto'),
	    'tgl_input' => set_value('tgl_input'),
	    'tgl_update' => set_value('tgl_update'),
	    'url_slug' => set_value('url_slug'),
	    'tags' => set_value('tags'),
	);
        $this->load->view('tbl_berita/tbl_berita_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
          $config['upload_path']          = 'assets/berita/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['max_size']             = 10000;
          $config['max_width']            = 2000;
          $config['max_height']           = 2000;

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          if ( $this->upload->do_upload('foto')) {


          // deklarasi nama file dan di ambil dari field file foto
            $upload_data = $this->upload->data();
            $nama_file = $upload_data['file_name'];

            $data = array(
		'judul_berita' => $this->input->post('judul_berita',TRUE),
		'desk' => $this->input->post('desk',TRUE),
		'berita' => $this->input->post('berita',TRUE),
		'foto' => $nama_file,
		'url_slug' => $this->input->post('url_slug',TRUE),
		'tags' => $this->input->post('tags',TRUE),
	    );

            $this->Tbl_berita_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_berita'));
        }
    }
}
    
    public function update($id) 
    {
        $row = $this->Tbl_berita_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_berita/update_action'),
		'id_berita' => set_value('id_berita', $row->id_berita),
		'judul_berita' => set_value('judul_berita', $row->judul_berita),
		'desk' => set_value('desk', $row->desk),
		'berita' => set_value('berita', $row->berita),
		'foto' => set_value('foto', $row->foto),
		'tgl_input' => set_value('tgl_input', $row->tgl_input),
		'tgl_update' => set_value('tgl_update', $row->tgl_update),
		'url_slug' => set_value('url_slug', $row->url_slug),
		'tags' => set_value('tags', $row->tags),
	    );
            $this->load->view('tbl_berita/tbl_berita_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_berita'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berita', TRUE));
        } else {
          $config['upload_path']          = 'assets/berita/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['max_size']             = 10000;
          $config['max_width']            = 2000;
          $config['max_height']           = 2000;

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          if ( $this->upload->do_upload('foto')) {


          // deklarasi nama file dan di ambil dari field file foto
            $upload_data = $this->upload->data();
            $nama_file = $upload_data['file_name'];
            $data = array(
		'judul_berita' => $this->input->post('judul_berita',TRUE),
		'desk' => $this->input->post('desk',TRUE),
		'berita' => $this->input->post('berita',TRUE),
		'foto' => $nama_file,
		'url_slug' => $this->input->post('url_slug',TRUE),
		'tags' => $this->input->post('tags',TRUE),
	    );

            $this->Tbl_berita_model->update($this->input->post('id_berita', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_berita'));
        }
    }
}
    
    public function delete($id) 
    {
        $row = $this->Tbl_berita_model->get_by_id($id);

        if ($row) {
            $this->_deleteImage($id);
            $this->Tbl_berita_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_berita'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_berita'));
        }
    }

    private function _deleteImage($id)
    {
        $row = $this->Tbl_berita_model->get_by_id($id);
        if ($row->foto != "default.jpg") {
            $filename = explode(".", $row->foto)[0];
            return array_map('unlink', glob(FCPATH."assets/berita/$filename.*"));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul_berita', 'judul berita', 'trim');
	$this->form_validation->set_rules('desk', 'desk', 'trim');
	$this->form_validation->set_rules('berita', 'berita', 'trim');
	$this->form_validation->set_rules('foto', 'foto', 'trim');
	$this->form_validation->set_rules('tgl_input', 'tgl input', 'trim');
	$this->form_validation->set_rules('tgl_update', 'tgl update', 'trim');
	$this->form_validation->set_rules('url_slug', 'url slug', 'trim');
	$this->form_validation->set_rules('tags', 'tags', 'trim');

	$this->form_validation->set_rules('id_berita', 'id_berita', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_berita.php */
/* Location: ./application/controllers/Tbl_berita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-08 01:42:58 */
/* http://harviacode.com */