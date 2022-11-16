<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('artikels')
        ->join('categories', 'categories.id', '=', 'artikels.categories_id')
        ->select('artikels.*', 'categories.name as cname')
        ->get();
        // dd($data);
        return view('artikel.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('artikel.tambah', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= Artikel::create([
            'judul' =>$request->judul,
            'isi' =>$request->isi,
            'foto' =>$request->file('foto')->store('img'),
            'categories_id' =>$request->categories_id,
            'tgl_artikel' =>$request->tgl_artikel,
            'penulis_artikel' =>$request->penulis_artikel,
        ]);

        return redirect('artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $category = Category::all();
        $category_select = Category::all()->where('id', $artikel->id);
        // dd($category_select);
        return view('artikel.edit',compact('artikel', 'category', 'category_select'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        if($request->file('foto')){
            $artikel->judul =$request->judul;
            $artikel->isi =$request->isi;
            $artikel->foto =$request->file('foto')->store('img');
            $artikel->categories_id =$request->categories_id;
            $artikel->tgl_artikel =$request->tgl_artikel;
            $artikel->penulis_artikel =$request->penulis_artikel;
            $artikel->save();
        }else{
            $artikel->judul =$request->judul;
            $artikel->isi =$request->isi;
            $artikel->foto =$artikel->foto;
            $artikel->categories_id =$request->categories_id;
            $artikel->tgl_artikel =$request->tgl_artikel;
            $artikel->penulis_artikel =$request->penulis_artikel;
            $artikel->save();
        }

        return redirect('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect('artikel');
    }

    public function tampil()
    {
        $data = DB::table('artikels')
        ->join('categories', 'categories.id', '=', 'artikels.categories_id')
        ->select('artikels.*', 'categories.name as cname')
        ->get();
        // dd($data);
        return view('welcome', compact('data'));
    }
}
