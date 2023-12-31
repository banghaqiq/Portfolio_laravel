<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;

    protected $table = 'tb_menu'; 
    
    protected $fillable = [
     'nama_menu', 
     'status', 
     'url', 
    ];
}
