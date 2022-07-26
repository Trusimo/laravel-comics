@php
    $voices = array(
    "Characters",
    "Comics",
    "Movies",
    "TV",
    "Games",
    "Collectibles",
    "Videos",
    "Fans",
    "News",
    "Shop"
);

@endphp

@foreach ($voices as $voice)
    {{ $voice }}
@endforeach

<input type="text" placeholder="Search">

