<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        $feedbacks = Feedback::select(['id', 'title', 'created_at', 'user_id', 'category_id'])->with('user')->with('comment.user:id,name')->with('category')->paginate(10);

        return response()->json(['feedbacks'=>$feedbacks], 200);
    }

    public function create(FeedbackRequest $feedback){
        $fb = Feedback::create([
            'title' => $feedback->title,
            'user_id' => $feedback->user_id,
            'category_id' => $feedback->category_id,
            'description' => $feedback->description
        ]);

        return response()->json(['feedback'=>$fb], 200);
    }

    public function feedback($id){
        $feedback = Feedback::where('id', $id)->with('user')->with('category')->with('comment.user:id,name')->get();

        return response()->json(['feedback'=>$feedback], 200);
    }
}
