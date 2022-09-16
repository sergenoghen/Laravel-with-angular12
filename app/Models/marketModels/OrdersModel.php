<?php

namespace App\Models\marketModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    use HasFactory;
    /**
    * @var string $table
    */
   protected $table = 'orders';
   public $timestamps = true;
    /**
    * @var array $fillable
    */

   const ORDERID =     'OrderID';
   const CUSTOMERID = 'CustomerID';
   const EMPLOYEEID =  'EmployeeID';
   const ORDERDATE =   'OrderDate';
   const SHIPPERID =    'ShipperID';

   protected $fillable = [
       self::CUSTOMERID,
       self::EMPLOYEEID,
       self::ORDERDATE,
       self::SHIPPERID
   ];
}
