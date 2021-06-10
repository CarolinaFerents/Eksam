<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="public/js/app.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="public/css/app.css" rel="stylesheet" />




</head>
<body id="page-top">

<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color: white"><img src="../../public/pictures/logo.png" id="logo" style="width: 100%;"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold text-light"   type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <div class="dropdown">
                    <div class="nav-item mx-0 mx-lg-1 nav-link py-3 px-0 px-lg-3 dropdown-toggle"  data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                        Meist
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#ettevõttest">Ettevõttest</a>
                        <a class="dropdown-item" href="#contact">Kontakt</a>
                    </div>
                </div>
                <a href="#menu"><li class="nav-item mx-0 mx-lg-1 py-3 px-0 px-lg-3">Menüü</li></a>
                @guest
                    <li class="nav-item mx-0 mx-lg-1 py-3 px-0 px-lg-3"> <a class="nav-link" href="{{ route('login') }}">Logi sisse</a></li>

                    @if (Route::has('register'))
                        <li class="nav-item mx-0 mx-lg-1 py-3 px-0 px-lg-3">  <a class="nav-link" href="{{ route('register') }}">Registreeri</a></li>

                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <a style="color:white" href=""><i class="fas fa-shopping-cart fa-2x" style="margin-top: 13px"></i></a>
                <div class="dropdown">
                    <div class="nav-item mx-0 mx-lg-1 nav-link py-3 px-0 px-lg-3 dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-ee"> </span>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="#fr"><span class="flag-icon flag-icon-us"> </span>  </a>
                            <a class="dropdown-item" href="#ru"><span class="flag-icon flag-icon-ru"> </span> </a>
                        </div>

                    </div>

                </div>

        </div>
    </div>

</nav>



<header class="masthead text-white text-center" style="width: 100%; height: 800px">
    <div class="d-flex flex-column" style="width: 100%; height: 100%; background-color: black">
        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"><img alt="First slide" src="pictures/banner1.jpg"></div>
                <div class="carousel-item"><img alt="Second slide" src="pictures/banner2.jpg"></div>
                <div class="carousel-item"><img alt="Third slide" src="pictures/banner3.jpg"></div>
            </div>
        </div>
    </div>
</header>
<div id="timer" style="position: absolute; margin-top: -650px; width: 600px; height: 200px; margin-left: 160px; text-shadow: 2px 2px 5px grey; font-family: 'Archivo Black', sans-serif; float: left">
    <h2 id="loosung" style="font-size: 4rem; float: left">IMEMAITSVAD JA MAHLAKAD BURGERID OOTAVAD SIND!</h2>
</div>
<div style="position: absolute; margin-top: -650px; width: 400px; height: 200px; margin-left: 1100px; text-shadow: 2px 2px 5px grey; font-family: 'Archivo Black', sans-serif; align-content: center">
    <h2 id="countdown" style="width: 500px; color: #F09F20">UUS BURGER MENÜÜSSE:</h2>
    <div id="demo" style="font-size: 1.5em; margin-top: 20px; color: #F09F20"></div>
</div>
<section id="ettevõttest">
    <div class="d-flex justify-content-center">
        <h2 style="color: black; margin-top: 40px">ETTEVÕTTEST</h2>
    </div>
    <div class="d-flex justify-content-center">
        <p style="color: black;margin: 10px; width: 1000px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas blandit erat eget viverra. Donec hendrerit, ipsum vel volutpat tempor, arcu nunc laoreet sem, vel convallis ligula nunc at mauris. Fusce ultrices pharetra<br>
            tortor. Donec eleifend auctor commodo. Donec condimentum velit sit amet mollis pellentesque. Vivamus lobortis sodales mauris, id lobortis ligula tempus non. Integer<br>
            tellus ipsum, ultrices vel dolor et, tristique viverra erat. Ut ut vehicula lacus, id convallis neque. Proin at porttitor metus. Curabitur aliquet risus vel lacus<br>
            congue, quis semper quam rutrum. Praesent arcu orci, bibendum vel libero quis, sodales accumsan elit. Nulla sed elementum magna, et eleifend orci.</p>
    </div>
</section>

@foreach($burgers as $burger)
<section id="menu">
    <div class="d-flex justify-content-center">
        <h2 style="color: black; margin-top: 40px">MENÜÜ</h2>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px">
        <div class="row" style="margin-top: 40px; align-content: center">
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">  {{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-daniel-reche-3616956.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-samfotograffo-3052362.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-valeria-boltneva-1639557.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px">
        <div class="row" style="margin-top: 40px; align-content: center">
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-polina-tankilevitch-4109136.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-maria-perez-2128536.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-jonathan-borba-2983101.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px">
        <div class="row" style="margin-top: 40px; align-content: center">
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-johnny-rizk-2987564.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-horizon-content-4392647.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-horizon-content-4353090.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px">
        <div class="row" style="margin-top: 40px; align-content: center">
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-horizon-content-3764348.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-andrei-marina-7786562.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-horizon-content-3764353.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-left: 20px; margin-right: 20px">
        <div class="row" style="margin-top: 40px; align-content: center">
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-valeria-boltneva-1199960.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-daniel-reche-1556698.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
            <div class="col-sm">
                <h2 class="burgeri_pealkiri" style="color: black">{{$burger->name}}</h2>
                <div class="card" style="width: 35rem; height: 25rem; color: black">
                    <a href="detail.blade.php"><img alt="Image" class="card-img-top" src="pictures/pexels-valeria-boltneva-1639562.jpg"></a>
                </div><button aria-pressed="true" class="btn btn-lg btn-primary rounded-0" role="button" style="margin-top: 20px" type="button">ESITA TELLIMUS</button> <button aria-pressed="true" class="btn btn-secondary btn-lg rounded-0" role="button" type="button">LISA OSTUKORVI</button>
            </div>
        </div>
    </div>
    @endforeach
</section>
<section class="page-section justify-content-center" id="contact" style="margin-top: 40px; color: black; width: 100%">
    <footer class="footer text-center justify-content-center" style="color: black; width: 100%">
        <div style="margin-top: 100px">
            <h2 class="text-uppercase mb-4">Võta meiega ühendust</h2>
            <p class="lead mb-0">Telefon: +372 55 14 2759<br>
                E-post: nehatuburgerid@gmail.com</p>
        </div>
        <div style="margin-top: 20px">
            <h2 class="text-uppercase mb-4">Asukoht</h2>
            <p class="lead mb-0">Pärnu mnt. 57, Tallinn 10135</p>
        </div>
        <div style="margin-top: 20px">
            <h2 class="text-uppercase mb-4">Jälgi meid sotsiaalmeedias</h2><a class="btn btn-social mx-1" href="#!"><i class="fab fa-3x fa-snapchat"></i></a> <a class="btn btn-social mx-1" href="#!"><i class="fab fa-3x fa-twitter"></i></a> <a class="btn btn-social mx-1" href="#!"><i class="fab fa-3x fa-facebook-f"></i></a> <a class="btn btn-social mx-1" href="#!"><i class="fab fa-3x fa-instagram"></i></a>
        </div>
    </footer>
</section>
<div class="copyright py-4 text-center text-dark">
    <small style="font-size: 1.5em">Copyright &copy; Nehatu Burgerid
        <script>
            document.write(new Date().getFullYear());
        </script></small>
</div>
<div>
    <div class="text-right" style="margin-right: 40px; margin-top: -70px">
        <a href="#page-top"><button id="scrollToTopBtn"><i class="fas fa-angle-double-up"></i></button></a>
    </div>
</div>

</body>
</html>
