<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\TokenVerificationMiddleware;

  ///Home page here
Route::get('/',[HomeController::class,'Homepage']);
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);

     /// User web  login page here
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/logout',[UserController::class,'UserLogout']);
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);           
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

////Customer web page or web 
Route::get('/customerPage',[CustomerController::class,'CustomerPage'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/create-customer',[CustomerController::class,'customercreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/customer-list',[CustomerController::class,'customerlist'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-customer',[CustomerController::class,'customerdelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-customer',[CustomerController::class,'updatecustomer'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-By-Id',[CustomerController::class,'customerbyid'])->middleware([TokenVerificationMiddleware::class]);





////Category web page or web 
Route::get('/categoryPage',[CategoryController::class,'CategoryPage'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/create-category',[CategoryController::class,'createcategory'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/list-category',[CategoryController::class,'listcategory'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-category',[CategoryController::class,'categorydelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-by-id',[CategoryController::class,'categorybyid'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-category',[CategoryController::class,'updatecategory'])->middleware([TokenVerificationMiddleware::class]);






////productPage web page or web 
Route::get('/productPage',[ProductController::class,'ProductPage'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/create-product',[ProductController::class,'productcreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/list-product',[ProductController::class,'productlist'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/product-delete',[ProductController::class,'productdelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/product-by-id',[ProductController::class,'productbyid'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-product',[ProductController::class,'UpdateProduct'])->middleware([TokenVerificationMiddleware::class]);










////SalePage web page or web 
Route::get('/salePage',[InvoiceController::class,'SalePage'])->middleware([TokenVerificationMiddleware::class]);










////InvoicePage web page or web 
Route::get('/invoicePage',[InvoiceController::class,'InvoicePage'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/invoice-create',[InvoiceController::class,'invoiceCreate'])->middleware([TokenVerificationMiddleware::class]);