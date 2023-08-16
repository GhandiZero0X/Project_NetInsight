<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Http\Requests\StoremodulRequest;
use App\Http\Requests\UpdatemodulRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $moduls= Modul::with('kategori')->get();
      $users = Modul::where('id_user',auth()->user()->id)->get();
    return view('pages.admin.table.modul.index',compact('moduls','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $kategoris = Kategori::all();
       $users = auth()->user();
        return view('pages.admin.table.modul.create',compact('kategoris','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validateddata = $request->validate([

            'nama_modul'=>'required|max:100',
            'id_user'=>'required|exists:users,id',
            'id_kategori'=>'required|exists:kategoris,id_kategori',
            'isi_modul'=>'required|max:1000',
            'gambar_modul'=>'required|max:6000|mimes:jpg,jpeg,png',
            'download_modul'=>'required|mimes:doc,docx,pdf,xls,xlxs,ppt,pptx',
            ]);

            if($request->hasFile('gambar_modul')){
                $gambar = $request->file('gambar_modul')->getClientOriginalName();
                $request->file('gambar_modul')->move('imgModul',$gambar);
                $validateddata['gambar_modul']=$gambar;
            }

            if($request->hasFile('download_modul')){
                $file = $request->file('download_modul')->getClientOriginalName();
                $request->file('download_modul')->move('fileModul',$file);
                $validateddata['download_modul']=$file;

            }

            $valid = Modul::create($validateddata);
            if($valid){
                return redirect()->route('modul.index')->with('succes','Berhasil !');
            }
            else{
                return redirect()->back()->with('error','Failed !');
            }

    }

    /**
     * Display the specified resource.
     */
    public function show(modul $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(modul $modul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemodulRequest $request, modul $modul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(modul $modul)
    {
        //
    }
}
