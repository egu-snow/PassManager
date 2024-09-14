<?php

namespace App\Http\Controllers;

use App\Models\Acount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acounts = Acount::select('id', 'site_name')->get();
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
    public function store(Request $request)
    {
        $acount = new Acount();

        $acount->site_name = $request->site_name;
        $acount->login_id = $request->login_id;
        $acount->password = $request->password;
        $acount->mail_address = $request->mail_address;
        $acount->memo = $request->memo;
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
        $site_name = $acount-> site_name;
        $login_id = $acount-> login_id;
        $password = $acount-> password;
        $mail_address = $acount-> mail_address;
        $memo = $acount-> memo;
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