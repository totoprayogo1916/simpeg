
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $judul_lengkap . ' - ' . $instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>asset/css/docs.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/application.js"></script>
    <script src="<?= base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?= base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
	<script>
		  $(document).ready(function(){
			  //Examples of how to assign the ColorBox event to elements
			  $(".medium-box").colorbox({rel:'group', iframe:true, width:"900px", height:"90%"});

		  });
	</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?= base_url(); ?>"><?= $judul_pendek; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?= base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url(); ?>master_status_pegawai"><i class="icon-tag"></i> Status Pegawai</a></li>
                  <li><a href="<?= base_url(); ?>master_unit_kerja"><i class="icon-question-sign"></i> Unit Kerja</a></li>
                  <li><a href="<?= base_url(); ?>master_satuan_kerja"><i class="icon-ok-sign"></i> Satuan Kerja</a></li>
                  <li><a href="<?= base_url(); ?>master_ppk"><i class="icon-eye-open"></i> PPK</a></li>
                  <li><a href="<?= base_url(); ?>master_golongan"><i class="icon-random"></i> Golongan</a></li>
                  <li><a href="<?= base_url(); ?>master_eselon"><i class="icon-retweet"></i> Eselon</a></li>
                  <li><a href="<?= base_url(); ?>master_pelatihan"><i class="icon-folder-open"></i> Pelatihan</a></li>
                  <li><a href="<?= base_url(); ?>master_jabatan"><i class="icon-hdd"></i> Jabatan</a></li>
                  <li><a href="<?= base_url(); ?>master_status_jabatan"><i class="icon-tasks"></i> Status Jabatan</a></li>
                  <li><a href="<?= base_url(); ?>master_penghargaan"><i class="icon-filter"></i> Penghargaan</a></li>
                  <li><a href="<?= base_url(); ?>master_hukuman"><i class="icon-briefcase"></i> Hukuman</a></li>
                  <li><a href="<?= base_url(); ?>master_lokasi_pelatihan"><i class="icon-fullscreen"></i> Lokasi Pelatihan</a></li>
                  <li><a href="<?= base_url(); ?>master_lokasi_kerja"><i class="icon-briefcase"></i> Lokasi Kerja</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-comment icon-white"></i> Panduan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url(); ?>panduan_administrator"><i class="icon-fire"></i> Administrator</a></li>
                  <li><a href="<?= base_url(); ?>panduan_operator"><i class="icon-asterisk"></i> Operator</a></li>
                  <li><a href="<?= base_url(); ?>panduan_executive"><i class="icon-leaf"></i> Executive</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks icon-white"></i> Laporan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url(); ?>laporan_pegawai_unit_satuan"><i class="icon-tag"></i> Laporan Pegawai - Unit Kerja dan Satuan Kerja</a></li>
                  <li><a href="<?= base_url(); ?>laporan_pegawai_penempatan_kerja"><i class="icon-question-sign"></i> Laporan Pegawai - Penempatan Kerja</a></li>
                  <li><a href="<?= base_url(); ?>laporan_pegawai_ikut_pelatihan"><i class="icon-ok-sign"></i> Laporan Pegawai - Mengikuti Pelatihan</a></li>
                  <li><a href="<?= base_url(); ?>laporan_pegawai_status_golongan"><i class="icon-eye-open"></i> Laporan Pegawai - Status Pegawai dan Golongan</a></li>
                  <li><a href="<?= base_url(); ?>laporan_pegawai_struktural_fungsional"><i class="icon-random"></i> Laporan Pegawai - Struktural dan Fungsional</a></li>
                  <li><a href="<?= base_url(); ?>laporan_pegawai_urut_kepangkatan"><i class="icon-retweet"></i> Laporan Daftar Urut Kepangkatan</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?= $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?= base_url(); ?>app/change_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?= base_url(); ?>manage_user"><i class="icon-tasks"></i> Manajemen User</a></li>
				<li><a href="<?= base_url(); ?>app/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3><?= $judul_lengkap . ' ' . $instansi; ?></h3>
		  <p><?= $alamat; ?></p>
		</div>
	  </div>
	</div>

	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="#data-pegawai">Pegawai</a></li>
		  <li><a href="#data-keluarga">Keluarga</a></li>
		  <li><a href="#data-pangkat">Riwayat Pangkat</a></li>
		  <li><a href="#data-jabatan">Riwayat Jabatan</a></li>
		  <li><a href="#data-pendidikan">Pendidikan</a></li>
		  <li><a href="#data-pelatihan">Pelatihan</a></li>
		  <li><a href="#data-penghargaan">Penghargaan</a></li>
		  <li><a href="#data-seminar">Seminar</a></li>
		  <li><a href="#data-organisasi">Organisasi</a></li>
		  <li><a href="#data-gaji">Gaji Pokok</a></li>
		  <li><a href="#data-hukuman">Hukuman</a></li>
		  <li><a href="#data-dp3">DP3</a></li>
		</ul>
	  </div>
	</header>

<section id="data-pegawai">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pegawai</h1>
  	</div>

	<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#dtpegawai" data-toggle="tab">Data Pegawai</a></li>
        <li><a href="#dtpangkat" data-toggle="tab">Data Pangkat</a></li>
        <li><a href="#dtjabatan" data-toggle="tab">Data Jabatan</a></li>
        <li><a href="#dtfoto" data-toggle="tab">Foto Pegawai</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="dtpegawai">

        <div class="control-group">
			<div class="span3"><strong>NIP</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip" id="nip" value="<?= $nip; ?>" placeholder="NIP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>NIP Lama</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip_lama" id="nip_lama" value="<?= $nip_lama; ?>" placeholder="NIP Lama">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor Kartu Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_kartu_pegawai" id="no_kartu_pegawai" value="<?= $no_kartu_pegawai; ?>" placeholder="Nomor Kartu Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nama Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?= $nama_pegawai; ?>" placeholder="Nama Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tempat Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?= $tempat_lahir; ?>" placeholder="Tempat Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor NPWP</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_npwp" id="no_npwp" value="<?= $no_npwp; ?>" placeholder="Nomor NPWP">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Kartu Askes Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="kartu_askes_pegawai" id="kartu_askes_pegawai" value="<?= $kartu_askes_pegawai; ?>" placeholder="Kartu Askes Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tanggal Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tanggal_lahir; ?>" placeholder="Tanggal Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Jenis Kelamin</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Jenis Kelamin" class="chzn-select" style="width:500px;" tabindex="2" name="jenis_kelamin" id="jenis_kelamin">
					<?php
                    $laki = ''; $perempuan = ''; $kosong1 = '';
                    if ($jenis_kelamin === 'Laki-Laki') {
                        $laki      = 'selected="selected"';
                        $perempuan = '';
                        $kosong1   = '';
                    } elseif ($jenis_kelamin === 'Perempuan') {
                        $laki      = '';
                        $perempuan = 'selected="selected"';
                        $kosong1   = '';
                    } else {
                        $laki      = '';
                        $perempuan = '';
                        $kosong1   = 'selected="selected"';
                    }
                    ?>
          			<option value="" <?= $kosong1; ?>></option>
          			<option value="Laki-Laki" <?= $laki; ?>>Laki-Laki</option>
          			<option value="Perempuan" <?= $perempuan; ?>>Perempuan</option>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Agama</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Agama" class="chzn-select" style="width:500px;" tabindex="2" name="agama" id="agama">
					<?php
                    $islam = ''; $hindu = ''; $budha = ''; $protestan = ''; $katolik = ''; $konghucu = ''; $lainnya = ''; $kosong = ''; $kristen = '';
                    if ($agama === '') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = '';
                        $lainnya   = '';
                        $kosong    = 'selected="selected"';
                        $kristen   = '';
                    } elseif ($agama === 'Hindu') {
                        $islam     = '';
                        $hindu     = 'selected="selected"';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = '';
                        $lainnya   = '';
                        $kristen   = '';
                        $kosong    = '';
                    } elseif ($agama === 'Budha') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = 'selected="selected"';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = '';
                        $lainnya   = '';
                        $kristen   = '';
                        $kosong    = '';
                    } elseif ($agama === 'Kristen') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = '';
                        $lainnya   = '';
                        $kosong    = '';
                        $kristen   = 'selected="selected"';
                    } elseif ($agama === 'Kristen Protestan') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = 'selected="selected"';
                        $katolik   = '';
                        $konghucu  = '';
                        $kristen   = '';
                        $lainnya   = '';
                        $kosong    = '';
                    } elseif ($agama === 'Kristen Katolik') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = 'selected="selected"';
                        $konghucu  = '';
                        $kristen   = '';
                        $lainnya   = '';
                        $kosong    = '';
                    } elseif ($agama === 'Konghucu') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = 'selected="selected"';
                        $lainnya   = '';
                        $kristen   = '';
                        $kosong    = '';
                    } elseif ($agama === 'Lainnya') {
                        $islam     = '';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = '';
                        $lainnya   = 'selected="selected"';
                        $kristen   = '';
                        $kosong    = '';
                    } elseif ($agama === 'Islam') {
                        $islam     = 'selected="selected"';
                        $hindu     = '';
                        $budha     = '';
                        $protestan = '';
                        $katolik   = '';
                        $konghucu  = '';
                        $lainnya   = '';
                        $kristen   = '';
                        $kosong    = '';
                    }
                    ?>
          			<option value="" <?= $kosong; ?>></option>
          			<option value="Islam" <?= $islam; ?>>Islam</option>
          			<option value="Hindu" <?= $hindu; ?>>Hindu</option>
          			<option value="Budha" <?= $budha; ?>>Budha</option>
          			<option value="Kristen" <?= $kristen; ?>>Kristen</option>
          			<option value="Kristen Protestan" <?= $protestan; ?>>Kristen Protestan</option>
          			<option value="Kristen Katolik" <?= $katolik; ?>>Kristen Katolik</option>
          			<option value="Konghucu" <?= $konghucu; ?>>Konghucu</option>
          			<option value="Lainnya" <?= $lainnya; ?>>Lainnya</option>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Usia</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="usia" id="usia" value="<?= $usia; ?>" placeholder="Usia">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="status_pegawai" id="status_pegawai">
          			<option value=""></option>
					<?php
                        foreach ($mst_status_pegawai->result_array() as $sp) {
                            if ($sp['id_status_pegawai'] === $status_pegawai) {
                                ?>
						<option value="<?= $sp['id_status_pegawai']; ?>" selected="selected"><?= $sp['nama_status']; ?></option>
					<?php
                            } else {
                                ?>
						<option value="<?= $sp['id_status_pegawai']; ?>"><?= $sp['nama_status']; ?></option>
					<?php
                            }
                        }
                    ?>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tanggal Pengangkatan CPNS</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_pengangkatan_cpns" id="tanggal_pengangkatan_cpns" value="<?= $tanggal_pengangkatan_cpns; ?>" placeholder=
			  "Tanggal Pengangkatan CPNS">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Alamat</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<textarea disabled="disabled" class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder=
			  "Alamat"><?= $alamat_pegawai; ?></textarea>
			</div>
		  </div>
    	</div>
        <div class="tab-pane fade" id="dtpangkat">
          <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="status_pegawai_pangkat">
			  	<?php
                    foreach ($mst_status_pegawai->result_array() as $msp) {
                        if ($status_pegawai_pangkat === $msp['id_status_pegawai']) {
                            ?>
			  		<option value="<?= $msp['id_status_pegawai']; ?>" selected="selected"><?= $msp['nama_status']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $msp['id_status_pegawai']; ?>"><?= $msp['nama_status']; ?></option>
			  	<?php
                        }
                    }
                ?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Golongan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_golongan">
			  	<?php
                    foreach ($mst_golongan->result_array() as $mg) {
                        if ($id_golongan === $mg['id_golongan']) {
                            ?>
			  		<option value="<?= $mg['id_golongan']; ?>" selected="selected"><?= $mg['golongan']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $mg['id_golongan']; ?>"><?= $mg['golongan']; ?></option>
			  	<?php
                        }
                    }
                ?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Nomor SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nomor_sk_pangkat" id="nomor_sk_pangkat" value="<?= $nomor_sk_pangkat; ?>" placeholder=
			  "Nomor SK Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_sk_pangkat" id="tanggal_sk_pangkat" value="<?= $tanggal_sk_pangkat; ?>" placeholder=
			  "Tanggal SK Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Mulai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_mulai_pangkat" id="tanggal_mulai_pangkat" value="<?= $tanggal_mulai_pangkat; ?>" placeholder=
			  "Tanggal Mulai Pangkat">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Selesai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_selesai_pangkat" id="tanggal_selesai_pangkat" value="<?= $tanggal_selesai_pangkat; ?>" placeholder=
			  "Tanggal Selesai Pangkat">
			</div>
		  </div>
        </div>
        <div class="tab-pane fade" id="dtjabatan">

          <div class="control-group">
			<div class="span3"><strong>Status Jabatan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_status_jabatan">
			  	<?php
                    foreach ($mst_stts_jabatan->result_array() as $msj) {
                        if ($id_status_jabatan === $msj['id_status_jabatan']) {
                            ?>
			  		<option value="<?= $msj['id_status_jabatan']; ?>" selected="selected"><?= $msj['nama_jabatan']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $msj['id_status_jabatan']; ?>"><?= $msj['nama_jabatan']; ?></option>
			  	<?php
                        }
                    }
                ?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Jabatan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_jabatan">
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
			<div class="span3"><strong>Unit Kerja</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_unit_kerja">
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
			<div class="span3"><strong>Satuan Kerja</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_satuan_kerja">
			  	<?php
                    foreach ($mst_satuan_kerja->result_array() as $msk) {
                        if ($id_satuan_kerja === $msk['id_satuan_kerja']) {
                            ?>
			  		<option value="<?= $msk['id_satuan_kerja']; ?>" selected="selected"><?= $msk['nama_satuan_kerja']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $msk['id_satuan_kerja']; ?>"><?= $msk['nama_satuan_kerja']; ?></option>
			  	<?php
                        }
                    }
                ?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Lokasi Kerja</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select data-placeholder="Lokasi Kerja" disabled="disabled" class="chzn-select" style="width:500px;" tabindex="2" name="lokasi_kerja" id="lokasi_kerja">
			<option value=""></option>
			  	<?php
                    foreach ($mst_lokasi_kerja->result_array() as $me) {
                        if ($lokasi_kerja === $me['id_lokasi_kerja']) {
                            ?>
			  		<option value="<?= $me['id_lokasi_kerja']; ?>" selected="selected"><?= $me['lokasi_kerja']; ?></option>
			  	<?php
                        } else {
                            ?>
			  		<option value="<?= $me['id_lokasi_kerja']; ?>"><?= $me['lokasi_kerja']; ?></option>
			  	<?php
                        }
                    }
                ?>
			</select>
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Nomor SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nomor_sk_jabatan" id="nomor_sk_jabatan" value="<?= $nomor_sk_jabatan; ?>" placeholder=
			  "Nomor SK Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal SK</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_sk_jabatan" id="tanggal_sk_jabatan" value="<?= $tanggal_sk_jabatan; ?>" placeholder=
			  "Tanggal SK Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Mulai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_mulai_jabatan" id="tanggal_mulai_jabatan" value="<?= $tanggal_mulai_jabatan; ?>" placeholder=
			  "Tanggal Mulai Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Tanggal Selesai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_selesai_jabatan" id="tanggal_selesai_jabatan" value="<?= $tanggal_selesai_jabatan; ?>" placeholder=
			  "Tanggal Selesai Jabatan">
			</div>
		  </div>
          <div class="control-group">
			<div class="span3"><strong>Eselon</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="id_eselon">
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
			<div class="span3"><strong>TMT Eselon</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tmt_eselon" id="tmt_eselon" value="<?= $tmt_eselon; ?>" placeholder=
			  "TMT Eselon">
			</div>
		  </div>
        </div>
	<div class="tab-pane fade" id="dtfoto">

			<?php
                $ft = $foto;
                if ($ft === '') {
                    $ft = 'no-img.jpg';
                }
            ?>
          <div class="control-group">
			<label class="control-label" for="nip">Foto Pegawai</label>
			<div class="controls">
			<p><img src="<?= base_url(); ?>asset/foto_pegawai/medium/<?= $ft; ?>" /></p>
			</div>
		</div>
	</div>
    </div>
	</div>
</section>

<section id="data-keluarga">
  <div class="well">
	<div class="page-header">
    	<h1>Data Keluarga</h1>
  	</div>
  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Keluarga</th>
		<th>Tanggal Lahir</th>
        <th>Status Kawin</th>
        <th>Tanggal Nikah</th>
		<th>Pekerjaan</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_keluarga->result_array() as $dk) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dk['nama_anggota_keluarga']; ?></td>
        <td><?= $dk['tanggal_lahir']; ?></td>
        <td><?= $dk['status_kawin']; ?></td>
        <td><?= $dk['tanggal_nikah']; ?></td>
        <td><?= $dk['pekerjaan']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_keluarga/detail/<?= $dk['id_data_keluarga']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_keluarga/edit/<?= $dk['id_data_keluarga']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_keluarga/hapus/<?= $dk['id_data_keluarga']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pangkat">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Pangkat</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Status</th>
        <th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Kerja</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_riwayat_pangkat->result_array() as $drp) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $drp['golongan']; ?></td>
        <td><?= $drp['status']; ?></td>
        <td><?= $drp['nomor_sk']; ?></td>
        <td><?= $drp['tanggal_sk']; ?></td>
        <td><?= $drp['tanggal_mulai']; ?></td>
        <td><?= $drp['tanggal_selesai']; ?></td>
        <td><?= $drp['masa_kerja']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_riwayat_pangkat/detail/<?= $drp['id_riwayat_pangkat']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_riwayat_pangkat/edit/<?= $drp['id_riwayat_pangkat']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_riwayat_pangkat/hapus/<?= $drp['id_riwayat_pangkat']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-jabatan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Riwayat Jabatan</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Status</th>
		<th>Penempatan</th>
        <th>Jabatan</th>
        <th>Unit Kerja</th>
		<th>Eselon</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_riwayat_jabatan->result_array() as $drj) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $drj['status']; ?></td>
        <td><?= $drj['penempatan']; ?></td>
        <td><?= $drj['nama_jabatan']; ?></td>
        <td><?= $drj['nama_unit_kerja']; ?></td>
        <td><?= $drj['nama_eselon']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_riwayat_jabatan/detail/<?= $drj['id_riwayat_jabatan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_riwayat_jabatan/edit/<?= $drj['id_riwayat_jabatan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_riwayat_jabatan/hapus/<?= $drj['id_riwayat_jabatan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pendidikan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pendidikan</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tingkat Pendidikan</th>
		<th>Jurusan</th>
        <th>Teknik/Non Teknik</th>
        <th>Sekolah</th>
		<th>Tanggal Lulus</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_pendidikan->result_array() as $dpn) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dpn['tingkat_pendidikan']; ?></td>
        <td><?= $dpn['jurusan']; ?></td>
        <td><?= $dpn['teknik_non_teknik']; ?></td>
        <td><?= $dpn['sekolah']; ?></td>
        <td><?= $dpn['tanggal_lulus']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_pendidikan/detail/<?= $dpn['id_pendidikan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_pendidikan/edit/<?= $dpn['id_pendidikan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_pendidikan/hapus/<?= $dpn['id_pendidikan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-pelatihan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pelatihan</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Pelatihan</th>
		<th>Lokasi</th>
        <th>Tanggal Sertifikat</th>
        <th>Jam Pelatihan</th>
		<th>Negara</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_pelatihan->result_array() as $dpl) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dpl['nama_pelatihan']; ?></td>
        <td><?= $dpl['lokasi']; ?></td>
        <td><?= $dpl['tanggal_sertifikat']; ?></td>
        <td><?= $dpl['jam_pelatihan']; ?></td>
        <td><?= $dpl['negara']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_pelatihan/detail/<?= $dpl['id_pelatihan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_pelatihan/edit/<?= $dpl['id_pelatihan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_pelatihan/hapus/<?= $dpl['id_pelatihan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-penghargaan">
  <div class="well">
	<div class="page-header">
    	<h1>Data Penghargaan</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Penghargaan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_penghargaan->result_array() as $drj) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $drj['nama_penghargaan']; ?></td>
        <td><?= $drj['nomor_sk']; ?></td>
        <td><?= $drj['tanggal_sk']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_penghargaan/detail/<?= $drj['id_penghargaan']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_penghargaan/edit/<?= $drj['id_penghargaan']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_penghargaan/hapus/<?= $drj['id_penghargaan']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-seminar">
  <div class="well">
	<div class="page-header">
    	<h1>Data Seminar</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_seminar->result_array() as $ds) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $ds['uraian']; ?></td>
        <td><?= $ds['lokasi']; ?></td>
        <td><?= $ds['tanggal']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_seminar/detail/<?= $ds['id_seminar']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_seminar/edit/<?= $ds['id_seminar']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_seminar/hapus/<?= $ds['id_seminar']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-organisasi">
  <div class="well">
	<div class="page-header">
    	<h1>Data Organisasi</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
		<th>Lokasi</th>
        <th>Tanggal</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_organisasi->result_array() as $do) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $do['uraian']; ?></td>
        <td><?= $do['lokasi']; ?></td>
        <td><?= $do['tanggal']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_organisasi/detail/<?= $do['id_organisasi']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_riwayat_pangkat/edit/<?= $do['id_organisasi']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_riwayat_pangkat/hapus/<?= $do['id_organisasi']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-gaji">
  <div class="well">
	<div class="page-header">
    	<h1>Data Gaji Pokok</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Golongan</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Gaji Pokok</th>
		<th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_gaji_pokok->result_array() as $dgp) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dgp['golongan']; ?></td>
        <td><?= $dgp['nomor_sk']; ?></td>
        <td><?= $dgp['tanggal_sk']; ?></td>
        <td><?= 'Rp. ' . number_format($dgp['gaji_pokok'], 2, ',', '.'); ?></td>
        <td><?= $dgp['tanggal_mulai']; ?></td>
        <td><?= $dgp['tanggal_selesai']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_gaji_pokok/detail/<?= $dgp['id_gaji_pokok']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_gaji_pokok/edit/<?= $dgp['id_gaji_pokok']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_gaji_pokok/hapus/<?= $dgp['id_gaji_pokok']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-hukuman">
  <div class="well">
	<div class="page-header">
    	<h1>Data Hukuman</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Hukuman</th>
		<th>Nomor SK</th>
        <th>Tanggal SK</th>
        <th>Tanggal Mulai</th>
		<th>Tanggal Selesai</th>
		<th>Masa Berlaku</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_hukuman->result_array() as $dh) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dh['nama_hukuman']; ?></td>
        <td><?= $dh['nomor_sk']; ?></td>
        <td><?= $dh['tanggal_sk']; ?></td>
        <td><?= $dh['tanggal_mulai']; ?></td>
        <td><?= $dh['tanggal_selesai']; ?></td>
        <td><?= $dh['masa_berlaku']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_hukuman/detail/<?= $dh['id_hukuman']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_hukuman/edit/<?= $dh['id_hukuman']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_hukuman/hapus/<?= $dh['id_hukuman']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>

<section id="data-dp3">
  <div class="well">
	<div class="page-header">
    	<h1>Data DP3</h1>
  	</div>

  	<table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tahun</th>
		<th>Rata-Rata</th>
		<th>Atasan</th>
        <th>Penilai</th>
        <th>Mengetahui</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data_dp3->result_array() as $dp3) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dp3['tahun']; ?></td>
        <td><?= $dp3['rata_rata']; ?></td>
        <td><?= $dp3['atasan']; ?></td>
        <td><?= $dp3['penilai']; ?></td>
        <td><?= $dp3['mengetahui']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_dp3/detail/<?= $dp3['id_dp3']; ?>"><i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_dp3/edit/<?= $dp3['id_dp3']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_dp3/hapus/<?= $dp3['id_dp3']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
	          </ul>
	        </div><!-- /btn-group -->
		</td>
      </tr>
	 <?php
            $no++;
        }
     ?>
    </tbody>
  </table>
  </div>
</section>


      <footer class="well">
        <p><?= $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
