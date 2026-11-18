
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1 class="m-0">Tambah Ekspedisi</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Ekspedisi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title font-weight-bold d-block mb-4">Form Tambah Data Ekspedisi</h5>

              <form method="post" action="<?= base_url('admin/ekspedisi/tambah') ?>">
                
                <!-- Nama Ekspedisi -->
                <div class="form-group mb-3">
                  <label for="nama_ekspedisi075">Nama Ekspedisi</label>
                  <input type="text" class="form-control" name="nama_ekspedisi075" id="nama_ekspedisi075" placeholder="Masukkan nama ekspedisi (misal: JNE, J&T, POS)" required>
                  <small class="text-danger"><?= form_error('nama_ekspedisi075') ?></small>
                </div>

                <!-- Jenis Layanan -->
                <div class="form-group mb-3">
                  <label for="jenis_layanan075">Jenis Layanan</label>
                  <input type="text" class="form-control" name="jenis_layanan075" id="jenis_layanan075" placeholder="Masukkan jenis layanan (misal: Reguler, Express, Cargo)" required>
                  <small class="text-danger"><?= form_error('jenis_layanan075') ?></small>
                </div>

                <!-- Tarif Per KG -->
                <div class="form-group mb-3">
                  <label for="tarif_per_kg075">Tarif Per KG</label>
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                    <input type="number" name="tarif_per_kg075" id="tarif_per_kg075" class="form-control" placeholder="Masukkan angka tarif per kg" required>
                  </div>
                  <small class="text-danger"><?= form_error('tarif_per_kg075') ?></small>
                </div>

                <!-- Status -->
                <div class="form-group mb-3">
                  <label for="status075">Status</label>
                  <select class="form-control" name="status075" id="status075" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
                  <small class="text-danger"><?= form_error('status075') ?></small>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Tambah</button>
                <a href="<?= base_url('admin/ekspedisi') ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>