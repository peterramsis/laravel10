<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'name',
        'description',
    ];

    // const DELETED_AT= "custom_deleted_at";


    public function getCreateAtAttribute($val){
        return date("Y-m-d h:m", strtotime($val));
    }

}
