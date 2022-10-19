<?php

namespace App\Models\marketModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersDetailsModel extends Model
{
    use HasFactory;
     /**
    * @var string $table
    */
   protected $table = 'orderdetails';
   public $timestamps = true;
    /**
    * @var array $fillable
    */

   const ORDERDETAILSID = 'OrderDetailID';
   const ORDERID =     'OrderID';
   const OPRODUCTID =   'ProductID';
   const QUANTITY =    'Quantity';

   protected $fillable = [
       self::ORDERID,
       self::OPRODUCTID,
       self::QUANTITY
   ];
}
