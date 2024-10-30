<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table user</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Table</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data petugas dan masyarakat
                </div>
                <a href="<?= base_url('home/tambah_data') ?>">
                 <button class="btn btn-outline-primary"></i>Tambah ≽^•⩊•^≼</button>
             </a>
             <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama user</th>
                        <th scope="col">Nama petugas</th>
                        <th scope="col">Level</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php

                  $no=1;
                  foreach($manda as $erwin){
                     ?>   

                     <tr>
                        <td><?= $no++ ?></td>
                        <td><?=$erwin->id_user?></td>
                        <td><?=$erwin->id_petugas?></td>
                        <td><?= $erwin ->id_level?></td>
                        <td>



                            <a href="<?= base_url('home/edit_data/' . $erwin ->id_data) ?>">
                             <button class="fa-solid fa-pen"></button>
                         </a>

                         <a href="<?= base_url('home/hapus_data/' . $erwin ->id_data) ?>">
                             <button class="fa-solid fa-eraser"></button>
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

   <!--  buat edit dan hapus nya yaaa -->