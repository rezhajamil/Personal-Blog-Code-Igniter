<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_komentar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_komentar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_komentar/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_komentar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_komentar/index.html';
            $config['first_url'] = base_url() . 'tbl_komentar/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_komentar_model->total_rows($q);
        $tbl_komentar = $this->Tbl_komentar_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_komentar_data' => $tbl_komentar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_komentar/tbl_komentar_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_komentar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_komen' => $row->id_komen,
		'id_parent_komen' => $row->id_parent_komen,
		'id_berita' => $row->id_berita,
		'email' => $row->email,
		'nama' => $row->nama,
		'komen' => $row->komen,
		'captcha' => $row->captcha,
		'tgl_input' => $row->tgl_input,
		'status' => $row->status,
	    );
            $this->load->view('tbl_komentar/tbl_komentar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_komentar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_komentar/create_action'),
	    'id_komen' => set_value('id_komen'),
	    'id_parent_komen' => set_value('id_parent_komen'),
	    'id_berita' => set_value('id_berita'),
	    'email' => set_value('email'),
	    'nama' => set_value('nama'),
	    'komen' => set_value('komen'),
	    'captcha' => set_value('captcha'),
	    'tgl_input' => set_value('tgl_input'),
	    'status' => set_value('status'),
	);
        $this->load->view('tbl_komentar/tbl_komentar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_parent_komen' => $this->input->post('id_parent_komen',TRUE),
		'id_berita' => $this->input->post('id_berita',TRUE),
		'email' => $this->input->post('email',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'komen' => $this->input->post('komen',TRUE),
		'captcha' => $this->input->post('captcha',TRUE),
		'tgl_input' => $this->input->post('tgl_input',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tbl_komentar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_komentar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_komentar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_komentar/update_action'),
		'id_komen' => set_value('id_komen', $row->id_komen),
		'id_parent_komen' => set_value('id_parent_komen', $row->id_parent_komen),
		'id_berita' => set_value('id_berita', $row->id_berita),
		'email' => set_value('email', $row->email),
		'nama' => set_value('nama', $row->nama),
		'komen' => set_value('komen', $row->komen),
		'captcha' => set_value('captcha', $row->captcha),
		'tgl_input' => set_value('tgl_input', $row->tgl_input),
		'status' => set_value('status', $row->status),
	    );
            $this->load->view('tbl_komentar/tbl_komentar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_komentar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_komen', TRUE));
        } else {
            $data = array(
		'id_parent_komen' => $this->input->post('id_parent_komen',TRUE),
		'id_berita' => $this->input->post('id_berita',TRUE),
		'email' => $this->input->post('email',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'komen' => $this->input->post('komen',TRUE),
		'captcha' => $this->input->post('captcha',TRUE),
		'tgl_input' => $this->input->post('tgl_input',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->Tbl_komentar_model->update($this->input->post('id_komen', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_komentar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_komentar_model->get_by_id($id);

        if ($row) {
            $this->Tbl_komentar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_komentar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_komentar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_parent_komen', 'id parent komen', 'trim|required');
	$this->form_validation->set_rules('id_berita', 'id berita', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('komen', 'komen', 'trim|required');
	$this->form_validation->set_rules('captcha', 'captcha', 'trim|required');
	$this->form_validation->set_rules('tgl_input', 'tgl input', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_komen', 'id_komen', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_komentar.php */
/* Location: ./application/controllers/Tbl_komentar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-09 05:56:29 */
/* http://harviacode.com */