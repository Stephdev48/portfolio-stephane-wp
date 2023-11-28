<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php get_header(); ?> <!--récupère le contenu du fichier header-->
  </head>
  <body <?php body_class(); ?>>
  <section class="about">                         <!--mon pitch-->     
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 animate__animated animate__fadeInLeft animate__delay-0.5s">
                    <h2 class="about__title">STEPHANE VINCENT</h2>
                    <p class="about__pitch">I switched to Linux years ago, and now I get into web development to improve my IT skills.</p>
                    <a href="secondary-pages/a-propos.html" class="btn btn-danger mt-5 about__btn">Click me</a>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="images/my-mugshot.jpg" alt="mugshot" class="rounded-5 about__picture  animate__animated animate__fadeInRight animate__delay-0.5s">
                </div>
            </div>
        </div>
    </section>
    <section class="competences animate__animated animate__fadeInUp animate__delay-0.5s">               <!--compétences en informatique-->
        <div class="container competences__section">
            <div class="row">                   <!--titre de la section-->
                <div class="col-12">
                    <h2 class="competences__title">Freshly aquired skills :</h2>
                </div>
            </div>
            <div class="row">                      <!--liste compétences-->
                <div class="col-12 col-md-6 d-flex justify-content-end">
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JS</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul>
                        <li>Bootstrap</li>
                        <li>Github</li>
                        <li>Figma</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="my-work">                    <!--projets réalisés ( cards )-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="my-work__title">What I've done so far :</h2>
                </div>
            </div>
            <div class="row my-work__cards">           <!--les deux cards...-->
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="secondary-pages/images/hh-header-mini.jpg" alt="Hulk Hogan mugshot">
                        <div class="card-body">
                          <h5 class="card-title">Hulk Hogan biography</h5>
                          <p class="card-text">A brief story about the famous catcher Hulk Hogan</p>
                          <a href="secondary-pages/index-hh.html" class="btn btn-primary">His biography</a>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="secondary-pages/images/hero_bg_1.webp" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Foundation</h5>
                          <p class="card-text">I'm just a dummy website... my author reproduced me for training purposes.</p>
                          <a href="secondary-pages/index-foundation.html" class="btn btn-primary">Click here to see me</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
  </body>
</html>