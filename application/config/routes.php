<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';

$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin/index';

$route['news'] = 'news/index';

$route['default_controller'] = 'pages/view'; // default route when loaded

$route['(:any)'] = 'pages/view/$1'; // Goes to anything inside the pages folder
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
