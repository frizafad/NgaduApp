<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\masalah;
use App\Warga;
use App\Bidang;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $fixedissue = count(Masalah::where('status_masalah', 'selesai')->get());
        $issue = count(Masalah::all());
        $account = count(Warga::all());
        $processed = count(masalah::where('status_masalah','diproses')->get());
        $time = Carbon::now();
        
        $join = masalah::all();

        return view('dashboard')->with(compact(['fixedissue','issue','time','account','join','processed']));
    }

    public function update($id)
    {
        $masalah = masalah::find($id);

        return view('pages.update-form')->with(compact(['masalah']));
    }

    public function store(Request $request, $id)
    {
        
        $store = masalah::find($id);

        $store->status_masalah = $request->status;
        
        $store->save();

        return redirect()->route('home');
    }


}
