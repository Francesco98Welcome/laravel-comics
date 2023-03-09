<header>
    <div class="container-header">
        <div class="logo"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt=""></div>
        <div class="links">
            <ul class="links-header">
                @foreach ($links as $link)
                <li class="links-header">
                    {{$link}}
                </li>
                @endforeach
            </ul>
        </div>
        <div>search</div>
    </div>
</header>