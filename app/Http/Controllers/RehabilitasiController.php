<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RehabilitasiController extends Controller
{
    public function user(){
    	$data = DB::table('user')->get();
    	return view('index', compact('data'));
    }

    public function create(Request $request){
    	$data = DB::table('user')->insert(['user' => $request->user]);
    	if($data) return "berhasil";
    	else "gagal";
    }
}
