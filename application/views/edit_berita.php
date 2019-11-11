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
    <link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <img src="<?php echo base_url() ?>assets/images/wandingan.png" alt="tambah surat" height="40px" align="left"/>
        <a class="navbar-brand" href="#">Desa Sumber Anyar, Mlandingan, Situbondo</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url('C_Signin/logout')?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="">
                  <span data-feather="bar-chart-2"></span>
                  Berita
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_User/user";?>">
                  <span data-feather="users"></span>
                  User
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data Berita</h1>
          </div>
          <?php foreach($berita as $db){
          ?>
          <form action="<?php echo base_url(). 'C_Berita/update_data_berita'; ?>" method="post">
            <div class="col-md-2 mb-3">
                <label for="firstName">Gambar</label>
                <input name="id_berita" type="hidden" class="form-control" id="firstName" placeholder="Kabupaten, Kecamatan, Desa" value="<?php echo $db->id_berita ?>" required>
                <input name="gambar" type="file" class="form-control" id="firstName" placeholder="" value="<?php echo $db->gambar ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
          <div class="col-md-6 mb-3">
                <label for="firstName">Judul</label>
                <input name="judul" type="text" class="form-control" id="firstName" placeholder="Banjir Melanda KAbupaten Situbondo" value="<?php echo $db->judul ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label for="firstName">Tanggal</label>
                <input name="tgl" type="date" class="form-control" id="firstName" placeholder="Manajer" value="<?php echo $db->tgl ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="firstName">Berita</label>
                <input name="berita" type="text" class="form-control" id="firstName" placeholder="Banjir Melanda KAbupaten Situbondo" value="<?php echo $db->berita ?>" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <button class="btn btn-sm btn-primary">Simpan</button>
                <a class="btn btn-sm btn-danger" href="<?php echo base_url()."index.php/C_Berita/berita";?>">Batal</a>
              </div>
            </form>
          <?php } ?>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets//js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
  </body>
</html>
