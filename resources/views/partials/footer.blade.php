@php
    $dccomics = array(
    "Characters",
    "Comics",
    "Movies",
    "TV",
    "Games",
    "Videos",
    "News"
);

    $dc = array(
    "Terms of use",
    "Privacy Policy",
    "AD Choices",
    "Advertising",
    "Jobs",
    "Subscriptions",
    "Talent Workshop",
    "Certificates",
    "Ratings",
    "Shop Help",
    "Contact us"
);

@endphp
<h5>DC COMICS</h5>
@foreach ($dccomics as $footlist)
    <ul>
        <li>{{ $footlist }}</li>
    </ul>
@endforeach

<h5>DC</h5>
@foreach ($dc as $footlist)
    <ul>
        <li>{{ $footlist }}</li>
    </ul>
@endforeach