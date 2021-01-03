<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tambah Wisata',
            'isi' => 'v_wisata'
    );
    $this->load->view('layout/v_wrapper',$data, FALSE);
    }

    public function daftarWisata()
    {
        $data = array(
            'title' => 'Daftar Wisata',
            'isi' => 'v_daftar'
    );
    $this->load->view('layout/v_wrapper',$data, FALSE);
    }


}

/* End of file Controllername.php */
