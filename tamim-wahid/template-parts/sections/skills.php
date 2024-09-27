<?php
// Retrieve the csf saved option value
$options = get_option( 'tw_portfolio' );
?>
<!-- Skills Starts -->
<div class="row">
    <div class="col-12">
        <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">
            <?php echo isset( $options['skills-heading'] ) ? esc_html( $options['skills-heading'] ) : ''; ?>
        </h3>
    </div>
    <?php
    if ( isset( $options['skills-repeater'] ) && is_array( $options['skills-repeater'] ) ) {
        foreach( $options['skills-repeater'] as $info_box ) {
            if ( isset( $info_box['skills-counter-perc'], $info_box['skills-counter-title'] ) ) {
                ?>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p<?php echo esc_attr( $info_box['skills-counter-perc'] ); ?>">
                        <span><?php echo esc_html( $info_box['skills-counter-perc'] ); ?>%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">
                        <?php echo esc_html( $info_box['skills-counter-title'] ); ?>
                    </h6>
                </div>
                <?php
            }
        }
    }
    ?>
</div>
<!-- Skills Ends -->
<hr class="separator mt-1">
