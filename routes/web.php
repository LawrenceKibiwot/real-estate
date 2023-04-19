<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEstateController;

Route::get("/", [RealEstateController::class, "show"]);
Route::get("/home", [RealEstateController::class, "show"]);
Route::get("list", [RealEstateController::class, "list"]);
Route::get('admin', [RealEstateController::class, 'admin']);
Route::get('upload', [RealEstateController::class, 'create']);
Route::post('store-form', [RealEstateController::class, 'store']);
Route::post('search', [RealEstateController::class, 'search']);
Route::get('edit{id}', [RealEstateController::class, 'update']);
Route::get('link_tenant', [RealEstateController::class, 'link_tenant']);
Route::get('tenant_reg{name}/{id}', [RealEstateController::class, 'tenant_reg']);
Route::post('tenant_store', [RealEstateController::class, 'tenant_store']);
Route::get('/vaccant', [RealEstateController::class, 'vaccant']);
Route::get('/tenant', [RealEstateController::class, 'tenant']);
Route::get('/terminate{id}/{tenantID}', [RealEstateController::class, 'terminate']);
Route::get('/details{id}', [RealEstateController::class, 'details']);
Route::post('/update_listing', [RealEstateController::class, 'update_listing']);
Route::get('/delete{id}', [RealEstateController::class, 'delete']);
Route::post('/table_actions', [RealEstateController::class, 'table']);
Route::get('/test', [RealEstateController::class, 'test']);
