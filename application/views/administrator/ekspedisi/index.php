
<?php /** @var array $list_ekspedisi */ ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1 class="m-0">Ekspedisi</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ekspedisi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title font-weight-bold d-block mb-3">Semua Data Ekspedisi</h5>
              <div class="mb-3">
                <a href="<?= base_url('admin/ekspedisi/tambah') ?>" class="btn btn-primary">
                  <i class="fa fa-plus"></i> Ekspedisi
                </a>
              </div>

              <?php if ($this->session->flashdata('message')): ?>
                <?= $this->session->flashdata('message') ?>
              <?php endif ?>

              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Ekspedisi</th>
                    <th>Jenis Layanan</th>
                    <th>Tarif Per KG</th>
                    <th>Status</th>
                    <th width="15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($list_ekspedisi)): ?>
                    <?php $no = 1; foreach ($list_ekspedisi as $ekspedisi): ?>
                      <tr>
                        <td><?= $no ?></td>
                        <td><?= $ekspedisi['nama_ekspedisi075'] ?></td>
                        <td><?= $ekspedisi['jenis_layanan075'] ?></td>
                        <td>Rp. <?= number_format($ekspedisi['tarif_per_kg075'], 0, ',', '.') ?></td>
                        <td>
                          <?php if ($ekspedisi['status075'] == 'Aktif'): ?>
                            <span class="badge badge-success">Aktif</span>
                          <?php else: ?>
                            <span class="badge badge-secondary">Tidak Aktif</span>
                          <?php endif; ?>
                        </td>
                        <td>
                          <a href="<?= base_url('admin/ekspedisi/ubah/' . $ekspedisi['id_ekspedisi075']) ?>" class="badge badge-success">Ubah</a>
                          <a href="<?= base_url('admin/ekspedisi/hapus/' . $ekspedisi['id_ekspedisi075']) ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ekspedisi ini?')">Hapus</a>
                        </td>
                      </tr>
                    <?php $no++; endforeach ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="6" class="text-center">Data ekspedisi belum ada.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>