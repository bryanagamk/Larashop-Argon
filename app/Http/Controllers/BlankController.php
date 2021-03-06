<?php

namespace App\Http\Controllers;

use App\Blank;
use App\DataTables\BlankDataTable;
use Illuminate\Http\Request;

class BlankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlankDataTable $dataTable)
    {
        return $dataTable->render('blanks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blanks.create');
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
     * @param  \App\Blank  $blank
     * @return \Illuminate\Http\Response
     */
    public function show(Blank $blank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blank  $blank
     * @return \Illuminate\Http\Response
     */
    public function edit(Blank $blank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blank  $blank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blank $blank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blank  $blank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blank $blank)
    {
        //
    }
}
