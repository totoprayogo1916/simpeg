
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
		<?= form_open('master_status_pegawai/simpan', 'class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Status Pegawai</legend>
			<label class="control-label" for="inputEmail">Nama Status</label>
			<div class="controls">
			  <input type="text" id="disabledInput" class="span" name="nama_status" id="namaStatus" disabled value="<?= $nama_status; ?>" placeholder="Nama Status">
			</div>
		  </div>
		<?= form_close(); ?>
	</div>

  </body>
</html>
