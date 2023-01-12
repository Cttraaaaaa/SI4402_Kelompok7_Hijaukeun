<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.masyarakat.donate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.donate');
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
        Donate::create($data);
        return view('pages.masyarakat.donate');

    }

    public function lihat()
    {
        $data = Donate::orderBy('created_at', 'desc')->paginate();

        return view('pages.masyarakat.history', [
            'data' => $data
        ]);
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
