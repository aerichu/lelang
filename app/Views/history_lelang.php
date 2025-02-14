<main id="main" class="main">

  <div class="pagetitle">
    <h1 align="center">Lelang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home/masyarakat') ?>">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
            <a href="<?= base_url('home/pdf') ?>">
                       <button class="btn btn-outline-primary"></i>Pdf</button>
               </a>
               <a href="<?= base_url('home/exportToExcel') ?>">
                       <button class="btn btn-outline-primary"></i>Excel</button>
               </a>

            <!-- Table with stripped rows -->
           <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id Lelang</th>
                <th scope="col">Nama barang</th>
                <th scope="col">Nama user</th>
                <th scope="col">Harga akhir</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $no=1;
              foreach($manda as $erwin){
               ?>   

               <tr>
                <td><?= $no++ ?></td>
                <td><?=$erwin->id_lelang?></td>
                <td><?= $erwin ->nama_barang?></td>
                <td><?= $erwin ->nama_lengkap?></td>
                <td><?= $erwin ->harga_akhir?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

  </div>
</div>
</section>

</main><!-- End #main -->



