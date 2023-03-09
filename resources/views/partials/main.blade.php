<main>

    <div class="jumb">
        <button>CURRENT SERIES</button>
    </div>

    <section>
        <div class="container-cards">
            @foreach ($comics as $element)
            <div class="card">
                <img src="{{ $element['thumb'] }}" alt="">
                <h6>
                    {{ $element['title'] }}
                </h6>
            </div>
            @endforeach
        </div>
        <div class="btn">
            <button class="load-more">LOAD MORE</button>
        </div>
    </section>

    <div class="iconLinkBlu">
        <div class="blu">
            <ul>
                @foreach ($iconLinkBlu as $element)
                <li>
                    <a href="{{ $element['title'] }}">
                        <img src="{{ Vite::asset($element['img']) }}" alt="{{ $element['title'] }}">
                        <span>{{ $element['title'] }}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</main>