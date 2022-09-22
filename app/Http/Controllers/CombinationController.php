<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Combination;
use App\Models\Office;
use App\Models\Neta;
use App\Http\Requests\CombinationRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class CombinationController extends Controller
{
    use SoftDeletes;
    public function combi(Request $request,Combination $combinations)
    {
        $combinations=Combination::with(['office'])->orderBy('updated_at','DESC');
        $keyword=$request->input('keyword');
        if($keyword){
            $combinations
            ->where('name','like',"%$keyword%")
            ->orwhere('member1','like',"%$keyword%")
            ->orwhere('member2','like',"%$keyword%")
            ->orwhere('member3','like',"%$keyword%")
            ->orwhere('feature','like',"%$keyword%");
        }
        return view('combinations/combination')->with([
            'combinations'=>$combinations->paginate(10)
            ]);
    }
    public function cshow(Combination $combination,Neta $neta)
    {
        return view('combinations/cshow')->with([
            'combinations'=>$combination->load('office'),
            'netas'=>$neta->get()
            ]);
    }

    public function ccreate(Combination $combinations,Office $offices)
    {
        return view('combinations/ccreate')->with([
        'offices'=>$offices->get()
        ]);
    }
    public function cstore(CombinationRequest $request,Combination $combination)
    {
        $input=$request['combinations'];
        $combination->fill($input)->save();
        return redirect('/combination');
    }
    public function cedit(Combination $combination,Office $offices)
    {
        return view('combinations/cedit')->with([
        'offices'=>$offices->get(),
        'combination'=>$combination->load('office'),
        ]);
    }
    public function cput(CombinationRequest $request,Combination $combination)
    {
        $input=$request['combinations'];
        $combination->fill($input)->save();
        return redirect('/combination');
    }
    public function delete(Combination $combination)
    {
        $combination->delete();
        return redirect('/combination');
    }
}
