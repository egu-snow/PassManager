<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecurityQuestionController extends Controller
{
    public function show() {
        return view('auth.security-question');
    }

    public function verify(Request $request) {
        $user = Auth::user();

        //デバッグ用
        //dd($request->session()->all());
        
        if (Hash::check($request->security_answer, $user->security_answer)) {
            $request->session()->put('security_verified',true);
            $acountId = $request->session()->get('acount_id');
            return redirect()->route('acount.show', $acountId);
        }

        return back()->withErrors(['security_answer'=> '答えが正しくありません。']);
    }
}
