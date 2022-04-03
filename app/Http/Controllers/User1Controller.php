<?php

namespace App\Http\Controllers;

use App\Models\user1;
use App\Http\Requests\Storeuser1Request;
use App\Http\Requests\Updateuser1Request;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeuser1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function show(user1 $user1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function edit(user1 $user1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser1Request  $request
     * @param  \App\Models\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser1Request $request, user1 $user1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function destroy(user1 $user1)
    {
        //
    }
}
