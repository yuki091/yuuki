<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $fillable =[
        'category_name',
        'brand_name',
        'memo',
        'cloth_filename',
        'user_id'
    ];
    public function user() 
    {
    return $this->belongsTo('App\User');
    }
}
