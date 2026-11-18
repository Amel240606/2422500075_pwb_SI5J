<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Session $session
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property Ekspedisi_model $ekspedisi_model
 */
class Ekspedisi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('ekspedisi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Daftar Ekspedisi';
        $data['list_ekspedisi'] = $this->ekspedisi_model->get_all();
        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/ekspedisi/index', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function tambah_ekspedisi()
    {
        $data['title'] = 'Tambah Ekspedisi';
        $this->form_validation->set_rules('nama_ekspedisi075', 'Nama Ekspedisi', 'required');
        $this->form_validation->set_rules('jenis_layanan075', 'Jenis Layanan', 'required');
        $this->form_validation->set_rules('tarif_per_kg075', 'Tarif Per KG', 'required|numeric');
        $this->form_validation->set_rules('status075', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar');
            $this->load->view('administrator/ekspedisi/tambah', $data);
            $this->load->view('administrator/templates/footer');
        } else {
            $this->_simpan_ekspedisi();
        }
    }

    private function _simpan_ekspedisi()
    {
        $data = [
            'nama_ekspedisi075' => ucwords($this->input->post('nama_ekspedisi075')),
            'jenis_layanan075'  => ucwords($this->input->post('jenis_layanan075')),
            'tarif_per_kg075'   => $this->input->post('tarif_per_kg075'),
            'status075'         => $this->input->post('status075')
        ];

        $this->ekspedisi_model->tambah($data);

        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil menambahkan data ekspedisi!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

        redirect('admin/ekspedisi');
    }

    public function ubah_ekspedisi($id)
    {
        $ekspedisi = $this->ekspedisi_model->get_by_id($id);
        if ($ekspedisi) {
            $this->form_validation->set_rules('nama_ekspedisi075', 'Nama Ekspedisi', 'required');
            $this->form_validation->set_rules('jenis_layanan075', 'Jenis Layanan', 'required');
            $this->form_validation->set_rules('tarif_per_kg075', 'Tarif Per KG', 'required|numeric');
            $this->form_validation->set_rules('status075', 'Status', 'required');

            if ($this->form_validation->run() == FALSE) {
                $data['title']     = 'Ubah Ekspedisi';
                $data['ekspedisi'] = $ekspedisi;
                $this->load->view('administrator/templates/header', $data);
                $this->load->view('administrator/templates/sidebar');
                $this->load->view('administrator/ekspedisi/ubah', $data);
                $this->load->view('administrator/templates/footer');
            } else {
                $this->_ubah_ekspedisi($id);
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data ekspedisi tidak ditemukan!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/ekspedisi');
        }
    }

    private function _ubah_ekspedisi($id)
    {
        $data = [
            'nama_ekspedisi075' => ucwords($this->input->post('nama_ekspedisi075')),
            'jenis_layanan075'  => ucwords($this->input->post('jenis_layanan075')),
            'tarif_per_kg075'   => $this->input->post('tarif_per_kg075'),
            'status075'         => $this->input->post('status075')
        ];

        $this->ekspedisi_model->ubah($data, $id);

        $this->session->set_flashdata('message', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil mengubah data ekspedisi!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

        redirect('admin/ekspedisi');
    }

    public function hapus_ekspedisi($id)
    {
        $ekspedisi = $this->ekspedisi_model->get_by_id($id);
        if ($ekspedisi) {
            $this->ekspedisi_model->hapus($id);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil menghapus data ekspedisi!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        }
        redirect('admin/ekspedisi');
    }
}