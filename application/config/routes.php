<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['submissions/article'] = 'submissions/article';
$route['submissions/photo'] = 'submissions/photo';
$route['submissions/team'] = 'submissions/team';

$route['posts/create'] = 'posts/create';
$route['posts/edit'] = 'posts/edit';
$route['posts'] = 'posts/index';

$route['news'] = 'news/index';

$route['default_controller'] = 'pages/view'; // default route when loaded

$route['(:any)'] = 'pages/view/$1'; // Goes to anything inside the pages folder
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
