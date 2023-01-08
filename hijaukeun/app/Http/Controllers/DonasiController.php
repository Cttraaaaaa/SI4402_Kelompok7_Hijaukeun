<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class DonasiController extends Controller
{

    public function index()
    {
        $donasi=Donasi::orderBy('id','nama')->get();
        return view('pages.masyarakat.donasi');
    }

    public function create()
    {
        return view('pages.masyarakat.donasi');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'jumlah' => 'required|int|max:30',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'pembayaran' => 'required',
            'harapan' => 'required|string|confirmed|min:8',
            'image' => 'required',
            
            ]);
        
        $donasi = $request->all();

        $donasi = Donasi::create([
            'jumlah' => $request -> jml,
            'nama' => $request -> nama,
            'email' => $request -> email,
            'pembayaran' => $request -> pembayaran,
            'harapan' => $request -> harapan,
            'image' => $request -> imgName,
        ]);

        Alert::success('Berhasil', 'Terimakasih Orang baik !! :)');
        return redirect('user/pengaduan');
    }

    public function edit(Request $request, $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {   

        Donasi::find($id)->delete();

        return redirect('user/Dashboard');  
    }
}
