<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
   use HasFactory;
   protected $table = "supplier";
   protected $fillable = ["name" , "user_id"];


   public function orders()
   {
    return $this->hasManyThrough(Order::class,Product::class ,"supplier_id" , "product_id"); 
   }
}

