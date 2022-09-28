<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Neta;
use App\Models\Combination;
use App\Models\Genre;
use App\Models\Review;
use App\Http\Requests\NetaRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Collection;

class NetaController extends Controller
{
    use SoftDeletes;
    public function neta(Request $request,Neta $neta,Review $review)
    {
        $review=Review::select('neta_id')->selectRaw("AVG(votes) as votes_avg")->groupBy('neta_id')->get();
        $netas=Neta::with('combination','combination.office','genre')->orderBy('updated_at','DESC');
        $keyword=$request->input('keyword');
        if($keyword){
            $netas->where('name','LIKE',"%$keyword%")
            ->orwhereHas('combination',function ($q) use($keyword) {
                $q->where('name','like',"%$keyword%")
                ->orwhere('member1','like',"%$keyword%")
                ->orwhere('member2','like',"%$keyword%")
                ->orwhere('member3','like',"%$keyword%");
            });
            }
        return view('netas/neta')->with([
            'netas' =>$netas->paginate(5),
            'reviews'=>$review
            ]);
    }
    
    public function neta_genre(Genre $genre,Request $request,Neta $neta,Review $review)
    {
         $review=Review::select('neta_id')->selectRaw("AVG(votes) as votes_avg")->groupBy('neta_id')->get();
        $netas=Neta::with('combination','combination.office','genre')
        ->orderBy('updated_at','DESC')
        ->where('genre_id','=',$genre->id);
        $keyword=$request->input('keyword');
        if($keyword){
            $netas->where('name','LIKE',"%$keyword%")
            ->orwhereHas('combination',function ($q) use($keyword) {
                $q->where('name','like',"%$keyword%")
                ->orwhere('member1','like',"%$keyword%")
                ->orwhere('member2','like',"%$keyword%")
                ->orwhere('member3','like',"%$keyword%");
            });
            }
        return view('netas/neta')->with([
            'netas' =>$netas->paginate(5),
            'reviews'=>$review
            ]);
    }
    
    public function nshow(Neta $neta,Review $review)
    {
        $review=Review::select('neta_id')->selectRaw('AVG(votes) as votes_avg')->groupBy('neta_id')->get();
        return view('netas/nshow')->with([
            'neta'=>$neta->load('combination','combination.office','genre'),
            'reviews'=>$review
            ]);
    }
    public function ncreate(Combination $combinations,Genre $genres)
    {
        return view('netas/ncreate')->with(['combinations'=>$combinations->get(),'genres'=>$genres->get()]);
    }
    public function nstore(NetaRequest $request,Neta $neta)
    {
        $input=$request['netas'];
        $neta->fill($input)->save();
        return redirect('/neta');
    }
    public function nedit(Combination $combinations,Genre $genres,Neta $neta)
    {
        return view('netas/nedit')->with([
        'combinations'=>$combinations->get(),
        'genres'=>$genres->get(),
        'neta'=>$neta->load('combination','combination.office','genre')
        ]);
    }
    public function nput(NetaRequest $request,Neta $neta)
    {
        $input=$request['netas'];
        $neta->fill($input)->save();
        return redirect('/netas/' .$neta->id);
    }
    public function delete(Neta $neta)
    {
        $neta->delete();
        return redirect('/neta');
    }
    public function rank(Neta $neta,Combination $combination,Review $review)
    {
        $review=Review::with('neta','neta.genre')
        ->select('neta_id')
        ->selectRaw('COUNT(id) as count_id')
        ->selectRaw('AVG(votes) as votes_avg')
        ->groupBy('neta_id')
        ->orderBy('votes_avg','DESC');
        return view('netas/ranks/rank')->with([
            'netas'=>Neta::with('combination','genre')->get(),
            'combination'=>$combination->get(),
            'ranks'=>$review->paginate(10)
            ]);
    }
    public function mrank(Neta $neta,Combination $combination,Review $review,Genre $genre)
    {
        $review=Review::with('neta')
        ->select('neta_id')
        ->whereHas('neta',function ($neta)  {
                $neta->where('genre_id','=',"1");
        })
        ->selectRaw('COUNT(id) as count_id')
        ->selectRaw('AVG(votes) as votes_avg')
        ->groupBy('neta_id')
        ->orderBy('votes_avg','DESC');
        return view('netas/ranks/mrank')->with([
            'netas'=>Neta::with('combination','genre')->get(),
            'combination'=>$combination->get(),
            'ranks'=>$review->paginate(10)
            ]);
    }
    public function crank(Neta $neta,Combination $combination,Review $review)
    {
        $review=Review::with('neta')
        ->select('neta_id')
        ->whereHas('neta',function ($neta)  {
                $neta->where('genre_id','=',"2");
        })
        ->selectRaw('COUNT(id) as count_id')
        ->selectRaw('AVG(votes) as votes_avg')
        ->groupBy('neta_id')
        ->orderBy('votes_avg','DESC');
        return view('netas/ranks/crank')->with([
            'netas'=>Neta::with('combination','genre')->get(),
            'combination'=>$combination->get(),
            'ranks'=>$review->paginate(10)
            ]);
    }
    public function prank(Neta $neta,Combination $combination,Review $review)
    {
        $review=Review::with('neta')
        ->select('neta_id')
        ->whereHas('neta',function ($neta)  {
                $neta->where('genre_id','=',"3");
        })
        ->selectRaw('COUNT(id) as count_id')
        ->selectRaw('AVG(votes) as votes_avg')
        ->groupBy('neta_id')
        ->orderBy('votes_avg','DESC');
        return view('netas/ranks/prank')->with([
            'netas'=>Neta::with('combination','genre')->get(),
            'combination'=>$combination->get(),
            'ranks'=>$review->paginate(10)
            ]);
    }
    public function rrank(Neta $neta,Combination $combination,Review $review)
    {
        $review=Review::with('neta','neta.genre')
        ->select('neta_id')
        ->selectRaw('COUNT(id) as count_id')
        ->selectRaw('AVG(votes) as votes_avg')
        ->groupBy('neta_id')
        ->orderBy('count_id','DESC');
        return view('netas/ranks/rrank')->with([
            'netas'=>Neta::with('combination','genre')->get(),
            'combination'=>$combination->get(),
            'ranks'=>$review->paginate(10)
            ]);
    }
}
