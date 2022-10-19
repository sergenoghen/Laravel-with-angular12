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

Route::get('/customer', 
    function(Request $req){
        $app = app();
        $controller = $app->make(MarketController::class, [$req]);
        return $controller->callAction('customers',[]);
    }
);

Route::get('/customer/details/{id}', 
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

Route::get('/customer/{id}/orders', //orders for a customer
    function($id,Request $req){
        $app = app();
        $controller = $app->make(OrdersController::class, [ $id]);
        return $controller->callAction('completeOrders',[$id]);
    }
);

Route::get('/customer/orders/{orderID}', //details of an order
    function($orderID,Request $req){
        $app = app();
        $controller = $app->make(OrdersController::class, [  $orderID]);
        return $controller->callAction('ordersDetails',[ $orderID]);
    }
);

Route::get('/customer/products/{productID}', //details of a product
    function($productID,Request $req){
        $app = app();
        $controller = $app->make(OrdersController::class, [  $productID]);
        return $controller->callAction('productsDetails',[ $productID]);
    }
);


Route::get('/customer/employees/{employeeID}', //details of a product
    function($employeeID,Request $req){
        $app = app();
        $controller = $app->make(OrdersController::class, [  $employeeID]);
        return $controller->callAction('employeesDetails',[ $employeeID]);
    }
);


///for test
Route::get('/customer/orders/test/{customerID}', 
    function($customerID,Request $req){
        $app = app();
        $controller = $app->make(OrdersController::class, [  $customerID]);
        return $controller->callAction('completeOrders',[ $customerID]);
    }
);
