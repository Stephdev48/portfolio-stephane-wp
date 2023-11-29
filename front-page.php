<div class="home-bg">
    <?php get_header(); ?>
    

    <section class="about">                         <!--mon pitch-->     
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 animate__animated animate__fadeInLeft animate__delay-0.5s">
                        <h2 class="about__title">STEPHANE VINCENT</h2>
                        <p class="about__pitch"><?php $post = get_post(122) ?>
                        <?php echo $post->post_content ?></p>
                        <a href="http://localhost/wordpress/about" class="btn btn-danger mt-5 about__btn">Click me</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="http://localhost/wordpress/wp-content/uploads/2023/11/my-mugshot.jpg" alt="mugshot" class="rounded-5 about__picture  animate__animated animate__fadeInRight animate__delay-0.5s">
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
        </div>
    </section>
    <section class="my-work">                    <!--projets réalisés ( cards )-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="my-work__title">What I've done so far :</h2>
                </div>
            </div>
            <div class="row my-work__cards">           <!--les trois cards...-->
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2023/11/hh-header-mini.jpg" alt="Hulk Hogan mugshot">
                            <div class="card-body">
                                <h5 class="card-title">Hulk Hogan biography</h5>
                                <p class="card-text">A brief story about the famous catcher Hulk Hogan</p>
                                <a href="https://github.com/Stephdev48/biohulkhogan.git" class="btn btn-primary">His biography</a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2023/11/hero_bg_1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Foundation</h5>
                                <p class="card-text">I'm just a dummy website... my author reproduced me for training purposes.</p>
                                <a href="https://github.com/Stephdev48/bootstrap-exercice-foundation.git" class="btn btn-primary">Click here to see me</a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card card-img">
                            <img class="card-img-top" src="http://localhost/wordpress/wp-content/uploads/2023/11/tux.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Long live Opensource !</h5>
                                <p class="card-text">I like Linux, I use Linux, I learn Linux.</p>
                                <a href="https://fr.wikipedia.org/wiki/Linux" class="btn btn-primary">Let's see the penguin !</a>
                            </div>
                        </div> 
                    </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</div>