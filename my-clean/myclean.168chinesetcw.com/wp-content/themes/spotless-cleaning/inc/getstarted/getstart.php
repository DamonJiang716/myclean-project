<?php
//about theme info
add_action( 'admin_menu', 'spotless_cleaning_gettingstarted_page' );
function spotless_cleaning_gettingstarted_page() {      
    add_theme_page( esc_html__('Spotless Cleaning', 'spotless-cleaning'), esc_html__('All About Spotless Cleaning', 'spotless-cleaning'), 'edit_theme_options', 'spotless_cleaning_mainpage', 'spotless_cleaning_main_content');   
}


function spotless_cleaning_notice() {
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice getting_started">
        <div class="notice-content">
            <p><?php esc_html_e( 'Thanks For Choosing CA WP Themes', 'spotless-cleaning' ); ?></p>
            <h2><?php esc_html_e( 'Thanks for installing Spotless Cleaning Free Theme!', 'spotless-cleaning' ) ?> </h2>
            <p><?php esc_html_e( "Please Click on the link below to Check The Full Theme Edit Documentation", 'spotless-cleaning' ) ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'spotless-cleaning' ); ?></a>
            </div>
            <h2><?php esc_html_e( 'Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'spotless-cleaning' ) ?> </h2>
            <h2><?php esc_html_e( 'Check The Pro Version: Spotless Cleaning Premium for Amazing Features for Unlimited Site', 'spotless-cleaning' ); ?></h2>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'spotless-cleaning' ); ?></a>
            </div>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Premium Demo', 'spotless-cleaning' ); ?></a>
            </div>
        </div>
    </div>
    <?php }
}

add_action( 'admin_notices', 'spotless_cleaning_notice' );





// Add a Custom CSS file to WP Admin Area
function spotless_cleaning_admin_page_theme_style() {
   wp_enqueue_style('spotless-cleaning-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
}
add_action('admin_enqueue_scripts', 'spotless_cleaning_admin_page_theme_style');

//About Theme Info
function spotless_cleaning_main_content() { 

    //custom function about theme customizer

    $return = add_query_arg( array()) ;
    $theme = wp_get_theme( 'spotless-cleaning' );
?>

<div class="admin-main-box">
    <div class="admin-left-box">
        <h2><?php esc_html_e( 'Welcome to Spotless Cleaning Theme', 'spotless-cleaning' ); ?> <span class="version"><?php $theme_info = wp_get_theme();
echo $theme_info->get( 'Version' );?></span></h2>
        <p><?php esc_html_e('CA WP Themes is a premium WordPress theme development company that provides high-quality themes for various types of websites. They specialize in creating themes for businesses, eCommerce, portfolios, blogs, and many more. Their themes are easy to use and customize, making them perfect for those who want to create a professional-looking website without any coding skills.','spotless-cleaning'); ?></p>
        <p><?php esc_html_e('CA WP Themes offers a wide range of themes that are designed to be responsive and compatible with the latest versions of WordPress. Our themes are also SEO optimized, ensuring that your website will rank well on search engines. They come with a variety of features such as customizable widgets, social media integration, and custom page templates.','spotless-cleaning'); ?></p>
        <p><?php esc_html_e('One of the unique things about CA WP Themes is their focus on providing excellent customer support. They have a dedicated team of support staff who are available 24/7 to help customers with any issues they may encounter. Their support team is knowledgeable and friendly, ensuring that customers receive the best possible experience.','spotless-cleaning'); ?></p>
    </div>
    <div class="admin-right-box">
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Buy Spotless Cleaning Premium Theme','spotless-cleaning'); ?></h4>
            <p><?php esc_html_e('Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'spotless-cleaning'); ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'spotless-cleaning' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Premium Theme Demo','spotless-cleaning'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'spotless-cleaning' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Need Support? / Contact Us','spotless-cleaning'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Contact Us', 'spotless-cleaning' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Documentation','spotless-cleaning'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Docs', 'spotless-cleaning' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Free Theme','spotless-cleaning'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( SPOTLESS_CLEANING_FREE_URL ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'spotless-cleaning' ); ?></a>
            </div>
        </div>

    </div>
</div>


<?php } ?>