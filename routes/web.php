<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomeController@greate');
Route::get('/layout', 'HomeController@layout')->name('layout');
Route::get('/greate', 'HomeController@greate')->name('greate');
Route::get('/application', 'HomeController@application')->name('application');
Route::post('/add_application', 'HomeController@add_application')->name('add_application');
// Route::get('/test', 'HomeController@test')->name('test');
// Route::get('/admin_dashboard', 'HomeController@admin_dashboard')->name('admin_dashboard');

Auth::routes();


 Route::group(['middleware'=>['auth','superadmin']], function(){
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 //Admin Sections Only................................................................................................
	Route::get('/superadmin_dashboard', 'SuperAdmin\DashboardController@superadmin_dashboard')->name('superadmin_dashboard');
	//###############>>>>>>>>Complete Company Address System<<<<<<<<<###############
	Route::get('/address', 'SuperAdmin\DashboardController@address')->name('address');
	Route::post('/add_address', 'SuperAdmin\DashboardController@add_address')->name('add_address');
	Route::get('/update_address/{id}', 'SuperAdmin\DashboardController@update_address')->name('update_address');
	Route::get('/updateaddress/{id}', 'SuperAdmin\DashboardController@updateaddress')->name('updateaddress');
	Route::get('/viewaddress', 'SuperAdmin\DashboardController@viewaddress')->name('viewaddress');
	Route::get('/delete_address/{id}', 'SuperAdmin\DashboardController@delete_address')->name('delete_address');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Addvertise System<<<<<<<<<###############
	Route::get('/addvertise', 'SuperAdmin\DashboardController@addvertise')->name('addvertise');
	Route::post('/addaddvertise', 'SuperAdmin\DashboardController@addaddvertise')->name('addaddvertise');
	Route::get('/update_addvertise/{id}', 'SuperAdmin\DashboardController@update_addvertise')->name('update_addvertise');
	Route::post('/update_add/{id}', 'SuperAdmin\DashboardController@update_add')->name('update_add');
	Route::get('/delete_addvertise/{id}', 'SuperAdmin\DashboardController@delete_addvertise')->name('delete_addvertise');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Hotline System<<<<<<<<<###############
	Route::get('/hotline', 'SuperAdmin\DashboardController@hotline')->name('hotline');
	Route::post('/addhotline', 'SuperAdmin\DashboardController@addhotline')->name('addhotline');
	Route::get('/update_hotline/{id}', 'SuperAdmin\DashboardController@update_hotline')->name('update_hotline');
	Route::post('/update_hot_line/{id}', 'SuperAdmin\DashboardController@update_hot_line')->name('update_hot_line');
	Route::get('/delete_hotline/{id}', 'SuperAdmin\DashboardController@delete_hotline')->name('delete_hotline');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete IT service System<<<<<<<<<###############
	Route::get('/additservice', 'SuperAdmin\DashboardController@additservice')->name('additservice');
	Route::post('/additservices', 'SuperAdmin\DashboardController@additservices')->name('additservices');
	Route::get('/update_itservice/{id}', 'SuperAdmin\DashboardController@update_itservice')->name('update_itservice');
	Route::post('/update_it_service/{id}', 'SuperAdmin\DashboardController@update_it_service')->name('update_it_service');
	Route::get('/delete_itservice/{id}', 'SuperAdmin\DashboardController@delete_itservice')->name('delete_itservice');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete IT service System<<<<<<<<<###############
	Route::get('/footer', 'SuperAdmin\DashboardController@footer')->name('footer');
	Route::post('/addmap', 'SuperAdmin\DashboardController@addmap')->name('addmap');
	Route::get('/update_map/{id}', 'SuperAdmin\DashboardController@update_map')->name('update_map');
	Route::post('/updatemap/{id}', 'SuperAdmin\DashboardController@updatemap')->name('updatemap');
	Route::get('/delete_map/{id}', 'SuperAdmin\DashboardController@delete_map')->name('delete_map');
	Route::post('/add_emr_num', 'SuperAdmin\DashboardController@add_emr_num')->name('add_emr_num');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Menu System<<<<<<<<<###############
	Route::get('/menu', 'SuperAdmin\DashboardController@menu')->name('menu');
	Route::post('/addmenu', 'SuperAdmin\DashboardController@addmenu')->name('addmenu');
	Route::get('/update_menu/{id}', 'SuperAdmin\DashboardController@update_menu')->name('update_menu');
	Route::post('/updatemenu/{id}', 'SuperAdmin\DashboardController@updatemenu')->name('updatemenu');
	Route::get('/delete_menu/{id}', 'SuperAdmin\DashboardController@delete_menu')->name('delete_menu');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Slide Photos<<<<<<<<<###############
	Route::get('/photo', 'SuperAdmin\DashboardController@photo')->name('photo');
	Route::post('/addphoto', 'SuperAdmin\DashboardController@addphoto')->name('addphoto');
	Route::get('/update_photo/{id}', 'SuperAdmin\DashboardController@update_photo')->name('update_photo');
	Route::post('/updatephoto/{id}', 'SuperAdmin\DashboardController@updatephoto')->name('updatephoto');
	Route::get('/delete_photo/{id}', 'SuperAdmin\DashboardController@delete_photo')->name('delete_photo');
	Route::get('/logo', 'SuperAdmin\DashboardController@logo')->name('logo');
	Route::post('/addlogo', 'SuperAdmin\DashboardController@addlogo')->name('addlogo');
	Route::post('/addicon', 'SuperAdmin\DashboardController@addicon')->name('addicon');
	Route::get('/delete_logo/{id}', 'SuperAdmin\DashboardController@delete_logo')->name('delete_logo');
	Route::get('/delete_icon/{id}', 'SuperAdmin\DashboardController@delete_icon')->name('delete_icon');
});

Route::group(['middleware'=>['auth','admin']], function(){
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//Admin Sections Only................................................................................................
	Route::get('/admin_dashboard', 'Admin\AdminDashboardController@admin_dashboard')->name('admin_dashboard');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete About Organization<<<<<<<<<###############
	Route::get('/aboutorg', 'Admin\AdminDashboardController@aboutorg')->name('aboutorg');
	Route::post('/add_aboutorg', 'Admin\AdminDashboardController@add_aboutorg')->name('add_aboutorg');
	Route::get('/details_aboutorg/{id}', 'Admin\AdminDashboardController@details_aboutorg')->name('details_aboutorg');
	Route::get('/update_aboutorg/{id}', 'Admin\AdminDashboardController@update_aboutorg')->name('update_aboutorg');
	Route::post('/updateaboutorg/{id}', 'Admin\AdminDashboardController@updateaboutorg')->name('updateaboutorg');
	Route::get('/delete_aboutorg/{id}', 'Admin\AdminDashboardController@delete_aboutorg')->name('delete_aboutorg');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Goals Of Organization<<<<<<<<<###############
	Route::get('/goalorg', 'Admin\AdminDashboardController@goalorg')->name('goalorg');
	Route::post('/add_goal', 'Admin\AdminDashboardController@add_goal')->name('add_goal');
	Route::get('/view_goalorg', 'Admin\AdminDashboardController@view_goalorg')->name('view_goalorg');
	Route::get('/details_goalorg/{id}', 'Admin\AdminDashboardController@details_goalorg')->name('details_goalorg');
	Route::get('/delete_goalorg/{id}', 'Admin\AdminDashboardController@delete_goalorg')->name('delete_goalorg');
	Route::post('/update_goalorg/{id}', 'Admin\AdminDashboardController@update_goalorg')->name('update_goalorg');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Goals Of Organization<<<<<<<<<###############
	Route::get('/chairpersontalks', 'Admin\AdminDashboardController@chairpersontalks')->name('chairpersontalks');
	Route::post('/add_chaipersontalk', 'Admin\AdminDashboardController@add_chaipersontalk')->name('add_chaipersontalk');
	Route::get('/viewchairpersontalks/{id}', 'Admin\AdminDashboardController@viewchairpersontalks')->name('viewchairpersontalks');
	Route::get('/deletechairpersontalks/{id}', 'Admin\AdminDashboardController@deletechairpersontalks')->name('deletechairpersontalks');
	Route::post('/updatespech_chairperson/{id}', 'Admin\AdminDashboardController@updatespech_chairperson')->name('updatespech_chairperson');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Goals Of Organization<<<<<<<<<###############
	Route::get('/gsecretarytalk', 'Admin\AdminDashboardController@gsecretarytalk')->name('gsecretarytalk');
	Route::post('/add_gsecretarytalk', 'Admin\AdminDashboardController@add_gsecretarytalk')->name('add_gsecretarytalk');
	Route::get('/viewgsecretarytalk/{id}', 'Admin\AdminDashboardController@viewgsecretarytalk')->name('viewgsecretarytalk');
	Route::post('/updategsecretary/{id}', 'Admin\AdminDashboardController@updategsecretary')->name('updategsecretary');
	Route::get('/deletegsecretarytalk/{id}', 'Admin\AdminDashboardController@deletegsecretarytalk')->name('deletegsecretarytalk');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete advisors Organization<<<<<<<<<###############
	Route::get('/adminmainpage', 'HomeController@adminmainpage')->name('adminmainpage');
	Route::get('/advisors', 'Admin\AdminDashboardController@advisors')->name('advisors');
	Route::get('/advisorsearchtable', 'Admin\AdminDashboardController@advisorsearchtable')->name('advisorsearchtable');
	Route::get('/addadvisors', 'Admin\AdminDashboardController@addadvisors')->name('addadvisors');
	Route::get('/advisorsearch', 'Admin\AdminDashboardController@advisorsearch')->name('advisorsearch');
	Route::post('/add_advisor', 'Admin\AdminDashboardController@add_advisor')->name('add_advisor');
	Route::get('/view_advisor/{id}', 'Admin\AdminDashboardController@view_advisor')->name('view_advisor');
	Route::get('/delete_advisor/{id}', 'Admin\AdminDashboardController@delete_advisor')->name('delete_advisor');
	Route::post('/update_advisors/{id}', 'Admin\AdminDashboardController@update_advisors')->name('update_advisors');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Committee Of Organization<<<<<<<<<###############
	Route::get('/committees', 'Admin\AdminDashboardController@committees')->name('committees');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Advisor Committee Of Organization<<<<<<<<<###############
	Route::get('/advisorcommittees', 'Admin\AdminDashboardController@advisorcommittees')->name('advisorcommittees');
	Route::get('/searchadvisorcommittee', 'Admin\AdminDashboardController@searchadvisorcommittee')->name('searchadvisorcommittee');
	Route::get('/addadvisorcommittees', 'Admin\AdminDashboardController@addadvisorcommittees')->name('addadvisorcommittees');
	Route::post('/addadvisor_committees', 'Admin\AdminDashboardController@addadvisor_committees')->name('addadvisor_committees');
	Route::get('/updateadvisorcommittee/{id}', 'Admin\AdminDashboardController@updateadvisorcommittee')->name('updateadvisorcommittee');
	Route::post('/update_advisorcommittees/{id}', 'Admin\AdminDashboardController@update_advisorcommittees')->name('update_advisorcommittees');
	Route::get('/deleteadvisorcommittee/{id}', 'Admin\AdminDashboardController@deleteadvisorcommittee')->name('deleteadvisorcommittee');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Relief Committee Of Organization<<<<<<<<<###############
	Route::get('/reliefcommittees', 'Admin\AdminDashboardController@reliefcommittees')->name('reliefcommittees');
	Route::get('/searchreliefcommittee', 'Admin\AdminDashboardController@searchreliefcommittee')->name('searchreliefcommittee');
	Route::get('/addreliefcommittees', 'Admin\AdminDashboardController@addreliefcommittees')->name('addreliefcommittees');
	Route::post('/addrelief_committees', 'Admin\AdminDashboardController@addrelief_committees')->name('addrelief_committees');
	Route::get('/updatereliefcommittee/{id}', 'Admin\AdminDashboardController@updatereliefcommittee')->name('updatereliefcommittee');
	Route::get('/deletereliefcommittee/{id}', 'Admin\AdminDashboardController@deletereliefcommittee')->name('deletereliefcommittee');
	Route::post('/update_reliefcommittee/{id}', 'Admin\AdminDashboardController@update_reliefcommittee')->name('update_reliefcommittee');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Resource Committee Of Organization<<<<<<<<<###############
	Route::get('/resourcescommittees', 'Admin\AdminDashboardController@resourcescommittees')->name('resourcescommittees');
	Route::get('/searchresourcescommittee', 'Admin\AdminDashboardController@searchresourcescommittee')->name('searchresourcescommittee');
	Route::get('/addresourcescommittees', 'Admin\AdminDashboardController@addresourcescommittees')->name('addresourcescommittees');
	Route::post('/addresource_committees', 'Admin\AdminDashboardController@addresource_committees')->name('addresource_committees');
	Route::get('/updateresorcecommittee/{id}', 'Admin\AdminDashboardController@updateresorcecommittee')->name('updateresorcecommittee');
	Route::post('/update_resorcecommittee/{id}', 'Admin\AdminDashboardController@update_resorcecommittee')->name('update_resorcecommittee');
	Route::get('/deleteresorcecommittee/{id}', 'Admin\AdminDashboardController@deleteresorcecommittee')->name('deleteresorcecommittee');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Field Committee Of Organization<<<<<<<<<###############
	Route::get('/fieldcommittees', 'Admin\AdminDashboardController@fieldcommittees')->name('fieldcommittees');
	Route::get('/searchfieldcommittee', 'Admin\AdminDashboardController@searchfieldcommittee')->name('searchfieldcommittee');
	Route::get('/addfieldcommittees', 'Admin\AdminDashboardController@addfieldcommittees')->name('addfieldcommittees');
	Route::post('/addfield_committees', 'Admin\AdminDashboardController@addfield_committees')->name('addfield_committees');
	Route::get('/updatefieldcommittee/{id}', 'Admin\AdminDashboardController@updatefieldcommittee')->name('updatefieldcommittee');
	Route::post('/update_fieldcommittee/{id}', 'Admin\AdminDashboardController@update_fieldcommittee')->name('update_fieldcommittee');
	Route::get('/deletefieldcommittee/{id}', 'Admin\AdminDashboardController@deletefieldcommittee')->name('deletefieldcommittee');

	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Sub-Committee Of Organization<<<<<<<<<###############
	Route::get('/subcommittees', 'Admin\AdminDashboardController@subcommittees')->name('subcommittees');
	Route::get('/addsubcommittees', 'Admin\AdminDashboardController@addsubcommittees')->name('addsubcommittees');
	Route::post('/addsub_committees', 'Admin\AdminDashboardController@addsub_committees')->name('addsub_committees');
	Route::get('/updatesubcommittee/{id}', 'Admin\AdminDashboardController@updatesubcommittee')->name('updatesubcommittee');
	Route::post('/update_subcommittee/{id}', 'Admin\AdminDashboardController@update_subcommittee')->name('update_subcommittee');
	Route::get('/deletesubcommittee/{id}', 'Admin\AdminDashboardController@deletesubcommittee')->name('deletesubcommittee');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Sub-Committee Of Organization<<<<<<<<<###############
	Route::get('/famous_persons', 'Admin\AdminDashboardController@famous_persons')->name('famous_persons');
	Route::get('/addfamousperson', 'Admin\AdminDashboardController@addfamousperson')->name('addfamousperson');
	Route::post('/add_famousperson', 'Admin\AdminDashboardController@add_famousperson')->name('add_famousperson');
	Route::get('/updatefamouspersons/{id}', 'Admin\AdminDashboardController@updatefamouspersons')->name('updatefamouspersons');
	Route::post('/update_famouspersons/{id}', 'Admin\AdminDashboardController@update_famouspersons')->name('update_famouspersons');
	Route::get('/deletefamouspersons/{id}', 'Admin\AdminDashboardController@deletefamouspersons')->name('deletefamouspersons');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Service List<<<<<<<<<###############
	Route::get('/servicelist', 'Admin\AdminDashboardController@servicelist')->name('servicelist');
	Route::get('/addservicelist', 'Admin\AdminDashboardController@addservicelist')->name('addservicelist');
	Route::post('/add_service', 'Admin\AdminDashboardController@add_service')->name('add_service');
	Route::get('/updateservicelist/{id}', 'Admin\AdminDashboardController@updateservicelist')->name('updateservicelist');
	Route::post('/update_service/{id}', 'Admin\AdminDashboardController@update_service')->name('update_service');
	Route::get('/deleteservicelist/{id}', 'Admin\AdminDashboardController@deleteservicelist')->name('deleteservicelist');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>> Complete Projects Only<<<<<<<<<###############
	Route::get('/projects', 'Admin\AdminDashboardController@projects')->name('projects');
	Route::get('/addprojects', 'Admin\AdminDashboardController@addprojects')->name('addprojects');
	Route::get('/addprojectsonly', 'Admin\AdminDashboardController@addprojectsonly')->name('addprojectsonly');
	Route::get('/updateprojectsonly/{id}', 'Admin\AdminDashboardController@updateprojectsonly')->name('updateprojectsonly');
	Route::post('/update_projectsonly/{id}', 'Admin\AdminDashboardController@update_projectsonly')->name('update_projectsonly');
	Route::get('/deleteprojectsonly/{id}', 'Admin\AdminDashboardController@deleteprojectsonly')->name('deleteprojectsonly');
	Route::get('/updateproject/{id}', 'Admin\AdminDashboardController@updateproject')->name('updateproject');
	Route::get('/deleteproject/{id}', 'Admin\AdminDashboardController@deleteproject')->name('deleteproject');
	Route::post('/add_projects', 'Admin\AdminDashboardController@add_projects')->name('add_projects');
	Route::post('/add_projectsonly', 'Admin\AdminDashboardController@add_projectsonly')->name('add_projectsonly');
	Route::post('/update_projects/{id}', 'Admin\AdminDashboardController@update_projects')->name('update_projects');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete galary<<<<<<<<<###############
	Route::get('/g_photo', 'Admin\AdminDashboardController@g_photo')->name('g_photo');
	Route::get('/addg_photo', 'Admin\AdminDashboardController@addg_photo')->name('addg_photo');
	Route::post('/add_photos', 'Admin\AdminDashboardController@add_photos')->name('add_photos');
	Route::get('/viewphoto/{id}', 'Admin\AdminDashboardController@viewphoto')->name('viewphoto');
	Route::get('/deletephoto/{id}', 'Admin\AdminDashboardController@deletephoto')->name('deletephoto');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete schedule<<<<<<<<<###############
	Route::get('/schedule', 'Admin\AdminDashboardController@schedule')->name('schedule');
	Route::get('/addschedule', 'Admin\AdminDashboardController@addschedule')->name('addschedule');
	Route::get('/updateschedule/{id}', 'Admin\AdminDashboardController@updateschedule')->name('updateschedule');
	Route::get('/deleteschedule/{id}', 'Admin\AdminDashboardController@deleteschedule')->name('deleteschedule');
	Route::post('/add_schedule', 'Admin\AdminDashboardController@add_schedule')->name('add_schedule');
	Route::post('/update_schedule/{id}', 'Admin\AdminDashboardController@update_schedule')->name('update_schedule');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Current Structure<<<<<<<<<###############
	Route::get('/currentstructure', 'Admin\AdminDashboardController@currentstructure')->name('currentstructure');
	Route::get('/updatecurrentstructure/{id}', 'Admin\AdminDashboardController@updatecurrentstructure')->name('updatecurrentstructure');
	Route::get('/deletecurrentstructure/{id}', 'Admin\AdminDashboardController@deletecurrentstructure')->name('deletecurrentstructure');
	Route::post('/update_currentstructure/{id}', 'Admin\AdminDashboardController@update_currentstructure')->name('update_currentstructure');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Video gallery<<<<<<<<<###############
	Route::get('/video', 'Admin\AdminDashboardController@video')->name('video');
	Route::get('/addvideo', 'Admin\AdminDashboardController@addvideo')->name('addvideo');
	Route::post('/add_video', 'Admin\AdminDashboardController@add_video')->name('add_video');
	Route::get('/deletevideo/{id}', 'Admin\AdminDashboardController@deletevideo')->name('deletevideo');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Documents<<<<<<<<<###############
	Route::get('/document', 'Admin\AdminDashboardController@document')->name('document');
	Route::get('/adddocument', 'Admin\AdminDashboardController@adddocument')->name('adddocument');
	Route::post('/add_document', 'Admin\FileController@add_document');
	Route::get('/show/{id}', 'Admin\FileController@show');
	Route::get('/deletedocument/{id}', 'Admin\AdminDashboardController@deletedocument')->name('deletedocument');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################
	//###############>>>>>>>>Complete Contacts<<<<<<<<<###############
	Route::get('/contacts', 'Admin\AdminDashboardController@contacts')->name('contacts');
	Route::get('/responsesmassage/{id}', 'Admin\AdminDashboardController@responsesmassage')->name('responsesmassage');
	Route::get('/delete_contact/{id}', 'Admin\AdminDashboardController@delete_contact')->name('delete_contact');
	Route::post('/response_contact/{id}', 'Admin\AdminDashboardController@response_contact')->name('response_contact');
	//#######################>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<######################

	Route::get('/news', 'Admin\AdminDashboardController@news')->name('news');
	Route::get('/view_news/{id}', 'Admin\AdminDashboardController@view_news')->name('view_news');
	Route::get('/delete_news/{id}', 'Admin\AdminDashboardController@delete_news')->name('delete_news');
	Route::post('/news_add', 'Admin\AdminDashboardController@news_add')->name('news_add');
	Route::post('/news_update/{id}', 'Admin\AdminDashboardController@news_update')->name('news_update');
	//###############>>>>>>>>Complete Apllication approval<<<<<<<<<###############
	Route::get('/applications', 'Admin\AdminDashboardController@applications')->name('applications');
	Route::post('/search_applicant', 'Admin\AdminDashboardController@search_applicant')->name('search_applicant');
	Route::get('/updateapplications/{a_id}', 'Admin\AdminDashboardController@updateapplications')->name('updateapplications');
	Route::post('/applsrove_applslication/{id}', 'Admin\AdminDashboardController@applsrove_applslication')->name('applsrove_applslication');
	Route::get('/detailsdocument', 'Admin\AdminDashboardController@detailsdocument')->name('detailsdocument');
});



Route::group(['middleware'=>['auth','member']], function(){
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//..................................................Member Sections Only..............................................
	Route::get('/membermainpage', 'HomeController@membermainpage')->name('membermainpage');
	Route::get('/home_content', 'Member\DashboardController@home_content')->name('home_content');
	Route::get('/about_org', 'Member\DashboardController@about_org')->name('about_org');
	Route::get('/goal_org', 'Member\DashboardController@goal_org')->name('goal_org');
	Route::get('/viewnews/{id}', 'Member\DashboardController@viewnews')->name('viewnews');
	Route::get('/speak_chairperson', 'Member\DashboardController@speak_chairperson')->name('speak_chairperson');
	Route::get('/speak_gsecretary', 'Member\DashboardController@speak_gsecretary')->name('speak_gsecretary');
	Route::get('/advisor', 'Member\DashboardController@advisor')->name('advisor');
	Route::get('/viewadvisor/{id}', 'Member\DashboardController@viewadvisor')->name('viewadvisor');
	Route::get('/committee', 'Member\DashboardController@committee')->name('committee');
	Route::get('/advisorcommittee', 'Member\DashboardController@advisorcommittee')->name('advisorcommittee');
	Route::get('/viewadvisorcommittee/{id}', 'Member\DashboardController@viewadvisorcommittee')->name('viewadvisorcommittee');
	Route::get('/reliefcommittee', 'Member\DashboardController@reliefcommittee')->name('reliefcommittee');
	Route::get('/viewreliefcommittee/{id}', 'Member\DashboardController@viewreliefcommittee')->name('viewreliefcommittee');
	Route::get('/resourcescommittee', 'Member\DashboardController@resourcescommittee')->name('resourcescommittee');
	Route::get('/viewresourcescommittee/{id}', 'Member\DashboardController@viewresourcescommittee')->name('viewresourcescommittee');
	Route::get('/fieldcommittee', 'Member\DashboardController@fieldcommittee')->name('fieldcommittee');
	Route::get('/viewfieldcommittee/{id}', 'Member\DashboardController@viewfieldcommittee')->name('viewfieldcommittee');
	Route::get('/subcommittee', 'Member\DashboardController@subcommittee')->name('subcommittee');
	Route::get('/viewsubcommittee/{id}', 'Member\DashboardController@viewsubcommittee')->name('viewsubcommittee');
	Route::get('/services', 'Member\DashboardController@services')->name('services');
	Route::get('/project', 'Member\DashboardController@project')->name('project');
	Route::get('/photos', 'Member\DashboardController@photos')->name('photos');
	Route::get('/calender', 'Member\DashboardController@calender')->name('calender');
	Route::get('/contact', 'Member\DashboardController@contact')->name('contact');
	Route::post('/add_contact', 'Member\DashboardController@add_contact')->name('add_contact');
	Route::get('/currentstructures', 'Member\DashboardController@currentstructures')->name('currentstructures');
	Route::get('/currentstructure/{id}', 'Member\DashboardController@currentstructure')->name('currentstructure');

	Route::get('/viewproject/{id}', 'Member\DashboardController@viewproject')->name('viewproject');
	Route::get('/viewphotos/{id}', 'Member\DashboardController@viewphotos')->name('viewphotos');
	Route::get('/documents', 'Member\DashboardController@documents')->name('documents');
	Route::get('/videos', 'Member\DashboardController@videos')->name('videos');
	Route::get('/viewvideos', 'Member\DashboardController@viewvideos')->name('viewvideos');
	Route::get('/documents', 'Member\DashboardController@documents')->name('documents');
	Route::get('/viewdocuments/{id}', 'Member\DashboardController@viewdocuments')->name('viewdocuments');
	Route::get('/showdocuments/{id}', 'Admin\FileController@showdocuments');
	// // Route::get('/application', 'Member\DashboardController@application')->name('application');
	// Route::post('/add_application', 'Member\DashboardController@add_application')->name('add_application');
});
