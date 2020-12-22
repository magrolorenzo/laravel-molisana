<header>
    <div class="">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
    </div>
    <div class="">
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/')}}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('pagina-prodotti') }}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a href="{{ route('news') }}">
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
