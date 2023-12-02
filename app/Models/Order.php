<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = ["supplier_id" , "product_id"];

    public function prodcut(){
        return $this->blongsTo(Product::class, "product_id" , "id");
    }
}
