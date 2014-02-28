<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "article";
$route['404_override'] = '';

$route["article/category/(:any)"] = "article/showArticlesOfCategory/$1";

$route["article/(:any)"] = "article/showSingleArticle/$1";


$route["admin/article/edit/(:any)"] = "admin/editarticle/$1";
$route["admin/article/delete/(:any)"] = "admin/deletearticle/$1";
$route["admin/article/new"] = "admin/newarticle";
$route["admin/article/list"] = "admin/listarticles";

$route["admin/category/edit/(:any)"] = "admin/editcategory/$1";
$route["admin/category/delete/(:any)"] = "admin/deletecategory/$1";
$route["admin/category/new"] = "admin/newcategory";
$route["admin/category/list"] = "admin/listcategories";

/* End of file routes.php */
/* Location: ./application/config/routes.php */