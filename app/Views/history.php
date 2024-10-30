<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sejarah kamu dan akuh</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('home/dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">CTRL+H</li>
            </ol>

            <div class="card mb-4">
                <?php if(session()->get('level')==1 || session()->get('level')==2) { ?>
                    <a href="<?= base_url('home/pdf') ?>">
                     <button class="btn btn-outline-primary"></i>Pdf</button>
                 </a>
                 <a href="<?= base_url('home/exportToExcel') ?>">
                     <button class="btn btn-outline-primary"></i>Excel</button>
                 </a>
             <?php } ?>
             <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                      <tr>
                        <th scope="col">no</th>
                        <th scope="col">Id lelang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Penawaran Harga</th>
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
</div>
</div>
</div>
</main>