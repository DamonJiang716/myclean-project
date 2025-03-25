<?php
/**
 * Home Section About Template
 *
 * @package Spotless Cleaning
 */

// Check if the About section is enabled
$spotless_cleaning_section_one = get_theme_mod('spotless_cleaning_about_enable');
if ('Disable' === $spotless_cleaning_section_one) {
    return;
}
?>

<section id="about" class="about-section">
    <div class="container">
        <div class="section-heading-main">
            <h5 class="small-title"><?php echo esc_html(get_theme_mod('spotless_cleaning_about_small_title')); ?></h5>
            <?php 
            // Display main title if it exists
            $about_title = get_theme_mod('spotless_cleaning_about_title');
            if (!empty($about_title)) { ?>
                <h3><?php echo esc_html($about_title); ?></h3>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-box-img">
                                <?php 
                                // Display first image if it exists
                                if (get_theme_mod('spotless_cleaning_aboutimage1_section') != '') { ?>
                                    <img src="<?php echo esc_url(get_theme_mod('spotless_cleaning_aboutimage1_section')); ?>" alt="<?php esc_attr_e('About Image 1', 'spotless-cleaning'); ?>">
                                <?php } ?>
                                <div class="about-2img">
                                    <?php 
                                    // Display second image if it exists
                                    if (get_theme_mod('spotless_cleaning_aboutimage2_section') != '') { ?>
                                        <img src="<?php echo esc_url(get_theme_mod('spotless_cleaning_aboutimage2_section')); ?>" alt="<?php esc_attr_e('About Image 2', 'spotless-cleaning'); ?>">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right">
                    <h3><?php echo esc_html(get_theme_mod('spotless_cleaning_about_name')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('spotless_cleaning_about_title_second')); ?></p>
                    <p><?php echo esc_html(get_theme_mod('spotless_cleaning_about_para')); ?></p>
                    <?php 
                    // Display button if button text exists
                    $button_text = get_theme_mod('spotless_cleaning_about_btn_text');
                    if (!empty($button_text)) { ?>
                        <div class="theme-btn">
                            <a href="<?php echo esc_url(get_theme_mod('spotless_cleaning_about_btn_text_url')); ?>"><?php echo esc_html($button_text); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
