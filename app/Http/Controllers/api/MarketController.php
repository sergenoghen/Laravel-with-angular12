<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\marketModels\CustomersModel;

class MarketController extends Controller
{
    //
    function customers()
    {
       $customers = CustomersModel::select('*')->limit(12); 
       return $customers->paginate(10);
        // return CustomersModel::select('*')->where(CustomersModel::COUNTRY, 'Like', '%UK%')->paginate(6);
    }

    function details($id)
    {
        $sql = CustomersModel::select('*')->where(CustomersModel::CUSTOMERID, $id);
        return $sql->first();
    }

    function index()
    {
        return json_encode(['current_page'=>'API root index']);
    }

}
