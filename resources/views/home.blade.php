<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>home</title>
  </head>
  <body>
    <main>
        <h1 class="text-center">{{ $titolo }}</h1>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                  <a class="navbar-brand" href="http://127.0.0.1:8000/">HOME</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/contacts">Contatti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/sponsor">Sponsor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </main>
  </body>
</html>
