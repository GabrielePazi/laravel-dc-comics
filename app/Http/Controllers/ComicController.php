<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {//visulizzazione dati
        $data = Comic::all();

        return view("comics.index", ["comics" => $data]);
    }

    public function show($id) {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }
}
