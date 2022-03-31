
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/css/docs.css" rel="stylesheet">
	<style>
		body{
			margin:20px;
			}
	</style>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/application.js"></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
  </head>

  <body>
	<div class="well">
	<?= session()->getFlashdata('pass'); ?>
	<?php if (validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?= validation_errors(); ?>
	</div>
	<?php } ?>
		<?= form_open('manage_user/simpan', 'class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Manajemen User</legend>
			<label class="control-label" for="nama_unit_kerja">Nama Pengguna</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_lengkap" id="nama_lengkap" value="<?= $nama_lengkap; ?>" placeholder="Nama Pengguna">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="eselon">Username</label>
			<div class="controls">
			  <input type="text" class="span" name="username" id="username" value="<?= $username; ?>" <?php if ($st === 'edit') {
    echo 'readonly="true"';
} ?> placeholder="Username">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="parent_unit">Password</label>
			<div class="controls">
			  <input type="password" class="span" name="password" id="password" placeholder="Password">
			</div>
		  </div>
		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="default_username" value="<?= $username; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		<?= form_close(); ?>
	</div>

  </body>
</html>
