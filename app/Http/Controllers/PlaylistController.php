<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlaylistController extends Controller
{
    // Get and show all playlists
    public function index(){
        return view('playlists.index', [
            'playlists' => Playlist::all()
        ]);
    }

    // Show single playlist
    public function show(Playlist $playlist){
        return view('playlists.show', [
            'playlist' => $playlist
        ]);
    }

    // Show add playlist form
    public function create(){
        return view('playlists.create');
    }

    // Show add playlist form
    public function store(Request $request){
        // dd($request->all());

        $formFields = $request->validate([
            'name' => ['required', Rule::unique('playlists', 'name')],
            'description' => 'required'
        ]);
    }
}
