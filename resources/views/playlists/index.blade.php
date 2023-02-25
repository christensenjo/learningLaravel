<x-layout>
    <div class="allPlaylists">


    @unless(count($playlists) == 0)

        @foreach($playlists as $playlist)
            <x-playlist-card :playlist="$playlist" />
        @endforeach

    @else
        <p>No Lists Found</p>
    @endunless

    <button><a href="/playlists/add">Add Playlist</a></button>
    </div>
    <div class="pagesLinks">
        {{$playlists->links()}}
    </div>

</x-layout>