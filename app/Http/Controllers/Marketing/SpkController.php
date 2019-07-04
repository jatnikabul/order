<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\Spk;
use App\Models\Pom;

class SpkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spks = SPK::all();
        return view('marketing.spk.list',compact('spks'));
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
        $spks = new SPK();
        $spks->tanggal = $request->get('tanggal');
        $spks->nama_konsumen = $request->input('nama_konsumen');
        $spks->alamat = $request->input('alamat');
        $spks->no_surat = $request->input('no_surat');
        $spks->no_telp = $request->input('no_telp');
        $spks->produk = $request->input('produk');
        $spks->deskripsi = $request->input('deskripsi');
        $spks->harga = $request->input('harga');
        $spks->total = $request->input('total');
        $spks->uang_muka = $request->input('uang_muka');
        $spks->sisa_tagihan = $request->input('sisa_tagihan');
        $spks->pemesanan = $request->input('pemesanan');
        $spks->marketing = $request->input('marketing');
        $spks->mengetahui = $request->input('mengetahui');
        $spks->save();

        return redirect('/marketing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spk = SPK::findOrFail($id);
        return view('marketing.spk.show',compact('spk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spk = SPK::findOrFail($id);
        
        return view('marketing.spk.edit',compact('spk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $spks = SPK::findOrFail($id);
        $spks->tanggal = $request->get('tanggal');
        $spks->nama_konsumen = $request->input('nama_konsumen');
        $spks->alamat = $request->input('alamat');
        $spks->no_surat = $request->input('no_surat');
        $spks->no_telp = $request->input('no_telp');
        $spks->produk = $request->input('produk');
        $spks->deskripsi = $request->input('deskripsi');
        $spks->harga = $request->input('harga');
        $spks->total = $request->input('total');
        $spks->uang_muka = $request->input('uang_muka');
        $spks->sisa_tagihan = $request->input('sisa_tagihan');
        $spks->pemesanan = $request->input('pemesanan');
        $spks->marketing = $request->input('marketing');
        $spks->mengetahui = $request->input('mengetahui');
        $spks->save();

        return redirect('marketing/spk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spk = SPK::findOrFail($id);
        $spk->delete();
        return back();
    }
}
