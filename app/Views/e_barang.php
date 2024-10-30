<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="<?= base_url('home/aksi_edit_barang') ?>" method="POST"> 
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $satu->nama_barang ?>"    >
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" value="<?= $satu->date ?>">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Harga Awal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" value="<?= $satu->harga_awal ?>">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi" value="<?= $satu->deskripsi ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>
                    <input type="hidden" name="id" value="<?= $satu->id_barang ?>">

              </form><!-- End General Form Elements -->
