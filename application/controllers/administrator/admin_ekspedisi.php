
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekspedisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ekspedisi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Ekspedisi';
        $data['list_ekspedisi'] = $this->Ekspedisi_model->get_all();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/ekspedisi/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_ekspedisi075', 'Nama Ekspedisi', 'required');
        $this->form_validation->set_rules('jenis_layanan075', 'Jenis Layanan', 'required');
        $this->form_validation->set_rules('tarif_per_kg075', 'Tarif Per KG', 'required');
        $this->form_validation->set_rules('status075', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Ekspedisi';
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/ekspedisi/tambah', $data);
            $this->load->view('administrator/templates/footer');
        } else {
            $data = [
                'nama_ekspedisi075' => $this->input->post('nama_ekspedisi075'),
                'jenis_layanan075'  => $this->input->post('jenis_layanan075'),
                'tarif_per_kg075'   => $this->input->post('tarif_per_kg075'),
                'status075'         => $this->input->post('status075')
            ];
            $this->Ekspedisi_model->tambah($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambah data ekspedisi!</div>');
            redirect('admin/ekspedisi');
        }
    }

    public function ubah($id)
    {
        $ekspedisi = $this->Ekspedisi_model->get_by_id($id);
        if ($ekspedisi) {
            $this->form_validation->set_rules('nama_ekspedisi075', 'Nama Ekspedisi', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Ubah Ekspedisi';
                $data['ekspedisi'] = $ekspedisi;
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/ekspedisi/ubah', $data);
                $this->load->view('administrator/templates/footer');
            } else {
                $data = [
                    'nama_ekspedisi075' => $this->input->post('nama_ekspedisi075'),
                    'jenis_layanan075'  => $this->input->post('jenis_layanan075'),
                    'tarif_per_kg075'   => $this->input->post('tarif_per_kg075'),
                    'status075'         => $this->input->post('status075')
                ];
                $this->Ekspedisi_model->ubah($data, $id);
                $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil mengubah data ekspedisi!</div>');
                redirect('admin/ekspedisi');
            }
        } else {
            redirect('admin/ekspedisi');
        }
    }

    public function hapus($id)
    {
        $this->Ekspedisi_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menghapus data ekspedisi!</div>');
        redirect('admin/ekspedisi');
    }
}