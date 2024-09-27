<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'tw_portfolio';
  
  // Create theme control dashboard
  CSF::createOptions( $prefix, array(
      'menu_title'      => esc_html__( 'Theme Control', 'tamim-wahid' ),
      'menu_slug'       => 'tw-control',
      'framework_title' => esc_html__( 'Theme Control', 'tamim-wahid' ),
      'menu_icon'       => 'dashicons-buddicons-topics',
      'menu_position'   => 61,
      'show_in_customizer' => true,
      'footer_text'     => esc_html__( 'This is a custom portfolio theme. Developed by Tamim Wahid.', 'tamim-wahid' ),
  ) );

  // Start a home page section
  CSF::createSection( $prefix, array(
      'title'  => esc_html__( 'Home Page', 'tamim-wahid' ),
      'icon'  => 'fas fa-home',
      'fields' => array(
  
          // Profile image
          array(
              'id'      => 'hero-profile-img',
              'type'    => 'media',
              'title'   => esc_html__( 'Media', 'tamim-wahid' ),
              'default' => esc_url( get_template_directory_uri() . '/img/rooftop-tamim-wahid.jpg' ),
          ),
  
          // Profile name
          array(
              'id'      => 'profile-name',
              'type'    => 'text',
              'title'   => esc_html__( __( 'Your Name', 'tamim-wahid' ) ),
              'default' => esc_html__( __( "I'm Tamim Wahid.", 'tamim-wahid' ) ),
          ),

          // Profile Profe
          array(
            'id'      => 'profile-profe',
            'type'    => 'text',
            'title'   => esc_html__( __( 'Your Profession', 'tamim-wahid' ) ),
            'default' => esc_html__( __( "web developer", 'tamim-wahid' ) ),
        ),
  
          // Profile description
          array(
              'id'      => 'profile-desc',
              'type'    => 'textarea',
              'title'   => esc_html__( 'Profile Description', 'tamim-wahid' ),
              'default' => esc_html__( 'I have been working with Web Design & Development for over 3 years. It is my goal to offer professional but affordable services like attractive WordPress / Shopify / Wix Design | Speed Optimization | Security | Website Migration | Recovering Hacked Websites | Long-term Website Maintenance.', 'tamim-wahid' ),
          ),
  
          // Profile button URL
          array(
              'id'      => 'profile-btn',
              'type'    => 'link',
              'title'   => esc_html__( 'Button Link', 'tamim-wahid' ),
              'default' => '#',
          ),
  
      ),
  ) );
  // End a home page section

  // Start an about page section
  CSF::createSection( $prefix, array(
      'id'    => 'about-page',
      'title' => esc_html__( 'About Page', 'tamim-wahid' ),
      'icon'  => 'far fa-address-card',
  ) );

  // About Page section tab
  CSF::createSection( $prefix, array(
      'parent' => 'about-page',
      'title'  => esc_html__( 'Info Section', 'tamim-wahid' ),
      'icon'  => 'far fa-file',
      'fields' => array(

          // Infos title
          array(
              'id'      => 'infos-heading',
              'type'    => 'text',
              'title'   => esc_html__( 'Section Heading', 'tamim-wahid' ),
              'default' => esc_html__( 'personal infos', 'tamim-wahid' ),
          ),

          // Personal information repeater left side
          array(
              'id'          => 'per-info-left-repeater',
              'type'        => 'repeater',
              'title'       => esc_html__( 'Information Tab 1', 'tamim-wahid' ),
              'button_title'=> esc_html__( 'Add New', 'tamim-wahid' ),
              'max'         => 5,
              'fields'      => array(

                  // Infos section left side
                  array(
                      'id'      => 'per-info-left-field-name',
                      'type'    => 'text',
                      'title'   => esc_html__( 'Fields Name', 'tamim-wahid' ),
                      'default' => esc_html__( 'First Name :', 'tamim-wahid' ),
                  ),
                  array(
                      'id'      => 'per-info-left-field-value',
                      'type'    => 'text',
                      'title'   => esc_html__( 'Fields Value', 'tamim-wahid' ),
                      'default' => esc_html__( 'Tamim', 'tamim-wahid' ),
                  ),
              ),
          ),

          // Personal information repeater right side
          array(
              'id'          => 'per-info-right-repeater',
              'type'        => 'repeater',
              'title'       => esc_html__( 'Information Tab 2', 'tamim-wahid' ),
              'button_title'=> esc_html__( 'Add New', 'tamim-wahid' ),
              'max'         => 5,
              'fields'      => array(
                  array(
                      'id'      => 'per-info-right-field-name',
                      'type'    => 'text',
                      'title'   => esc_html__( 'Fields Name', 'tamim-wahid' ),
                      'default' => esc_html__( 'Address :', 'tamim-wahid' ),
                  ),
                  array(
                      'id'      => 'per-info-right-field-value',
                      'type'    => 'text',
                      'title'   => esc_html__( 'Fields Value', 'tamim-wahid' ),
                      'default' => esc_html__( 'Dhaka', 'tamim-wahid' ),
                  ),
              ),
          ),

          // Resume Button
          array(
              'id'      => 'info-resume-link',
              'type'    => 'link',
              'title'   => esc_html__( 'Add Resume Link', 'tamim-wahid' ),
              'default' => '#',
          ),

          // Info box stats
          array(
              'id'          => 'info-box-repeater',
              'type'        => 'repeater',
              'button_title'=> esc_html__( 'Add more item', 'tamim-wahid' ),
              'title'       => esc_html__( 'Add your experience', 'tamim-wahid' ),
              'max'         => 4,
              'min'         => 2,
              'fields'      => array(
                  array(
                      'id'      => 'info-box-count',
                      'type'    => 'text',
                      'title'   => esc_html__( 'Count Value', 'tamim-wahid' ),
                      'default' => esc_html__( '50', 'tamim-wahid' ),
                  ),
                  array(
                      'id'      => 'info-box-text',
                      'type'    => 'text',
                      'title'   => esc_html__( 'Text Value', 'tamim-wahid' ),
                      'default' => esc_html__( 'YEARS OF EXPERIENCE', 'tamim-wahid' ),
                  ),
              ),
          ),

      ),
  ));
  // End an about page section
  
  // Start About Page MY SKILLS section
  CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title' => esc_html__( 'Skills Section', 'tamim-wahid' ),
    'icon'  => 'fas fa-tasks',
    'fields' => array(
      // My skills section title
      array(
        'id' => 'skills-heading',
        'type' => 'text',
        'title' => esc_html__( 'Section Heading', 'tamim-wahid' ),
        'default' => esc_html__( 'my skills', 'tamim-wahid' ),
      ),
      // skills repeater
      array(
        'id' => 'skills-repeater',
        'type' => 'repeater',
        'title' => esc_html__( 'Add your skills', 'tamim-wahid' ),
        'button_title' => esc_html__( 'Add More', 'tamim-wahid' ),
        'min' => '4',
        'max' => '12',
        'fields' => array(
          // My skills section repeater
          array(
            'id' => 'skills-counter-perc',
            'type' => 'text',
            'title' => esc_html__( 'Add Percentage(Only Number)', 'tamim-wahid' ),
            'default' => '50',
          ),
          array(
            'id' => 'skills-counter-title',
            'type' => 'text',
            'title' => esc_html__( 'Material Name', 'tamim-wahid' ),
            'default' => esc_html__( 'html', 'tamim-wahid' ),
          ),
        ),
      ),
    ),
  ));
  // End About Page MY SKILLS section
  
  // Start EXPERIENCE & EDUCATION section
  CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title' => esc_html__( 'Experience Section', 'tamim-wahid' ),
    'icon'  => 'fas fa-graduation-cap',
    'fields' => array(
      // Experience section title
      array(
        'id' => 'experience-heading',
        'type' => 'text',
        'title' => esc_html__( 'Section Heading', 'tamim-wahid' ),
        'default' => esc_html__( 'EXPERIENCE & EDUCATION', 'tamim-wahid' ),
      ),
      // Experience repeater
      array(
        'id' => 'experience-repeater',
        'type' => 'repeater',
        'title' => esc_html__( 'Add your experience', 'tamim-wahid' ),
        'button_title' => esc_html__( 'Add More', 'tamim-wahid' ),
        'max' => '4',
        'fields' => array(
          // Experience repeater fields
          array(
            'id' => 'experience-box-icon',
            'type' => 'icon',
            'title' => esc_html__( 'Icon', 'tamim-wahid' ),
            'default' => 'fa fa-user',
          ),
          array(
            'id' => 'experience-box-year',
            'type' => 'text',
            'title' => esc_html__( 'Experience Schedule', 'tamim-wahid' ),
            'default' => esc_html__( '2013 - 2018', 'tamim-wahid' ),
          ),
          array(
            'id' => 'experience-box-post',
            'type' => 'text',
            'title' => esc_html__( 'Add post type', 'tamim-wahid' ),
            'default' => esc_html__( 'web developer', 'tamim-wahid' ),
          ),
          array(
            'id' => 'experience-box-company',
            'type' => 'text',
            'title' => esc_html__( 'Add Company', 'tamim-wahid' ),
            'default' => esc_html__( 'Fiverr', 'tamim-wahid' ),
          ),
          array(
            'id' => 'experience-box-desc',
            'type' => 'textarea',
            'title' => esc_html__( 'Add description', 'tamim-wahid' ),
            'default' => esc_html__( 'Lorem ipsum dolor sit amet,', 'tamim-wahid' ),
          ),
        ),
      ),
      // Education repeater
      array(
        'id' => 'education-repeater',
        'type' => 'repeater',
        'title' => esc_html__( 'Add your education', 'tamim-wahid' ),
        'button_title' => esc_html__( 'Add More', 'tamim-wahid' ),
        'max' => '4',
        'fields' => array(
          // Education repeater fields
          array(
            'id' => 'education-box-icon',
            'type' => 'icon',
            'title' => esc_html__( 'Icon', 'tamim-wahid' ),
            'default' => 'fa fa-user',
          ),
          array(
            'id' => 'education-box-year',
            'type' => 'text',
            'title' => esc_html__( 'Education Schedule', 'tamim-wahid' ),
            'default' => esc_html__( '2013 - 2018', 'tamim-wahid' ),
          ),
          array(
            'id' => 'education-box-exam',
            'type' => 'text',
            'title' => esc_html__( 'Add exam type', 'tamim-wahid' ),
            'default' => esc_html__( 'web developer', 'tamim-wahid' ),
          ),
          array(
            'id' => 'education-box-uv',
            'type' => 'text',
            'title' => esc_html__( 'Add University', 'tamim-wahid' ),
            'default' => esc_html__( 'Fiverr', 'tamim-wahid' ),
          ),
          array(
            'id' => 'education-box-desc',
            'type' => 'textarea',
            'title' => esc_html__( 'Add description', 'tamim-wahid' ),
            'default' => esc_html__( 'Lorem ipsum dolor sit amet,', 'tamim-wahid' ),
          ),
        ),
      ),
    ),
  ));
  // End EXPERIENCE & EDUCATION section


  /* Start a contact page */
  CSF::createSection( $prefix, array(
    'title' => 'Contact Section',
      'icon'   => 'far fa-envelope-open',
    'fields' => array(
      // Contact section title
      array(
        'id' => 'contact-heading',
        'type' => 'text',
        'title' => 'Section Heading',
        'default' => "DON'T BE SHY !",
      ),
      // Contact section description
      array(
        'id' => 'contact-desc',
        'type' => 'textarea',
        'title' => 'Section Description',
        'default' => 'Feel free to get in touch with me.',
      ),
      // contact repeater
      array(
        'id' => 'contact-repeater',
        'type' => 'repeater',
        'max' => '3',
        'fields' => array(
          array(
            'id' => 'contact-rep-1',
            'type' => 'icon',
            'title' => 'Icon',
            'default' => 'fa fa-envelope-open',
          ),
          array(
            'id' => 'contact-rep-2',
            'type' => 'text',
            'title' => 'Label Title',
            'default' => 'MAIL ME',
          ),
          array(
            'id' => 'contact-rep-3',
            'type' => 'text',
            'title' => 'Label Value',
            'default' => 'info@tamimwahid.com',
          ),
        ),
      ),
      array(
        'id'    => 'social_repeater',
        'type'  => 'repeater',
        'title' => 'Social Links',
        'fields' => array(
            array(
                'id'    => 'social_url',
                'type'  => 'text',
                'title' => 'Social URL',
                'default' => '#',
            ),
            array(
                'id'    => 'social_icon',
                'type'  => 'icon',
                'title' => 'Social Icon Class',
            ),
        ),
      ),
    ),
  ));
  
  /* End a contact page */
  
}