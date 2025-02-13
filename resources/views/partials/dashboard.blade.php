<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/pepe.css') }}">
    <title>Profil</title>
  </head>

  <body>
    <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#herro">
              <h1><span>S</span>ANDI <span>R</span>AMADHAN</h1>
            </a>
          </div>
          <div class="nav-list">
            <div class="hamburger">
              <div class="bar"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
      <div class="hero container">
        <div>
          <h1>HELLO, <span></span></h1>
          <h1>MY NAME IS <span></span></h1>
          <h1>SANDI<span></span></h1>
          <a href="{{ route('home') }}" type="button" class="cta">back</a>
        </div>
      </div>
    </section>
    <!-- End Hero Section  -->
  </body>
</html>
