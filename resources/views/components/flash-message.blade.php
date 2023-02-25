@if(session()->has('newPlaylist'))
    <div class="fixedFlashMsg" 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show">
        <p>{{ session('newPlaylist') }}</p>
    </div>
@endif