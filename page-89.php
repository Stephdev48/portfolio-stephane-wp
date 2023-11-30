<!-- About -->
<div class="about-section">
    <?php get_header(); ?>
    <section class="section">                       <!--paragraphe de présentation-->
    <div class="paragraphe">
        <h1 class="section__title">Hello</h1>
        <h2 class="section__title__bis">I'm Stéphane from France</h2>
        <?php $post = get_post(138) ?>
        <?php echo $post->post_content ?>
    </div>
    </section>
    <section class="pictures">                      <!--photos-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 animate__animated animate__fadeInLeft animate__delay-0.5s">
                <a href="http://localhost/wordpress/wp-content/uploads/2023/11/pince-linge.jpg" target="_blank"><img src="http://localhost/wordpress/wp-content/uploads/2023/11/pince-linge.jpg" class="pictures__pince" title="Parc pince à linge" alt="Parc pince à linge"></a>
            </div>
            <div class="col-12 col-lg-6 animate__animated animate__fadeInRight animate__delay-0.5s">
                <a href="http://localhost/wordpress/wp-content/uploads/2023/11/archer.jpg" target="_blank"><img src="http://localhost/wordpress/wp-content/uploads/2023/11/archer.jpg" class="pictures__archer" title="Archer fantasy" alt="Archer fantasy"></a>
            </div>
        </div>
    </div>
    </section>
    <?php get_footer(); ?>
</div>