<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function index()

    {
        $data['title'] = 'BESTI - Setting';
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/setting', $data);
        $this->load->view('templates/footer');
    }
}
