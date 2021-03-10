<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function menu(){
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Article::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun
        ]);

        return redirect('/create');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('edit', compact('article'));
    }

    public function update(Request $request, $id){
        Article::where('id', $id)
            ->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'halaman' => $request->halaman,
                'tahun' => $request->tahun
            ]);
        
            return redirect('/');
    } 

    public function destroy($id){
        Article::destroy($id);
        return redirect('/');
    }
}
