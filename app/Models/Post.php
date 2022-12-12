<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    protected $fillable = [
    'title',
    'body',
    'category_id',
    'user_id'
];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
