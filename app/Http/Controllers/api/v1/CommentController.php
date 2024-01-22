<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use HTMLPurifier;
use HTMLPurifier_Config;

class CommentController extends Controller
{
    public function create(CommentRequest $comment){

        $allowedTags = ['b', 'i', 'code'];
        $config = HTMLPurifier_Config::create(['HTML.Allowed' => implode(',', $allowedTags)]);
        $purifier = new HTMLPurifier($config);
        $comment->comment = $purifier->purify($comment->comment);

        $comment = Comment::create([
            'comment' => $comment->comment,
            'user_id' => $comment->user_id,
            'feedback_id' => $comment->feedback_id,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return response()->json(['comment'=>$comment], 200);
    }
}
