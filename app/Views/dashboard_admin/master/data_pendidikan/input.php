
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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/sunny/jquery-ui.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript" src="<?= base_url(); ?>asset/js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>asset/js/jquery.ui.i18n.all.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$.datepicker.setDefaults($.datepicker.regional['id']);
		$('#tanggal_lulus').datepicker({dateFormat: 'dd MM yy'});
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
		<?= form_open('data_pendidikan/simpan', 'class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Data Pendidikan - <?= $this->session->userdata('nama_pegawai'); ?></legend>
			<label class="control-label" for="tingkat_pendidikan">Tingkat Pendidikan</label>
			<div class="controls">
			  <input type="text" class="span6" name="tingkat_pendidikan" id="tingkat_pendidikan" value="<?= $tingkat_pendidikan; ?>"
			  placeholder="Tingkat Pendidikan">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="jurusan">Jurusan</label>
			<div class="controls">
			  <input type="text" class="span6" name="jurusan" id="jurusan" value="<?= $jurusan; ?>"
			  placeholder="Jurusan">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="uraian">Uraian</label>
			<div class="controls">
			  <textarea class="span6" name="uraian" id="uraian"
			  placeholder="Uraian"><?= $uraian; ?></textarea>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="teknik_non_teknik">Teknik / Non Teknik</label>
			<div class="controls">
			<?php
                $teknik     = 'selected="selected"';
                $non_teknik = 'selected="selected"';
                if ($teknik_non_teknik === 'teknik') {
                    $teknik     = 'selected="selected"';
                    $non_teknik = '';
                } elseif ($teknik_non_teknik === 'non teknik') {
                    $teknik     = '';
                    $non_teknik = 'selected="selected"';
                }
            ?>
			<select name="teknik_non_teknik">
				<option value="teknik" <?= $teknik; ?>>Teknik</option>
				<option value="non teknik" <?= $non_teknik; ?>>Non Teknik</option>
			</select>
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="sekolah">Sekolah</label>
			<div class="controls">
			  <input type="text" class="span6" name="sekolah" id="sekolah" value="<?= $sekolah; ?>"
			  placeholder="Sekolah">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tempat_sekolah">Tempat Sekolah</label>
			<div class="controls">
			  <input type="text" class="span6" name="tempat_sekolah" id="tempat_sekolah" value="<?= $tempat_sekolah; ?>"
			  placeholder="Tempat Sekolah">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="nomor_sttb">Nomor STTB</label>
			<div class="controls">
			  <input type="text" class="span6" name="nomor_sttb" id="nomor_sttb" value="<?= $nomor_sttb; ?>"
			  placeholder="Nomor STTB">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_sttb">Tanggal STTB</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_sttb" id="tanggal_sttb" value="<?= $tanggal_sttb; ?>"
			  placeholder="Tanggal STTB">
			</div>
		  </div>

		  <div class="control-group">
			<label class="control-label" for="tanggal_lulus">Tanggal Lulus</label>
			<div class="controls">
			  <input type="text" class="span6" name="tanggal_lulus" id="tanggal_lulus" value="<?= $tanggal_lulus; ?>"
			  placeholder="Tanggal Lulus">
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
		<?= form_close(); ?>
	</div>

  </body>
</html>
