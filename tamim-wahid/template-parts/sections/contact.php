<?php
// Retrieve the csf saved option value
$options = get_option('tw_portfolio');
?>
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">
                    <?php echo isset( $options['contact-heading'] ) ? esc_html( $options['contact-heading'] ) : ''; ?>
                </h3>
                <p class="open-sans-font mb-3">
                    <?php echo isset( $options['contact-desc'] ) ? esc_html( $options['contact-desc'] ) : ''; ?>
                </p>
                
                <?php
                if ( isset( $options['contact-repeater'] ) && is_array( $options['contact-repeater'] ) ) {
                    $contact_labels = $options['contact-repeater'];
                    foreach( $contact_labels as $contact_label ) {
                        ?>
                        <p class="open-sans-font custom-span-contact position-relative">
                            <i class="<?php echo isset( $contact_label['contact-rep-1'] ) ? esc_attr( $contact_label['contact-rep-1'] ) : ''; ?> fa fa-envelope-open position-absolute"></i>
                            <span class="d-block"><?php echo isset( $contact_label['contact-rep-2'] ) ? esc_html( $contact_label['contact-rep-2'] ) : ''; ?></span>
                            <?php echo isset( $contact_label['contact-rep-3'] ) ? esc_html( $contact_label['contact-rep-3'] ) : ''; ?>
                        </p>
                        <?php
                    }
                }
                ?>
                
                <ul class="social list-unstyled pt-1 mb-5">
                    <?php
                    if ( isset( $options['social_repeater'] ) && is_array( $options['social_repeater'] ) ) {
                        $social_labels = $options['social_repeater'];
                        foreach( $social_labels as $social_label ) {
                            ?>
                            <li class="facebook">
                                <a href="<?php echo isset( $social_label['social_url'] ) ? esc_url( $social_label['social_url'] ) : '#'; ?>">
                                    <i class="<?php echo isset( $social_label['social_icon'] ) ? esc_attr( $social_label['social_icon'] ) : ''; ?>"></i>
                                </a>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <!-- Left Side Ends -->

            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
            <form class="contactform" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                <input type="hidden" name="action" value="handle_contact_form"> <!-- Adds a hidden field for identifying the form -->
                <div class="contactform">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <input type="text" name="name" placeholder="YOUR NAME" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="email" name="email" placeholder="YOUR EMAIL" required>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="text" name="subject" placeholder="YOUR SUBJECT" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" placeholder="YOUR MESSAGE" required></textarea>
                            <button type="submit" class="button">
                                <span class="button-text">Send Message</span>
                                <span class="button-icon fa fa-send"></span>
                            </button>
                        </div>
                        <div class="col-12 form-message">
                            <span class="output_message text-center font-weight-600 text-uppercase"></span>
                        </div>
                    </div>
                </div>
            </form>

            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>
