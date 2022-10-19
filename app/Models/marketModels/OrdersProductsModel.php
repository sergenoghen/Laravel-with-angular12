<?php

namespace App\Models\marketModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersProductsModel extends Model
{
    use HasFactory;
    /**
    * @var string $table
    */
   protected $table = 'products';
   public $timestamps = true;
    /**
    * @var array $fillable
    */

   const PRODUCTID =     'ProductID';
   const PRODUCTNAME = 'ProductName';
   const SUPPLIERID =  'SupplierID';
   const CATEGORYID =   'CategoryID';
   const UNIT =    'Unit';
   const PRICE =    'Price';

   protected $fillable = [
    self:: PRODUCTID ,
    self:: PRODUCTNAME,
    self:: SUPPLIERID,
    self:: CATEGORYID,
    self:: UNIT,
    self:: PRICE,
   ];
}
