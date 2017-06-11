<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/index'; // Goes to anything inside the admin folder

$route['default_controller'] = 'pages/view'; // default route when loaded

$route['(:any)'] = 'pages/view/$1'; // Goes to anything inside the pages folder
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
