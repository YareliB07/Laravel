<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter</title>
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}" />
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar">
            <h2 class="logo"><a href="#">LOGO</a></h2>

            <input type="checkbox" id="menu-toggler">

            <label for="menu-toggler" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z" />
                </svg>
            </label>

            <ul class="all-links">
                <li><a href="index">Home</a></li>
                <li><a href="sombrero">Video</a></li>
                <li><a href="casas">Casas</a></li>
                <li><a href="historia">Historia</a></li>
                <li><a href="personajes">Personajes</a></li>
                <li><a href="personas">Personas</a></li>
            </ul>

        </nav>
    </header>

    @yield('content') @section('content')
    <!--CUERPOOOOO-->

    <footer>
        <div>
            <span>Copyright © 2023 All Rights Reserved</span>
            <span class="link">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </span>
        </div>
    </footer>
</body>

</html>