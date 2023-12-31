<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    // public function store(Request $request)
    // {
    //     DB::table('pengaduans')->where('id', $request->pengaduan_id)->update([
    //         'status' => null,
    //     ]);

    //     $petugas_id = Auth::user()->id;

    //     $data = $request->all();

    //     $data['pengaduan_id'] = $request->pengaduan_id;
    //     $data['petugas_id'] = $petugas_id;


    //     Alert::success('Berhasil', 'Pengaduan berhasil ditanggapi');
    //     Tanggapan::create($data);
    //     return redirect()->route('pengaduan.index');
    // }

    public function store(Request $request)
    {
        $petugas_id = Auth::user()->id;

        $data = $request->all();
        $data['status'] = 'Belum di Proses'; // Set the initial status to "Belum di Proses"
        $data['pengaduan_id'] = $request->pengaduan_id;
        $data['petugas_id'] = $petugas_id;

        if ($request->has('status')) {
            // Check the user input for the status and update accordingly
            $status = $request->status;
            if ($status === 'Sedang di Proses' || $status === 'Selesai') {
                $data['status'] = $status;
            }
        }

        Alert::success('Berhasil', 'Pengaduan berhasil ditanggapi');
        Tanggapan::create($data);

        // Update the status of the pengaduan
        $pengaduan = Pengaduan::findOrFail($request->pengaduan_id);
        $pengaduan->status = $data['status']; // Update the status based on the user input
        $pengaduan->save();

        return redirect()->route('pengaduan.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::with(['details', 'user'])->findOrFail($id);

        return view('pages.admin.tanggapan.add', [
            'pengaduan' => $pengaduan
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
