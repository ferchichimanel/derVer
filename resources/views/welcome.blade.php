<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DoctorLab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

          #more {display: none;}

</style>
        </style>
    </head>
    <body>

    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ url('/admin/login') }}" class="text-sm text-gray-700 underline">Admin</a>
                        <a href="{{ url('/login') }}" class="ml-4 text-sm text-gray-700 underline">Medecin</a>
                    @endauth
                </div>
            @endif

        </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">DoctorLab</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    @if(session('error'))
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
          </div>
      </div>
    @endif
    <div class="container">
      <h1>Bienvenue ?? DoctorLab</h1>
      <h2>Plateforme de visualisation des donn??es g??n??r??es par le syst??me de suivi de diab??te </h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi choisir DoctorLAb?</h3>
              <p>
              Notre mission consiste ?? r??aliser une plateforme Web ?? DoctorLab ?? d??di??es aux
              laboratoires des recherches  offrira l'acc??s au Dashboard pour la visualisation des statistiques
              globale et les recommandation g??n??r??es par les m??decins aussi un espace de partage qui
              contient des manuels et des r??f??rences li??s au diab??te

              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Apprendre encore plus <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Diab??te Gestationnel</h4>
                    <p>Comme pour le diab??te, le diab??te gestationnel est une intol??rance aux glucides<span id="dots"></span><span id="more"> c'est ?? dire un trouble de la r??gulation du glucose (glyc??mie) entra??nant un exc??s de sucre dans le sang ou hyperglyc??mie chronique</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Diab??te de Type 1</h4>
                    <p>Le diab??te de type 1, aussi appel?? diab??te sucr??, est le moins fr??quent des diab??tes<span id="dots"></span><span id="more"> Il est li?? ?? un manque d'insuline ou ?? un d??faut d'action de cette hormone. Le traitement associe r??gime alimentaire et insuline</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>

                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Diab??te de Type 2</h4>
                    <p>Le diab??te de type 2 est une maladie caract??ris??e par une hyperglyc??mie chronique<span id="dots"></span><span id="more"> c'est-??-dire par un taux trop ??lev?? de glucose (sucre) dans le sang. Cette maladie survient g??n??ralement chez les adultes avan??ant en ??ge, et touche davantage les personnes ob??ses ou ayant un surplus de poids</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>

                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://youtu.be/PkHwH-kBn5I" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>
              DOCTORLAB</h3>
            <p>Au service du patient via des activit??s de recherche en laboratoire</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Application web Laboratoire</a></h4>
              <p class="description">
                DoctorLab
                Une application  simple et intuitive permettant de collecter toutes vos donn??es de suivi en un seul endroit gr??ce aux objets connect??s</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Le meilleur outil pour les chercheurs en diab??te</a></h4>
              <p class="description">La plateforme de t??l??surveillance pour les sp??cialistes du diab??te a ??t?? con??ue directement depuis les usages du terrain pour faciliter la pratique au maximum.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">DoctorLab offrira :</a></h4>
              <p class="description"> les tendances relatives ?? l'??volution du diab??te

<br>	Identification des nouveaux facteurs : diagramme du Chord

<br>	Classification des sujets en utilisant l???algorithme Machine ?? vecteurs de support ?? SVM ??
</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Docteurs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departements</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Recherche Lab</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>R??compenses</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>LES CHIFFRES DU DIAB??TE</h2>
          <p>Le diab??te est ?? l???un des principaux tueurs au monde ??, avec l???hypertension art??rielle et le tabagisme, selon l???Organisation Mondiale de la Sant?? (OMS).<span id="dots"></span><span id="more"> Cette maladie constitue un probl??me de sant?? publique majeur et malgr?? les efforts de pr??vention, la pand??mie se poursuit.</span></p>
          <button onclick="myFunction()" id="myBtn">Read more</button>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">En 2014</a></h4>
              <p>En 2014, le diab??te affectait 422 millions de personnes au niveau mondial, alors qu???il ne concernait que 108 millions de patients dans le monde en 1980<span id="dots"></span><span id="more">  et que les premi??res pr??visions de l???Organisation Mondiale de la Sant?? (OMS) et de l???International Diabetes Federation (IDF) s???inqui??taient en 1990 du risque de voir le diab??te affecter 240 millions de personnes en 2025???</span></p>
              <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">En 2019</a></h4>
              <p>En 2019, le diab??te affecte plus de 463 millions de personnes dans le monde, dont 59 millions en Europe (source : Atlas 2019 de la International Diabetes Federation).</span></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">En France</a></h4>
              <p>En 2019, plus de 4,5 millions de personnes en France sont diab??tiques, mais environ 1 million d???entre elles l???ignorent ! Cela repr??sente un co??t de 4 500???/pers<span id="dots"></span><span id="more">  atteinte de diab??te par an.</span></p>
              <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">au sein de la R??gion Grand Est </a></h4>
              <p>En 2018, 365 000 habitants du Grand Est on ??t?? pris en charge pour un diab??te, soit 6,6% de la population de cette r??gion fran??aise.<span id="dots"></span><span id="more">  1 personnes sur 5 est diab??tique au-del?? de 65 ans.

                Dans le Grand Est, la pr??valence standardis??e de personnes diab??tiques est sup??rieure ?? la valeur nationale : 5,7% contre 5%.</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Les complications du diab??te en chiffres</a></h4>
              <p>Le diab??te expose le patient ?? des complications s??v??res :

                en multipliant par 8 le risque d???amputation => 1??re cause d???amputation (hors accidents) avec 8.000 cas par an en France ;<span id="dots"></span><span id="more">  5 ?? 10 % des diab??tiques sont ou seront amput??s de l???orteil, du pied ou de la jambe.
                en multipliant par 8 le risque d???infarctus du myocarde ou d???accident vasculaire c??r??bral => 2??me cause d???accidents cardio-vasculaires</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Suite de complication</a></h4>
              <p>en multipliant par 9 le risque de dialyse pour insuffisance r??nale terminale => 25% des cas de maladies d??truisant les reins lui sont imputables.<span id="dots"></span><span id="more">
                1??re cause de c??cit?? chez l???adulte et peut avoir un impact dramatique sur la qualit?? de vie et notamment en cas de neuropathie s??v??re ; 2% des diab??tiques sont aveugles</span></p>
                <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Les Traitements du diab??te</h2>
          <p>Le traitement pour les patients atteints de diab??te de type 1 est l???injection d???insuline pour compenser l???insuffisance de s??cr??tion de leur insuline endog??ne (environ 10% des patients).<span id="dots"></span><span id="more">

Dans le cas du diab??te de type 2, le traitement est constitu?? dans un premier temps de m??dicaments antidiab??tiques qui am??liorent l???activit?? de l???insuline produite par le pancr??as du patient, ou qui augmentent la production d???insuline si celle-ci s???av??re trop faible.

Dans les faits, pr??s de la moiti?? des cas de diab??te de type 2 ??voluent vers une forme n??cessitant l???administration d???insuline.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="">AUTOSURVEILLANCE </a></h4>
              <p>L???autosurveillance glyc??mique permet de contr??ler ?? tout moment la valeur de sa glyc??mie ?? l???aide d???appareils mesurant le sucre dans le sang : <span id="dots"></span><span id="more"> les lecteurs de glyc??mie.

               ?? partir des r??sultats obtenus, la personne diab??tique est en mesure d???adapter son traitement en accord avec son m??decin : son alimentation, son activit?? physique, son insuline ou ses comprim??s antidiab??tiques. Cette gestion quotidienne permet de maintenir des glyc??mies au plus pr??s des valeurs normales.</span></p>
               <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <h4><a href="">L???INSULINE </a></h4>
            <p>L???insuline est la seule hormone peptidique hypoglyc??miante s??cr??t??e par de petits amas de cellules du pancr??as, appel??s ??lots de Langerhans. <span id="dots"></span><span id="more">Son r??le est vital dans le m??tabolisme.

Sa fonction est de maintenir l?????quilibre du taux de glucose (ou sucre) contenu dans le sang, en le faisant consommer par les tissus de l???organisme (muscles, tissus graisseux, etc.) et en diminuant sa production par le foie.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <h4><a href="">TRAITEMENTS PAR VOIE ORALE </a></h4>
            <p>Le traitement par voie orale correspond ?? des m??dicaments antidiab??tique qui peuvent ??tre prescrit ?? la personne diab??tique de type 2 ou pr??diab??tique<span id="dots"></span><span id="more"> lorsqu???un changement d???habitudes de vie (manger ??quilibr??, faire de l???activit?? physique)  ne permet pas de maintenir des glyc??mies pr??s des valeurs normales. Parfois, ces m??dicaments peuvent ??tre prescrits d??s le diagnostic lorsque la glyc??mie est tr??s ??lev??e.</span></p>
            <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
            <h4><a href="">ALIMENTATION </a></h4>
              <p>Dans la pr??vention et le traitement du diab??te, l???alimentation occupe un r??le central. En effet, une bonne alimentation peut consid??rablement aider <span id="dots"></span><span id="more">le patient diab??tique ?? obtenir un bon contr??le de sa glyc??mie</p>
              <button onclick="myFunction()" id="myBtn">Read more</button>

            </div>


        </div>


        </form>

      </div>
    </section><!-- End Appointment Section -->






    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Questions fr??quemment pos??es</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Quels sont les facteurs de risques du diab??te de type 2 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Les causes du diab??te de type 2 sont nombreuses et, dans bien des cas, c???est la combinaison de plusieurs facteurs qui d??clenche l???apparition de la maladie. En voici des exemples :
<br>???	Le sexe : les hommes sont plus vuln??rables que les femmes;
<br>???	L?????ge : le risque augmente ?? mesure que l???on vieillit;
<br>???	Le surplus de poids;
<br>???	Le tour de taille ??lev??, soit la graisse accumul??e autour de l???abdomen;
<br>???	Le niveau d???activit?? physique ;
<br>???	Les habitudes alimentaires;

                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Comment traite-t-on le diab??te ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Il existe plusieurs approches de traitement pour le diab??te, l???objectif ?? atteindre est un meilleur contr??le des glyc??mies.
                  Le traitement du diab??te comprend :
                  <br>???	un plan d???alimentation personnalis??
                  <br>???	de l???activit?? physique
                  <br>???	la prise de m??dication antidiab??tique ou d???insuline, si n??cessaire
                  <br>???	une bonne gestion du stress
                  Dans bien des cas, le diab??te de type 2 peut ??tre contr??l?? en modifiant les habitudes alimentaires et en faisant plus d???activit?? physique.
                                  </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Peut-on pr??venir le diab??te ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  On peut pr??venir le diab??te de type 2 ou en retarder l???apparition en modifiant ses habitudes de vie. Visitez notre site d??di?? ?? la pr??vention.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Est-ce que le diab??te se gu??rit ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Le diab??te est une maladie chronique incurable. Par contre, il est possible de le contr??ler. </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Quels sont les sympt??mes ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Les sympt??mes du diab??te peuvent varier d???une personne ?? l???autre. Dans certains cas, le diab??te peut m??me ??tre pr??sent sans que des sympt??mes ne soient per??us.
Les sympt??mes sont :
<br>???	Fatigue, somnolence
<br>???	Augmentation du volume et de la fr??quence des urines
<br>???	Soif intense
<br>???	Faim exag??r??e
<br>???	Perte de poids inexpliqu??e
<br>???	Vision embrouill??e
<br>???	Cicatrisation lente
<br>???	Infection des organes g??nitaux et de la vessie
<br>???	Picotements aux doigts ou aux pieds
<br>???	Irritabilit??

                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Galerie</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="asset/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="asset/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6381.735477808169!2d10.18649347424231!3d36.89351220015347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stn!4v1620613429628!5m2!1sfr!2stn" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>tunis</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer un message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/purecounter/purecounter.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script>
  function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}


  </script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>


    </body>
</html>
