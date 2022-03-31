
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
		  	<legend>Data Riwayat Jabatan - <?= session('nama_pegawai'); ?></legend>
			<label class="control-label" for="status">Status</label>
			<div class="controls">
			  <input type="text" class="span6" name="status" id="status" value="<?= $status; ?>"
			  placeholder="Status" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="penempatan">Penempatan</label>
			<div class="controls">
			  <input type="text" class="span6" name="penempatan" id="penempatan" value="<?= $penempatan; ?>"
			  placeholder="Penempatan" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="id_jabatan">Jabatan</label>
			<div class="controls">
			  <select name="id_jabatan" disabled>
			  	<?php
                    foreach ($mst_jabatan->result_array() as $mj) {
                        if ($id_jabatan === $mj['id_jabatan']) {
                            ?>
			  		<option value="<?= $mj['id_jabatan']; ?>" selected="selected"><?= $mj['nama_jabatan']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $mj['id_jabatan']; ?>"><?= $mj['nama_jabatan']; ?></option>
			  	<?php
                        }
                    }
                ?>
			  </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="id_unit_kerja">Unit Kerja</label>
			<div class="controls">
			  <select name="id_unit_kerja" disabled>
			  	<?php
                    foreach ($mst_unit_kerja->result_array() as $muk) {
                        if ($id_unit_kerja === $muk['id_unit_kerja']) {
                            ?>
			  		<option value="<?= $muk['id_unit_kerja']; ?>" selected="selected"><?= $muk['nama_unit_kerja']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $muk['id_unit_kerja']; ?>"><?= $muk['nama_unit_kerja']; ?></option>
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
			  <textarea class="span6" name="uraian" id="uraian"
			  placeholder="Uraian" disabled><?= $uraian; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="id_eselon">Eselon</label>
			<div class="controls">
			  <select name="id_eselon" disabled>
			  	<?php
                    foreach ($mst_eselon->result_array() as $me) {
                        if ($id_eselon === $me['id_eselon']) {
                            ?>
			  		<option value="<?= $me['id_eselon']; ?>" selected="selected"><?= $me['nama_eselon']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $me['id_eselon']; ?>"><?= $me['nama_eselon']; ?></option>
			  	<?php
                        }
                    }
                ?>
			  </select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tmt_eselon">TMT Eselon</label>
			<div class="controls">
			  <input type="text" class="span6" name="tmt_eselon" id="tmt_eselon" value="<?= $tmt_eselon; ?>"
			  placeholder="TMT Eselon" disabled>
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
			<label class="control-label" for="lokasi">Lokasi</label>
			<div class="controls">
			  <input type="text" class="span6" name="lokasi" id="lokasi" value="<?= $lokasi; ?>"
			  placeholder="Lokasi" disabled>
			</div>
		  </div>

		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		<?= form_close(); ?>
	</div>

  </body>
</html>
