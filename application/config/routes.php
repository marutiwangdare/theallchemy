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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['login'] = 'home/login';
//$route['signup'] = 'home/signup';
$route['category'] = 'home/category';
$route['about'] = 'home/about';
$route['contact'] = 'home/contact';
$route['products/(:any)'] = 'home/products/$1';
$route['products-detail/(:any)']='Home/products_detail/$1';

$route['user-details/(:any)'] = 'Home/user_detail/$1';
$route['contact-query'] = 'home/contact_query';
$route['privacy-policy'] = 'home/privacy_policy';
$route['return-policy'] = 'home/return_policy';
$route['franchise'] = 'home/franchise';
$route['test'] = 'home/test';
$route['my-account'] = 'home/my_account';
$route['corporate-gift'] = 'home/corporate';
$route['anniversary-gift'] = 'home/anniversary';
$route['birthday-gift'] = 'home/birthday';
$route['reviews'] = 'home/reviews';
$route['addreview'] = 'home/addreview';
$route['newsletter'] = 'home/newsletter';
$route['cupon'] = 'cart/cupon';
$route['logout'] = 'home/logout';
//policy

$route['termsconditions'] = 'home/termsconditions';

$route['delivery'] = 'home/delivery';

$route['shipping'] = 'home/shipping';














$route['cart'] = 'Cart';
$route['cart-insert'] = 'Cart/cartinsert';
$route['cart-process'] = 'Cart/cart_process';
$route['cart-delete/(:any)'] = 'Cart/cartdelete/$1';

$route['checkout'] = 'Checkout';
$route['checkout_save'] = 'Checkout/save';
$route['checkout/(:any)'] = 'Checkout/checkconfirm/$1';
$route['add-user-address'] = 'Checkout/add_user_address';
$route['add-user-info'] = 'Checkout/add_user_info';

$route['my-orders'] = 'Orders';
$route['confirm/(:any)'] = 'Orders/confirm/$1';
$route['view-order/(:any)'] = 'Orders/view_order/$1';

//user route
$route['user/session-unset'] = 'Sessionunset/sessionunset';


$route['user-register'] = 'Userregister';
$route['user-registration'] = 'Userregister/addregistration';
$route['confirm-user/(:any)/(:any)'] = 'Userregister/confirm_user/$1/$2';
$route['user-login'] = 'Userlogin';
$route['verify-user-login'] = 'Userlogin/user_login';
$route['user-forget-password'] = 'Userlogin/forget_password';
$route['confirm-user-email'] = 'Userlogin/verify_email';
$route['user-reset-password/(:any)/(:any)'] = 'Userlogin/reset_password/$1/$2';
$route['confirm-user-password'] = 'Userlogin/verify_reset_password';





// admin route
$route['admin'] = 'error';
$route['Allchemy_adm'] = 'Allchemy_adm';
$route['admin/dashboard'] = 'Allchemy_adm/dashboard';
$route['admin/category'] = 'admin/Category';
$route['admin/category-insert'] = 'admin/Category/categoryinsert';
$route['admin/category-delete/(:any)'] = 'admin/Category/categorydelete/$1';
$route['admin/category-edit/(:any)'] = 'admin/Category/categoryedit/$1';
$route['admin/category-update'] = 'admin/Category/categoryupdate';

$route['admin/product'] = 'admin/Product';
$route['admin/product-insert'] = 'admin/Product/productinsert';
$route['admin/view-products'] = 'admin/Product/viewproducts';
$route['admin/view-product/(:any)'] = 'admin/Product/productview/$1';
$route['admin/product/(:any)'] = 'admin/Product/productedit/$1';
$route['admin/product-update'] = 'admin/Product/productupdate';
$route['admin/product-delete/(:any)'] = 'admin/Product/productdelete/$1';

//cupon

$route['admin/cupon'] = 'admin/Cupon';
$route['admin/cupon-insert'] = 'admin/Cupon/cuponinsert';
$route['admin/cupon-delete/(:any)'] = 'admin/Cupon/cupondelete/$1';
$route['admin/cupon-edit/(:any)'] = 'admin/Cupon/cuponedit/$1';
$route['admin/cupon-update'] = 'admin/Cupon/cuponupdate';



$route['admin/cupon'] = 'admin/Cupon';
$route['admin/cupon-insert'] = 'admin/Cupon/cuponinsert';
$route['admin/cupon-delete/(:any)'] = 'admin/Cupon/cupondelete/$1';
$route['admin/cupon/(:any)'] = 'admin/Cupon/cuponedit/$1';
$route['admin/cupon-update'] = 'admin/Cupon/cuponupdate';


//today deal


$route['admin/deal'] = 'admin/Deal';

$route['admin/deal-insert'] = 'admin/Deal/dealinsert';
$route['admin/view-deal'] = 'admin/Deal/viewdeal';
$route['admin/view-deal/(:any)'] = 'admin/Deal/dealview/$1';
$route['admin/deal/(:any)'] = 'admin/Deal/dealedit/$1';
$route['admin/deal-update'] = 'admin/Deal/dealupdate';
$route['admin/deal-delete/(:any)'] = 'admin/Deal/dealdelete/$1';



$route['admin/about'] = 'admin/About';
$route['admin/about-update'] = 'admin/About/aboutinfo';

$route['admin/resource'] = 'admin/Resource';
$route['admin/resource-update'] = 'admin/Resource/aboutinfo';

$route['admin/volunteer'] = 'admin/Volunteer';
$route['admin/volunteer-update'] = 'admin/Volunteer/aboutinfo';

$route['admin/donors'] = 'admin/Donors';
$route['admin/donors-update'] = 'admin/Donors/aboutinfo';




$route['admin/contact'] = 'admin/Contact';
$route['admin/contact-update'] = 'admin/Contact/contactupdate';

$route['admin/ourteam'] = 'admin/Ourteam';

$route['admin/aboutmariela'] = 'admin/Ourteam/aboutmariela';
$route['admin/abouthector'] = 'admin/Ourteam/abouthector';

$route['admin/team-update/mariela'] = 'admin/Ourteam/teaminfomariela';
$route['admin/team-update/hector'] = 'admin/Ourteam/teaminfohector';

$route['admin/session-unset'] = 'admin/Sessionunset/sessionunset';




$route['admin/gallery'] = 'admin/Gallery';
$route['admin/gallery-insert'] = 'admin/Gallery/galleryinsert';
$route['admin/gallery-delete/(:any)'] = 'admin/Gallery/gallerydelete/$1';
$route['admin/gallery/(:any)'] = 'admin/Gallery/galleryedit/$1';
$route['admin/gallery-update'] = 'admin/Gallery/galleryupdate';
//users
$route['admin/view-users'] = 'admin/Users';
$route['admin/user-delete/(:any)'] = 'admin/Users/userdelete/$1';
$route['admin/user-update/(:any)/(:any)'] = 'admin/Users/userstatusupdate/$1/$2';
//slider
$route['admin/slider'] = 'admin/Slider';
$route['admin/slider-insert'] = 'admin/Slider/sliderinsert';
$route['admin/slider/(:any)'] = 'admin/Slider/slideredit/$1';
$route['admin/slider-update'] = 'admin/Slider/sliderupdate';
$route['admin/slider-delete/(:any)'] = 'admin/Slider/sliderdelete/$1';


//contact queries
$route['admin/view-contact-queries'] = 'admin/Contact/view_contact_queries';
$route['admin/contact-query-delete/(:any)'] = 'admin/Contact/contactdelete/$1';

//website review


$route['admin/webreview'] = 'admin/Contact/webreview';

//Newsletter
$route['admin/newsletter'] = 'admin/Contact/newsletter';




