<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviewcomment;
use App\Models\Review;
use App\Http\Requests\CommentRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Policies\PostPolicy;

class CommentController extends Controller
{
    use SoftDeletes;
    public function create(Review $review,Reviewcomment $comment)
    {
        return view('comments/rccreate')->with(['comment'=>$comment,'review'=>$review]);
    }
    public function store(CommentRequest $request,Review $review,Reviewcomment $comment)
    {
        $input=$request['reviewcomments'];
        $input+=['user_id'=>$request->user()->id];
        $comment->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    public function edit(Review $review,Reviewcomment $comment)
    {
        $user=auth()->user();
        if($user->can('edit',$comment))
        {
            return view('comments/rcedit')->with([
                'comment'=>$comment,
                'review'=>$review]);
        }
        else
        {
            return redirect('/caution');
        }
    }
    public function update(CommentRequest $request,Reviewcomment $comment)
    {
        $input=$request['reviewcomments'];
        $input+=['user_id'=>$request->user()->id];
        $comment->fill($input)->save();
        return redirect('/reviews/' . $comment->review_id);
    }
    public function delete(Review $review,Reviewcomment $comment)
    {
        $comment->delete();
        return redirect('/reviews/'  . $review->id);
    }
}
