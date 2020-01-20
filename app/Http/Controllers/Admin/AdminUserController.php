<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function getProfile($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.profile.index', compact('user'));
    }

    public function postChangePass(Request $request)
    {
        if (Auth::check()){
            $validator = Validator::make($request->all(),
                [
                    'current_password'   => 'required|min:3',
                    'password'           => 'required|min:3|same:password',
                    'password_confirm'   => 'required|same:password',
                ]);
            if ($validator->fails()){
                return $this->errorResponse($validator->errors()->first());
            }
            if (User::passwordCorrect($request->input('current_password'))){
                $user_id = Auth::id();
                $user = User::find($user_id);
                $user->password = Hash::make($request->password);
                $user->save();
                return $this->successResponse([], 'Thay đổi mật khẩu thành công !');
            }else{
                return $this->errorResponse('Current password is incorrect !');
            }
        }else{
            return redirect()->back();
        }
    }
}
