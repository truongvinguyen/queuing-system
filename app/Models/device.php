<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'device';
    protected $fillable = [

       
        'device_name',
        'devive_id',
        'device_status',
        'device_conection',
        'device_title',    
        

        
       
    ];
}
