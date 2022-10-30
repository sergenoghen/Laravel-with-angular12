<?php

namespace App\Models\marketModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    use HasFactory;
       /**
    * @var string $table
    */
   protected $table = 'categories';
   public $timestamps = false;
    /**
    * @var array $fillable
    */

   const CATEGORYID =     'CategoryID';
   const CATEGORYNAME = 'CategoryName';
   const DESCRIPTION =  'Description';

   protected $fillable = [
       self::CATEGORYID,
       self::CATEGORYNAME,
       self::DESCRIPTION
   ];
}
