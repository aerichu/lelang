<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah barang</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Table</li>
    </ol>

    <div class="container mt-3">
        <form action="/action_page.php">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Enter your price:</label>
            <input type="text" class="form-control" id="bid" placeholder="Enter price" name="bid">
        </div>
        <a href="<?= base_url('home/aksi_bbarang')?>">
          <button type="submit" class="btn btn-primary">Begin </button>
      </a>
  </form>

</div>
</div>
</main>