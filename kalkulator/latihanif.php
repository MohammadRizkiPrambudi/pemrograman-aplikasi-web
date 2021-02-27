<?php 
// cek apakah tombol sudah ditekan belum
if (isset($_POST["cek"])){
    // mengambil nilai menggunakan variabel superglobal post
    $nilai = $_POST["nilai"];
    // cek apakah nilai sudah dimasukkan
    if ($nilai==""){
        echo "
        <script>
        alert('Anda belum memasukkan nilai php anda!');
        </script>
        ";
    // Cek apakah nilai apakah berupa angka atau string(kata)
    }elseif(!is_numeric($nilai)){
        echo "
        <script>
        alert('Yang anda masukkan bukan berupa angka!');
        </script>
        ";
   }else{
       // Statement pertama
       if($nilai<=30){
           echo "<b><h5>Anda mendapat nilai E</h5></b>";
       // Statement kedua
        }elseif ($nilai<=50){
           echo "<b><h5>Anda mendapat nilai D</h5></b>";
       // Statement ketiga
        }elseif($nilai<=70){
           echo "<b><h5>Anda mendapat nilai C</h5></b>";
       // Statement keempat
        }elseif($nilai<=85){
           echo "<b><h5>Anda mendapat nilai AB</h5></b>";
       // Statement kelima
        }else{
           echo "<b><h5>Anda mendapat nilai A </h5></b>";
       }
   }
}
?>

<form action="" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Masukkan Nilai PHPmu?"name="nilai" id="nilai" autocomplete="off">
      <div class="input-group-append">
        <button class="btn btn-danger" type="submit" name ="cek">Cek</button>
      </div>
    </div>
</form>