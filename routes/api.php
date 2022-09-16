<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\MarketController;
use App\Http\Controllers\api\OrdersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', 
    function(Request $req){
        $app = app();
        $controller = $app->make(MarketController::class, [$req]);
        return $controller->callAction('customers',[]);
    }
);

Route::get('/customers/details/{id}', 
    function($id,Request $req){
        $app = app();
        $controller = $app->make(MarketController::class, [ $id]);
        return $controller->callAction('details',[$id]);
    }
);


Route::get('/', 
    function(Request $req){
        $app = app();
        $controller = $app->make(MarketController::class, []);
        return $controller->callAction('index',[]);
    }
);

Route::get('/customers/{id}/orders',
    function($id,Request $req){
        $app = app();
        $controller = $app->make(OrdersController::class, [ $id]);
        return $controller->callAction('orders',[$id]);
    }
);