<?php
/** Admiko routes. This file will be overwritten on page import. Don't add your code here! **/

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

/**Event**/
Route::delete("event/destroy", [EventController::class,"destroy"])->name("event.delete");
Route::resource("event", EventController::class)->parameters(["event" => "event"]);
/**Announcement**/
Route::delete("announcement/destroy", [AnnouncementController::class,"destroy"])->name("announcement.delete");
Route::resource("announcement", AnnouncementController::class)->parameters(["announcement" => "announcement"]);
/**Karya**/
Route::delete("karya/destroy", [KaryaController::class,"destroy"])->name("karya.delete");
Route::resource("karya", KaryaController::class)->parameters(["karya" => "karya"]);
/**Category**/
Route::delete("category/destroy", [CategoryController::class,"destroy"])->name("category.delete");
Route::resource("category", CategoryController::class)->parameters(["category" => "category"]);
/**Tags**/
Route::delete("tags/destroy", [TagsController::class,"destroy"])->name("tags.delete");
Route::resource("tags", TagsController::class)->parameters(["tags" => "tags"]);
/**User**/
Route::delete("user/destroy", [UserController::class,"destroy"])->name("user.delete");
Route::resource("user", UserController::class)->parameters(["user" => "user"]);
