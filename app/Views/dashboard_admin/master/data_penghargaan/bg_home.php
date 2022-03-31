

<section id="data-keluarga">
  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Data Penghargaan</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="<?= base_url(); ?>data_penghargaan/tambah/<?= session('kode_pegawai'); ?>"
			  class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Penghargaan</a></li>
			</ul>
		  </div>
			<div class="span6 pull-right">
				<div class="btn-group pull-right">
				  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?= session('nama_pegawai'); ?></button>
				  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				  </button>
				</div>
			</div>
		</div>
	  </div><!-- /navbar-inner -->
	</div><!-- /navbar -->
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

        foreach ($data->result_array() as $drj) {
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


      <footer class="well">
        <p><?= $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
