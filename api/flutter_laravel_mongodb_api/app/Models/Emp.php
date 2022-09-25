<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;  
class Emp extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'emps';
    
    protected $fillable = [
        'firstname',
        'lastname',
    ];
}
