<?php

namespace App\Models\marketModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    use HasFactory;
     /**
     * @var string $table
     */
    protected $table = 'customers';
    public $timestamps = true;
     /**
     * @var array $fillable
     */

    const CUSTOMERID = 'CustomerID';
    const CUSTOMERNAME =     'CustomerName';
    const CONTACTNAME =  'ContactName';
    const ADDRESS =   'Address';
    const CITY =    'City';
    const POSTALCODE = 'PostalCode';
    const COUNTRY =  'Country';

    protected $fillable = [
        self::CUSTOMERNAME,
        self::CONTACTNAME,
        self::ADDRESS,
        self::CITY,
        self::POSTALCODE,
        self::COUNTRY,
    ];
    
}
