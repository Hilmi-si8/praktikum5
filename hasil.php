<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pembayaran = $_POST['pembayaran'];
    $alamat = $_POST['alamat'];
    $kode = 'a011';
    

    include 'manusia.php';
    $manusia = new manusia($nama, $email, $pembayaran, $alamat);
    $proses = $manusia->proses();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Pembayaran</th>
      <th scope="col">Alamat</th>
      <th scope="col">Peroses</th>
      <th scope="col">kode pesanan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?= $nama ?> </td>
      <td> <?= $email  ?>  </td>
      <td> <?= $pembayaran ?>  </td>
      <td> <?= $alamat  ?>   </td>
      <td> <?= $proses  ?>   </td>
      <td> <?= $kode ?></td>

    </tr>
  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>