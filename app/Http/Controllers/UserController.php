<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Combination;
use App\Http\Requests\UserRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserController extends Controller
{
    use SoftDeletes;
    public function user(User $users)
    {
         return view('users/user')->with(['users'=>User::with(['neta'])->orderBy('updated_at','DESC')->paginate(5)]);
    }
    public function ushow(User $user)
    {
        return view('users/ushow')->with(['user'=>$user]);
    }
    public function uedit(User $user,Combination $combination)
    {
        return view('users/uedit')->with([
            'user'=>$user,
            'combinations'=>$combination->get()
            ]);
    }
    public function uput(UserRequest $request,User $user)
    {
        $input=$request['users'];
        $user->fill($input)->save();
        return redirect('/users/' .$user->id);
    }
    public function caution()
    {
        return view('users/caution');
    }
}
