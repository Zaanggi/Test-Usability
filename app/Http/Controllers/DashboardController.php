<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::count();
        $penilaian = Penilaian::count();
        $petugas = User::where('roles', 'ADMIN')->count();
        $customer = User::where('roles', 'PELANGGAN')->count();
        $satu = Penilaian::where('rating', '1/5')->count();
        $dua = Penilaian::where('rating', '2/5')->count();
        $tiga = Penilaian::where('rating', '3/5')->count();
        $empat = Penilaian::where('rating', '4/5')->count();
        $lima = Penilaian::where('rating', '5/5')->count();



        return view('pages.admin.dashboard', [
            'pengaduan' => $pengaduan,
            'penilaian' => $penilaian,
            'petugas' => $petugas,
            'customer' => $customer,
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima
        ]);
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
        //
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
