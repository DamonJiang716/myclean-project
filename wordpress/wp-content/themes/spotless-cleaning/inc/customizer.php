<?php
/**
 * Add custom settings and controls to the WordPress Customizer
 */


//---------------------Code to add the Upgrade to Pro button in the Customizer----------

function spotless_cleaning_customize_register_btn( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    get_template_part('inc/customizer-button/upsell-section');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'spotless_cleaning_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'spotless_cleaning_customize_partial_blogdescription',
        ) );
    }

    $wp_customize->register_section_type( 'Spotless_Cleaning_Customize_Upsell_Section' );

    // Register section.
    $wp_customize->add_section(
        new Spotless_Cleaning_Customize_Upsell_Section(
            $wp_customize,
            'theme_upsell',
            array(
                'title'    => esc_html__( 'Spotless Cleaning Pro', 'spotless-cleaning' ),
                'pro_text' => esc_html__( 'Upgrade To Pro', 'spotless-cleaning' ),
                'pro_url'  => 'https://cawpthemes.com/spotless-cleaning-premium-wordpress-theme/',
                'priority' => 1,
            )
        )
    );
}
add_action( 'customize_register', 'spotless_cleaning_customize_register_btn' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function spotless_cleaning_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function spotless_cleaning_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function spotless_cleaning_customize_preview_js() {
    wp_enqueue_script( 'spotless-cleaning-customizer', get_template_directory_uri() . '/inc/customizer-button/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'spotless_cleaning_customize_preview_js' );

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.0
 */
function spotless_cleaning_customizer_control_scripts() {

    wp_enqueue_style( 'spotless-cleaning-customize-controls', get_template_directory_uri() . '/inc/customizer-button/customize-controls.css', '', '1.0.0' );

    wp_enqueue_script( 'spotless-cleaning-customize-controls', get_template_directory_uri() . '/inc/customizer-button/customize-controls.js', array( 'customize-controls' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'spotless_cleaning_customizer_control_scripts', 0 );


//---------------------Code to add the Upgrade to Pro button in the Customizer End----------


//------------------Theme Information--------------------


function spotless_cleaning_customize_register( $wp_customize ) {


      // Add a custom setting for the Site Identity color
  $wp_customize->add_setting( 'spotless_cleaning_site_identity_color', array(
    'default' => '#2ab97e',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'spotless_cleaning_site_identity_color', array(
    'label' => __( 'Site Identity Color', 'spotless-cleaning' ),
    'section' => 'title_tagline',
    'settings' => 'spotless_cleaning_site_identity_color',
  ) ) );


  // Add a custom setting for the Site Identity color
  $wp_customize->add_setting( 'spotless_cleaning_site_identity_tagline_color', array(
    'default' => '#000',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'spotless_cleaning_site_identity_tagline_color', array(
    'label' => __( 'Tagline Color', 'spotless-cleaning' ),
    'section' => 'title_tagline',
    'settings' => 'spotless_cleaning_site_identity_tagline_color',
  ) ) );

//------------------Site Identity Ends---------------------

  
  // Add a custom setting for the primary color
  $wp_customize->add_setting( 'spotless_cleaning_primary_color', array(
    'default' => '#0073aa',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'spotless_cleaning_primary_color', array(
    'label' => __( 'Primary Color', 'spotless-cleaning' ),
    'section' => 'colors',
    'settings' => 'spotless_cleaning_primary_color',
  ) ) );

  //-----------------------------------Home Front Page-------------------------------

  $wp_customize->add_panel( 'spotless_cleaning_panel', array(
    'title'    => __( 'Front Page Settings', 'spotless-cleaning' ),
    'priority' => 100,
  ) );


  //-------------------------------------Banner Image Section--------------

      $wp_customize->add_section( 'spotless_cleaning_section_banner', array(
        'title'    => __( 'Home First Section', 'spotless-cleaning' ),
        'priority' => 8,
        'panel'    => 'spotless_cleaning_panel',
    ) );


  //-----------------Enable Option banner-------------

  $wp_customize->add_setting('spotless_cleaning_section_banner',array(
      'default' => 'Enable',
      'sanitize_callback' => 'spotless_cleaning_sanitize_choices'
  ));
  $wp_customize->add_control('spotless_cleaning_section_banner',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'spotless-cleaning'),
        'section' => 'spotless_cleaning_section_banner',
        'choices' => array(
            'Enable' => __('Enable', 'spotless-cleaning'),
            'Disable' => __('Disable', 'spotless-cleaning')
  )));

  $wp_customize->add_setting('spotless_cleaning_section_bannerimage_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_section_bannerimage_section',array(
    'label' => __('Section Background Image','spotless-cleaning'),
    'description' => __('Dimention 1600 * 800','spotless-cleaning'),
    'section' => 'spotless_cleaning_section_banner',
    'settings' => 'spotless_cleaning_section_bannerimage_section'
  )));

    $wp_customize->add_setting('spotless_cleaning_section_bannerimage_section_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_section_bannerimage_section_title',array(
      'label' => __('Banner Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_section_banner',
      'setting' => 'spotless_cleaning_section_bannerimage_section_title',
      'type'    => 'text'
    )
  ); 

      $wp_customize->add_setting('spotless_cleaning_section_bannerimage_section_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_section_bannerimage_section_text',array(
      'label' => __('Banner Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_section_banner',
      'setting' => 'spotless_cleaning_section_bannerimage_section_text',
      'type'    => 'textarea'
    )
  );

    $wp_customize->add_setting('spotless_cleaning_banner_btn_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_banner_btn_text',array(
      'label' => __('Button Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_section_banner',
      'setting' => 'spotless_cleaning_banner_btn_text',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('spotless_cleaning_banner_btn_text_url',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_banner_btn_text_url',array(
      'label' => __('Button URL','spotless-cleaning'),
      'section' => 'spotless_cleaning_section_banner',
      'setting' => 'spotless_cleaning_banner_btn_text_url',
      'type'    => 'text'
    )
  );


  //----------------------------------About Section----------------------------



    $wp_customize->add_section( 'spotless_cleaning_about', array(
        'title'    => __( 'About Section', 'spotless-cleaning' ),
        'priority' => 10,
        'panel'    => 'spotless_cleaning_panel',
    ) );

  //-----------------Enable Option Section about-------------

  $wp_customize->add_setting('spotless_cleaning_about_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'spotless_cleaning_sanitize_choices'
  ));
  $wp_customize->add_control('spotless_cleaning_about_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'spotless-cleaning'),
        'section' => 'spotless_cleaning_about',
        'choices' => array(
            'Enable' => __('Enable', 'spotless-cleaning'),
            'Disable' => __('Disable', 'spotless-cleaning')
  )));


    //--------------About Title-----------------------

    $wp_customize->add_setting('spotless_cleaning_about_small_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_small_title',array(
      'label' => __('Section Small Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_small_title',
      'type'    => 'text'
    )
  );

    //--------------About Title-----------------------

    $wp_customize->add_setting('spotless_cleaning_about_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_title',array(
      'label' => __('Section Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_title',
      'type'    => 'text'
    )
  ); 


  //-----------------------------About Image-----------

  $wp_customize->add_setting('spotless_cleaning_aboutimage1_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_aboutimage1_section',array(
    'label' => __('About Side Image','spotless-cleaning'),
    'description' => __('Dimention 500 * 750','spotless-cleaning'),
    'section' => 'spotless_cleaning_about',
    'settings' => 'spotless_cleaning_aboutimage1_section'
  )));

  $wp_customize->add_setting('spotless_cleaning_aboutimage2_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_aboutimage2_section',array(
    'label' => __('About Side Image 2','spotless-cleaning'),
    'description' => __('Dimention 500 * 750','spotless-cleaning'),
    'section' => 'spotless_cleaning_about',
    'settings' => 'spotless_cleaning_aboutimage2_section'
  )));


    $wp_customize->add_setting('spotless_cleaning_about_name',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_name',array(
      'label' => __('Main Heading','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_name',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('spotless_cleaning_about_title_second',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_title_second',array(
      'label' => __('Paragraph 1','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_title_second',
      'type'    => 'textarea'
    )
  );


    $wp_customize->add_setting('spotless_cleaning_about_para',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_para',array(
      'label' => __('Paragraph 2','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_para',
      'type'    => 'textarea'
    )
  );

    $wp_customize->add_setting('spotless_cleaning_about_btn_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_btn_text',array(
      'label' => __('Button Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_btn_text',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('spotless_cleaning_about_btn_text_url',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_about_btn_text_url',array(
      'label' => __('Button URL','spotless-cleaning'),
      'section' => 'spotless_cleaning_about',
      'setting' => 'spotless_cleaning_about_btn_text_url',
      'type'    => 'text'
    )
  );

  //------------Features---------------------

  $wp_customize->add_section( 'spotless_cleaning_features_amenities', array(
        'title'    => __( 'Main Features', 'spotless-cleaning' ),
        'priority' => 10,
        'panel'    => 'spotless_cleaning_panel',
    ) );


  //-----------------Enable Option Section One-------------

  $wp_customize->add_setting('spotless_cleaning_features_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'spotless_cleaning_sanitize_choices'
  ));
  $wp_customize->add_control('spotless_cleaning_features_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'spotless-cleaning'),
        'section' => 'spotless_cleaning_features_amenities',
        'choices' => array(
            'Enable' => __('Enable', 'spotless-cleaning'),
            'Disable' => __('Disable', 'spotless-cleaning')
  )));


    //--------------Section Title-----------------------

    $wp_customize->add_setting('spotless_cleaning_features_small_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_features_small_title',array(
      'label' => __('Section Small Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_features_small_title',
      'type'    => 'text'
    )
  );

    //--------------Section One Title-----------------------

    $wp_customize->add_setting('spotless_cleaning_features_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_features_title',array(
      'label' => __('Section Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_features_title',
      'type'    => 'text'
    )
  ); 

  //-----------------------------Feature Image 1-----------

  $wp_customize->add_setting('spotless_cleaning_featureimage1_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_featureimage1_section',array(
    'label' => __('Feature 1 Image','spotless-cleaning'),
    'description' => __('Dimention 100 * 100','spotless-cleaning'),
    'section' => 'spotless_cleaning_features_amenities',
    'settings' => 'spotless_cleaning_featureimage1_section'
  )));


    $wp_customize->add_setting('spotless_cleaning_feature1_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature1_title',array(
      'label' => __('Feature 1 Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature1_title',
      'type'    => 'text'
    )
  ); 


    $wp_customize->add_setting('spotless_cleaning_feature1_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature1_text',array(
      'label' => __('Feature 1 Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature1_text',
      'type'    => 'text'
    )
  ); 



  //-----------------------------Feature Image 2-----------

  $wp_customize->add_setting('spotless_cleaning_featureimage2_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_featureimage2_section',array(
    'label' => __('Feature 2 Image','spotless-cleaning'),
    'description' => __('Dimention 100 * 100','spotless-cleaning'),
    'section' => 'spotless_cleaning_features_amenities',
    'settings' => 'spotless_cleaning_featureimage2_section'
  )));


    $wp_customize->add_setting('spotless_cleaning_feature2_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature2_title',array(
      'label' => __('Feature 2 Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature2_title',
      'type'    => 'text'
    )
  ); 


    $wp_customize->add_setting('spotless_cleaning_feature2_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature2_text',array(
      'label' => __('Feature 2 Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature2_text',
      'type'    => 'text'
    )
  ); 


  //-----------------------------Feature Image 3-----------

  $wp_customize->add_setting('spotless_cleaning_featureimage3_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_featureimage3_section',array(
    'label' => __('Feature 3 Image','spotless-cleaning'),
    'description' => __('Dimention 100 * 100','spotless-cleaning'),
    'section' => 'spotless_cleaning_features_amenities',
    'settings' => 'spotless_cleaning_featureimage3_section'
  )));


    $wp_customize->add_setting('spotless_cleaning_feature3_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature3_title',array(
      'label' => __('Feature 3 Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature3_title',
      'type'    => 'text'
    )
  ); 


    $wp_customize->add_setting('spotless_cleaning_feature3_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature3_text',array(
      'label' => __('Feature 3 Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature3_text',
      'type'    => 'text'
    )
  ); 



  //-----------------------------Feature Image 4-----------

  $wp_customize->add_setting('spotless_cleaning_featureimage4_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'spotless_cleaning_featureimage4_section',array(
    'label' => __('Feature 4 Image','spotless-cleaning'),
    'description' => __('Dimention 100 * 100','spotless-cleaning'),
    'section' => 'spotless_cleaning_features_amenities',
    'settings' => 'spotless_cleaning_featureimage4_section'
  )));


    $wp_customize->add_setting('spotless_cleaning_feature4_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature4_title',array(
      'label' => __('Feature 3 Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature4_title',
      'type'    => 'text'
    )
  ); 


    $wp_customize->add_setting('spotless_cleaning_feature4_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_feature4_text',array(
      'label' => __('Feature 4 Text','spotless-cleaning'),
      'section' => 'spotless_cleaning_features_amenities',
      'setting' => 'spotless_cleaning_feature4_text',
      'type'    => 'text'
    )
  ); 


  //------------Section One (Featured Post)---------------------

  $wp_customize->add_section( 'spotless_cleaning_section1', array(
        'title'    => __( 'Latest Post', 'spotless-cleaning' ),
        'priority' => 10,
        'panel'    => 'spotless_cleaning_panel',
    ) );


  //-----------------Enable Option Section One-------------

  $wp_customize->add_setting('spotless_cleaning_section1_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'spotless_cleaning_sanitize_choices'
  ));
  $wp_customize->add_control('spotless_cleaning_section1_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'spotless-cleaning'),
        'section' => 'spotless_cleaning_section1',
        'choices' => array(
            'Enable' => __('Enable', 'spotless-cleaning'),
            'Disable' => __('Disable', 'spotless-cleaning')
  )));

    //--------------Section One Title-----------------------

    $wp_customize->add_setting('spotless_cleaning_section1_small_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_section1_small_title',array(
      'label' => __('Section Small Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_section1',
      'setting' => 'spotless_cleaning_section1_small_title',
      'type'    => 'text'
    )
  ); 

    $wp_customize->add_setting('spotless_cleaning_section1_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_section1_title',array(
      'label' => __('Section Title','spotless-cleaning'),
      'section' => 'spotless_cleaning_section1',
      'setting' => 'spotless_cleaning_section1_title',
      'type'    => 'text'
    )
  ); 

    $wp_customize->add_setting('spotless_cleaning_section1_para_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('spotless_cleaning_section1_para_title',array(
      'label' => __('Section Title Para','spotless-cleaning'),
      'section' => 'spotless_cleaning_section1',
      'setting' => 'spotless_cleaning_section1_para_title',
      'type'    => 'text'
    )
  );

  //-----------Category------------

  $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
    if($i==0){
      $default = $category->name;
      $i++;
    }
    $cats[$category->name] = $category->name;
  }

  $wp_customize->add_setting('spotless_cleaning_section1_category',array(
  'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('spotless_cleaning_section1_category',array(
    'type'    => 'select',
    'choices' => $cats,
    'label' => __('Select Category to Display Post','spotless-cleaning'),
    'section' => 'spotless_cleaning_section1',
    'sanitize_callback' => 'sanitize_text_field',
  ));



    $wp_customize->add_setting('spotless_cleaning_section1_category_number_of_posts_setting',array(
    'default' => '3',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('spotless_cleaning_section1_category_number_of_posts_setting',array(
    'label' => __('Number of Posts','spotless-cleaning'),
    'section' => 'spotless_cleaning_section1',
    'setting' => 'spotless_cleaning_section1_category_number_of_posts_setting',
    'type'    => 'number'
  )); 



  //-------------------------Footer Settings------------------------------


    $wp_customize->add_section( 'spotless_cleaning_footer', array(
        'title'    => __( 'Footer Settings', 'spotless-cleaning' ),
        'priority' => 10,
        'panel'    => 'spotless_cleaning_panel',
    ) );


  // Add a custom setting for the footer text
  $wp_customize->add_setting( 'spotless_cleaning_footer_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  // Add a custom control for the footer text
  $wp_customize->add_control( 'spotless_cleaning_footer_text', array(
    'label' => __( 'Footer Text', 'spotless-cleaning' ),
    'section' => 'spotless_cleaning_footer',
    'type' => 'text',
  ) );


//--------------------------------------General Settings------------------------------------------

  $wp_customize->add_section( 'spotless_cleaning_general', array(
        'title'    => __( 'General Settings', 'spotless-cleaning' ),
        'panel'    => 'spotless_cleaning_panel',
    ) );

    $wp_customize->add_setting( 'spotless_cleaning_post_meta_toggle_switch_control', array(
        'default'   => true,
        'sanitize_callback' => 'sanitize_text_field', // Use a suitable sanitization function based on your needs
        'transport' => 'refresh', // or 'postMessage' for instant preview without page refresh
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'spotless_cleaning_post_meta_toggle_switch_control', array(
        'label'    => __( 'Display Time/Author', 'spotless-cleaning' ),
        'section'  => 'spotless_cleaning_general',
        'settings' => 'spotless_cleaning_post_meta_toggle_switch_control',
        'type'     => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'spotless_cleaning_post_readdmore_toggle_switch_control', array(
        'default'   => true,
        'sanitize_callback' => 'sanitize_text_field', // Use a suitable sanitization function based on your needs
        'transport' => 'refresh', // or 'postMessage' for instant preview without page refresh
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'spotless_cleaning_post_readdmore_toggle_switch_control', array(
        'label'    => __( 'Display Read More Link', 'spotless-cleaning' ),
        'section'  => 'spotless_cleaning_general',
        'settings' => 'spotless_cleaning_post_readdmore_toggle_switch_control',
        'type'     => 'checkbox',
    ) ) );


}
add_action( 'customize_register', 'spotless_cleaning_customize_register' );



