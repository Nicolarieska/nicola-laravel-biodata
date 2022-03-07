<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, {{ $tittle }}</title>
  </head>
  <body>
      <div class="navigasi">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
            <div class = "container">
              <a class="navbar-brand" href="/home">Biodata Nicola Arieska</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link {{ ($tittle === "home") ? 'active' : '' }}" href="/home">Home <span class="sr-only"></span></a>
                  <a class="nav-item nav-link {{ ($tittle === "biodata") ? 'active' : '' }}" href="/biodata">Biodata</a>
                  <a class="nav-item nav-link {{ ($tittle === "komentar") ? 'active' : '' }}" href="/komentar">Komentar</a>
                </div>
              </div>
            </div>
          </nav>
      </div>
      <div class="section">
          <div class="content">
              <br><br><br>
            <p>@yield('content')</p>
          </div>
      </div>
  </body>
</html>