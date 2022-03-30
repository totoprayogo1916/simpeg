
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
		<?= form_open('master_ppk/simpan', 'class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Penghargaan</legend>
			<label class="control-label" for="nama_penghargaan">Nama Penghargaan</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_penghargaan" id="nama_penghargaan" value="<?= $nama_penghargaan; ?>" placeholder="Nama Penghargaan" disabled>
			</div>
		  </div>
		<?= form_close(); ?>
	</div>

  </body>
</html>
