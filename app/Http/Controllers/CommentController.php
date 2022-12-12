<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
class CommentController extends Controller
{
    // コメントを保存するコントローラ
    public function store (Request $request,Comment $comment){
        $input = $request["comment"];
        $input +=["post_id" => $request->post_id];
        $comment->fill($input)->save();
        return redirect("posts/" .$request->post_id);
    }
    // コメントを表示するコントローラー
    // public function show (){
        
    // }
}
