<!DOCTYPE html>
<html>
    <head>
        <title>@yield('page_title') | Product Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/fontawesome/css/all.min.css') }}">

        <!-- Additional -->
        <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>

        <style>
            * {
                font-family: Arial, Helvetica, sans-serif;
            }

            html, body {
                height: 100%;
            }

            footer {
                position: relative;
                width: 100%;
                padding: 18px;
            }

            .nolink {
                color: #cccccc;
            }

            .nolink:hover {
                color: #acacac;
                transition: 0.3s
            }
        </style>
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <p class="navbar-brand mb-0 h1">Product Manager</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-sm" style="border: 1px solid #ccc; border-radius: 4px; margin-top: 10%; margin-bottom: 15%; padding: 18px; min-height: 100%;">
            <br/>
            <br/>

            @yield('title')

            <br/>
            <hr/>
            <br/>

            @yield('content')

            <br/>
            <br/>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-center text-muted">
            <a class="nolink" href="https://github.com/ReynaldyNC"><i class="fab fa-github"></i></a>
            |
            <a class="nolink" href="https://www.instagram.com/reyn.crs"><i class="fab fa-instagram"></i></a>

            <br/>
            <br/>

            <p>&copy;ReynaldyNC. 2021</p>
        </footer>
    </body>
</html>
