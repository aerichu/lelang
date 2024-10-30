<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table Lelang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
                <li>today time:
                <?php echo date('H:i:s'); ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Lelang disini gess
                </div>
                <?php if(session()->get('level')==3) { ?>
                    <a href="<?= base_url('home/tambah_lelang') ?>">
                       <button class="btn btn-outline-primary"></i>Tambah ≽^•⩊•^≼</button>
                   <?php } ?>
               </a>
               <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama barang</th>
                        <th scope="col">Tanggal Lelang</th>
                        <th scope="col">Harga Akhir</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Nama Petugas</th>
                        <?php if(session()->get('level')==2 ) { ?>
                        <th scope="col">Status</th>
                        <?php } ?>
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
                        <td><?=$erwin->nama_barang ?></td>
                        <td><?= $erwin ->tgl_lelang ?></td>
                        <td><?= $erwin ->harga_akhir ?></td>
                        <td><?= $erwin ->nama_lengkap ?></td>
                        <td><?= $erwin ->nama_petugas ?></td>
                        <?php if(session()->get('level')==2 ) { ?>
                        <td><?= $erwin ->status ?></td>
                        <?php } ?>
                        <td>



                            <a href="<?= base_url('home/edit_lelang/'. $erwin ->id_lelang) ?>">
                             <button class="fa-solid fa-pen"></button>
                         </a>

                         <a href="<?= base_url('home/hapus_lelang/'. $erwin ->id_lelang) ?>">
                             <button class="fa-solid fa-eraser"></button>
                         </a>
                     </td>
                 </tr>
             <?php } ?>
         </tbody>
     </table>
 </div>
                <!-- <div class="card-body">
                    <table id="datatablesSimple">

                    </table>
                </div> -->
            </div>
        </div>
    </main>