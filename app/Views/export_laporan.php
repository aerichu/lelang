<!DOCTYPE html>
<html>
<head>

</head>
<body>
              <table>
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Date</th>
                    <th scope="col">Harga Awal</th>
                    <th scope="col">Deskripsi Barang</th>
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
    <td><?= $erwin ->date?></td>
    <td><?= $erwin ->harga_awal?></td>
    <td><?= $erwin ->deskripsi?></td>
    <td>
   
    </td>
    <td>
      <a href="<?= base_url('home/edit_barang/' . $erwin ->id_barang) ?>">
     <button class=" btn btn-warning">Edit</button>
    </a>

    <a href="<?= base_url('home/hapus_barang/' . $erwin ->id_barang) ?>">
     <button class=" btn btn-danger">Hapus</button>
      </a>
    </td>
  </tr>
  <?php } ?>
                </tbody>
              </table>
</body>
</html>