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

$route['keluarga']['get'] = 'Keluarga/index';
$route['tambahkeluarga']['get'] = 'Keluarga/inputKeluarga';
$route['simpankeluarga']['post'] = 'Keluarga/simpanKeluarga';
$route['editkeluarga/(:num)']['get'] = 'Keluarga/editKeluarga/$1';
$route['updatekeluarga']['post'] = 'Keluarga/updateKeluarga';

$route['kelahiran']['get'] = 'Kelahiran/index';
$route['tambahkelahiran']['get'] = 'Kelahiran/inputKelahiran';
$route['simpankelahiran']['post'] = 'Kelahiran/simpanKelahiran';
$route['editkelahiran/(:num)']['get'] = 'Kelahiran/editKelahiran/$1';
$route['updatekelahiran']['post'] = 'Kelahiran/updateKelahiran';

$route['kematian']['get'] = 'Kematian/index';
$route['tambahkematian']['get'] = 'Kematian/inputKematian';
$route['simpankematian']['post'] = 'Kematian/simpanKematian';
$route['editkematian/(:num)']['get'] = 'Kematian/editKematian/$1';
$route['updatekematian']['post'] = 'Kematian/updateKematian';
