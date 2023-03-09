<main>

    <div class="jumb">
        <button>CURRENT SERIES</button>
    </div>
    <!-- sezione card -->
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

    <!-- sezione icone sfondo blu -->
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

    <!-- sezione ultimi links con img di sfondo -->
    <div class="last-links">
        <div class="container-last-links">
            <div>
                <h3>DC COMICS</h3>
                <!-- DC COMICS -->
                @foreach ($dcComicsLinks as $element)
                <a href="#"> {{ $element['text'] }}</a><br>
                @endforeach
                <!-- SHOP -->
                <h3>SHOP</h3>
                @foreach ($shopLinks as $element)
                <a href="#"> {{ $element['text']}}</a><br>
                @endforeach
            </div>


            <div>
                <h3>DC</h3>
                <!-- DC -->
                @foreach ($DC as $element)
                <a href="#"> {{ $element['text']}}</a><br>
                @endforeach
            </div>
            <div>c</div>
        </div>
    </div>
</main>