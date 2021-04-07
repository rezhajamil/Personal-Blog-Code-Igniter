<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'berita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'berita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'berita/index.html';
            $config['first_url'] = base_url() . 'berita/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->total_rows($q);
        $berita = $this->Berita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'berita_data' => $berita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('berita/berita_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Berita_model->get_by_id($id);
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
            $this->load->view('berita/berita_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berita'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berita/create_action'),
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
        $this->load->view('berita/berita_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul_berita' => $this->input->post('judul_berita',TRUE),
		'desk' => $this->input->post('desk',TRUE),
		'berita' => $this->input->post('berita',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'tgl_input' => $this->input->post('tgl_input',TRUE),
		'tgl_update' => $this->input->post('tgl_update',TRUE),
		'url_slug' => $this->input->post('url_slug',TRUE),
		'tags' => $this->input->post('tags',TRUE),
	    );

            $this->Berita_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('berita'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berita/update_action'),
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
            $this->load->view('berita/berita_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berita'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berita', TRUE));
        } else {
            $data = array(
		'judul_berita' => $this->input->post('judul_berita',TRUE),
		'desk' => $this->input->post('desk',TRUE),
		'berita' => $this->input->post('berita',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'tgl_input' => $this->input->post('tgl_input',TRUE),
		'tgl_update' => $this->input->post('tgl_update',TRUE),
		'url_slug' => $this->input->post('url_slug',TRUE),
		'tags' => $this->input->post('tags',TRUE),
	    );

            $this->Berita_model->update($this->input->post('id_berita', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('berita'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berita_model->get_by_id($id);

        if ($row) {
            $this->Berita_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('berita'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('berita'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul_berita', 'judul berita', 'trim|required');
	$this->form_validation->set_rules('desk', 'desk', 'trim|required');
	$this->form_validation->set_rules('berita', 'berita', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('tgl_input', 'tgl input', 'trim|required');
	$this->form_validation->set_rules('tgl_update', 'tgl update', 'trim|required');
	$this->form_validation->set_rules('url_slug', 'url slug', 'trim|required');
	$this->form_validation->set_rules('tags', 'tags', 'trim|required');

	$this->form_validation->set_rules('id_berita', 'id_berita', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-07 12:04:56 */
/* http://harviacode.com */