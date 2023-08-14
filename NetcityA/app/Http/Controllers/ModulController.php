<?php

namespace App\Http\Controllers;

use App\Models\modul;
use App\Http\Requests\StoremodulRequest;
use App\Http\Requests\UpdatemodulRequest;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.table.modul.index');
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
    public function store(StoremodulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(modul $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(modul $modul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemodulRequest $request, modul $modul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(modul $modul)
    {
        //
    }
}
