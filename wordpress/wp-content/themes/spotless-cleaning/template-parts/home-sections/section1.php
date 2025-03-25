<?php
/**
 * Home Section 1 Template
 *
 * @package Spotless Cleaning
 */

// All section-specific code goes here...


$spotless_cleaning_section_one = get_theme_mod( 'spotless_cleaning_section1_enable' );
if ( 'Disable' == $spotless_cleaning_section_one ) {
  return;
} ?>

<section id="section1" class="featured-posts">
  <div class="container">
    <div class="section-heading-main">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="inner-head">
            <h5 class="small-title left-head"><?php echo esc_html(get_theme_mod('spotless_cleaning_section1_small_title')); ?></h5>
            <?php if(get_theme_mod('spotless_cleaning_section1_title',true) != ''){?>
                <h3><?php echo esc_html(get_theme_mod('spotless_cleaning_section1_title')); ?></h3>
            <?php }?>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="inner-head">
            <?php if(get_theme_mod('spotless_cleaning_section1_para_title',true) != ''){?>
                <p><?php echo esc_html(get_theme_mod('spotless_cleaning_section1_para_title')); ?></p>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
        // Define the query to get the latest posts from the "Features" category
        $args = array(
          'category_name' =>  get_theme_mod('spotless_cleaning_section1_category'),
          'posts_per_page' => get_theme_mod('spotless_cleaning_section1_category_number_of_posts_setting' , '3'),
          'order' => 'DESC'
        );
        
        $query = new WP_Query( $args );
        // Loop through the posts
        while ( $query->have_posts() ) : $query->the_post();
      ?>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="post-section-box">
          <div class="post">
             <?php if ( get_theme_mod( 'spotless_cleaning_post_meta_toggle_switch_control', true ) ) : ?>
                <div class="sec2-meta">
                    <span><?php echo esc_html(get_the_date()); ?></span>
                      <span class="separator">|</span>
                      <span><?php echo esc_html( get_the_author() ); ?></span>
                </div>
              <?php else : ?>
                <!-- Content to display when the toggle switch is OFF -->
              <?php endif; ?>
              <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
              <?php endif; ?>
              <div class="content-box">
                <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div class="latest-content">
                <?php the_content(); ?>
              </div>
              </div>
              
          </div>          
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>
</section>






