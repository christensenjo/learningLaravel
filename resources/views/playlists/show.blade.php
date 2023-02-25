<x-layout>
    <x-card class="playlistView">
        <h1>Title: {{ $playlist['name'] }}</h1>
        <p>Description: {{ $playlist['description'] }}</p>
        <img class="bigImage" src="{{ $playlist->image ? asset('storage/' . $playlist->image) : asset('/images/logo.png') }}" />
        <ul class="songsList">
            <li>Song 1</li>
            <li>Song 2</li>
            <li>Song 3</li>
        </ul>
        <button class="showButton"><a href="/playlists/{{ $playlist->id }}/edit">Edit this Playlist</a></button>
        <form method="POST" action="/playlists/{{$playlist->id}}">
            @csrf
            @method('DELETE')

            <button class="showButton" type="submit">Delete</button>
        </form>
    </x-card>
</x-layout>