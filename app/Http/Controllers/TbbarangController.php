<?php

namespace App\Http\Controllers;

use App\Models\tbbarang;
use Illuminate\Http\Request;

class TbbarangController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tbbarang = new tbbarang();
        $tbbarang->id = $request->id;
        $tbbarang->namabarang = $request->namabarang;
        $tbbarang->stock = $request->stock;
        $tbbarang->img_barang = $request->file('img_barang')->store('img-barang');
        $tbbarang->save();
        return redirect('/Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbbarang  $tbbarang
     * @return \Illuminate\Http\Response
     */
    public function show(tbbarang $tbbarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbbarang  $tbbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(tbbarang $tbbarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbbarang  $tbbarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbbarang $tbbarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbbarang  $tbbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbbarang $tbbarang)
    {
        //
    }
}
