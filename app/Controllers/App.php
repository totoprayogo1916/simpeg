<?php

namespace App\Controllers;

use Config\Services;

/*
    ***	Controller : app.php
    ***	by Gede Lumbung
    ***	http://gedelumbung.com
*/
class App extends BaseController
{
    public function index()
    {
        $config          = config('Simpeg');
        $validation      = Services::validation();
        $d['validation'] = $validation;

        if (session('logged_in') === null) {
            $d['judul_lengkap'] = $config->nama_aplikasi_full;
            $d['judul_pendek']  = $config->nama_aplikasi_pendek;
            $d['instansi']      = $config->nama_instansi;
            $d['credit']        = $config->credit_aplikasi;

            $validation->setRules([
                'username' => ['label' => 'username', 'rules' => 'required'],
                'password' => ['label' => 'password', 'rules' => 'required'],
            ]);

            if (! $validation->withRequest($this->request)->run()) {
                return view('app/login', $d);
            }
            $dt['username'] = $this->input->post('username');
            $dt['password'] = $this->input->post('password');
            $this->app_login_model->getLoginData($dt);
        } elseif (session('logged_in') !== null && session('stts') === 'administrator') {
            header('location:' . base_url() . '/dashboard_admin');
        } elseif (session('logged_in') !== null && session('stts') === 'operator') {
            header('location:' . base_url() . '/dashboard_operator');
        } elseif (session('logged_in') !== null && session('stts') === 'executive') {
            header('location:' . base_url() . '/dashboard_executive');
        }
    }

    public function change_password()
    {
        $config = config('Simpeg');
        if (session('logged_in') !== null && session('stts') === 'administrator') {
            $d['judul_lengkap'] = $config->nama_aplikasi_full;
            $d['judul_pendek']  = $config->nama_aplikasi_pendek;
            $d['instansi']      = $config->nama_instansi;
            $d['credit']        = $config->credit_aplikasi;
            $d['alamat']        = $config->alamat_instansi;

            $this->load->view('dashboard_admin/user/header', $d);
            $this->load->view('dashboard_admin/user/bg_change_password');
        } else {
            header('location:' . base_url() . '');
        }
    }

    public function save_pass()
    {
        $config = config('Simpeg');

        if (session('logged_in') !== null && session('stts') === 'administrator') {
            $this->form_validation->set_rules('pass_lama', 'Password Lama', 'trim|required');
            $this->form_validation->set_rules('pass_baru', 'Password Baru', 'trim|required');
            $this->form_validation->set_rules('ulangi_pass_baru', 'Ulangi Password Baru', 'trim|required');

            $id['username']   = $this->input->post('usernname');
            $pass_lama        = $this->input->post('pass_lama');
            $pass_baru        = $this->input->post('pass_baru');
            $ulangi_pass_baru = $this->input->post('ulangi_pass_baru');

            $set['tab_a'] = 'active';
            $set['tab_b'] = '';
            $this->session->set_userdata($set);

            if ($this->form_validation->run() === false) {
                $d['judul_lengkap'] = $config->nama_aplikasi_full;
                $d['judul_pendek']  = $config->nama_aplikasi_pendek;
                $d['instansi']      = $config->nama_instansi;
                $d['credit']        = $config->credit_aplikasi;
                $d['alamat']        = $config->alamat_instansi;

                $this->load->view('dashboard_admin/user/header', $d);
                $this->load->view('dashboard_admin/user/bg_change_password');
            } else {
                $login['username'] = $id['username'];
                $login['password'] = md5($pass_lama . 'AppSimpeg32');
                $cek               = $this->db->get_where('tbl_user_login', $login);
                if ($cek->num_rows() > 0) {
                    if ($pass_baru === $ulangi_pass_baru) {
                        $upd['password'] = md5($pass_baru . 'AppSimpeg32');
                        $this->db->update('tbl_user_login', $upd, $id);
                        $this->session->set_flashdata('pass', 'Berhasil mengubah password...');
                        header('location:' . base_url() . 'app/change_password');
                    } else {
                        $this->session->set_flashdata('pass', 'Password Baru tidak sama...');
                        header('location:' . base_url() . 'app/change_password');
                    }
                } else {
                    $this->session->set_flashdata('pass', 'Password Lama salah...');
                    header('location:' . base_url() . 'app/change_password');
                }
            }
        } else {
            header('location:' . base_url() . '');
        }
    }

    public function save_name()
    {
        $config = config('Simpeg');
        if (session('logged_in') !== null && session('stts') === 'administrator') {
            $this->form_validation->set_rules('nama_lengkap', 'Nama Pengguna', 'trim|required');

            $id['username'] = $this->input->post('usernname');
            $nama           = $this->input->post('nama_lengkap');

            $set['tab_a'] = '';
            $set['tab_b'] = 'active';
            $this->session->set_userdata($set);

            if ($this->form_validation->run() === false) {
                $d['judul_lengkap'] = $config->nama_aplikasi_full;
                $d['judul_pendek']  = $config->nama_aplikasi_pendek;
                $d['instansi']      = $config->nama_instansi;
                $d['credit']        = $config->credit_aplikasi;
                $d['alamat']        = $config->alamat_instansi;

                $this->load->view('dashboard_admin/user/header', $d);
                $this->load->view('dashboard_admin/user/bg_change_password');
            } else {
                $upd['nama_lengkap'] = $nama;
                $this->db->update('tbl_user_login', $upd, $id);
                $this->session->set_flashdata('pass', 'Berhasil mengubah nama pengguna...');
                $set_new['nama'] = $upd['nama_lengkap'];
                $this->session->set_userdata($set_new);
                header('location:' . base_url() . 'app/change_password');
            }
        } else {
            header('location:' . base_url() . '');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        header('location:' . base_url() . '');
    }
}

// End of file app.php
// Location: ./application/controllers/app.php
