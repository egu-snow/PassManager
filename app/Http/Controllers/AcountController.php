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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        return view('show',[
            'site_name'=> $site_name,
            'login_id'=> $login_id,
            'password'=> $password,
            'mail_address'=> $mail_address,
            'memo'=> $memo
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
    public function destroy(Acount $acount)
    {
        //
    }
}
