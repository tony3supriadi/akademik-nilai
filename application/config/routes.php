<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['profil/(:any)'] = '/users/profil/$1';
$route['laporan/kesiswaan.html'] = '/laporan/kesiswaan_report';

$route['nilai/(:any)'] = '/nilai/index/$1';
$route['nilai/(:any)/input/(:any)'] = '/nilai/input/$1/$2';

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8
