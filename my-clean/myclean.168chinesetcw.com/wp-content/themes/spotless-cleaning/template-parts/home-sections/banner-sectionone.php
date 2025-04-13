<?php
/**
 * Home Section 1 Template
 *
 * @package Spotless Cleaning
 */

// Check if the banner section is enabled
$spotless_cleaning_section_one = get_theme_mod('spotless_cleaning_section_banner');
if ('Disable' === $spotless_cleaning_section_one) {
    return;
}
?>

<section id="banner-section-first">
    <div class="main-banner-main">
        <?php 
        // Display banner image if it exists
        $banner_image = get_theme_mod('spotless_cleaning_section_bannerimage_section');
        if (!empty($banner_image)) { ?>
            <img src="<?php echo esc_url($banner_image); ?>" alt="<?php esc_attr_e('Banner Image', 'spotless-cleaning'); ?>">
            <div class="text-box">
                <h2><?php echo esc_html(get_theme_mod('spotless_cleaning_section_bannerimage_section_title')); ?></h2>
                <p><?php echo esc_html(get_theme_mod('spotless_cleaning_section_bannerimage_section_text')); ?></p>

                <?php 
                // Display button if button text exists
                $button_text = get_theme_mod('spotless_cleaning_banner_btn_text');
                if (!empty($button_text)) { ?>
                    <div class="theme-btn">
                        <a href="<?php echo esc_url(get_theme_mod('spotless_cleaning_banner_btn_text_url')); ?>"><?php echo esc_html($button_text); ?></a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
