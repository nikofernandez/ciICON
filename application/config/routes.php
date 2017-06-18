<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/create'] = 'posts/create';
$route['posts/edit'] = 'posts/edit';
$route['posts'] = 'posts/index';

$route['admin/dashboard'] = 'admin/dashboard';
$route['admin'] = 'admin/login';

$route['news'] = 'news/index';

$route['default_controller'] = 'pages/view'; // default route when loaded

$route['(:any)'] = 'pages/view/$1'; // Goes to anything inside the pages folder
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
