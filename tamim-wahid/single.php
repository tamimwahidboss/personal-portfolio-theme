<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tamim_Wahid_Portfolio
 */

 get_header();
 get_template_part('template-parts/global/title');
?>
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Meta Starts -->
                <div class="meta open-sans-font">
                    <span class="date"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
                    <span class="d-flex"><i class="fa fa-tags"></i> <?php the_category() ?></span>
                </div>
                <!-- Meta Ends -->
                <!-- Article Content Starts -->
                <h1 class="text-uppercase text-capitalize"><?php the_title(); ?></h1>
                <?php the_post_thumbnail_url(); ?>
                <div class="blog-excerpt open-sans-font pb-5">
                    <?php the_content(); ?>
                </div>
                <!-- Article Content Ends -->
            </article>
            <!-- Article Ends -->
        </div>
    </div>
</section>


<?php
get_footer();
?>