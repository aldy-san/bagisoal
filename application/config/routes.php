<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['soal']                      = 'user/soal_main';
$route['kompetisi']                 = 'user/kompetisi_main';
$route['komunitas/forum']           = 'user/forum_main';
$route['komunitas/catatan']         = 'user/catatan_main';
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
$route['edit/soal']                 = 'admin/edit_soal';
$route['edit/soal/(:any)']          = 'admin/edit_soal';
$route['edit/kompetisi']            = 'admin/edit_kompetisi';
$route['edit/kompetisi/(:any)']     = 'admin/edit_kompetisi';
$route['edit/mitra']                = 'admin/edit_mitra';
$route['edit/mitra/(:any)']         = 'admin/edit_mitra';
