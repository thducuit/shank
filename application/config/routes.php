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

$route['default_controller'] = "default/index";
$route['404_override'] = '';

$route['index.html']                 = "default/index";

//ENGLISH
$route['about-us.html']               = "default/about/index";
$route['(:any)/about-us/(:any).html'] = "default/about/detail/$1/$2";

$route['news.html']                  = "default/news/index";
$route['(:any)/news/(:any).html']    = "default/news/detail/$1/$2";

$route['contact.html']               = "default/contact/index";

$route['career.html']                = "default/career/index";
$route['sitemap.html']               = "default/sitemap/index";

$route['products.html']              = "default/products/index"; // trang san pham
$route['(:any)/product/(:any).html'] = "default/products/product/$1/$2"; // trang san pham chi tiet 
$route['(:any)/category/(:any).html']= "default/products/category/$1/$2"; // trang san pham theo danh muc

//JAPAN
$route['gioi-thieu.html']               = "default/about/index";
$route['(:any)/gioi-thieu/(:any).html'] = "default/about/detail/$1/$2";

$route['tin-tuc.html']                  = "default/news/index";
$route['(:any)/tin-tuc/(:any).html']    = "default/news/detail/$1/$2";

$route['lien-he.html']                  = "default/contact/index";

$route['tuyen-dung.html']               = "default/career/index";
$route['so-do-web.html']                = "default/sitemap/index";

$route['san-pham.html']                 = "default/products/index"; // trang san pham
$route['(:any)/san-pham/(:any).html']   = "default/products/product/$1/$2";  //trang san pham chi tiet
$route['(:any)/loai-san-pham/(:any).html'] = "default/products/category/$1/$2"; //trang san pham theo danh muc

/* End of file routes.php */
/* Location: ./application/config/routes.php */