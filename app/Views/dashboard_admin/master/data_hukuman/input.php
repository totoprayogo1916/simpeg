
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
	<link href="<?= base_url(); ?>asset/css/chosen.css" rel="stylesheet" type="text/css">
	<style>
		body{
			margin:20px;
			}
	</style>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/application.js"></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/sunny/jquery-ui.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript" src="<?= base_url(); ?>asset/js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>asset/js/jquery.ui.i18n.all.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$.datepicker.setDefaults($.datepicker.regional['id']);
		$('#tanggal_sk').datepicker({dateFormat: 'dd MM yy'});
		$('#tanggal_mulai').datepicker({dateFormat: 'dd MM yy'});
		$('#tanggal_selesai').datepicker({dateFormat: 'dd MM yy'});
	});
	</script>
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
		<?= form_open('data_hukuman/simpan', 'class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Hukuman - <?= session('nama_pegawai'); ?></legend>
			<label class="control-label" for="id_master_hukuman">Hukuman</label>
			<div class="controls">
			  <select name="id_master_hukuman" id="id_master_hukuman" data-placeholder="Hukuman" class="chzn-select" style="width:300px;" tabindex="2">
			<option value=""></option>
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
			  placeholder="Uraian"><?= $uraian; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="nomor_sk">Nomor SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="nomor_sk" id="nomor_sk" value="<?= $nomor_sk; ?>"
			  placeholder="Nomor SK">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_sk">Tanggal SK</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_sk" id="tanggal_sk" value="<?= $tanggal_sk; ?>"
			  placeholder="Tanggal SK">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_mulai">Tanggal Mulai</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_mulai" id="tanggal_mulai" value="<?= $tanggal_mulai; ?>"
			  placeholder="Tanggal Mulai">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_selesai">Tanggal Selesai</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_selesai" id="tanggal_selesai" value="<?= $tanggal_selesai; ?>"
			  placeholder="Tanggal Selesai">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="masa_berlaku">Masa Berlaku</label>
			<div class="controls">
			  <input type="text" class="span6" name="masa_berlaku" id="masa_berlaku" value="<?= $masa_berlaku; ?>"
			  placeholder="Masa Berlaku">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="pejabat_menetapkan">Pejabat Menetapkan</label>
			<div class="controls">
			  <input type="text" class="span6" name="pejabat_menetapkan" id="pejabat_menetapkan" value="<?= $pejabat_menetapkan; ?>"
			  placeholder="Pejabat Menetapkan">
			</div>
		  </div>

		  <input type="hidden" name="id_param" value="<?= $id_param; ?>">
		  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
		  <input type="hidden" name="st" value="<?= $st; ?>">
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		  <script src="http://localhost/sgmc/asset/js/chosen.jquery.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(".chzn-select").chosen();
			</script>
		<?= form_close(); ?>
	</div>

  </body>
</html>
