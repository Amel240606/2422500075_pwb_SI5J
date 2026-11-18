
<?php 
/** @var array $ekspedisi */
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1 class="m-0">Ubah Ekspedisi</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah Ekspedisi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-warning card-outline">
            <div class="card-body">
              <h5 class="card-title font-weight-bold d-block mb-4">Ubah Ekspedisi</h5>

              <form method="post" action="<?= base_url('admin/ekspedisi/ubah/' . $ekspedisi['id_ekspedisi075']) ?>">
                
                <!-- Nama Ekspedisi -->
                <div class="form-group mb-3">
                  <label for="nama_ekspedisi075">Nama Ekspedisi</label>
                  <input type="text" class="form-control" name="nama_ekspedisi075" id="nama_ekspedisi075" value="<?= set_value('nama_ekspedisi075', $ekspedisi['nama_ekspedisi075']) ?>" required>
                  <small class="text-danger"><?= form_error('nama_ekspedisi075') ?></small>
                </div>

                <!-- Jenis Layanan -->
                <div class="form-group mb-3">
                  <label for="jenis_layanan075">Jenis Layanan</label>
                  <input type="text" class="form-control" name="jenis_layanan075" id="jenis_layanan075" value="<?= set_value('jenis_layanan075', $ekspedisi['jenis_layanan075']) ?>" required>
                  <small class="text-danger"><?= form_error('jenis_layanan075') ?></small>
                </div>

                <!-- Tarif Per KG -->
                <div class="form-group mb-3">
                  <label for="tarif_per_kg075">Tarif Per KG</label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                    <input type="number" name="tarif_per_kg075" id="tarif_per_kg075" class="form-control" value="<?= set_value('tarif_per_kg075', $ekspedisi['tarif_per_kg075']) ?>" required>
                  </div>
                  <small class="text-danger"><?= form_error('tarif_per_kg075') ?></small>
                </div>

                <!-- Status -->
                <div class="form-group mb-3">
                  <label for="status075">Status</label>
                  <select class="form-control" name="status075" id="status075" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="Aktif" <?= ($ekspedisi['status075'] == 'Aktif') ? 'selected' : '' ?>>Aktif</option>
                    <option value="Tidak Aktif" <?= ($ekspedisi['status075'] == 'Tidak Aktif') ? 'selected' : '' ?>>Tidak Aktif</option>
                  </select>
                  <small class="text-danger"><?= form_error('status075') ?></small>
                </div>

                <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</button>
                <a href="<?= base_url('admin/ekspedisi') ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>