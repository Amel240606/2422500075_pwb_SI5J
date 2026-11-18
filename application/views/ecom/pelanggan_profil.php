<?php

/** @var array $pelanggan */ ?>
<div class="container mb-5 mt-4">
  ...
  <div class="container mb-5 mt-4">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-1 text-center">
        <h4>Profil Pelanggan</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center text-small">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Data Diri Pelanggan</h5>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped mb-3">
              <tr>
                <th width="30%">Nama Lengkap</th>
                <td><?= $pelanggan['nama_pelanggan'] ?></td>
              </tr>
              <tr>
                <th>Email</th>
                <td><?= $pelanggan['email'] ?></td>
              </tr>
              <tr>
                <th>No. Telepon</th>
                <td><?= $pelanggan['telp_pelanggan'] ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><?= $pelanggan['alamat'] ?></td>
              </tr>
              <tr>
                <th>Kota</th>
                <td><?= $pelanggan['kota'] ?></td>
              </tr>
              <tr>
                <th>Kode Pos</th>
                <td><?= $pelanggan['kode_pos'] ?></td>
              </tr>
              <tr>
                <th>Provinsi</th>
                <td><?= $pelanggan['provinsi'] ?></td>
              </tr>
            </table>
            <a href="<?= base_url() ?>" class="btn btn-secondary">Kembali ke Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>