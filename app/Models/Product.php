<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name','price','description','category_id', 'photo'];

    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
        
    }
}
