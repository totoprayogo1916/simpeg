

<section id="data-keluarga">
  <div class="well">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
		<div class="container">
		  <a class="brand" href="#">Data Gaji Pokok</a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li><a href="<?= base_url(); ?>data_gaji_pokok/tambah/<?= $this->session->userdata('kode_pegawai'); ?>"
			  class="medium-box"><i class="icon-plus-sign icon-white"></i> Tambah Data Gaji Pokok</a></li>
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

        foreach ($data->result_array() as $dgp) {
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


      <footer class="well">
        <p><?= $credit; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
