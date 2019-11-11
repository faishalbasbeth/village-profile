<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sumber Anyar Situbondo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/navbar-top.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <img src="<?php echo base_url() ?>assets/images/wandingan.png" alt="tambah surat" height="40px" align="left"/><a class="navbar-brand" href="#">Desa Sumber Anyar, Mlandingan, Situbondo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <main role="main" class="container">
      <?php foreach ($berita as $db) {
        ?>
      
      <div class="jumbotron">
        <input name="id_berita" type="hidden" class="form-control" id="firstName" placeholder="Kabupaten, Kecamatan, Desa" value="<?php echo $db->id_berita ?>" required>
        <h3><img class="rounded-circle" src="<?=base_url('assets/images/'.$db->gambar)?>" style="width:150px; height:150" alt="Generic placeholder image" width="140" height="140">&nbsp; <?php echo $db->judul ?></h3>
        
        <p class="lead"><?php echo nl2br(htmlspecialchars($db->berita)) ?></p>
        <a class="btn btn-lg btn-primary" href="<?php echo base_url()."index.php/C_Home/home";?>" role="button">Kembali Halaman Utama &raquo;</a>
      </div>
      <?php } ?>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
