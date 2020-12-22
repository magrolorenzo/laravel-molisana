<header>
    <div class="container">

        <div class="logo-container">
            <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
        </div>
        <div class="navbar-container">
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
    </div>
</header>
