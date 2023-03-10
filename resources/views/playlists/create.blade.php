<x-layout>
    <h1 class="subtitle">Add a Playlist</h1>
    <x-card class="createPlaylistForm">
        <form method="POST" action="/playlists" enctype="multipart/form-data">
            @csrf
            <label for="name"><b>Name</b></label>
            <input value="{{ old('name') }}" type="text" placeholder="Enter Playlist Name" name="name">
            @error('name')
                <p class="errorText">{{ $message }}</p>
            @enderror

            <label for="description"><b>Description</b></label>
            <textarea id="description" type="textarea" name="description" placeholder="Enter a description of the playlist">{{ old('description') }}</textarea>
            @error('description')
                <p class="errorText">{{ $message }}</p>
            @enderror            

            <label for="image"><b>Image</b></label>
            <input type="file" name="image" value="Upload an Icon" />
            @error('image')
                <p class="errorText">{{ $message }}</p>
            @enderror

            <br />
            <button type="submit">Create Playlist</button>
        </form>
    </x-card>
</x-layout>