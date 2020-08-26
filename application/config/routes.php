<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['course/(:any)'] = 'courses/info/$1';
$route['students/personaldetails'] = 'students/personaldetails';
$route['personal'] = 'students/index';
$route['olresults'] = 'olresults/index';
$route['alresults'] = 'alresults/index';
$route['prirvenaal'] = 'alpirivena/index';
$route['pdfgen/pdf'] = 'pdfgen/pdf';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;