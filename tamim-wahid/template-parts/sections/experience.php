<?php
// Retrieve the csf saved option value
$options = get_option( 'tw_portfolio' );
?>
<!-- Experience & Education Starts -->
<div class="row">
    <div class="col-12">
        <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">
            <?php echo isset($options['experience-heading']) ? esc_html($options['experience-heading']) : ''; ?> 
            <span></span>
        </h3>
    </div>
    <div class="col-lg-6 m-15px-tb">
        <div class="resume-box">
            <ul>
                <?php
                if (isset($options['experience-repeater']) && is_array($options['experience-repeater'])) {
                    foreach ($options['experience-repeater'] as $experience_box) {
                        ?>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase <?php echo isset($experience_box['experience-box-icon']) ? esc_attr($experience_box['experience-box-icon']) : ''; ?>"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">
                                <?php echo isset($experience_box['experience-box-year']) ? esc_html($experience_box['experience-box-year']) : ''; ?>
                            </span>
                            <h5 class="poppins-font text-uppercase">
                                <?php echo isset($experience_box['experience-box-post']) ? esc_html($experience_box['experience-box-post']) : ''; ?>
                                <span class="place open-sans-font">
                                    <?php echo isset($experience_box['experience-box-company']) ? esc_html($experience_box['experience-box-company']) : ''; ?>
                                </span>
                            </h5>
                            <p class="open-sans-font">
                                <?php echo isset($experience_box['experience-box-desc']) ? esc_html($experience_box['experience-box-desc']) : ''; ?>
                            </p>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col-lg-6 m-15px-tb">
        <div class="resume-box">
            <ul>
                <?php
                if (isset($options['education-repeater']) && is_array($options['education-repeater'])) {
                    foreach ($options['education-repeater'] as $education_box) {
                        ?>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap <?php echo isset($education_box['education-box-icon']) ? esc_attr($education_box['education-box-icon']) : ''; ?>"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">
                                <?php echo isset($education_box['education-box-year']) ? esc_html($education_box['education-box-year']) : ''; ?>
                            </span>
                            <h5 class="poppins-font text-uppercase">
                                <?php echo isset($education_box['education-box-exam']) ? esc_html($education_box['education-box-exam']) : ''; ?>
                                <span class="place open-sans-font">
                                    <?php echo isset($education_box['education-box-uv']) ? esc_html($education_box['education-box-uv']) : ''; ?>
                                </span>
                            </h5>
                            <p class="open-sans-font">
                                <?php echo isset($education_box['education-box-desc']) ? esc_html($education_box['education-box-desc']) : ''; ?>
                            </p>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<!-- Experience & Education Ends -->
