
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
	<?php if (validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?= validation_errors(); ?>
	</div>
	<?php } ?>
		<?= form_open('data_keluarga/simpan', 'class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Keluarga - <?= session('nama_pegawai'); ?></legend>
			<label class="control-label" for="nama_anggota_keluarga">Nama Anggota Keluarga</label>
			<div class="controls">
			  <input type="text" class="span6" name="nama_anggota_keluarga" id="nama_anggota_keluarga" value="<?= $nama_anggota_keluarga; ?>"
			  placeholder="Nama Anggota Keluarga" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tanggal_lahir; ?>"
			  placeholder="Tanggal Lahir" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="status_kawin">Status Kawin</label>
			<div class="controls">
			  <input type="text" class="span6" name="status_kawin" id="status_kawin" value="<?= $status_kawin; ?>"
			  placeholder="Status Kawin" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_nikah">Tanggal Menikah</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_nikah" id="tanggal_nikah" value="<?= $tanggal_nikah; ?>"
			  placeholder="Tanggal Menikah" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea class="span6" name="uraian" id="uraian" style="resize:none; outline:none; height:100px;" placeholder="Uraian" disabled><?= $uraian; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_cerai_meninggal">Tanggal Cerai/Meninggal</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_cerai_meninggal" id="tanggal_cerai_meninggal" value="<?= $tanggal_cerai_meninggal; ?>"
			  placeholder="Tanggal Cerai / Meninggal" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="pekerjaan">Pekerjaan</label>
			<div class="controls">
			  <input type="text" class="span6" name="pekerjaan" id="pekerjaan" value="<?= $pekerjaan; ?>"
			  placeholder="Pekerjaan" disabled>
			</div>
		  </div>

		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		<?= form_close(); ?>
	</div>

  </body>
</html>
