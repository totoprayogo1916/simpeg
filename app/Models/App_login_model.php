<?php

namespace App\Models;

use CodeIgniter\Model;

class App_login_model extends Model
{
    /*
        ***	Model : app_login_model.php
        ***	by Gede Lumbung
        ***	http://gedelumbung.com
    */

    protected $DBGroup          = 'default';
    protected $table            = 'user_login';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getLoginData($data)
    {
        $login['username'] = $data['username'];
        $login['password'] = md5($data['password'] . 'AppSimpeg32');
        $cek               = $this->db->get_where('tbl_user_login', $login);
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $qad) {
                $sess_data['logged_in'] = 'yesGetMeLoginBaby';
                $sess_data['id_user']   = $qad->id_user_login;
                $sess_data['username']  = $qad->username;
                $sess_data['nama']      = $qad->nama_lengkap;
                $sess_data['stts']      = $qad->stts;
                $this->session->set_userdata($sess_data);
            }
            header('location:' . base_url() . '');
        } else {
            $this->session->set_flashdata('result_login', 'Maaf, kombinasi username dan password yang anda masukkan tidak valid dengan database kami.');
            header('location:' . base_url() . '');
        }
    }
}

// End of file app_login_model.php
// Location: ./application/models/app_login_model.php
