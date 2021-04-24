<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Data mahasiswa</title>

</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="create.php">Tambah mahasiswa</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
        
          </div>
        </div>
     </div>
    </nav>

    <div class="container data-mahasiswa mt-5">
       <table class="table table-striped">
         <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
             </tr>
        </thead>
        <tbody>
        
    <?php

    include 'config.php';

    $no = 1;

    $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
    while($data = mysqli_fetch_array($mahasiswa)){
    ?>
        <tr>
      <td><?php echo $n0++; ?></td>

      <td><?php echo $data['nama']?></td>
      <td><?php echo $data['nim']?></td>
      <td><?php echo $data['alamat']?></td>

    <td>
        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">Edit</a>

        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm" onclick="return confrim('anda Yakin akan menghapus data mahasiswa ini?')">HAPUS</a>
        <td>
        <tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>

  