<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Relawan;
use App\Models\User;
use App\Models\Donate;
use PDF;


class AdminController extends Controller
{
    public function __invoke()
    {
    }

    public function index($id)
    {

        $item = Relawan::with([
            'details', 'nama'
        ])->findOrFail($id);

        $item = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.admin.tanggapan.add', [
            'item' => $item
        ]);
    }

    public function masyarakat()
    {

        $data = DB::table('users')->where('roles', '=', 'USER')->get();

        return view('pages.admin.masyarakat', [
            'data' => $data
        ]);
    }
    public function donate()
    {

        $data = Donate::orderBy('created_at', 'desc')->paginate();

        return view('pages.admin.donate', [
            'data' => $data
        ]);
    }

    public function relawan()
    {

        $data = Relawan::orderBy('created_at', 'desc')->paginate();

        return view('pages.admin.relawan.index', [
            'data' => $data
        ]);
    }

    public function laporan()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.laporan', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function cetak()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        $pdf = PDF::loadview('pages.admin.pengaduan', [
            'pengaduan' => $pengaduan
        ]);
        return $pdf->download('laporan.pdf');
    }

    public function pdf($id)
    {

        $pengaduan = Pengaduan::find($id);

        $pdf = PDF::loadview('pages.admin.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
