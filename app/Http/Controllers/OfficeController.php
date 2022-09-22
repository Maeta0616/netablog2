<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Combination;
use App\Http\Requests\OfficeRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfficeController extends Controller
{
    use SoftDeletes;
    public function office(Office $offices)
    {
        return view('offices/office')->with(['offices'=>$offices->orderBy('updated_at','DESC')->paginate(10)]);
    }
    public function oshow(Office $office,Combination $combination)
    {
        return view('offices/oshow')->with(['offices'=>$office,'combinations'=>$combination->get()]);
    }
    public function ocreate()
    {
        return view('offices/ocreate');
    }
    public function ostore(OfficeRequest $request,Office $office)
    {
        $input=$request['offices'];
        $office->fill($input)->save();
        return redirect('/office');
    }
    public function oedit(Office $office)
    {
        return view('offices/oedit')->with(['office'=>$office->load('combinations')]);
    }
    public function oput(OfficeRequest $request,Office $office)
    {
        $input=$request['offices'];
        $office->fill($input)->save();
        return redirect('/offices/' .$office->id);
    }
    public function delete(Office $office)
    {
        $office->delete();
        return redirect('/office');
    }
}
