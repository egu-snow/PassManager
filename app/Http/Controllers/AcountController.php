<?php

namespace App\Http\Controllers;

use App\Models\Acount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\RedirectResponse;


class AcountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acounts = Acount::select('id', 'site_name')->get();
        //復号化
        foreach($acounts as $acount) {
            $acount->site_name = Crypt::decryptString($acount->site_name);
        }
        return view('index',compact('acounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       return view('new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //バリデーション
        $validated = $request->validate([
            'site_name'=>'required',
            'category_numb'=>'required|integer',
        ]);
        
        $acount = new Acount();

        $acount->site_name = Crypt::encryptString($request->site_name);
        $acount->login_id = Crypt::encryptString($request->login_id);
        $acount->password = Crypt::encryptString($request->password);
        $acount->mail_address = Crypt::encryptString($request->mail_address);
        $acount->memo = Crypt::encryptString($request->memo);
        $acount->category_numb = $request->category_numb;
        $acount->save();
        return redirect()->route('acount.show',['id'=> $acount->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id, Acount $acount)
    {
        $acount = Acount::find($id);

        $site_name = Crypt::decryptString($acount-> site_name);
        $login_id = Crypt::decryptString($acount-> login_id);
        $password = Crypt::decryptString($acount-> password);
        $mail_address = Crypt::decryptString($acount-> mail_address);
        $memo = Crypt::decryptString($acount-> memo);
        $id = $acount-> id;

        return view('show',[
            'site_name'=> $site_name,
            'login_id'=> $login_id,
            'password'=> $password,
            'mail_address'=> $mail_address,
            'memo'=> $memo,
            'id'=> $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acount $acount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acount $acount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id, Acount $acount)
    {
        $acount = Acount::find($id);
        $acount->delete();
        return redirect('/acounts');
    }

}