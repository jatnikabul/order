<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodata;
use App\Models\Spk;
use App\Models\Pom;

class PomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poms = POM::all();
        return view('marketing.pom.list',compact('poms'));
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
        $poms = new POM();
        $poms->nama_proyek = $request->input('nama_proyek');
        $poms->programmer_proyek = $request->input('programmer_proyek');
        $poms->perihal = $request->input('perihal');
        $poms->peserta_rapat = $request->input('peserta_rapat');
        $poms->lokasi_rapat = $request->input('lokasi_rapat');
        $poms->lr_dibuat_oleh = $request->input('lr_dibuat_oleh');
        $poms->tanggal = $request->get('tanggal');
        $poms->diskusi = $request->input('diskusi');
        $poms->rencana_kegiatan = $request->input('rencana_kegiatan');
        $poms->mulai = $request->get('mulai');
        $poms->selesai = $request->get('selesai');
        $poms->dibuat_oleh = $request->input('dibuat_oleh');
        $poms->diketahui_oleh = $request->input('diketahui_oleh');
        $poms->disetujui_oleh = $request->input('disetujui_oleh');
        $poms->save();

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
        $pom = POM::findOrFail($id);
        return view('marketing.pom.show',compact('pom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pom = POM::findOrFail($id);

        return view('marketing.pom.edit',compact('pom'));
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
        $poms = POM::findOrFail($id);
        $poms->nama_proyek = $request->input('nama_proyek');
        $poms->programmer_proyek = $request->input('programmer_proyek');
        $poms->perihal = $request->input('perihal');
        $poms->peserta_rapat = $request->input('peserta_rapat');
        $poms->lokasi_rapat = $request->input('lokasi_rapat');
        $poms->lr_dibuat_oleh = $request->input('lr_dibuat_oleh');
        $poms->tanggal = $request->get('tanggal');
        $poms->diskusi = $request->input('diskusi');
        $poms->rencana_kegiatan = $request->input('rencana_kegiatan');
        $poms->mulai = $request->get('mulai');
        $poms->selesai = $request->get('selesai');
        $poms->dibuat_oleh = $request->input('dibuat_oleh');
        $poms->diketahui_oleh = $request->input('diketahui_oleh');
        $poms->disetujui_oleh = $request->input('disetujui_oleh');
        $poms->save();

        return redirect('/marketing/pom/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pom = POM::findOrFail($id);
        $pom->delete();
        return back();
    }
}
