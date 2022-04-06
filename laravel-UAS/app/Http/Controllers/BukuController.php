<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use GuzzleHttp\Psr7\UploadedFile;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Buku::all();
        return view("buku.index", ["buku"=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("buku.tambah");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Buku;
        $book->judul_buku = $request->get("judul_buku");
        $book->penulis = $request->get("penulis");
        $book->tahun_rilis = $request->get("tahun_rilis");
        $book->genre = $request->get("genre");
       /* $book->gambar = $request->get("gambar");
        $book->gambar = $request->validate([
            'gambar' => 'required',
            'gambar.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasFile('gambar')){
                $gambar = $request->file('gambar');
                $name = $gambar->getClientOriginalName();
                $gambar->move('images',$name);
                $book->gambar = $name;
        }*/
        $book->save();
        return redirect()->route("buku.index")->with("pesan", "Data buku berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Buku::findOrFail($id);
        return view ("buku.detailbuku", ["buku"=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Buku::findOrFail($id);
        return view("buku.edit", ["buku"=>$book]);
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
        $book = Buku::findOrFail($id);
        $book->judul_buku = $request->get("judul_buku");
        $book->penulis = $request->get("penulis");
        $book->tahun_rilis = $request->get("tahun_rilis");
        $book->genre = $request->get("genre");
       /* $book->gambar = $request->get("gambar");
        $book->gambar = $request->validate([
            
            'gambar.*' => 'mimes:jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasFile('gambar')){
                $gambar = $request->file('gambar');
                $name = $gambar->getClientOriginalName();
                $gambar->move('images',$name);
                $book->gambar = $name;
        }*/
         
        $book->save();
        return redirect()->route("buku.index")->with("pesan", "Data buku berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Buku::findOrFail($id);
        //$book->delete_gambar();
        $book->delete();
        return redirect()->route("buku.index")->with("teks", "Data buku berhasil dihapus");
    }
   /* public function search(Request $request)
    {
         
         $search = $request->search;
         $book = Buku::where('judul_buku','like',"%".$search."%");
         return view("buku.index", ["buku"=>$book]); 
    }*/
}
