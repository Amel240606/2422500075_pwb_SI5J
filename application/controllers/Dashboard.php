<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        // Memanggil file view yang ada di views/administrator/dashboard.php
        $this->load->view('administrator/dashboard');
    }
}