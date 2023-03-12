<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/album.css')}}" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-start">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <strong>Home</strong>
          </a>
          <a href="/news" class="navbar-brand d-flex align-items-center">
            News
          </a>
          <a href="/categories" class="navbar-brand d-flex align-items-center">
            Categories
          </a>
        </div>
      </div>
    </header>

    <main role="main">

      <div class="album py-5 bg-light">
        @yield('content')
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
  </body>
</html>
