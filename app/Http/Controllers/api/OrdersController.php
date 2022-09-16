<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\marketModels\OrdersModel;

class OrdersController extends Controller
{
   
    function orders($id)
    {
        $orders = OrdersModel::select('*')->where(OrdersModel::CUSTOMERID, $id); 
        return $orders->get();
    }
}
