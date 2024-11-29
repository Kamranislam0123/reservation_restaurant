<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category_id_by_food extends Model
{
    use HasFactory;
    protected $table = 'category_id_by_foods'; 

    protected $fillable =[
        'category_id',
        'food_id'
        
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class, 'food_id', 'id');
    }
    public function format()
    {
        return [
            'id' => $this->id,
            'food_id' => $this->food_id,
            'category_id' => $this->category_id,
            'food' => $this->food->title,
            'category' => $this->category->name,
            'food_data' => $this->food,
            'category_data' => $this->category,
        ];
    }
}
