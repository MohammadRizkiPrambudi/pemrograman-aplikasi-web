<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)) ;?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tugas Kalkulator dan IF</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Tugas Kalkulator dan IF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Kalkulator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?hal=latihanif">Latihan IF</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- body kalkulator -->
  <div class="container">
    <div class="row justify-content-center"> 
      <div class="col-md-5">
        <?php 
        $hal = $_GET['hal'];
        if($hal=='latihanif'){
            include 'latihanif.php';
        }elseif ($hal=='') {
          include 'kalkulator.php';
        }
        ?>
    </div>  
  </div>
</div>
  <!--footer-->
  <footer class="bg-dark text-center text-white fixed-bottom p-1" >
    <p class="mt-1"> Copyright &copy; Mohammad Rizki Prambudi (MI-P.18.1K) - <?= date('Y'); ?></p>
  </footer>
  <!--akhir footer-->   

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
  </body>

  <script>
  // mengatur hapus hasil dan mengatur tinggi card
  $(document).ready(function(){
    $('.hapus').on('click', function(){
      const data = document.querySelector('.card');
      $('.hasil').remove();
      data.style.height='450px';
    });   
  });

  // mengatur menu aktif
  $(document).ready(function(){
    $('.nav-link').on('click', function (){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
    });
  });


  </script>
</html>