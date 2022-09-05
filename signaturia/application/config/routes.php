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

//--Admin route
$route['admin'] = 'admin/login';
$route['admin/logout'] = 'admin/login/logout'; //--- Logout route
$route['admin/change_password'] = 'admin/home/change_password'; //--- Change password route

$route['admin/add_users'] = 'admin/users/add_users';
$route['admin/edit_users/(:any)'] = 'admin/users/edit_users/$1';
$route['admin/delete_users/(:any)'] = 'admin/users/delete_users/$1';

//-- Front-End Routes
$route['sign-up'] = 'sign_up';
$route['login'] = 'login';
$route['logout'] = 'login/user_logout';
$route['login/facebook'] = 'sociallogin/fb_redirect';
$route['social/facebook_callback'] = 'sociallogin/facebook_callback';
$route['forgot-password'] = 'login/forgot_password';
$route['dashboard'] = 'user/dashboard';
$route['dashboard/check_twitter'] = 'user/dashboard/check_twitter';
$route['employees'] = 'user/employees';
$route['employees/add'] = 'user/employees/add';
$route['employees/edit/(:any)'] = 'user/employees/edit/$1';
$route['employees/delete/(:any)'] = 'user/employees/delete/$1';
$route['employees/import'] = 'user/employees/import';
$route['edit_signature/(:any)'] = 'user/dashboard/create_signature/$1';
$route['install_sign/(:any)'] = 'user/dashboard/install_sign/$1';
$route['create_signature'] = 'user/dashboard/create_signature';
$route['dashboard/load_signatures'] = 'user/dashboard/load_signatures';
$route['dashboard/ajax_load_signatures'] = 'user/dashboard/ajax_load_signatures';
$route['dashboard/ajax_get_signature'] = 'user/dashboard/ajax_get_signature';
$route['dashboard/copy/(:any)'] = 'user/dashboard/copy/$1';
$route['profile'] = 'user/profile';
$route['profile/checkUniqueEmail'] = 'user/profile/checkUniqueEmail';
$route['profile/change_password'] = 'user/profile';
$route['profile/delete_account'] = 'user/profile/delete_account';
$route['generators'] = 'user/generators';
$route['generators/add'] = 'user/generators/add';
$route['generators/edit/(:any)'] = 'user/generators/edit/$1';
$route['generators/edit_generator/(:any)/(:any)'] = 'user/generators/edit_generator/$1/$2';
$route['generators/create_generator/(:num)'] = 'user/generators/create_generator/$1';
$route['generator/ajax_load_generators'] = 'user/generators/ajax_load_generators';
$route['generators/view_signatures/(:any)'] = 'user/generators/view_signatures/$1';
$route['stats-report'] = 'user/stats';
$route['stats-report/(:num)'] = 'user/stats/index/$1';
$route['upgrade'] = 'user/upgrade/index';
$route['apply_coupon'] = 'user/upgrade/apply_coupon';
$route['share-generator/(:any)'] = 'user/share_generator/index/$1';
$route['share-generator'] = 'user/share_generator/index';
$route['share_generator/share'] = 'user/share_generator/share';

$route['admin/packages/edit/(:any)'] = 'admin/packages/add/$1';
$route['admin/user_guide/edit_platform/(:any)'] = 'admin/user_guide/add_platform/$1';
$route['admin/user_guide/add_steps/(:any)/(:any)'] = 'admin/user_guide/add_steps/$1/$2';
$route['admin/users/edit_coupon/(:any)/(:any)'] = 'admin/users/add_coupon/$1/$2';
$route['admin/offers/edit/(:any)'] = 'admin/offers/add/$1';
$route['reset_password'] = 'login/reset_password';
$route['verify_account'] = 'sign_up/verify_account';
$route['resend_verification'] = 'sign_up/resend_verification';

$route['social_settings'] = 'user/social_settings';
$route['user/social_settings/(:any)'] = 'user/social_settings/index/$1';


$route['custom_signature'] = 'user/customsignature/custom_signature';
$route['custom_signature/(:any)'] = 'user/customsignature/custom_signature/$1';
$route['dashboard/copy_custom/(:any)'] = 'user/dashboard/copy_custom/$1';
$route['load_images'] = 'user/customsignature/GetUserMedia';
$route['upload_media'] = 'user/customsignature/UploadUserMedia';
$route['remove_images'] = 'user/customsignature/RemoveImages';
$route['get_social_media'] = 'user/customsignature/GetSocialIcons';
$route['SaveCustomSignature'] = 'user/customsignature/SaveCustomSignature';
$route['custom-generator'] = 'user/customsignature/custom_generator';
$route['custom-generator/(:any)'] = 'user/customsignature/custom_generator/$1';

$route['thank_you'] = 'sign_up/thank_you';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
