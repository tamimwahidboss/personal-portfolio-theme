<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'orderby'        => 'comment_count',
                'order'          => 'DESC',
                'paged'          => $paged,
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
                    ?>
                    <!-- Article Starts -->
                    <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                        <article class="post-container">
                            <div class="post-thumb">
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="d-block position-relative overflow-hidden">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" class="img-fluid" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header">
                                    <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>
                                </div>
                                <div class="entry-content open-sans-font">
                                    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '...' ) ); ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Article Ends -->
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
            <!-- Pagination Starts -->
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <?php
                        if ( get_previous_posts_link() ) {
                            echo ' <li class="page-item">'. previous_posts_link('<i class="page-link fa-solid fa-chevron-left"></i>') .'</li> ';
                        }
                        
                        $args = array(
                            'current' => $paged,
                            'mid_size'              => 1,               // How many numbers to either side of the current pages. Default 2.
                            'prev_next'             => false,           // Whether to include the previous and next links in the list. Default true.
                            'type'                  => 'array',         // Controls format of the returned value. Possible values are 'plain', 'array' and 'list'. Default is 'plain'.
                        );
                        $paginates = paginate_links($args);
                        
                        if ( is_array( $paginates ) ) {
                            foreach ( $paginates as $paginate ) {
                                $prev_a = preg_replace(
                                    array(
                                        '/<a\s/',
                                        '/class="page-numbers current"/',
                                        '/class="page-numbers dots"/'
                                    ),
                                    array(
                                        '<a class="page-link" ',
                                        'class="page-numbers current page-link" style="background-color: #72b626;"',
                                        'class="page-numbers dots page-link"'
                                    ),
                                    $paginate
                                );
                                echo '<li class="page-item">'. $prev_a .'</li>';
                            }
                        }

                        if ( get_previous_posts_page_link() ) {
                            echo ' <li class="page-item">'. next_posts_link('<i class="page-link fa-solid fa-chevron-right"></i>') .'</li> ';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <!-- Pagination Ends -->
        </div>
        <!-- Articles Ends -->
    </div>

</section>