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
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <span>
              Taxi Man
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Accueil <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="{{url('user/about')}}"> A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('user/reservation')}}"> Réservation </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('user/contact')}}">Contact Us</a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/login') }}"> Se connecter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/register') }}">S'inscrire</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 offset-lg-2 offset-md-1">
          <div class="detail-box">
            <h2>
              About <br>
              Taxi Company
            </h2>
            <p>
              "Taxi Man" est une entreprise de transport de personnes qui opère dans la ville de Dakar, la capitale du
              Sénégal. Fondée il y a plusieurs années, elle est devenue une référence en matière de transport en ville
              grâce à son professionnalisme, son expérience et sa qualité de service. L'entreprise propose des courses
              de taxi dans toute la ville de Dakar pour les résidents locaux, les voyageurs d'affaires et les touristes.

              Les chauffeurs de "Taxi Man" sont des professionnels qualifiés et expérimentés, qui connaissent bien les
              rues et les quartiers de la ville. Ils sont formés pour offrir un service convivial, sûr et confortable à
              tous les passagers. En outre, ils sont équipés de GPS pour faciliter la navigation dans la ville.

              L'entreprise dispose d'une flotte de voitures modernes et bien entretenues pour répondre aux besoins de
              ses clients. Les voitures sont régulièrement inspectées et nettoyées pour garantir un environnement de
              conduite confortable et hygiénique. Les véhicules de "Taxi Man" sont équipés de climatisation pour
              garantir un voyage agréable, surtout pendant les mois d'été où les températures peuvent être très élevées.


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

</body>

</html>