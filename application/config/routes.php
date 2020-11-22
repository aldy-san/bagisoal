<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['soal']                      = 'soal';
$route['soal/(:num)']               = 'soal';
$route['soal/jawab/(:num)']         = 'soal/jawab';
$route['kompetisi']                 = 'user/kompetisi_main';
$route['komunitas/forum']           = 'user/forum_main';
$route['komunitas/catatan']         = 'catatan';

//ADMIN
$route['daftar/pengguna']           = 'admin/daftar_pengguna';
$route['daftar/pengguna/(:num)']    = 'admin/daftar_pengguna';
$route['daftar/soal']               = 'admin/daftar_soal';
$route['daftar/soal/(:num)']        = 'admin/daftar_soal';
$route['daftar/kompetisi']          = 'admin/daftar_kompetisi';
$route['daftar/kompetisi/(:num)']   = 'admin/daftar_kompetisi';
$route['daftar/mitra']              = 'admin/daftar_mitra';
$route['daftar/mitra/(:num)']       = 'admin/daftar_mitra';
$route['daftar/admin']              = 'admin/daftar_admin';
$route['daftar/admin/(:num)']       = 'admin/daftar_admin';
$route['tambah/soal']               = 'admin/tambah_soal';
$route['tambah/kompetisi']          = 'admin/tambah_kompetisi';
$route['tambah/mitra']              = 'admin/tambah_mitra';
$route['edit/soal/(:num)']          = 'admin/edit_soal';
$route['edit/kompetisi/(:num)']     = 'admin/edit_kompetisi';
$route['edit/mitra/(:num)']         = 'admin/edit_mitra';
$route['profil-admin']              = 'admin/profil';
$route['profil-admin/edit']         = 'admin/edit_profil';

$route['profil-saya']               = 'user/profil';
$route['profil-saya/(:numnum)']        = 'user/profil';
$route['edit-profil']               = 'user/edit_profil';
