
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $judul_lengkap . ' - ' . $instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('asset/css/docs.css') ?>" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-latest.js') ?>"></script>
    <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/bootstrap-tooltip.js') ?>"></script>
    <script src="<?= base_url('asset/js/application.js') ?>"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?= base_url(); ?>"><?= $judul_pendek; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?= base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-comment icon-white"></i> Panduan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-fire"></i> Administrator</a></li>
                  <li><a href="#"><i class="icon-asterisk"></i> Operator</a></li>
                  <li><a href="#"><i class="icon-leaf"></i> Executive</a></li>
                </ul>
              </li>
            </ul>
			<?= form_open('app/index', 'class="navbar-form pull-right"'); ?>
              <input class="span2" type="text" name="username" placeholder="Username..." value="<?= set_value('username'); ?>">
              <input class="span2" type="password" name="password" placeholder="Password...">
              <button type="submit" class="btn btn-primary "><i class="icon-share icon-white"></i> Log in</button>
           <?= form_close(); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">

	<?php if ($validation->listErrors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
          <?= $validation->listErrors() ?>
	</div>
	<?php } ?>

	<?php if (session()->getFlashdata('result_login')) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?= session()->getFlashdata('result_login'); ?>
	</div>
	<?php } ?>
      <div class="hero-unit">
        <h2>Selamat Datang di <?= $judul_lengkap . ' ' . $instansi; ?></h2>
        <p>Sistem Informasi Kepegawaian PNS Banyuwangi merupakan sebuah aplikasi untuk melakukan manajemen data kepegawaian untuk pegawai negeri sipil (PNS) di kabupaten Banyuwangi. Silahkan masukkan username dan password anda untuk mulai untuk melakukan manajemen atau pengolahan data kepegawaian sesuai dengan hak akses yang anda miliki.</p>
        <p><a class="btn btn-primary btn-large">Pelajari Lebih Lanjut <i class="icon-circle-arrow-right icon-white"></i> </a></p>
      </div>


      <footer class="well">
        <p><?= $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
