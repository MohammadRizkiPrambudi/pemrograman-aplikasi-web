<?php

// cek apakah tombol hitung sudah ditekan atau belim

if (isset($_POST['hitung'])) {

  // ambil nilai dari form
  $angka1 = $_POST['angkapertama']; 
  $angka2 = $_POST['angkakedua'];
  $operator = $_POST['operator'];
  
  //rumus
  $perhitungan = $angka1 . $operator . $angka2;
  eval("\$hasil = $perhitungan;");

}


?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center title">Kalkulator Sederhana</h5>
    <hr>
    <form method="post" action="" id="frminput">
      <div class="mb-3">
        <label for="angka1" class="form-label">Masukkan Angka Pertama</label>
        <input type="text" class="form-control" name="angkapertama" id="angka1" placeholder="Angka 1" autocomplete="off" required>
      </div>
      <div class="mb-3">
        <label for="angka2" class="form-label">Masukkan Angka Pertama</label>
        <input type="text" class="form-control" name="angkakedua" id="angka2" placeholder="Angka 2" autocomplete="off" required>
      </div>
      <select class="form-control" aria-label="Default select example mb-3" name="operator" id="operator" required>
        <option selected disable value="">Pilih Operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <button type="submit" class="form-control btn btn-primary mt-3 hitung" name="hitung" >Hitung</button>
      <button type="reset" class="form-control btn btn-danger hapus mt-2 mb-3">Hapus</button>
      <?php if (isset($_POST['hitung'])) : ?>
          <div class="mb-3 hasil">
            <input type="text" class="form-control font-weight-bold" value="<?= $hasil ?>">
          </div>
      <?php endif; ?>
    </form>  
  </div>
</div>