<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemenang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('panitia/Panitia');
        $this->load->helper('url');
    }
    public function index()
    {

        $TampilData = $this->Panitia->pemenang();
        $page = 'Pemenang Lelang';
        $data = [
            'PemenangLelang' => $TampilData,
            'title' => $page,
            'breadcrumb' => $page
        ];
       
        $data['user'] = $this->Panitia->user_panitiaById($this->session->panitia_id);
        $this->load->view('panitia/partials/start', $data);
        $this->load->view('panitia/kelola_lelang/pemenang', $data);
        $this->load->view('panitia/partials/end');
    }
}