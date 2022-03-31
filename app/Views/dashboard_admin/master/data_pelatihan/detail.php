
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
		  	<legend>Data Pelatihan - <?= session('nama_pegawai'); ?></legend>
			<label class="control-label" for="id_master_pelatihan">Nama Pelatihan</label>
			<div class="controls">
			  <select name="id_master_pelatihan" id="id_master_pelatihan" data-placeholder="Nama Pelatihan" class="chzn-select" style="width:300px;" tabindex="2" disabled="disabled">
			<option value=""></option>
			  	<?php
                    foreach ($mst_pelatihan->result_array() as $mp) {
                        if ($id_master_pelatihan === $mp['id_pelatihan']) {
                            ?>
			  		<option value="<?= $mp['id_pelatihan']; ?>" selected="selected"><?= $mp['nama_pelatihan']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $mp['id_pelatihan']; ?>"><?= $mp['nama_pelatihan']; ?></option>
			  	<?php
                        }
                    }
                ?>
			  </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea type="text" class="span6" name="uraian" id="uraian"
			  placeholder="Uraian" disabled="disabled"><?= $uraian; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="lokasi">Lokasi</label>
			<div class="controls">
			<select name="lokasi" id="lokasi" data-placeholder="Lokasi Pelatihan" class="chzn-select" style="width:300px;" tabindex="2" disabled="disabled">
			<option value=""></option>
			  	<?php
                    foreach ($mst_lokasi->result_array() as $mp) {
                        if ($lokasi === $mp['id_lokasi_pelatihan']) {
                            ?>
			  		<option value="<?= $mp['id_lokasi_pelatihan']; ?>" selected="selected"><?= $mp['nama_lokasi']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $mp['id_lokasi_pelatihan']; ?>"><?= $mp['nama_lokasi']; ?></option>
			  	<?php
                        }
                    }
                ?>
			  </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_sertifikat">Tanggal Sertifikat</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_sertifikat" id="tanggal_sertifikat" value="<?= $tanggal_sertifikat; ?>"
			  placeholder="Tanggal Sertifikat" disabled="disabled">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="jam_pelatihan">Jam Pelatihan</label>
			<div class="controls">
			  <input type="text" class="span6" name="jam_pelatihan" id="jam_pelatihan" value="<?= $jam_pelatihan; ?>"
			  placeholder="Jam Pelatihan" disabled="disabled">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="negara">Negara</label>
			<div class="controls">
			  <input type="text" class="span6" name="negara" id="negara" value="<?= $negara; ?>"
			  placeholder="Negara" disabled="disabled">
			</div>
		  </div>

		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		<?= form_close(); ?>
	</div>

  </body>
</html>
