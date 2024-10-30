<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table barang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Table</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Barang
                </div>
                <?php if(session()->get('level')==1 || session()->get('level')==2) { ?>
                    <a href="<?= base_url('home/tambah_barang') ?>">
                     <button class="btn btn-outline-primary">Tambah ≽^•⩊•^≼</button>
                 <?php } ?>
             </a>
             <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama barang</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Harga Awal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $no=1;
                  foreach($manda as $erwin){
                   ?>   

                   <tr>
                    <td><?= $no++ ?></td>
                    <td><?=$erwin->nama_barang?></td>
                    <td><?= $erwin ->tgl?></td>
                    <td><?= $erwin ->harga_awal?></td>
                    <td><?= $erwin ->deskripsi_barang?></td>
                    <td>

                        <a href="<?= base_url('home/edit_barang/' . $erwin ->id_barang) ?>">
                           <button class="fa-solid fa-pen"></button>
                       </a>

                       <a href="<?= base_url('home/hapus_barang/' . $erwin ->id_barang) ?>">
                           <button class="fa-solid fa-eraser"></button>
                       </a>

                       <a href="<?= base_url('home/bid/' . $erwin ->id_barang) ?>">
                           <button class="btn btn-outline-primary">BID</button>
                       </a>
                       
                   </td>
               </tr>
           <?php } ?>
       </tbody>
   </table>
</div>
</div>
</div>
</main>