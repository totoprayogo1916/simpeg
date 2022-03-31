

<section id="data-keluarga">
  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Data Pendidikan</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="<?= base_url(); ?>data_pendidikan/tambah/<?= $this->session->userdata('kode_pegawai'); ?>"
			  class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Pendidikan</a></li>
			</ul>
		  </div>
			<div class="span6 pull-right">
				<div class="btn-group pull-right">
				  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?= $this->session->userdata('nama_pegawai'); ?></button>
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

        foreach ($data->result_array() as $dpn) {
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


      <footer class="well">
        <p><?= $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
