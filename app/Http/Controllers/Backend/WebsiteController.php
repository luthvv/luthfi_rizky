<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        return view('backend.projects.website.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projects.website.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\website  $website
     * @return \Illuminate\Http\Response
     */
    public function view(website $website)
    {
        return view('backend.projects.website.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(website $website)
    {
        return view('backend.projects.website.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(website $website)
    {
        //
    }
}