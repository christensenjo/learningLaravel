<x-layout>
    <h1 class="subtitle">Add a Playlist</h1>
    <x-card class="createPlaylistForm">
        <form method="POST" action="/playlists/{{ $playlist->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name"><b>Name</b></label>
            <input value="{{ $playlist->name }}" type="text" placeholder="Enter the new name here" name="name">
            @error('name')
                <p class="errorText">{{ $message }}</p>
            @enderror

            <label for="description"><b>Description</b></label>
            <textarea id="description" type="textarea" name="description" placeholder="Enter the new description here">{{ $playlist->description }}</textarea>
            @error('description')
                <p class="errorText">{{ $message }}</p>
            @enderror            

            <label for="image"><b>Image</b></label>
            <input type="file" name="image" value="Upload a new Icon" />
            <img class="bigImage" src="{{ $playlist->image ? asset('storage/' . $playlist->image) : asset('/images/logo.png') }}" />
            @error('image')
                <p class="errorText">{{ $message }}</p>
            @enderror

            <br />
            <button type="submit">Edit {{ $playlist->name }}</button>
        </form>
    </x-card>
</x-layout>