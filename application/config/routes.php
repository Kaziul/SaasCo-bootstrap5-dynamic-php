<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'welcome';
$route['backend'] = 'Backend/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['add-menu'] = 'Backend/add_menu';
$route['head-edit-update'] = 'Backend/edit_update_head';
$route['headerEdit/(.+)'] = 'Backend/edit_update_header/$1';
$route['headerDelete/(.+)'] = 'Backend/delete_header/$1';


$route['add-Headercard'] = 'Backend/add_Header_Card';
$route['head-card-edit-update'] = 'Backend/edit_update_head_text';
$route['headercardEdit/(.+)'] = 'Backend/edit_update_header_card/$1';
$route['headerCardDelete/(.+)'] = 'Backend/delete_header_card/$1';


$route['add-features'] = 'Backend/features_edit_update';
$route['features-info-list'] = 'Backend/features_info_list';
$route['featuresEdit/(.+)'] = 'Backend/features_edit_update/$1';
$route['featuresDelete/(.+)'] = 'Backend/delete_features_card/$1';


$route['add-featuresDsc'] = 'Backend/featuresDsc_edit_update';
$route['featuresDsc-info-list'] = 'Backend/featuresDsc_info_list';
$route['featuresDscEdit/(.+)'] = 'Backend/featuresDsc_edit_update/$1';
$route['featuresDscDelete/(.+)'] = 'Backend/delete_featuresDsc_card/$1';


$route['add-userInterface'] = 'Backend/edit_update_userInterface';
$route['userInterface-info-list'] = 'Backend/userInterface_info_list';
$route['userInterfaceEdit/(.+)'] = 'Backend/edit_update_userInterface/$1';
$route['userInterfaceDelete/(.+)'] = 'Backend/delete_userInterface_card/$1';


$route['add-discuss'] = 'Backend/add_discuss';
$route['discussArea-info-list'] = 'Backend/discussArea_info_list';
$route['discussEdit/(.+)'] = 'Backend/edit_update_discuss/$1';
$route['discussDelete/(.+)'] = 'Backend/delete_discussArea_card/$1';


$route['add-members'] = 'Backend/members_edit_update';
$route['members-info-list'] = 'Backend/membersArea_info_list';
$route['membersEdit/(.+)'] = 'Backend/members_edit_update/$1';
$route['membersDelete/(.+)'] = 'Backend/delete_members/$1';


$route['add-membersDsc'] = 'Backend/membersDsc_edit_update';
$route['membersDsc-info-list'] = 'Backend/edit_update_membersDsc';
$route['membersDscEdit/(.+)'] = 'Backend/membersDsc_edit_update/$1';
$route['membersDscDelete/(.+)'] = 'Backend/delete_membersDsc/$1';


$route['video-info-list'] = 'Backend/video_info_list';
$route['videoEdit/(.+)'] = 'Backend/video_edit_update/$1';


$route['choosePlan-info-list'] = 'Backend/choosePlan_info_list';
$route['choosePlanEdit/(.+)'] = 'Backend/choosePlan_edit_update/$1';


$route['add-planItems'] = 'Backend/add_planItems';
$route['planItems-info-list'] = 'Backend/planItems_info_list';
$route['planItemsEdit/(.+)'] = 'Backend/add_planItems/$1';
$route['planItemsDelete/(.+)'] = 'Backend/delete_planItems/$1';


$route['products-info-list'] = 'Backend/products_info_list';
$route['productsEdit/(.+)'] = 'Backend/products_edit_update/$1';


$route['productsSlider-info-list'] = 'Backend/productsSlider_info_list';
$route['productsSliderEdit/(.+)'] = 'Backend/productsSlider_edit_update/$1';


$route['add-askedQuestion'] = 'Backend/add_askedQuestion';
$route['askedQuestion-info-list'] = 'Backend/askedQuestion_info_list';
$route['askedQuestionEdit/(.+)'] = 'Backend/askedQuestion_edit_update/$1';
$route['askedQuestionDelete/(.+)'] = 'Backend/delete_aksedQuestion/$1';


$route['add-customers'] = 'Backend/add_customers';
$route['customers-info-list'] = 'Backend/customers_info_list';
$route['customersEdit/(.+)'] = 'Backend/customers_edit_update/$1';
$route['customerDelete/(.+)'] = 'Backend/customers_delete/$1';


$route['news-info-list'] = 'Backend/newsArea_info_list';
$route['newsAreaEdit/(.+)'] = 'Backend/newsArea_edit_update/$1';


$route['add-newsCards'] = 'Backend/newsCards_edit_update';
$route['newsCards-info-list'] = 'Backend/newsCards_info_list';
$route['newsCardsEdit/(.+)'] = 'Backend/newsCards_edit_update/$1';
$route['newsCardsDelete/(.+)'] = 'Backend/newsCards_Delete/$1';


$route['add-newsCardsCol'] = 'Backend/newsCardsColumn_edit_update';
$route['newsCardsCol-info-list'] = 'Backend/newsCardsColumn_info_list';
$route['newsCardsColEdit/(.+)'] = 'Backend/newsCardsColumn_edit_update/$1';
$route['newsCardsColDelete/(.+)'] = 'Backend/newsCardsColumn_delete/$1';


$route['questionFooter-info-list'] = 'Backend/questionFooter_info_list';
$route['questionFooterEdit/(.+)'] = 'Backend/questionFooter_edit_update/$1';


$route['add-addressFooter'] = 'Backend/add_addressFooter';
$route['addressFooter-info-list'] = 'Backend/addressFooter_info_list';
$route['addressFooterEdit/(.+)'] = 'Backend/addressFooter_edit_update/$1';
$route['addressfooterDelete/(.+)'] = 'Backend/addressFooter_delete/$1';


$route['add-company'] = 'Backend/add_company';
$route['company-info-list'] = 'Backend/company_info_list';
$route['companyinfoEdit/(.+)'] = 'Backend/company_edit_update/$1';
$route['companyinfoDelete/(.+)'] = 'Backend/company_delete/$1';


$route['add_services'] = 'Backend/add_services';
$route['services-info-list'] = 'Backend/services_info_list';
$route['servicesInfoEdit/(.+)'] = 'Backend/services_edit_update/$1';
$route['servicesInfoDelete/(.+)'] = 'Backend/services_delete/$1';


$route['add-quickLink'] = 'Backend/add_quickLink';
$route['quickLink-info-list'] = 'Backend/quickLink_info_list';
$route['quickLinkEdit/(.+)'] = 'Backend/quickLink_edit_update/$1';
$route['quickLinkDelete/(.+)'] = 'Backend/quickLink_delete/$1';


$route['add-mediaFooter'] = 'Backend/add_mediaFooter';
$route['mediaFooter-info-list'] = 'Backend/mediaFooter_info_list';
$route['mediaFooterEdit/(.+)'] = 'Backend/mediaFooter_edit_update/$1';
$route['mediaFooterDelete/(.+)'] = 'Backend/mediaFooter_delete/$1';
