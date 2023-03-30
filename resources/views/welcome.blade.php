<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Taxi Man</title>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>










    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>


    <div class="modal fade" id="reserveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ticket de Réservation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #F5D042;">
                    <div class="ticket-info">
                        <h3 class="ticket-title text-center text-uppercase mb-3">Ticket de réservation</h3>
                        <div class="ticket-details">
                            <div class="row mb-3">
                                <div class="col-4 text-end">
                                    <span class="fw-bold">Départ :</span>
                                </div>
                                <div class="col-8 text-start">
                                    <span id="modal-depart"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-end">
                                    <span class="fw-bold">Destination :</span>
                                </div>
                                <div class="col-8 text-start">
                                    <span id="modal-destination"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-end">
                                    <span class="fw-bold">Heure :</span>
                                </div>
                                <div class="col-8 text-start">
                                    <span id="modal-heure"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-4 text-end">
                                    <span class="fw-bold">Prix :</span>
                                </div>
                                <div class="col-8 text-start">
                                    <span id="modal-prix"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @auth
                        <div style="color: black; text-align: center; margin-top: 20px;">
                            <p>Voici votre ticket : <strong>{{ Auth::user()->name }}</strong> !</p>
                        </div>
                    @endauth

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Confirmer</button>
                </div>
            </div>
        </div>
    </div>




    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span>
                            Taxi Man
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Accueil <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ url('user/about') }}"> A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('user/reservation') }}"> Réservation </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('user/contact') }}">Contact Us</a>
                                </li> --}}
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/login') }}"> Se connecter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/register') }}">S'inscrire</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 ">
                        <div class="box">
                            <div class="detail-box">
                                <h4>
                                    Choisissez notre
                                </h4>
                                <h1>
                                    Taxi Man
                                </h1>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <div class="img-box">
                                            <img src="images/slider-img.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/slider-img.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/slider-img.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/slider-img.png" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="images/slider-img.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a href="" class="btn-1">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-5 ">
            <div class="slider_form">
              <h4>
                Get A Taxi Now
              </h4>
              <form action="">
                <input type="text" placeholder="Car Type">
                <input type="text" placeholder="Pick Up Location">
                <input type="text" placeholder="Drop Location">
                <div class="btm_input">
                  <input type="text" placeholder="Your Phone Number">
                  <button>Book Now</button>
                </div>
              </form>
            </div>
          </div> --}}
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5 offset-lg-2 offset-md-1">
                    <div class="detail-box">
                        <h2>
                            A propos de <br>
                            Taxi Man
                        </h2>
                        <p>
                            "Taxi Man" est une entreprise de taxi située dans la ville de Dakar, au Sénégal. Elle
                            propose des services de transport en ville pour les résidents et les visiteurs. Les
                            chauffeurs de "Taxi Man" sont expérimentés et offrent un service professionnel et convivial
                            pour assurer un voyage confortable et sûr. L'entreprise dispose d'une flotte de voitures
                            modernes et bien entretenues pour répondre aux besoins de ses clients. Que ce soit pour se
                            rendre à un rendez-vous d'affaires ou pour une soirée entre amis, "Taxi Man" est la solution
                            idéale pour les déplacements dans la ville de Dakar.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Choisissez votre<br>
                    Destination
                </h2>
            </div>
            @guest
                <div class="card">
                    <div class="card-body">
                        <h2>Connectez-vous pour voir les trajets disponibles !!!</h2>
                    </div>
                </div>
            @else
                <div class="service_container">
                    {{-- <div class="box">
                    <div class="img-box">
                        <img src="images/delivery-man.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Private Driver
                        </h5>
                        <p>
                            Lorem ipsum dolor sit ame
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/airplane.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Airport Transfer
                        </h5>
                        <p>
                            Lorem ipsum dolor sit ame
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div> --}}
                    @foreach ($trajets as $trajet)
                        <div class="card">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/contact-img.png" alt="">
                                </div>
                                <div class="card-footer">
                                    <div class="detail-box">
                                        <h5 class="depart">
                                            DEPART : {{ $trajet->depart }}
                                        </h5>
                                        <h5 class="destination">
                                            DESTINATION : {{ $trajet->arriver }}
                                        </h5>
                                        <h5 class="heure">
                                            HEURE : {{ $trajet->heure }}
                                        </h5>
                                        <h5 class="prix">
                                            PRIX : {{ $trajet->prix }}
                                        </h5>
                                        <a data-bs-toggle="modal" data-bs-target="#reserveModal" href="#"
                                            class="reserve-link">
                                            Réserver
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endguest

        </div>
    </section>

    <!-- end service section -->

    <!-- news section -->

    <section class="news_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Nos <br>
                    Chauffeurs
                </h2>
            </div>
            @guest
                <div class="card">
                    <div class="card-body">
                        <h2>Connectez-vous pour voir nos chauffeurs !!!</h2>
                    </div>
                </div>
            @else
                <div class="news_container">

                    {{-- <div class="box">
                    <div class="date-box">
                        <h6>
                            01 Nov 2019
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="images/news-img.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            Eiusmod tempor incididunt
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="date-box">
                        <h6>
                            01 Nov 2019
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="images/news-img.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            Eiusmod tempor incididunt
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </p>
                    </div>
                </div> --}}
                    @foreach ($chauffeurs as $chauffeur)
                        <div class="box">
                            <div class="card-body">
                                {{-- <div class="date-box">
                            <h6>
                                01 Nov 2019
                            </h6>
                        </div> --}}
                                <div class="img-box">
                                    <img src="{{ asset('/uploads/chauffeur/' . $chauffeur->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h3>
                                        {{ $chauffeur->prenom }}
                                    </h3>
                                    <h4>
                                        {{ $chauffeur->nom }}
                                    </h4>
                                    <h5>
                                        TEL : {{ $chauffeur->tel }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            @endguest
        </div>
    </section>

    <!-- end news section -->

    <!-- client section -->

    {{-- <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    What <br>
                    Client <br>
                    Says
                </h2>
            </div>
            <div class="client_container"> --}}
    {{-- <div class="carousel-wrap ">
                    <div class="owl-carousel"> --}}
    {{-- <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client-1.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h3>
                                        Aliqua
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et amet, consectetur adipiscing
                                    </p>
                                    <img src="images/quote.png" alt="">
                                </div>
                            </div>
                        </div> --}}
    {{-- <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/backpack.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h3>
                                        
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et amet, consectetur adipiscing
                                    </p>
                                    <img src="images/quote.png" alt="">
                                </div>
                            </div>
                        </div> --}}
    {{-- </div>
                </div>
            </div> --}}
    {{-- </div>
    </section> --}}

    <!-- end client section -->

    <!-- contact section -->

    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Posez nous <br>
                    Vos Questions
                </h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5  offset-md-1">
                    <div class="contact_form">
                        <h4>
                            Contactez nous
                        </h4>
                        <form action="">
                            <input type="text" placeholder="Nom">
                            <input type="text" placeholder="Numero">
                            <input type="text" placeholder="Message" class="message_input">
                            <button>Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/contact-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- app section -->

    <section class="app_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>
                            Download Our app
                        </h2>
                        <div class="text-box">
                            <h5>
                                details
                            </h5>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when distribution of letters
                            </p>
                        </div>
                        <div class="text-box">
                            <h5>
                                How it works
                            </h5>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when distribution of letters
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="">
                                <img src="images/playstore.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/appstore.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/mobile.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end app section -->

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Why <br>
                    Choose Us
                </h2>
            </div>
            <div class="why_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/delivery-man-white.png" alt="" class="img-1">
                        <img src="images/delivery-man-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Best Drivers
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/shield-white.png" alt="" class="img-1">
                        <img src="images/shield-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Safe and Secure
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/repairing-service-white.png" alt="" class="img-1">
                        <img src="images/repairing-service-black.png" alt="" class="img-2">
                    </div>
                    <div class="detail-box">
                        <h5>
                            24x7 support
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->

    <!-- info section -->

    <section class="info_section layout_padding-top layout_padding2-bottom">
        <div class="container">
            <div class="box">
                <div class="info_form">
                    <h4>
                        Subscribe Our Newsletter
                    </h4>
                    <form action="">
                        <input type="text" placeholder="Enter your email">
                        <div class="d-flex justify-content-end">
                            <button>

                            </button>
                        </div>
                    </form>
                </div>
                <div class="info_links">
                    <ul>
                        <li class=" ">
                            <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="">
                            <a class="" href="about.html"> About</a>
                        </li>
                        <li class="">
                            <a class="" href="service.html"> Services </a>
                        </li>
                        <li class="">
                            <a class="" href="news.html"> News</a>
                        </li>
                        <li class="">
                            <a class="" href="contact.html">Contact Us</a>
                        </li>
                        <li class="">
                            <a class="" href="#">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="info_social">
                    <div>
                        <a href="">
                            <img src="images/fb.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/twitter.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <div class="container">
            <p>
                &copy; 2021 All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>


    <script>
        const reserveLinks = document.querySelectorAll('.reserve-link');
        reserveLinks.forEach((reserveLink) => {
            reserveLink.addEventListener('click', (event) => {
                event.preventDefault();

                // Récupère les informations du trajet correspondant à l'élément cliqué
                const card = event.target.closest('.card');
                const depart = card.querySelector('.depart').textContent.trim();
                const destination = card.querySelector('.destination').textContent.trim();
                const heure = card.querySelector('.heure').textContent.trim();
                const prix = card.querySelector('.prix').textContent.trim();

                // Met à jour le contenu du modal avec les informations du trajet
                const modalDepart = document.querySelector('#modal-depart');
                const modalDestination = document.querySelector('#modal-destination');
                const modalHeure = document.querySelector('#modal-heure');
                const modalPrix = document.querySelector('#modal-prix');

                modalDepart.textContent = depart;
                modalDestination.textContent = destination;
                modalHeure.textContent = heure;
                modalPrix.textContent = prix;
            });
        });
    </script>




    <!-- owl carousel script -->
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            navText: [],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });
    </script>
    <!-- end owl carousel script -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
</body>

</html>
