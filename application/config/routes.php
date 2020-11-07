<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['soal']                      = 'soal';
$route['soal/jawab/(:any)']         = 'soal/jawab';
$route['kompetisi']                 = 'user/kompetisi_main';
$route['komunitas/forum']           = 'user/forum_main';
$route['komunitas/catatan']         = 'user/catatan_main';

//ADMIN
$route['daftar/pengguna']           = 'admin/daftar_pengguna';
$route['daftar/pengguna/(:any)']    = 'admin/daftar_pengguna';
$route['daftar/soal']               = 'admin/daftar_soal';
$route['daftar/soal/(:any)']        = 'admin/daftar_soal';
$route['daftar/kompetisi']          = 'admin/daftar_kompetisi';
$route['daftar/kompetisi/(:any)']   = 'admin/daftar_kompetisi';
$route['daftar/mitra']              = 'admin/daftar_mitra';
$route['daftar/mitra/(:any)']       = 'admin/daftar_mitra';
$route['daftar/admin']              = 'admin/daftar_admin';
$route['daftar/admin/(:any)']       = 'admin/daftar_admin';
$route['tambah/soal']               = 'admin/tambah_soal';
$route['tambah/kompetisi']          = 'admin/tambah_kompetisi';
$route['tambah/mitra']              = 'admin/tambah_mitra';
$route['edit/soal/(:any)']          = 'admin/edit_soal';
$route['edit/kompetisi/(:any)']     = 'admin/edit_kompetisi';
$route['edit/mitra/(:any)']         = 'admin/edit_mitra';
$route['profil-admin']              = 'admin/profil';
$route['profil-admin/edit']         = 'admin/edit_profil';

$route['profil']                    = 'user/profil';
$route['edit-profil']               = 'user/edit_profil';
