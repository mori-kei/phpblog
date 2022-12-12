<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "post_id",
        "body"
        ];
    public function posts(){
        return $this->belongsTo(Post::class);
    }
    // postのidと同じpostidを持つコメントを抽出
    public function getPostComment(){
        return $this::with("posts")->find(Comment::post_id->orderBy("updated_at",DESC));
    }
}
