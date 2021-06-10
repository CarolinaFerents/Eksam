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
    <script src="js/scripts.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />




</head>
<body id="page-top">

<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html" style="color: white"><img src="pictures/logo.png" id="logo" style="width: 100%;"></a>

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
                        <a class="dropdown-item" href="index.html#ettevõttest">Ettevõttest</a>
                        <a class="dropdown-item" href="index.html#contact">Kontakt</a>

                    </div>
                </div>

                <a href="index.html#menu"><li class="nav-item mx-0 mx-lg-1 py-3 px-0 px-lg-3">Menüü</li></a>
                <li class="nav-item mx-0 mx-lg-1 py-3 px-0 px-lg-3"><a class="nav-link" href="{{ route('register') }}">Registreeri</a></li>
                <li class="nav-item mx-0 mx-lg-1 py-3 px-0 px-lg-3"> <a class="nav-link" href="{{ route('login') }}">Logi sisse</a></li>
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



<div  style="display: flex; align-items: center; justify-content: center">
    @foreach($burgers as $burger)
    <div class="row justify-content-center d-flex" style="margin-top: 150px; align-content: center;  width: 1500px">
        <div class="col-sm">

            <div id="arrow">

                <a href="index.html#menu"> <i class="fas fa-3x fa-angle-double-left" color="black" ></i> </a>

                <div id="tagasi" style="margin-top: -40px; margin-left: 40px">
                    <a href="index.html#menu"> <h2 class="text-uppercase mb-4" id="tekst"style="color: black; ">Tagasi</h2></a>

                </div>
            </div>


            <div  style="width: 50rem; height: 25rem; color: black">



                <img class="card-img-top" src="pictures/pexels-daniel-reche-3616956.jpg" alt="Image">

            </div>



        </div>



        <div id="detail" class="col-sm justify-content-center" style="margin-top: 65px; margin-left: 20px">

            <h2 class="burgeri_pealkiri" style="color: black; font-size: 5em;  text-shadow: -1px 1px 0 #000, 1px 1px 0 white, 1px -1px 0 white, -1px -1px 0 white;">  {{$burger->name}}</h2>
            <div class="card d-flex" style="width: 35rem; height: 27rem; color: black">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$burger->description}}</li>
                    <li class="list-group-item"><p>LISAINFO</p> <br>
                        <div style="margin-top: -30px">{{$burger->additional}}
                        </div>
                    </li>
                    <li class="list-group-item"><p>HIND</p> <br>
                        <div style="margin-top: -30px; font-size: 1.5em ">{{$burger->price}} €
                        </div>
                    </li>
                    <li class="list-group-item"><p>TERAVUS</p> <br>
                        <div style="margin-top: -30px; font-size: 1.5em ">{{$burger->spicy}}
                        </div>
                    </li>
                </ul>
            </div>

            <button type="button" style="margin-top: 25px" class="btn btn-lg btn-primary rounded-0" role="button" aria-pressed="true">ESITA TELLIMUS</button>
            <button type="button" style="margin-top: 25px" class="btn btn-secondary btn-lg rounded-0" role="button" aria-pressed="true">LISA OSTUKORVI</button>


        </div>

    </div>
    @endforeach
</div>





<section class="page-section justify-content-center" id="contact" style="margin-top: 200px; color: black; width: 100%">



    <footer class="footer text-center justify-content-center" style="color: black; width: 100%">







        <div style="margin-top: 40px">
            <h2 class="text-uppercase mb-4">Võta meiega ühendust</h2>
            <p class="lead mb-0">

                Telefon: +372 55 14 2759

                <br />

                E-post: nehatuburgerid@gmail.com

            </p>
        </div>

        <div style="margin-top: 20px">
            <h2 class="text-uppercase mb-4">Asukoht</h2>
            <p class="lead mb-0">

                Pärnu mnt. 57, Tallinn 10135

            </p>
        </div>

        <div style="margin-top: 20px">
            <h2 class="text-uppercase mb-4">Jälgi meid sotsiaalmeedias</h2>
            <a class="btn  btn-social mx-1" href="#!"><i class="fab fa-3x fa-snapchat"></i></a>
            <a class="btn  btn-social mx-1" href="#!"><i class="fab fa-3x fa-twitter"></i></a>
            <a class="btn  btn-social mx-1" href="#!"><i class="fab fa-3x fa-facebook-f"></i></a>
            <a class="btn  btn-social mx-1" href="#!"><i class="fab fa-3x fa-instagram"></i></a>


        </div>




    </footer>
</section>



<div class="copyright py-4 text-center text-dark">


    <small style="font-size: 1.5em">
        Copyright &copy; Nehatu Burgerid

        <script>
            document.write(new Date().getFullYear());
        </script>
    </small>


</div>


<div class="text-right" style="margin-right: 40px; margin-top: -70px">
    <a href="#page-top"><button id="scrollToTopBtn"><i class="fas fa-angle-double-up"></i></button></a>
</div>




</body>
</html>
