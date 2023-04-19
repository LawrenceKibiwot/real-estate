<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realtor Property Management</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body class="antialiased">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Realtor Property Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                
                    <li class="nav-item">
                        <a class="nav-link" href="/list">Listings</a>
                    </li>  <li class="nav-item">
                        <a class="nav-link" href="/admin">Dashboard</a>
                    </li>
                    
                    {{-- <li class="nav-item">
                <a class="nav-link" href="/upload">Upload</a>
              </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="row footer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  

        <footer>
            <b>Realtor Property Management</b>
            <a href="mailto:biwotlawrence@gmail.com" class="link">
                <p>Author: Bridget Waweru<br>
            </a></p>
        </footer>

    </div>
</div>
</body>

</html>
