<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = "Halaman_depan";
$route['404_override'] = '';
$route['auth']	= 'Halaman_depan/auth';
$route['petunjuk'] =  'Halaman_depan/petunjuk';
$route['tentang'] = 'Halaman_depan/tentang';

$route['Administrasi/dashboard']	= 'Administrasi';
$route['Administrasi/logout']	= 'Administrasi/logout';


$route['Administrasi/data_barang']	= 'Administrasi/data_barang_view';
$route['Administrasi/data_barang/add'] = 'Administrasi/data_barang_add';
$route['Administrasi/data_barang/save'] = 'Administrasi/data_barang_save';
$route['Administrasi/data_barang/excel'] = 'Administrasi/data_barang_excel';
$route['Administrasi/data_barang/edit/(:num)'] = 'Administrasi/data_barang_edit/$1';
$route['Administrasi/data_barang/del/(:num)'] = 'Administrasi/data_barang_del/$1';

$route['Administrasi/data_penjualan']	= 'Administrasi/data_penjualan_view';
$route['Administrasi/data_penjualan/add'] = 'Administrasi/data_penjualan_add';
$route['Administrasi/data_penjualan/save'] = 'Administrasi/data_penjualan_save';
$route['Administrasi/data_penjualan/excel'] = 'Administrasi/data_penjualan_excel';
$route['Administrasi/data_penjualan/edit/(:num)'] = 'Administrasi/data_penjualan_edit/$1';
$route['Administrasi/data_penjualan/del/(:num)'] = 'Administrasi/data_penjualan_del/$1';

$route['Administrasi/data_proses']	= 'Administrasi/data_proses_view';
$route['Administrasi/data_proses/add'] = 'Administrasi/data_proses_add';
$route['Administrasi/data_proses/save'] = 'Administrasi/data_proses_save';
$route['Administrasi/data_proses/excel'] = 'Administrasi/data_proses_excel';
$route['Administrasi/data_proses/edit/(:num)'] = 'Administrasi/data_proses_edit/$1';
$route['Administrasi/data_proses/del/(:num)'] = 'Administrasi/data_proses_del/$1';


$route['Administrasi/data_frequency']	= 'Administrasi/data_frequency_view';
$route['Administrasi/data_frequency/add'] = 'Administrasi/data_frequency_add';
$route['Administrasi/data_frequency/save'] = 'Administrasi/data_frequency_save';
$route['Administrasi/data_frequency/excel'] = 'Administrasi/data_frequency_excel';
$route['Administrasi/data_frequency/edit/(:num)'] = 'Administrasi/data_frequency_edit/$1';
$route['Administrasi/data_frequency/del/(:num)'] = 'Administrasi/data_frequency_del/$1';


$route['Administrasi/data_monetary']	= 'Administrasi/data_monetary_view';
$route['Administrasi/data_monetary/add'] = 'Administrasi/data_monetary_add';
$route['Administrasi/data_monetary/save'] = 'Administrasi/data_monetary_save';
$route['Administrasi/data_monetary/excel'] = 'Administrasi/data_monetary_excel';
$route['Administrasi/data_monetary/edit/(:num)'] = 'Administrasi/data_monetary_edit/$1';
$route['Administrasi/data_monetary/del/(:num)'] = 'Administrasi/data_monetary_del/$1';


$route['Administrasi/data_recency']	= 'Administrasi/data_recency_view';
$route['Administrasi/data_recency/add'] = 'Administrasi/data_recency_add';
$route['Administrasi/data_recency/save'] = 'Administrasi/data_recency_save';
$route['Administrasi/data_recency/excel'] = 'Administrasi/data_recency_excel';
$route['Administrasi/data_recency/edit/(:num)'] = 'Administrasi/data_recency_edit/$1';
$route['Administrasi/data_recency/del/(:num)'] = 'Administrasi/data_recencydel/$1';

$route['managertoko/dashboard']	= 'managertoko';
$route['managertoko/generate_awal']	= 'managertoko/generate_awal';
$route['managertoko/generate_rata']	= 'managertoko/generate_rata';
$route['managertoko/generate_centroid']	= 'managertoko/generate_centroid';
$route['managertoko/tampilan_iterasi']	= 'managertoko/tampilan_iterasi';
$route['managertoko/iterasi_kmeans']	= 'managertoko/iterasi_kmeans';
$route['managertoko/iterasi_kmeans_lanjut']	= 'managertoko/iterasi_kmeans_lanjut';
$route['managertoko/iterasi_kmeans_hasil']	= 'managertoko/iterasi_kmeans_hasil';
$route['managertoko/cetak_barang']	= 'managertoko/cetak_barang';
$route['managertoko/cetak_barang/view']	= 'managertoko/cetak_barang_view';
$route['managertoko/cetak_penjualan']	= 'managertoko/cetak_penjualan';
$route['managertoko/cetak_penjualan/view']	= 'managertoko/cetak_penjualan_view';
$route['managertoko/cetak_kmeans']	= 'managertoko/cetak_kmeans';
$route['managertoko/cetak_kmeans/view']	= 'managertoko/cetak_kmeans_view';
