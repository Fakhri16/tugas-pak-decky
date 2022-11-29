<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body id="home" class="scrollspy">
      <form method="GET" action="php/act_create.php">

    <!-- ini navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-3">
         <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo">Selalu ada</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#About">About us</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">portfolio</a></li>
              <li><a href="#contact">Contact us</a></li>
            </ul>
          </div>
        </div>
        </nav>
      </div>
      <!-- sid nav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="">About us</a></li>
        <li><a href="">Clients</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">portfolio</a></li>
        <li><a href="">Contact us</a></li>
      </ul>

    <!-- ini slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/1.png"> 
          <div class="caption left-align">
            <h3>HELLO</h3>
            <h5 class="light grey-text text-lighten-3">Welcome to my website.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/2.png">
          <div class="caption center-align">
            <h3>Selalu ada</h3>
            <h5 class="light grey-text text-lighten-3">we are always there for you.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/3.png"> 
          <div class="caption center-align">
            <h3>Haii</h3>
            <h5 class="light grey-text text-lighten-3">please service our website.</h5>
          </div>
        </li>
        </ul>
      </div>
      
      <!-- About us -->
      <section id="About" class="about scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="center light grey-text text-darken-3">About us</h3>
            <div class="col m6 light">
              <h5>We are profesional</h5>
              <p>we were built in 1999, our team helps in the field of technology,
                for example on the website, namely repairing websites that are 
               affected by errors, bugs or making the website separate and our
                team is willing to make applications that have been determined
                by the client. that's not all our team can also help make a game
                that the client wants with a certain time</p>
            </div>
            <div class="col m6 light">
            <p>WEB DEVLOPMENT</p>
            <div class="progress">
              <div class="determinate blue" style="width: 70%"></div>
          </div>
          <p>MOBILE APP DEVLOPMENT</p>
            <div class="progress">
              <div class="determinate blue" style="width: 95%"></div>
          </div>
          <p>GAME DEVLOPMENT</p>
            <div class="progress">
              <div class="determinate blue" style="width: 600%"></div>
          </div>
          </div>
        </div>
      </div>

      </section>
     
      <!-- clients -->
      <div id="clients" class="parallax-container" id="clients">
        <div class="parallax"><img src="img/slider/4.png"></div>

      <div class="container clients ">
        <h3 class="center light white-text">Our clients</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/gojek.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/tokopedia.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/traveloka.png">
          </div>
        </div>
      </div>
      </div>

      <!-- sevices -->
     <seaction id="services" class="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text darken-3">Our services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">desktop_windows</i>
              <h5>web devlopment</h5>
              <p>We provide website creation services, repairing</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">developer_mode</i>
              <h5>APP devlopment</h5>
              <p>We provide services for making applications according to the client</p>
            </div>
          </div><div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">games</i>
              <h5>Game devlopment</h5>
              <p>fix problematic bugs and make a preliminary game design</p>
            </div>
          </div>
        </div>
      </div>
     </seaction>
     <!-- portofolio -->
     <section id="portfolio" class="portfolio  scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken">Portofolio</h3>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/14.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/13.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/12.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/16.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/20.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/21.jfif" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/22.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/23.jfif" class="responsive-img materialboxed">
          </div>
        </div>
      </div>
     </section>
     <!-- contact us -->
     <seaction id="contact" class="contact grey lighten-3  scrollspy">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">contact us</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel blue darken-3 center white-text">
              <i class="material-icons">email</i>
              <h5>Contact </h5>
              <p>if there is any help can contact us</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h4>Our office</h4></li>
              <li class="collection-item">Pt selalu ada</li>
              <li class="collection-item">Jl.jendral sudirman</li>
              <li class="collection-item">Jakarta,Indonesia</li>
            </ul>
          </div>

          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input type="text" name="nama" id="nama" required class="validate">
                  <label for="nama">name</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone">
                  <label for="phone">Phone</label>
                </div>
                <div class="input-field">
                  <textarea name="pesan" id="pesan" class="materialize-textarea"></textarea>
                  <label for="pesan">pesan</label>
                </div>
                <button type="submit" class="btn blue darken-2">send</button>
              </div>
            </form>
          </form>
          </div>
        </div>
      </div>
     </seaction>
     
     
     <!-- footer -->
     <footer class="blue darken-3 white-text center">
      <p class="flow-text">PT SELALU ADA. copyright 2020.</p>
     </footer>

     



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });

      </script>
    </body>
  </html>