<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\Spk;
use App\Models\Pom;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function front()
    {
        return view('marketing.index');
    }
    public function index()
    {
        $biodatas = Biodata::all();
        return view('marketing.biodata.list',compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biodatas = new Biodata();
        $biodatas->nama = $request->input('nama');
        $biodatas->tempat = $request->input('tempat');
        $biodatas->tanggal_lahir = $request->get('tanggal_lahir');
        $biodatas->alamat = $request->input('alamat');
        $biodatas->nama_instansi = $request->input('nama_instansi');
        $biodatas->alamat_instansi = $request->input('alamat_instansi');
        $biodatas->jabatan = $request->input('jabatan');
        $biodatas->email = $request->input('email');
        $biodatas->telepon = $request->input('telepon');
        $biodatas->save();

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
        $biodata = Biodata::findOrFail($id);
        $no = 0;
        return view('marketing.biodata.show',compact('biodata','no'));
    }

    public function list()
    {
        return view('marketing.biodata.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);

        return view('marketing.biodata.edit',compact('biodata'));
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
        $biodatas = Biodata::findOrFail($id);
        $biodatas->nama = $request->input('nama');
        $biodatas->tempat = $request->input('tempat');
        $biodatas->tanggal_lahir = $request->get('tanggal_lahir');
        $biodatas->alamat = $request->input('alamat');
        $biodatas->nama_instansi = $request->input('nama_instansi');
        $biodatas->alamat_instansi = $request->input('alamat_instansi');
        $biodatas->jabatan = $request->input('jabatan');
        $biodatas->email = $request->input('email');
        $biodatas->telepon = $request->input('telepon');
        $biodatas->save();

        return redirect('/marketing/biodata/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->delete();
        return back();
    }
}
