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

    public function userID($id){
    	$value = DB::table('user')
    	->where('id','=',$id)
    	->first();
    	
    	return view('index2', compact('value'));
    }

    public function create(Request $request){
    	$data = DB::table('user')->insert(['user' => $request->user]);
    	if($data) return "berhasil";
    	else "gagal";
    }

    public function update(Request $request){
    	$data = DB::table('report')
    	->insert(['id_user' => $request->id, 'gerak' => $request->gerak, 'value' => $request->value]);

    	if($data) return "berhasil";
    	else "gagal";
    }

    public function grafik($id){
        $user = DB::table('user')
        ->where('id','=',$id)
        ->first();

        for($i=1; $i<12; $i++){
            $gerak[$i] = DB::table('report')
            ->where('id_user','=',$id)
            ->where('gerak','=',$i)
            ->limit(10)
            ->get();
        }

        return view('grafik', compact('user', 'gerak'));
    }

    public function grafik2($id, $gerak){
        $data = DB::table('report')
        ->where('id_user','=',$id)
        ->where('gerak','=',$gerak)
        ->limit(10)
        ->get();

        $count = 0;

        foreach ($data as $value) {
            $count = $count + $value->value;
        }

        foreach ($data as $value) {
            $value->value = $value->value/$count*100;
            $value->tanggal = date_format(date_create($value->tanggal), 'd-m-Y');
        }

        return view('grafik2', compact('data', 'gerak'));
    }
}
