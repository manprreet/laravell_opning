<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use function Symfony\Component\Translation\t;

class Dish extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['category_id', 'name_en', 'name_nl', 'image', 'price', 'percentage_off', 'qty', 'out_of_stock'];
    protected $dates = ['created_at', 'updated_at'];
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function order()
    {
        return $this->hasMany(OrderDetail::class, 'dish_id', 'id');
    }

    public function option()
    {
        return $this->hasMany(DishOption::class, 'dish_id', 'id');
    }

    protected function getImageAttribute($value)
    {
        if(!empty($value)){
            return asset('');
        }
        return asset('images/blank-img.svg');
    }
}
