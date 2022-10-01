<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Reviewcomment;
use App\Models\User;
use App\Models\Neta;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\CommentRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

use App\Policies\PostPolicy;

class ReviewController extends Controller
{
    use SoftDeletes;
    public function introduction()
    {
        return view('intro/introduction');
    }
    
    public function index(Review $review,Request $keyword)
    {
        return view('reviews/index')->with([
            'reviews'=>Review::with('neta.genre','neta.combination','user')->orderBy('updated_at','DESC')->paginate(5),
            'keyword'=>$keyword,
            ]);
    }
    public function show(Review $review,Reviewcomment $comments)
    {
        $comments=ReviewComment::select('review_id')->selectRaw('AVG(votes) as vote_avg')->groupBy('review_id')->get();
        return view('reviews/show')->with([
        'comments'=>Reviewcomment::with('user','review')->orderBy('updated_at','DESC')->paginate(10),
        'comments_avgs'=>$comments,
        'review'=>$review->load('neta.genre','neta.combination','user')
        ]);
    }
    public function create(Neta $neta)
    {
        return view('reviews/create')->with(['netas'=>Neta::with(['combination','genre'])->get()]);
    }
    public function store(ReviewRequest $request, Review $review)
    {
        $input=$request['reviews'];
        $input+=['user_id'=>$request->user()->id];
        // user()=Request.php内に記述されているuser()requestを送信したユーザーの情報を取得することができる関数
        $review->fill($input)->save();
        return redirect('/');
    }
    public function edit(Review $review,Neta $neta)
    {
        $user=auth()->user();
        if($user->can('update',$review))
        {
            return view('reviews/edit')->with([
            'netas'=>Neta::with(['combination','genre'])->get(),
            'review'=>$review->load('neta.genre','neta.combination','user')
            ]);
        }
        else
        {
            return redirect('/caution');
        }
    }
    public function put(ReviewRequest $request,Review $review)
    {
        $input=$request['reviews'];
        $input+=['user_id'=>$request->user()->id];
        // user()=Request.php内に記述されているuser()requestを送信したユーザーの情報を取得することができる関数
        $review->fill($input)->save();
        return redirect('/reviews/'.$review->id);
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
}