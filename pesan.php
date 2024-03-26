<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1>Isi Alamat Anda</h1>
            </div>
            <hr>
            <form method="POST" action="hasil.php" >
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama_siswa" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Email </label>
                    <div class="col-8">
                        <input id="hasiluas" name="email" placeholder="Masukkan email anda" type="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Metode Pembayaran</label>
                    <div class="col-8">
                        <select id="matakuliah" name="pembayaran" class="custom-select" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="cod">COD</option>
                            <option value="Transfer Bank">Tranfer Bank</option>
                            <option value="Dana">Dana</option>
                            <option value="Ovo">Ovo</option>
                            <option value="Alfamart">Alfamart</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                    <textarea id="hasiltugas" name="alamat" placeholder="Masukan Alamat Lengkap anda"  class="form-control" required rows="5" cols="20"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
               
            </form>
            <hr>
        </div>
    </div>
</div>
     

</body>
</html>