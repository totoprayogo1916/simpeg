
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
		  	<legend>Data Riwayat Pangkat - <?= $this->session->userdata('nama_pegawai'); ?></legend>
			<label class="control-label" for="golongan">Golongan</label>
			<div class="controls">
			  <select name="id_golongan" disabled="true">
			  	<?php
                    foreach ($golongan->result_array() as $g) {
                        if ($id_golongan === $g['id_golongan']) {
                            ?>
			  		<option value="<?= $g['id_golongan']; ?>" selected="selected"><?= $g['golongan']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $g['id_golongan']; ?>"><?= $g['golongan']; ?></option>
			  	<?php
                        }
                    }
                ?>
			  </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="status">Status</label>
			<div class="controls">
			  <input type="text" class="span6" name="status" id="status" value="<?= $status; ?>"
			  placeholder="Status" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="nomor_sk">Nomor SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="nomor_sk" id="nomor_sk" value="<?= $nomor_sk; ?>"
			  placeholder="Nomor SK" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_sk">Tanggal SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_sk" id="tanggal_sk" value="<?= $tanggal_sk; ?>"
			  placeholder="Tanggal SK" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_mulai">Tanggal Mulai</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_mulai" id="tanggal_mulai" value="<?= $tanggal_mulai; ?>"
			  placeholder="Tanggal Mulai" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_selesai">Tanggal Selesai</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_selesai" id="tanggal_selesai" value="<?= $tanggal_selesai; ?>"
			  placeholder="Tanggal Selesai" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="masa_kerja">Masa Kerja</label>
			<div class="controls">
			  <input type="text" class="span6" name="masa_kerja" id="masa_kerja" value="<?= $masa_kerja; ?>"
			  placeholder="Masa Kerja" disabled>
			</div>
		  </div>

		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		<?= form_close(); ?>
	</div>

  </body>
</html>
