<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/get/tutorial/{id}', "FrontRouteController@tutorialDetails");
 
Route::get('/about-us', function () {
    return view('frontend.about-us');
});
Route::get('/academy', function () {
    return view('frontend.academy');
}); 
Route::get('/blog', "FrontRouteController@blogFrontIndex");
Route::get('/blog/{id}/{title}', "FrontRouteController@blogFrontSingle");
Route::get('/careers', function () {
    return view('frontend.careers');
});
Route::get('/career/jobs', "FrontRouteController@JobFrontIndex");
Route::get('/career/job/{id}/{title}', "FrontRouteController@JobFrontSingleIndex");
 
Route::get('/contact', "FrontRouteController@Contactindex");
Route::post('/submit/contact', "FrontRouteController@contactData");
Route::post('/submit/subscribed', "FrontRouteController@Subscribed");
Route::get('/events', function () {
    return view('frontend.events');
});
Route::get('/tv-channel', function () {
    return view('frontend.tv-channel');
}); 
Route::get('/projects', "FrontRouteController@ProjectfrontIndex");
Route::get('/projects/{id}/{title}', "FrontRouteController@ProjectfrontSingleIndex");
Route::get('/what-we-do', function () {
    return view('frontend.what-we-do');
});
 

 
// backend routers 
Route::prefix('admin')->group(function (){
     
    Route::get('/', function (){ 
        return view('backend.home');
    })->middleware('auth');
    Route::get('/genaral',"GeneralInfoController@index")->middleware('auth');
    Route::post('/submit/generaldata', "GeneralInfoController@SubmitGeneralData")->middleware('auth');
    // brands
    Route::get('/brands',"BrandsController@index")->middleware('auth');
    Route::post('/submit/brandsdata', "BrandsController@SubmitBrandsData")->middleware('auth');
    Route::get('/delete/brand/{id}', "BrandsController@DeleteBrandsData")->middleware('auth');
    // Blogs
    Route::get('/blogs',"BlogController@index")->middleware('auth');
    Route::post('/submit/SubmitBlogsData', "BlogController@SubmitBlogsData")->middleware('auth');
    Route::get('/delete/blog/{id}', "BlogController@DeleteBlog")->middleware('auth');
    Route::get('/edit/blog/{id}',"BlogController@editIndex")->middleware('auth');
    Route::post('/submit/editBlogsData', "BlogController@SubmitEditData")->middleware('auth');
    // Tutorials
    Route::get('/tutorial',"TutorialController@index")->middleware('auth');
    Route::post('/submit/TutorialData', "TutorialController@SubmitTutorialData")->middleware('auth');
    Route::get('/delete/tutorial/{id}', "TutorialController@Delete")->middleware('auth');
    Route::get('/edit/tutorial/{id}',"TutorialController@editIndex")->middleware('auth');
    Route::post('/submit/editTutorialData', "TutorialController@SubmitEditData")->middleware('auth');
    // Projects
    Route::get('/project',"ProjectController@index")->middleware('auth');
    Route::post('/submit/ProjectData', "ProjectController@SubmitProjectData")->middleware('auth');
    Route::get('/delete/project/{id}', "ProjectController@Delete")->middleware('auth');
    Route::get('/edit/project/{id}',"ProjectController@editIndex")->middleware('auth');
    Route::post('/submit/editProjectData', "ProjectController@SubmitEditData")->middleware('auth');
    // Testimonial
    Route::get('/testimonial',"TestimonialController@index")->middleware('auth');
    Route::post('/submit/TestimonialData', "TestimonialController@SubmitData")->middleware('auth');
    Route::get('/delete/testimonial/{id}', "TestimonialController@Delete")->middleware('auth');
    Route::get('/edit/testimonial/{id}',"TestimonialController@editIndex")->middleware('auth');
    Route::post('/submit/editTestimonialData', "TestimonialController@SubmitEditData")->middleware('auth');
    // Team Reviews
    Route::get('/team-review',"TeamReviewController@index")->middleware('auth');
    Route::post('/submit/teamReviewData', "TeamReviewController@SubmitData")->middleware('auth');
    Route::get('/delete/team-review/{id}', "TeamReviewController@Delete")->middleware('auth');
    Route::get('/edit/team-review/{id}',"TeamReviewController@editIndex")->middleware('auth');
    Route::post('/submit/editTeamReviewData', "TeamReviewController@SubmitEditData")->middleware('auth');
    // About
    Route::get('/about',"AboutController@AboutIndex")->middleware('auth'); 
    Route::post('/submit/aboutdata', "AboutController@AboutSubmitData")->middleware('auth');  
    Route::get('/mission',"AboutController@MissionIndex")->middleware('auth');
    Route::post('/submit/missionSubmitData', "AboutController@MissionVisionSubmitData")->middleware('auth');
    Route::get('/vision',"AboutController@VisionIndex")->middleware('auth'); 
    Route::post('/submit/visionSubmitData', "AboutController@MissionVisionSubmitData")->middleware('auth');
    // What we do
    Route::get('/what-we-do',"WhatWeDoController@WhatWeDoIndex")->middleware('auth'); 
    Route::post('/submit/whatwedo', "WhatWeDoController@whatwedoData")->middleware('auth');
    Route::get('/services',"WhatWeDoController@ServicesIndex")->middleware('auth'); 
    Route::get('/edit/service/{id}',"WhatWeDoController@ServicesEditIndex")->middleware('auth'); 
    Route::post('/submit/servicesdata', "WhatWeDoController@servicesdata")->middleware('auth');
    Route::post('/submit/editServicesData', "WhatWeDoController@editServicesData")->middleware('auth');
    Route::get('/delete/service/{id}', "WhatWeDoController@serviceDelete")->middleware('auth');
    Route::get('/more-info',"WhatWeDoController@moreinfoIndex")->middleware('auth'); 
    Route::post('/submit/moreSubmitData',"WhatWeDoController@moreSubmitData")->middleware('auth'); 
    // Careers
    Route::get('/career',"CareersController@index")->middleware('auth');
    Route::post('/submit/CareerData', "CareersController@SubmitData")->middleware('auth');
    Route::get('/delete/career/{id}', "CareersController@Delete")->middleware('auth');
    Route::get('/edit/career/{id}',"CareersController@editIndex")->middleware('auth');
    Route::post('/submit/editCareerData', "CareersController@SubmitEditData")->middleware('auth');
    Route::get('/core-values',"CareersController@coreValuesIndex")->middleware('auth');
    Route::post('/submit/SubmitCoreValueData', "CareersController@SubmitCoreValueData")->middleware('auth');
    Route::post('/submit/editCoreValueData', "CareersController@editCoreValueData");
    Route::get('/edit/core-value/{id}',"CareersController@CoreValueeditIndex")->middleware('auth');
    Route::get('/delete/core-value/{id}', "CareersController@CoreValueDelete")->middleware('auth');

    // Subscriptions
    Route::get('/subscribed', "ContactController@Subscribedindex")->middleware('auth');
    Route::get('/delete/subscription/{id}', "ContactController@SubscribedDelete")->middleware('auth');

    // Contact requests
    Route::get('/contact-requests', "ContactController@ContactRequests")->middleware('auth');
    Route::get('/delete/contact-request/{id}', "ContactController@ContactReqDelete")->middleware('auth');
    Route::get('/view/contact-request/{id}', "ContactController@ContactReqView")->middleware('auth');

    // Other Medias
    Route::get('/other-medias', "OtherMediaController@index")->middleware('auth'); 
    Route::post('/submit/otherMedia', "OtherMediaController@SubmitOtherMedia")->middleware('auth');
    Route::get('/edit/other_media/{id}',"OtherMediaController@editIndex")->middleware('auth');
    Route::post('/submit/editOtherMediaData',"OtherMediaController@SubmitEditData")->middleware('auth');
    Route::get('/delete/other_media/{id}', "OtherMediaController@Delete")->middleware('auth');
});
  
Auth::routes(); 