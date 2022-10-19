<?php

namespace App\Models\marketModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    use HasFactory;
      /**
    * @var string $table
    */
   protected $table = 'employees';
   public $timestamps = true;
    /**
    * @var array $fillable
    */

   const EMPLOYEEID =   'EmployeeID';
   const LASTNAME = 'LastName';
   const FIRSTNAME = 'FirstName';
   const BIRTHDATE =  'BirthDate';
   const PHOTO =   'Photo';
   const NOTES =    'Notes';

   protected $fillable = [
    self:: EMPLOYEEID ,
    self:: LASTNAME ,
    self:: FIRSTNAME,
    self:: BIRTHDATE,
    self:: PHOTO ,
    self:: NOTES
   ];
}
