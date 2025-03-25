<?php
/**
 * Home Section Features Template
 *
 * @package Spotless Cleaning
 */

// Check if the features section is enabled
$spotless_cleaning_section_one = get_theme_mod('spotless_cleaning_features_enable');
if ('Disable' === $spotless_cleaning_section_one) {
    return;
}
?>

<section id="amenities" class="amenities-posts">
    <div class="container">
        <div class="section-heading-main">
            <h5 class="small-title"><?php echo esc_html(get_theme_mod('spotless_cleaning_features_small_title')); ?></h5>
            <?php if (get_theme_mod('spotless_cleaning_features_title', true) != '') { ?>
                <h3><?php echo esc_html(get_theme_mod('spotless_cleaning_features_title')); ?></h3>
            <?php } ?>
        </div>
        <div class="row">
            <?php 
            // Loop through feature images and content
            for ($i = 1; $i <= 4; $i++) {
                $feature_image = get_theme_mod('spotless_cleaning_featureimage' . $i . '_section');
                $feature_title = get_theme_mod('spotless_cleaning_feature' . $i . '_title');
                $feature_text = get_theme_mod('spotless_cleaning_feature' . $i . '_text');

                // Only display feature box if there is an image
                if (!empty($feature_image)) { ?>
                    <div class="col-lg-3 col-12">
                        <div class="feature-box">
                            <img src="<?php echo esc_url($feature_image); ?>" alt="<?php esc_attr_e('Feature Image', 'spotless-cleaning'); ?>">
                            <div class="feature-content-box">
                                <?php if (!empty($feature_title)) { ?>
                                    <h3><?php echo esc_html($feature_title); ?></h3>
                                <?php } ?>
                                <?php if (!empty($feature_text)) { ?>
                                    <p><?php echo esc_html($feature_text); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</section>
