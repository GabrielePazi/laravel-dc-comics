<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    { //visulizzazione dati
        $data = Comic::all();

        return view("comics.index", ["comics" => $data]);
    }

    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = $data["price"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->series = $data["series"];
        $newComic->type = $data["type"];
        $newComic->artists = json_encode(explode(",", $data["artists"]));
        $newComic->writers = json_encode(explode(",", $data["writers"]));

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }
}
