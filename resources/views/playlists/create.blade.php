<x-layout>
    <h1 class="subtitle">Add a Playlist</h1>
    <x-card class="createPlaylistForm">
        <form method="POST" action="/playlists">
            @csrf
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Playlist Name" name="name" required>
                
            <label for="description"><b>Description</b></label>
            <textarea id="description" type="textarea" name="description" placeholder="Enter a description of the playlist" required></textarea>
            
            <br />
            <button type="">Create Playlist</button>
        </form>
    </x-card>
</x-layout>