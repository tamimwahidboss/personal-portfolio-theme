<?php
// Retrieve the csf saved option value
$options = get_option( 'tw_portfolio' );
?>

<div class="row">
    <!-- Personal Info Starts -->
    <div class="col-12 col-lg-5 col-xl-6">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600">
                    <?php echo isset( $options['infos-heading'] ) ? esc_html( $options['infos-heading'] ) : ''; ?>
                </h3>
            </div>
            <div class="col-12 d-block d-sm-none">
                <img src="http://via.placeholder.com/300x300.jpg" class="img-fluid main-img-mobile" alt="<?php esc_attr_e( 'my picture', 'wp10ms' ); ?>" />
            </div>
            <div class="col-6">
                <ul class="about-list list-unstyled open-sans-font">
                    <?php
                    if ( isset( $options['per-info-left-repeater'] ) && is_array( $options['per-info-left-repeater'] ) ) {
                        foreach( $options['per-info-left-repeater'] as $left_field ) {
                            if ( isset( $left_field['per-info-left-field-name'], $left_field['per-info-left-field-value'] ) ) {
                                ?>
                                <li>
                                    <span class="title"><?php echo esc_html( $left_field['per-info-left-field-name'] ); ?></span>
                                    <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><?php echo esc_html( $left_field['per-info-left-field-value'] ); ?></span>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-6">
                <ul class="about-list list-unstyled open-sans-font">
                    <?php
                    if ( isset( $options['per-info-right-repeater'] ) && is_array( $options['per-info-right-repeater'] ) ) {
                        foreach( $options['per-info-right-repeater'] as $right_field ) {
                            if ( isset( $right_field['per-info-right-field-name'], $right_field['per-info-right-field-value'] ) ) {
                                ?>
                                <li>
                                    <span class="title"><?php echo esc_html( $right_field['per-info-right-field-name'] ); ?></span>
                                    <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><?php echo esc_html( $right_field['per-info-right-field-value'] ); ?></span>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <a class="button" href="<?php echo isset( $options['info-resume-link']['url'] ) ? esc_url( $options['info-resume-link']['url'] ) : '#'; ?>">
                    <span class="button-text">
                        <?php echo isset( $options['info-resume-link']['text'] ) ? esc_html( $options['info-resume-link']['text'] ) : ''; ?>
                    </span>
                    <span class="button-icon fa fa-download"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Personal Info Ends -->

    <!-- Boxes Starts -->
    <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
        <div class="row">
            <?php
            if ( isset( $options['info-box-repeater'] ) && is_array( $options['info-box-repeater'] ) ) {
                foreach( $options['info-box-repeater'] as $info_box ) {
                    if ( isset( $info_box['info-box-count'], $info_box['info-box-text'] ) ) {
                        ?>
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative"><?php echo esc_html( $info_box['info-box-count'] ); ?></h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase"><?php echo esc_html( $info_box['info-box-text'] ); ?><span class="d-block"></span></p>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <!-- Boxes Ends -->
</div>
<hr class="separator">
