<?php
$nama_file = date('Y-m-d') . '_laporan_pegawai_status_golongan.xls';
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0,pre-check=0');
header('Content-Type: application/force-download');
header('Content-Type: application/octet-stream');
header('Content-Type: application/download');
header('Content-Disposition: attachment;filename=' . $nama_file . '');
header('Content-Transfer-Encoding: binary ');
?>
<table>
<tr>
<td></td>
<td align="center">3.	Laporan Pegawai berdasarkan Status Pegawai dan Golongan berdasarkan Satuan Kerja Tertentu</td>
</tr>
<tr>
<td></td>
<td>
  <table cellpadding="8" style="border-collapse:collapse;" border="1">
      <tr height="40" style="background-color:#EA7D57;">
        <td>Nomor</td>
        <td>NIP</td>
        <td>NIP Lama</td>
        <td>Nomor Kartu Pegawai</td>
        <td>Nama Pegawai</td>
        <td>Tempat/Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Agama</td>
        <td>Usia</td>
        <td>Status Pegawai</td>
        <td>Tanggal Pengangkatan CPNS</td>
        <td>Alamat</td>
        <td>Nomor NPWP</td>
        <td>Kartu Askes Pegawai</td>
        <td>Status Pangkat Pegawai</td>
        <td>Golongan</td>
        <td>Nomor SK Pangkat</td>
        <td>Tanggal SK Pangkat</td>
        <td>Tanggal Mulai Pangkat</td>
        <td>Tanggal Selesai Pangkat</td>
        <td>Status Jabatan</td>
        <td>Jabatan</td>
        <td>Unit Kerja</td>
        <td>Satuan Kerja</td>
        <td>Lokasi Kerja</td>
        <td>Nomor SK Jabatan</td>
        <td>Tanggal SK Jabatan</td>
        <td>Tanggal Mulai Jabatan</td>
        <td>Tanggal Selesai Jabatan</td>
        <td>Eselon</td>
        <td>TMT Eselon</td>
      </tr>
	<?php
        $no = 1;

        foreach ($data_pegawai->result_array() as $dp) {
            ?>
      <tr height="35">
        <td><?= $no; ?></td>
        <td><?= $dp['nip'] . '<font color="white">_</font>'; ?></td>
        <td><?= $dp['nip_lama'] . '<font color="white">_</font>'; ?></td>
        <td><?= $dp['no_kartu_pegawai']; ?></td>
        <td><?= $dp['nama_pegawai']; ?></td>
        <td><?= $dp['tempat_lahir'] . ' - ' . $dp['tanggal_lahir']; ?></td>
        <td><?= $dp['jenis_kelamin']; ?></td>
        <td><?= $dp['agama']; ?></td>
        <td><?= $dp['usia']; ?></td>
        <td><?= $dp['status_pegawai']; ?></td>
        <td><?= $dp['tanggal_pengangkatan_cpns']; ?></td>
        <td><?= $dp['alamat']; ?></td>
        <td><?= $dp['no_npwp']; ?></td>
        <td><?= $dp['kartu_askes_pegawai']; ?></td>
        <td><?= $dp['status_pegawai_pangkat']; ?></td>
        <td><?= $dp['golongan']; ?></td>
        <td><?= $dp['nomor_sk_pangkat']; ?></td>
        <td><?= $dp['tanggal_sk_pangkat']; ?></td>
        <td><?= $dp['tanggal_mulai_pangkat']; ?></td>
        <td><?= $dp['tanggal_selesai_pangkat']; ?></td>
        <td><?= $dp['nama_status_jabatan']; ?></td>
        <td><?= $dp['nama_jabatan']; ?></td>
        <td><?= $dp['nama_unit_kerja']; ?></td>
        <td><?= $dp['nama_satuan_kerja']; ?></td>
        <td><?= $dp['lokasi_kerja']; ?></td>
        <td><?= $dp['nomor_sk_jabatan']; ?></td>
        <td><?= $dp['tanggal_sk_jabatan']; ?></td>
        <td><?= $dp['tanggal_mulai_jabatan']; ?></td>
        <td><?= $dp['tanggal_selesai_jabatan']; ?></td>
        <td><?= $dp['nama_eselon']; ?></td>
        <td><?= $dp['tmt_eselon']; ?></td>
      </tr>
	 <?php
            $no++;
        }
     ?>
  </table>
</td>
</tr>
</table>