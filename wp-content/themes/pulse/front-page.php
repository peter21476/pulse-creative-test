<?php get_header(); ?>

<section class="about-section">
    <div class="container">
        <div class="col-lg-12">
            <h2><?php if ( Kirki::get_option('pulse_kirki_fields', 'about_headline_text' ) ) {
        $aboutus_headline = Kirki::get_option('pulse_kirki_fields', 'about_headline_text');
        echo $aboutus_headline;
        } ?></h2>
            <?php if ( Kirki::get_option('pulse_kirki_fields', 'about_body_text' ) ) {
        $aboutus_editor_text = Kirki::get_option('pulse_kirki_fields', 'about_body_text');
        echo $aboutus_editor_text;
        } ?>
        </div>
    </div>
</section>

<section id="whatwedo" class="whatwedo-section">
    <div class="whatwedo-wrapper">
    <div class="container">
        <div class="row">
        <div class="col-lg-6 whatwedo-text-wrapper">
            <h2><?php if ( Kirki::get_option('pulse_kirki_fields', 'whatwedo_headline_text' ) ) {
        $whatwedo_headline = Kirki::get_option('pulse_kirki_fields', 'whatwedo_headline_text');
        echo $whatwedo_headline;
        } ?></h2>
            <?php if ( Kirki::get_option('pulse_kirki_fields', 'whatwedo_body_text' ) ) {
        $whatwedo_editor_text = Kirki::get_option('pulse_kirki_fields', 'whatwedo_body_text');
        echo $whatwedo_editor_text;
        } ?>
        </div>
        <div class="col-lg-6">
        <img src="<?php echo Kirki::get_option('pulse_kirki_fields', 'whatwedo_image'); ?>" class="img-fluid" />
        </div>
        </div>
    </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
        <div class="col-lg-7 col-sm-12 footer-section-one">
            <img src="<?php echo Kirki::get_option('pulse_kirki_fields', 'footer_image'); ?>" />
            <div class="address-wrapper">
            <?php if ( Kirki::get_option('pulse_kirki_fields', 'footer_body_text' ) ) {
        $footer_body_text = Kirki::get_option('pulse_kirki_fields', 'footer_body_text');
        echo $footer_body_text;
        } ?>
        </div>
        <div class="copyright-wrapper">
        <p><?php if ( Kirki::get_option('pulse_kirki_fields', 'footer_copyright_text' ) ) {
        $footer_copyright_text = Kirki::get_option('pulse_kirki_fields', 'footer_copyright_text');
        echo $footer_copyright_text;
        } ?></p>
        </div>
        </div>
        <div class="col-lg-5 col-sm-12 text-right">
            <p>Follow us on:</p>
            <div class="social-icons">
            <i class="fab fa-linkedin-in"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter"></i> <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    </div>
</footer

<?php get_footer(); ?>