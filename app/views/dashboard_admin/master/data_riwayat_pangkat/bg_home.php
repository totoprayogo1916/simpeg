

<section id="data-keluarga">
  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Data Riwayat Pangkat</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="<?= base_url(); ?>data_riwayat_pangkat/tambah/<?= $this->session->userdata('kode_pegawai'); ?>"
			  class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Riwayat Pangkat</a></li>
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
        <th>Nama Golongan</th>
		<th>Status</th>
        <th>Nomor SK</th>
        <th>Tanggal SK</th>
		<th>Masa Kerja</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
	<?php
        $no = 1;

        foreach ($data->result_array() as $dk) {
            ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $dk['golongan']; ?></td>
        <td><?= $dk['status']; ?></td>
        <td><?= $dk['nomor_sk']; ?></td>
        <td><?= $dk['tanggal_sk']; ?></td>
        <td><?= $dk['masa_kerja']; ?></td>
		<td>
	        <div class="btn-group">
	          <a class="btn btn-small medium-box" href="<?= base_url(); ?>data_riwayat_pangkat/detail/<?= $dk['id_riwayat_pangkat']; ?>">
			  <i class="icon-ok-circle"></i> Lihat Detail</a>
	          <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?= base_url(); ?>data_riwayat_pangkat/edit/<?= $dk['id_riwayat_pangkat']; ?>" class="medium-box"><i class="icon-pencil"></i> Edit Data</a></li>
	            <li><a href="<?= base_url(); ?>data_riwayat_pangkat/hapus/<?= $dk['id_riwayat_pangkat']; ?>" onClick="return confirm('Anda yakin..???');"><i class="icon-trash"></i> Hapus Data</a></li>
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
