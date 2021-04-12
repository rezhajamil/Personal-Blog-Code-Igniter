<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_kontak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_kontak_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_kontak/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_kontak/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_kontak/index.html';
            $config['first_url'] = base_url() . 'tbl_kontak/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_kontak_model->total_rows($q);
        $tbl_kontak = $this->Tbl_kontak_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_kontak_data' => $tbl_kontak,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_kontak/tbl_kontak_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_kontak_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kontak' => $row->id_kontak,
		'nama' => $row->nama,
		'email' => $row->email,
		'subjek' => $row->subjek,
		'pesan' => $row->pesan,
		'tgl_input' => $row->tgl_input,
	    );
            $this->load->view('tbl_kontak/tbl_kontak_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_kontak'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_kontak/create_action'),
	    'id_kontak' => set_value('id_kontak'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	    'subjek' => set_value('subjek'),
	    'pesan' => set_value('pesan'),
	    'tgl_input' => set_value('tgl_input'),
	);
        $this->load->view('tbl_kontak/tbl_kontak_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'subjek' => $this->input->post('subjek',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->Tbl_kontak_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url(''.'#contact'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_kontak_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_kontak/update_action'),
		'id_kontak' => set_value('id_kontak', $row->id_kontak),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
		'subjek' => set_value('subjek', $row->subjek),
		'pesan' => set_value('pesan', $row->pesan),
		'tgl_input' => set_value('tgl_input', $row->tgl_input),
	    );
            $this->load->view('tbl_kontak/tbl_kontak_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_kontak'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kontak', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'subjek' => $this->input->post('subjek',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
		'tgl_input' => $this->input->post('tgl_input',TRUE),
	    );

            $this->Tbl_kontak_model->update($this->input->post('id_kontak', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_kontak'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_kontak_model->get_by_id($id);

        if ($row) {
            $this->Tbl_kontak_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_kontak'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_kontak'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('subjek', 'subjek', 'trim|required');
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');
	$this->form_validation->set_rules('tgl_input', 'tgl input', 'trim');

	$this->form_validation->set_rules('id_kontak', 'id_kontak', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_kontak.php */
/* Location: ./application/controllers/Tbl_kontak.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-04-10 05:07:44 */
/* http://harviacode.com */