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
          <a class="nav-link" href="<?php echo base_url('c_signin/logout')?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
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
            <h1 class="h2">Data Berita</h1>
          </div>
          <div class="col-md-2 mb-3">
                <a href="<?php echo base_url()."index.php/C_Berita/tambah_berita";?>"><button class="btn btn-sm btn-primary">Tambah</button></a>
          </div>
          <div class="table-responsive">

            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Gambar</th>
                  <th style="text-align: center;">Judul</th>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Berita</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>
              <?php
              $no = 1;
              foreach ($berita_all as $db) {
                ?>
              <tbody>
                <tr>
                  <td style="text-align: center;"><?php echo $no++ ?></td>
                  <td style="text-align: center;"><img src="<?=base_url('assets/images/'.$db->gambar)?>" style="width:50px; height:150"></td>
                  <td style="text-align: center;"><?php echo $db->judul ?></td>
                  <td style="text-align: center;"><?php echo $db->tgl ?></td>
                  <td style="text-align: center;"><?php echo $db->berita ?></td>
                  <td style="text-align: center;">
                    <a href="<?php echo base_url('C_Berita/edit_data_berita/'.$db->id_berita); ?>" class="btn btn-sm btn-success">Edit</a>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data?')" href="<?php echo base_url('C_Berita/hapus_data_berita/'.$db->id_berita); ?>">Hapus</a> 
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
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
