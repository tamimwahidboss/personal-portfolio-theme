<?php
// Retrieve the csf saved option value
$options = get_option( 'tw_portfolio' );
?>
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 position-fixed d-none d-lg-block" style="
            background-image: url('<?php echo esc_url(isset($options['hero-profile-img']['url']) ? $options['hero-profile-img']['url'] : get_template_directory_uri() . '/img/rooftop-tamim-wahid.jpg'); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            height: calc(100vh - 80px);
            z-index: 111;
            border-radius: 30px;
            left: 40px;
            top: 40px;
            box-shadow: 0 0 7px rgba(0,0,0,.9);
        "></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="http://via.placeholder.com/300x300.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="<?php esc_attr_e('my picture', 'wp10ms'); ?>" />
                <h1 class="text-uppercase poppins-font"><?php echo esc_html(isset($options['profile-name']) ? $options['profile-name'] : ''); ?><span><?php echo esc_html(isset($options['profile-profe']) ? $options['profile-profe'] : ''); ?></span></h1>
                <p class="open-sans-font"><?php echo esc_html(isset($options['profile-desc']) ? $options['profile-desc'] : ''); ?></p>
                <a class="button" href="<?php echo esc_url(isset($options['profile-btn']['url']) ? $options['profile-btn']['url'] : '#'); ?>">
                    <span class="button-text"><?php echo esc_html(isset($options['profile-btn']['text']) ? $options['profile-btn']['text'] : ''); ?></span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->
