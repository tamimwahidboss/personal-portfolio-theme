<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 10,
                );
                $query = new WP_Query( $args );

                if( $query->have_posts() ) :
                    while( $query->have_posts() ) :
                        $query->the_post();
                ?>
                        <li>
                            <figure>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                <div><span><?php echo get_the_title(); ?></span></div>
                            </figure>
                        </li>
                        <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                <!-- Portfolio Item Ends -->
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
            <?php
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 10,
                );
                $query = new WP_Query( $args );

                if( $query->have_posts() ) :
                    while( $query->have_posts() ) :
                        $query->the_post();
            ?>
                <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure class="text-center">
                            <!-- Project Details Starts -->
                            <figcaption>
                                <h3><?php echo get_the_title(); ?></h3>
                                <div class="row open-sans-font">
                                <?php
                                $meta = get_post_meta(get_the_ID(), 'tw_portfolio_metabox', true);
                                if (!empty($meta['portfolio-label'])) {
                                    $portfolio_labels = $meta['portfolio-label'];
                                    foreach ($portfolio_labels as $portfolio_label) {
                                        ?>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i>
                                            <span class="project-label"><?php echo esc_html($portfolio_label['portfolio-label-name']); ?> </span>:
                                            <span class="ft-wt-600 uppercase"><?php echo esc_html($portfolio_label['portfolio-label-value']); ?></span>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                </div>
                            </figcaption>
                            <!-- Project Details Ends -->
                            <!-- Main Project Content Starts -->
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                            <br>
                            <a href="<?php echo the_permalink();?>">Project Details Here</a>
                            <!-- Main Project Content Ends -->
                        </figure>
                    </li>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                <!-- Portfolio Item Detail Ends -->
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="<?php echo get_template_directory_uri(); ?>/img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="<?php echo get_template_directory_uri(); ?>/img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="<?php echo get_template_directory_uri(); ?>/img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->