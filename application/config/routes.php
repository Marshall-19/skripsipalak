<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['penduduk']['get'] = 'Penduduk/index';
$route['tambahpenduduk']['get'] = 'Penduduk/inputPenduduk';
$route['simpanpenduduk']['post'] = 'Penduduk/simpanPenduduk';
$route['editpenduduk/(:num)']['get'] = 'Penduduk/editPenduduk/$1';
$route['hapuspenduduk/(:num)']['get'] = 'Penduduk/hapusPenduduk/$1';
$route['updatependuduk']['post'] = 'Penduduk/updatePenduduk';
