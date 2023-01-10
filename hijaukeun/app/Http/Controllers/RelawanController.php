<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;
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
        return view('pages.masyarakat.relawan');
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
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
