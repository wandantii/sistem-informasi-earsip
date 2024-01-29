<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['identitas'] = 'master/identitas';
$route['identitas/update/(:any)'] = 'master/identitas/update/$1';
$route['identitas/getupdate'] = 'master/identitas/getupdate';

$route['data_unit'] = 'master/dunit';
$route['data_unit/insert'] = 'master/dunit/insert';
$route['data_unit/getdata'] = 'master/dunit/getdata';
$route['data_unit/update/(:any)'] = 'master/dunit/update/$1';
$route['data_unit/getupdate'] = 'master/dunit/getupdate';
$route['data_unit/delete/(:any)'] = 'master/dunit/delete/$1';

$route['data_instansi'] = 'master/dinstansi';
$route['data_instansi/view/(:any)'] = 'master/dinstansi/view/$1';
$route['data_instansi/insert'] = 'master/dinstansi/insert';
$route['data_instansi/getdata'] = 'master/dinstansi/getdata';
$route['data_instansi/update/(:any)'] = 'master/dinstansi/update/$1';
$route['data_instansi/getupdate'] = 'master/dinstansi/getupdate';
$route['data_instansi/delete/(:any)'] = 'master/dinstansi/delete/$1';

$route['pokok_soal'] = 'master/pokoksoal';
$route['pokok_soal/insert'] = 'master/pokoksoal/insert';
$route['pokok_soal/getdata'] = 'master/pokoksoal/getdata';
$route['pokok_soal/update/(:any)'] = 'master/pokoksoal/update/$1';
$route['pokok_soal/getupdate'] = 'master/pokoksoal/getupdate';
$route['pokok_soal/delete/(:any)'] = 'master/pokoksoal/delete/$1';

$route['arsip_baru'] = 'master/arsipbaru';
$route['arsip_baru/masuk'] = 'master/arsipbaru/masuk';
$route['arsip_baru/keluar'] = 'master/arsipbaru/keluar';
$route['arsip_baru/ekstern'] = 'master/arsipbaru/ekstern';
$route['arsip_baru/intern'] = 'master/arsipbaru/intern';
$route['arsip_baru/emasuk'] = 'master/arsipbaru/emasuk';
$route['arsip_baru/ekeluar'] = 'master/arsipbaru/ekeluar';
$route['arsip_baru/eksterne'] = 'master/arsipbaru/eksterne';
$route['arsip_baru/interne'] = 'master/arsipbaru/interne';
$route['arsip_baru/view/(:any)'] = 'master/arsipbaru/view/$1';
$route['arsip_baru/cetak/(:any)'] = 'master/arsipbaru/cetak/$1';
$route['arsip_baru/insert'] = 'master/arsipbaru/insert';
$route['arsip_baru/getdata'] = 'master/arsipbaru/getdata';
$route['arsip_baru/update/(:any)'] = 'master/arsipbaru/update/$1';
$route['arsip_baru/getupdate'] = 'master/arsipbaru/getupdate';
$route['arsip_baru/delete/(:any)'] = 'master/arsipbaru/delete/$1';
$route['arsip_baru/eksport'] = 'master/arsipbaru/eksport';
$route['arsip_baru/surat/(:any)'] = 'master/arsipbaru/surat/$1';
$route['arsip_baru/lembar_disposisi/(:any)'] = 'master/arsipbaru/lembar_disposisi/$1';
$route['arsip_baru/eksport_disposisi/(:any)'] = 'master/arsipbaru/disposisie/$1';
$route['arsip_baru/getDisposisiUpdate'] = 'master/arsipbaru/getDisposisiUpdate';

$route['pinjam_arsip'] = 'master/parsip';
$route['pinjam_arsip/view/(:any)'] = 'master/parsip/view/$1';
$route['pinjam_arsip/cetak/(:any)'] = 'master/parsip/cetak/$1';
$route['pinjam_arsip/insert'] = 'master/parsip/insert';
$route['pinjam_arsip/getdata'] = 'master/parsip/getdata';
$route['pinjam_arsip/update/(:any)'] = 'master/parsip/update/$1';
$route['pinjam_arsip/getupdate'] = 'master/parsip/getupdate';
$route['pinjam_arsip/delete/(:any)'] = 'master/parsip/delete/$1';
$route['pinjam_arsip/eksport'] = 'master/parsip/eksport';

$route['kembali_arsip'] = 'master/karsip';
$route['kembali_arsip/view/(:any)'] = 'master/karsip/view/$1';
$route['kembali_arsip/cetak/(:any)'] = 'master/karsip/cetak/$1';
$route['kembali_arsip/insert'] = 'master/karsip/insert';
$route['kembali_arsip/getdata'] = 'master/karsip/getdata';
$route['kembali_arsip/update/(:any)'] = 'master/karsip/update/$1';
$route['kembali_arsip/getupdate'] = 'master/karsip/getupdate';
$route['kembali_arsip/delete/(:any)'] = 'master/karsip/delete/$1';
$route['kembali_arsip/eksport'] = 'master/karsip/eksport';


$route['petugas'] = 'master/petugas';
$route['petugas/insert'] = 'master/petugas/insert';
$route['petugas/getdata'] = 'master/petugas/getdata';
$route['petugas/update/(:any)'] = 'master/petugas/update/$1';
$route['petugas/getupdate'] = 'master/petugas/getupdate';
$route['petugas/delete/(:any)'] = 'master/petugas/delete/$1';

$route['cari_arsip'] = 'users/cari';