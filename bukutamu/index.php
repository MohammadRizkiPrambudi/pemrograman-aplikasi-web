<?php 

if (isset($_POST["simpan"])) {
  $nama = $_POST["nama"];
  $jk = $_POST["jk"];
  $email = $_POST["email"];
  $minat = $_POST["minat"];
  $komentar = $_POST["komentar"];
  $daftarminat = "";

  if (empty($nama) || empty($email)){
    echo "
    <script>
    alert('Data nama dan email harap diisi');
    </script>
    ";
  }

  foreach ($minat as $itemminat) {
    $daftarminat = $daftarminat."".$itemminat." ";
  }


 $file = fopen("daftartamu.txt","a");  
 fwrite($file,"Nama : $nama \n");  
 fwrite($file,"Jenis Kelamin : $jk \n");  
 fwrite($file,"Email : $email \n");  
 fwrite($file,"Minat : $daftarminat \n");  
 fwrite($file,"Komentar : $komentar \n");  
 fwrite($file, "----------------------------- \n");
 fclose($file);  

 echo "

 <script>
 alert('Data dengan nama $nama berhasil disimpan');
 </script>

 ";

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Buku tamu</title>
  </head>
  <body>
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="mt-3 mb-3 text-danger text-center fs-1 fw-bold">Aplikasi Buku Tamu</h1>
      <div class="col-md-8">
        <form method="post" action="">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="jk" class="form-label">Jenis Kelamin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki" checked>
          <label class="form-check-label" for="jk">Laki-Laki</label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
          <label class="form-check-label" for="jk">Perempuan</label>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="minat" class="form-label">Minat</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Teknik Informatika" id="minat" checked name="minat[]">
          <label class="form-check-label" for="minat">Teknik Informatika</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Manajemen Informatika" id="minat" name="minat[]">
          <label class="form-check-label" for="minat">Manajemen Informatika</label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="Desain Grafis" id="minat" name="minat[]">
          <label class="form-check-label" for="minat">Desain Grafis</label>
        </div>
        <div class="mb-3">
          <label for="komentar" class="form-label">Komentar</label>
          <textarea class="form-control" id="komentar" rows="3" placeholder="komentar" name="komentar"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
          <button type="reset" class="btn btn-danger" >Reset</button>
        </div>
      </form>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>