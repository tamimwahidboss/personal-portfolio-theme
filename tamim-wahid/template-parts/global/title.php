<?php
    if ( is_page() ) {
        $title = get_the_title();
    } elseif ( is_home() && ! is_front_page() ) {
        $title = get_the_title( get_option( 'page_for_posts' ) );
    } elseif ( is_single(  ) ) {
        $title = get_the_title( get_option( 'portfolio' ) );
    } else {
        $title = esc_html__( 'My Thoughts Post', 'tamim-wahid' ); // Replace 'Default Title' with your desired default title
    }
    

    $page_title = explode( ' ', $title );
?>

<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>
        <?php echo isset($page_title[0]) ? esc_html($page_title[0]) : ''; ?>
        <span><?php echo isset($page_title[1]) ? esc_html($page_title[1]) : ''; ?></span>
    </h1>
    <span class="title-bg"><?php echo isset($page_title[2]) ? esc_html($page_title[2]) : ''; ?></span>
</section>
<!-- Page Title Ends -->
