<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.masyarakat.donasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.donasi');
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
            'jumlah'=>'required',
            'nama'=>'required',
            'email'=>'required',
            'pembayaran'=>'required',
            'harapan'=>'required',
            'image'=>'required',
        ]);
        $data = [
            'jumlah'=>$request->jumlah,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'pembayaran'=>$request->pembayaran,
            'harapan'=>$request->harapan,
            'image'=>$request->image,
        ];
        Alert::success('Berhasil', 'Terimakasih orang baik ! :)');
        Donasi::create($data);
        return view('pages.masyarakat.history');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function lihat()
    {
        $data = Donasi::orderBy('created_at', 'desc')->paginate();

        return view('pages.masyarakat.history', [
            'data' => $data
        ]);
    }

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
