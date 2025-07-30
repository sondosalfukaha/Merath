<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'price', 'stock', 'image','is_featured',
    'is_best_seller',];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
