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

    public function edit($id)
    {
        $comicToModify = Comic::findOrFail($id);
        return view('comics.edit', ["comic" => $comicToModify]);
    }

    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $data = $request->all();

        $data["artists"] = explode(",", $data["artists"]);
        $data["writers"] = explode(",", $data["writers"]);

        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
