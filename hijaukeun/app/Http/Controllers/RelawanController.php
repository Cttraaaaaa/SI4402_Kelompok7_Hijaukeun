<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use RealRashid\SweetAlert\Facades\Alert;

class RelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Relawan::orderBy('created_at', 'DESC')->get();
        return view('pages.masyarakat.relawan', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.masyarakat.relawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'domisili'=>'required',
            'nohp'=>'required',
            'email'=>'required',
            'image'=>'required',
        ]);
        $data = [
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'domisili'=>$request->domisili,
            'nohp'=>$request->nohp,
            'email'=>$request->email,
            'image'=>$request->image,
        ];
        Alert::success('Berhasil', 'Terimakasih orang baik ! :)');
        Relawan::create($data);
        return view('pages.masyarakat.relawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(request $id)
    {

        $data = Relawan::orderBy('created_at', 'desc')->get();

        $tangap = Relawan::where('id', $id)->first();

        return view('pages.admin.relawan.detailr', [
            'data' => $data,
            'tangap' => $tangap
        ]);

    }

    public function lihat()
    {
        $data = Relawan::orderBy('created_at', 'desc')->get();

        return view('pages.masyarakat.historyr', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $status->update($data);
        return redirect('admin/relawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relawan = Relawan::find($id);
        $relawan->delete();

        Alert::success('Berhasil', 'daftar relawan telah dihapus dari daftar');
        return redirect('admin/relawan');
    }
}
