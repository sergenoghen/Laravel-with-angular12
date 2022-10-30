<?php

namespace App\Http\Controllers\api;

use Illuminate\Foundation\Exceptions\Handler as Exception;
use Illuminate\Foundation\Exceptions\HttpResponseException as HttpResponseException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\marketModels\OrdersModel;
use App\Models\marketModels\OrdersDetailsModel;
use App\Models\marketModels\OrdersProductsModel;
use App\Models\marketModels\EmployeesModel;
use App\Models\marketModels\CategoriesModel;

class OrdersController extends Controller
{
   
    function orders($id)
    {
        $orders = OrdersModel::select('*')->where(OrdersModel::CUSTOMERID, $id); 
        return $orders->get();
    }

    function ordersDetails($orderID){
        $orderDetails = OrdersDetailsModel::select('*')->where(OrdersDetailsModel::ORDERID, $orderID); 
        return $orderDetails->get();
    }

    function productsDetails($productID){
        $productDetails = OrdersProductsModel::select('*')->where(OrdersProductsModel::PRODUCTID, $productID); 
        return $productDetails->get();
    }

    function employeesDetails($employeesID){
        $emplouees = EmployeesModel::select('*')->where(EmployeesModel::EMPLOYEEID, $employeesID); 
        return $emplouees->get();
    }
    
    function completeOrders($customerId)
    {
        $orders = OrdersModel::select('*')->where(OrdersModel::CUSTOMERID, $customerId)->get(); 
        //EmployeeID
        $employeesIDs = [];
        $employees = [];
        foreach($orders as  $key=>$e  ){
            //array_push($employeesIDs, $e['EmployeeID']);
            $id = $e['EmployeeID'];
            $employees[$id] = EmployeesModel::select('*')->where(EmployeesModel::EMPLOYEEID, $id)->first(); 
        }
       //$employeesIDs = array_column($orders,'EmployeeID');
        //$employees = EmployeesModel::select('*')->whereIn(EmployeesModel::EMPLOYEEID, $employeesIDs)->get(); 

        return ['order'=>$orders, 'employee'=>$employees];
    }

    function categories($categoryId){
        $categories = CategoriesModel::select('*')->where(CategoriesModel::CATEGORYID, $categoryId)->first();
        return $categories;
    }

    function createCategory(Request $req){
        $data = $req->all();
        $data[ 'CategoryID' ] = null;

        $newCategory = [
            "CategoryName" =>$data[ 'CategoryName' ] , 
            "Description" =>$data[ 'Description' ] ,
        ];

        try{
            $postCat = CategoriesModel::firstOrCreate($newCategory);
        }catch(\HttpResponseException $resp ){
            return json_encode(['error'=>$resp->getResponse()]);
        }
        
        return  [
            'Category'=>$postCat,
            'message'=>$postCat->CategoryID > 0 ? 'Category '. $postCat->CategoryID.' created' : 'Error occured',
        ];
    }
}
