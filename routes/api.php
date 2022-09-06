<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/** Visitor start */
Route::get('/get-visitor',[VisitorController::class,'GetVisitorDetails']);
/** Visitor end */

/** Contact page route start */
Route::post('/post-contact',[ContactController::class, 'PostContactDetails']);
/** Contact page route end */

/**Site Info Start */
Route::get('/site-info',[SiteInfoController::class, 'GetSiteinfo']);
/**Site Info End */