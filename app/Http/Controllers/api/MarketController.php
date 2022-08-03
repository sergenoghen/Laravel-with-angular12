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
        return CustomersModel::select('*')->where(CustomersModel::CUSTOMERID, '>', 0)->paginate(10);
    }

    function details($id)
    {
        $sql = CustomersModel::select('*')->where(CustomersModel::CUSTOMERID, $id);
        return $sql->first();
    }
}
