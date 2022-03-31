
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
		  	<legend>Data Hukuman - <?= session('nama_pegawai'); ?></legend>
			<label class="control-label" for="id_master_hukuman">Hukuman</label>
			<div class="controls">
			  <select name="id_master_hukuman" disabled>
			  	<?php
                    foreach ($mst_hukuman->result_array() as $g) {
                        if ($id_master_hukuman === $g['id_hukuman']) {
                            ?>
			  		<option value="<?= $g['id_hukuman']; ?>" selected="selected"><?= $g['nama_hukuman']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $g['id_hukuman']; ?>"><?= $g['nama_hukuman']; ?></option>
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
			  placeholder="Uraian" disabled><?= $uraian; ?></textarea>
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
			<label class="control-label" for="masa_berlaku">Masa Berlaku</label>
			<div class="controls">
			  <input type="text" class="span6" name="masa_berlaku" id="masa_berlaku" value="<?= $masa_berlaku; ?>"
			  placeholder="Masa Berlaku" disabled>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="pejabat_menetapkan">Pejabat Menetapkan</label>
			<div class="controls">
			  <input type="text" class="span6" name="pejabat_menetapkan" id="pejabat_menetapkan" value="<?= $pejabat_menetapkan; ?>"
			  placeholder="Pejabat Menetapkan" disabled>
			</div>
		  </div>

		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		<?= form_close(); ?>
	</div>

  </body>
</html>
