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
            <form action="<?= base_url('home/aksi_edit_lelang') ?>" method="POST"> 
             <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">ID Barang</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="id_barang" value="<?= $satu->id_lelang ?>">
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Lelang</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl_lelang" value="<?= $satu->tgl_lelang ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Harga Akhir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="harga_akhir" value="<?= $satu->harga_akhir ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">ID User</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_user" value="<?= $satu->id_user ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">ID Petugas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_petugas" value="<?= $satu->id_petugas ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                 
                  <select  type="select" class="form-control" name="status" id="status" placeholder="Enter status" name="status" value="<?= $satu->status ?>" value="<?= $satu->status ?>">
                   <option value="volvo">Pilih status</option>
                   <option value="1">dibuka</option>
                   <option value="2">ditutup</option>
                 </select> 
               </div>
               <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>
              <input type="hidden" name="id" value="<?= $satu->id_lelang ?>">

            </form><!-- End General Form Elements -->
