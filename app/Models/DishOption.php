<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishOption extends Model
{
    use HasFactory;

    protected $fillable = ['dish_id','option_en','option_nl'];
    protected $dates = ['created_at', 'updated_at'];
    public $timestamps = true;

    protected $appends = [
        'name',
    ];

    public function dish(){
        return $this->belongsTo(Dish::class,'dish_id','id');
    }

    public function getNameAttribute()
    {
        return $this->attributes['option_' . app()->getlocale()];
    }
}
