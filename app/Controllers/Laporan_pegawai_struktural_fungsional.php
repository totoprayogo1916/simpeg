<?php

namespace App\Controllers;

class Laporan_pegawai_struktural_fungsional extends BaseController
{
    /*
        ***	Controller : laporan_pegawai_struktural_fungsional.php
        ***	by Gede Lumbung
        ***	http://gedelumbung.com
    */

    public function index()
    {
        if (session('logged_in') !== null && session('stts') === 'administrator') {
            $d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
            $d['judul_pendek']  = $this->config->item('nama_aplikasi_pendek');
            $d['instansi']      = $this->config->item('nama_instansi');
            $d['credit']        = $this->config->item('credit_aplikasi');
            $d['alamat']        = $this->config->item('alamat_instansi');

            if (session('id_satuan_kerja') === 'Semua') {
                $set_lap2['id_status_jabatan'] = session('id_status_jabatan');
                $set_lap2['id_eselon']         = session('id_eselon');

                $d['data_pegawai']       = $this->db->get_where('tbl_data_pegawai', $set_lap2);
                $d['mst_status_jabatan'] = $this->db->get('tbl_master_status_jabatan');
                $d['mst_eselon']         = $this->db->get('tbl_master_eselon');
                $d['mst_satuan_kerja']   = $this->db->get('tbl_master_satuan_kerja');

                $this->load->view('dashboard_admin/laporan/struktural_fungsional/home', $d);
            } else {
                $set_lap1['id_status_jabatan'] = session('id_status_jabatan');
                $set_lap1['id_eselon']         = session('id_eselon');
                $set_lap1['id_satuan_kerja']   = session('id_satuan_kerja');

                $d['data_pegawai']       = $this->db->get_where('tbl_data_pegawai', $set_lap1);
                $d['mst_status_jabatan'] = $this->db->get('tbl_master_status_jabatan');
                $d['mst_eselon']         = $this->db->get('tbl_master_eselon');
                $d['mst_satuan_kerja']   = $this->db->get('tbl_master_satuan_kerja');

                $this->load->view('dashboard_admin/laporan/struktural_fungsional/home', $d);
            }
        } else {
            header('location:' . base_url() . '');
        }
    }

    public function export()
    {
        if (session('logged_in') !== null && session('stts') === 'administrator') {
            if (session('id_satuan_kerja') === 'Semua') {
                $set_lap2['id_status_jabatan'] = session('id_status_jabatan');
                $set_lap2['id_eselon']         = session('id_eselon');

                $d['mst_golongan']       = $this->db->get('tbl_master_golongan');
                $d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
                $d['mst_satuan_kerja']   = $this->db->get('tbl_master_satuan_kerja');

                $d['data_pegawai'] = $this->db->query("select a.nip, a.nip_lama, a.no_kartu_pegawai, a.nama_pegawai, a.tempat_lahir, a.tanggal_lahir,
				a.jenis_kelamin, a.agama, a.usia, b.nama_status as status_pegawai, a.tanggal_pengangkatan_cpns, a.alamat, a.no_npwp, a.kartu_askes_pegawai,
				c.nama_status as status_pegawai_pangkat, d.golongan, a.nomor_sk_pangkat, a.tanggal_sk_pangkat, a.tanggal_mulai_pangkat,
				a.tanggal_selesai_pangkat, e.nama_jabatan as nama_status_jabatan, f.nama_jabatan as nama_jabatan, g.nama_unit_kerja, h.nama_satuan_kerja,
				a.lokasi_kerja, a.nomor_sk_jabatan, a.tanggal_sk_jabatan, a.tanggal_mulai_jabatan, a.tanggal_selesai_jabatan, i.nama_eselon, a.tmt_eselon from tbl_data_pegawai a left join tbl_master_status_pegawai b on a.status_pegawai=b.id_status_pegawai
				left join tbl_master_status_pegawai c on a.status_pegawai_pangkat=c.id_status_pegawai left join tbl_master_golongan d on a.id_golongan=d.id_golongan
				left join tbl_master_status_jabatan e on a.id_status_jabatan=e.id_status_jabatan left join tbl_master_jabatan f on a.id_jabatan=f.id_jabatan left join
				tbl_master_unit_kerja g on a.id_unit_kerja=g.id_unit_kerja left join tbl_master_satuan_kerja h on a.id_satuan_kerja=h.id_satuan_kerja left join
				tbl_master_eselon i on a.id_eselon=i.id_eselon where a.id_eselon='" . $set_lap2['id_eselon'] . "'
				and a.id_status_jabatan='" . $set_lap2['id_status_jabatan'] . "'");

                $this->load->view('dashboard_admin/laporan/struktural_fungsional/export', $d);
            } else {
                $set_lap1['id_status_jabatan'] = session('id_status_jabatan');
                $set_lap1['id_eselon']         = session('id_eselon');
                $set_lap1['id_satuan_kerja']   = session('id_satuan_kerja');

                $d['data_pegawai'] = $this->db->query("select a.nip, a.nip_lama, a.no_kartu_pegawai, a.nama_pegawai, a.tempat_lahir, a.tanggal_lahir,
				a.jenis_kelamin, a.agama, a.usia, b.nama_status as status_pegawai, a.tanggal_pengangkatan_cpns, a.alamat, a.no_npwp, a.kartu_askes_pegawai,
				c.nama_status as status_pegawai_pangkat, d.golongan, a.nomor_sk_pangkat, a.tanggal_sk_pangkat, a.tanggal_mulai_pangkat,
				a.tanggal_selesai_pangkat, e.nama_jabatan as nama_status_jabatan, f.nama_jabatan as nama_jabatan, g.nama_unit_kerja, h.nama_satuan_kerja,
				a.lokasi_kerja, a.nomor_sk_jabatan, a.tanggal_sk_jabatan, a.tanggal_mulai_jabatan, a.tanggal_selesai_jabatan, i.nama_eselon, a.tmt_eselon from tbl_data_pegawai a left join tbl_master_status_pegawai b on a.status_pegawai=b.id_status_pegawai
				left join tbl_master_status_pegawai c on a.status_pegawai_pangkat=c.id_status_pegawai left join tbl_master_golongan d on a.id_golongan=d.id_golongan
				left join tbl_master_status_jabatan e on a.id_status_jabatan=e.id_status_jabatan left join tbl_master_jabatan f on a.id_jabatan=f.id_jabatan left join
				tbl_master_unit_kerja g on a.id_unit_kerja=g.id_unit_kerja left join tbl_master_satuan_kerja h on a.id_satuan_kerja=h.id_satuan_kerja left join
				tbl_master_eselon i on a.id_eselon=i.id_eselon where a.id_status_jabatan='" . $set_lap1['id_status_jabatan'] . "'
				and a.id_eselon='" . $set_lap1['id_eselon'] . "' and a.id_satuan_kerja='" . $set_lap1['id_satuan_kerja'] . "'");

                $d['mst_golongan']       = $this->db->get('tbl_master_golongan');
                $d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
                $d['mst_satuan_kerja']   = $this->db->get('tbl_master_satuan_kerja');

                $this->load->view('dashboard_admin/laporan/struktural_fungsional/export', $d);
            }
        } else {
            header('location:' . base_url() . '');
        }
    }

    public function set()
    {
        if (session('logged_in') !== null && session('stts') === 'administrator') {
            $sel_lap1['id_satuan_kerja']   = $this->input->post('id_satuan_kerja');
            $sel_lap1['id_status_jabatan'] = $this->input->post('id_status_jabatan');
            $sel_lap1['id_eselon']         = $this->input->post('id_eselon');
            $this->session->set_userdata($sel_lap1);
            header('location:' . base_url() . 'laporan_pegawai_struktural_fungsional');
        } else {
            header('location:' . base_url() . '');
        }
    }
}

// End of file laporan_pegawai_struktural_fungsional.php
// Location: ./application/controllers/laporan_pegawai_struktural_fungsional.php
