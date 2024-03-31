<?php

use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyAchievementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EnlistedBankController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndividualAchievementController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MissionAndVissionController;
use App\Http\Controllers\OurProductsController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){

    Route::get('/dashboard',[AdminController::class , 'index'])->name('admin_dashboard')->middleware('admin') ; 

    Route::get('/login',[AdminController::class , 'login_view'])->name('admin_login_view') ; 
    Route::post('/login',[AdminController::class , 'login_store'])->name('admin_login_store') ; 
    Route::get('/logout',[AdminController::class , 'logout'])->name('admin_logout') ; 
    Route::get('/register',[AdminController::class , 'register_view'])->name('admin_register_view') ; 
    Route::post('/register',[AdminController::class , 'register_store'])->name('admin_register_store') ; 


    Route::get('/general-setting' , [GeneralSettingController::class , 'general'])->name('admin_general_setting');
    Route::post('/general-setting/store' , [GeneralSettingController::class , 'general_store'])->name('admin_general_setting_store');


    Route::get('/mission-and-vision' , [MissionAndVissionController::class , 'mission_and_vision'])->name('admin_mission_and_vision');
    Route::post('/mission-and-vision/store' , [MissionAndVissionController::class , 'mission_and_vision_store'])->name('admin_mission_and_vision_store');


    Route::get('/our-product' , [OurProductsController::class , 'our_product'])->name('admin_our_product');

    

});



// user routes 


Route::prefix('')->group(function(){
    Route::get('',[HomeController::class , 'index'])->name('home_view') ; 

    Route::get('/mission_and_vision',[MissionAndVissionController::class , 'index'])->name('mission_and_vision_view') ; 
    Route::get('/management',[ManagementController::class , 'index'])->name('management_view') ; 

    Route::get('/our_products',[OurProductsController::class , 'index'])->name('our_products_view') ; 
    Route::get('/enlisted_bank',[EnlistedBankController::class , 'index'])->name('enlisted_bank_view') ; 
    Route::get('/team_member',[TeamMemberController::class , 'index'])->name('team_member_view') ; 
    Route::get('/director_panel',[DirectorController::class , 'index'])->name('director_panel_view') ; 
    Route::get('/gallery',[GalleryController::class , 'index'])->name('gallery_view') ; 
    Route::get('/contact_us',[ContactController::class , 'index'])->name('contact_us_view') ; 
    Route::get('/location',[LocationController::class , 'index'])->name('location_view') ; 
    Route::get('/company_achievement',[CompanyAchievementController::class , 'index'])->name('company_achievement_view') ; 
    Route::get('/individual_achievement',[IndividualAchievementController::class , 'index'])->name('individual_achievement_view') ; 
});



