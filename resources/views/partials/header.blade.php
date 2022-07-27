@php
$voices = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'News', 'Shop'];

@endphp


<div class="container">
    <div class="blue-bar">
        <span>
            DC Power Visa
        </span>
        <span>
            Additional DC Sites
        </span>
    </div>
    <div class="flex-header">
        <img class="logo-dc" src="{{ asset('img/dc-logo.png') }}" alt="">
        @foreach ($voices as $voice)
            <span>{{ $voice }}</span>
        @endforeach
        <input type="text" placeholder="Search">
    </div>
</div>
