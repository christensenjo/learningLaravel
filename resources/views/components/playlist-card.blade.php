@props(['playlist'])

<x-card>
    <img class="playlistIcon" src="{{ asset('images/logo.png')}}" alt="{{$playlist->name}} Playlist Image" />
    <h2>
        <a href="/playlists/{{ $playlist->id }}">{{ $playlist->name }}</a>
    </h2>
    <p class="shortDescription">{{ $playlist->description }}</p>
</x-card>