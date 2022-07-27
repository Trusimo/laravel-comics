@php
$dccomics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];

$dc = ['Terms of use', 'Privacy Policy', 'AD Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshop', 'Certificates', 'Ratings', 'Shop Help', 'Contact us'];

$sites = ['DC', 'Mad Magazine', 'DC Universe', 'DC Kids', 'DC Power Visa'];

@endphp

<div class="container bg-dc">



    <div class="row flex">
        <div class="col-2">
            <h5 class="text-center">DC COMICS</h5>
            @foreach ($dccomics as $footlist)
                <ul>
                    <li>{{ $footlist }}</li>
                </ul>
            @endforeach
        </div>
        <div class="col-2">
            <h5>DC</h5>
            @foreach ($dc as $footlist)
                <ul>
                    <li>{{ $footlist }}</li>
                </ul>
            @endforeach
        </div>
        <div class="col-2">
            <h5>SITES</h5>
            @foreach ($sites as $footlist)
                <ul>
                    <li>{{ $footlist }}</li>
                </ul>
            @endforeach
        </div>
    </div>
    
</div>
</div>
