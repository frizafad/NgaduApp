<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Masalah;

class masalahController extends Controller
{
    public function index()
    {
        // mengambil data masalah
    	$masalah = Masalah::all();
 
    	// mengirim data pegawai ke view masalah
    	return view('pages.tablelist', ['masalah' => $masalah]);
    }

    // public function create()
    // {
    //     return view('masalah');
    // }

    // public function post(Request $request)
    // {
    //     DB::table('masalah')->insert([
    //         'problem_masalah' => $request-> $problem_masalah,
    //         'tanggal_masalah' => Carbon::now(),
    //         'status_masalah'  => $request->$status_masalah,
    //         'id_bidang'       => $request->$id_bidang,
    //         'id_user'         => $request->$id_user
    //     ]);
    //     return $this->index();
    // }
}
