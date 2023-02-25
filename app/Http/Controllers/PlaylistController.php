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
            'playlists' => Playlist::latest()->paginate(4)
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
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('playlists', 'name')],
            'description' => 'required'
        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Playlist::create($formFields);

        return redirect('/')
                ->with('newPlaylist', 'Playlist Created.');
    }

    // Show edit playlist form
    public function edit(Playlist $playlist){
        return view('playlists.edit', ['playlist' => $playlist]);
    }

    // Update playlist data
    public function update(Request $request, Playlist $playlist){
        $formFields = $request->validate([
            'name' => ['required'],
            'description' => 'required'
        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $playlist->update($formFields);

        return back()
                ->with('newPlaylist', 'Playlist Updated Successfully.');
    }

    // Delete Playlist
    public function destroy(Playlist $playlist){
        $playlist->delete();

        return redirect('/')->with('newPlaylist', 'Playlist Deleted Successfully.');
    }

}
