<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Edit lelang</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Table</li>
      </ol>

      <div class="container mt-3">
        <form action="<?= base_url('home/aksi_edit_lelang') ?>" method="POST">
          <div class="mb-3 mt-3">
            <label for="inputText" class="col-sm-2 col-form-label">id barang</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="id_barang" value="<?= $satu->id_barang ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lelang</label>
            <div class="col-sm-10">
              <input type="date" required class="form-control" name="tgl_lelang" value="<?= $satu->tgl_lelang ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Harga Akhir</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="harga_akhir" value="<?= $satu->harga_akhir ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="id_user" value="<?= $satu->id_user ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">id petugas</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="id_petugas" value="<?= $satu->id_petugas ?>">
            </div>
          </div>

          <div class="mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-10">
              <select  type="select" class="form-control" name="status" id="status" placeholder="Enter status" name="status" value="<?= $satu->status ?>">
               <option value="volvo">Pilih status</option>
               <option value="1">dibuka</option>
               <option value="2">ditutup</option>
             </select>
           </div>
         </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>

          <input type="hidden" name="id" value="<?= $satu->id_lelang ?>">
        </form>
      </div>
    </div>
  </main>