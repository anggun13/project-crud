<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index(){
        $data = Flower::all();
        return view('dataflower',compact('data'));
    }

    public function tambahflower(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Flower::create($request->all());
        return redirect()->route('flower')->with('success',' Data Berhasil Di Tambahkan ');
    }

    public function tampilkandata($id){
        $data = Flower::find($id);
        //dd($data );

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Flower::find($id);
        $data->update($request->all());
        return redirect()->route('flower')->with('success',' Data Berhasil Di Update ');
    }

    public function delete($id){
        $data = Flower::find($id);
        $data->delete();
        return redirect()->route('flower')->with('success',' Data Berhasil Di Hapus ');
    }

}
