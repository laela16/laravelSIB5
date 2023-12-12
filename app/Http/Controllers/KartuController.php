<?php

namespace App\Http\Controllers;

use App\Models\Kartu;
use App\Http\Requests\StoreKartuRequest;
use App\Http\Requests\UpdateKartuRequest;
use Illuminate\Support\Facades\DB;

class KartuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // sintaks menggunakan query builder
        $kartu = DB::table('kartu')->get();
        return view ('admin.kartu.index', compact('kartu'));
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
    public function store(StoreKartuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kartu $kartu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kartu $kartu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKartuRequest $request, Kartu $kartu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kartu $kartu)
    {
        //
    }
}
