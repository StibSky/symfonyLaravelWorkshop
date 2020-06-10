<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
    <a class="navbar-brand" href="#">POKEMON</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('characters') ? 'active' : ''}}" href="/index.php/characters">Search
                    Character</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('charactersbyname') ? 'active' : ''}}"
                   href="/index.php/charactersbyname">Alphabetically</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="/index.php/contact">Contact us</a>
            </li>

        </ul>
    </div>
</nav>

