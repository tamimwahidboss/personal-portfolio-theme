<?php
/**
 * Template Name: About Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tamim_Wahid_Portfolio
 */

get_header();
get_template_part('template-parts/global/title');
?>

<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <?php
        get_template_part('template-parts/sections/personal-info');
        get_template_part('template-parts/sections/skills');
        get_template_part('template-parts/sections/experience');
        ?>
    </div>
</section>
<!-- Main Content Ends -->















<?php get_footer();
