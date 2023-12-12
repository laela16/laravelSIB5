<?php

namespace App\Http\Controllers;

use App\Models\Jenis_produk;
use App\Http\Requests\StoreJenis_produkRequest;
use App\Http\Requests\UpdateJenis_produkRequest;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // sintaks menggunakan eloquent (ORM)
        $jenis_produk = Jenis_produk::all();
        return view ('admin.jenis.index', compact('jenis_produk'));
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
    public function store(StoreJenis_produkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis_produk $jenis_produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis_produk $jenis_produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenis_produkRequest $request, Jenis_produk $jenis_produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis_produk $jenis_produk)
    {
        //
    }
}
