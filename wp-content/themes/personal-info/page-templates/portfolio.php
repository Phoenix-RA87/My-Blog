<?php
/*
* template Name:Portfolio
* template post type: page
*/
get_header(); ?>
   <!-- Start Head section -->
    <?php while ( have_posts() ) : the_post(); ?>
<?php

$gallery_attachment_ids = array();
 // if there is a gallery block do this
if (function_exists('has_block') && has_block('gallery', $post->post_content)) {
	$post_blocks = parse_blocks($post->post_content);
	
	if( isset($post_blocks[0] ) && isset($post_blocks[0]['attrs'] ) && isset($post_blocks[0]['attrs']['ids'] ) )
    $gallery_attachment_ids = $post_blocks[0]['attrs']['ids'];
} 
// if there is not a gallery block do this
else {
    // gets the gallery info
	$gallery = get_post_gallery( $post->ID, false );
	if( $gallery ){
		$gallery_attachment_ids = array();
		if( count($gallery) and isset($gallery['ids'])) {
			// makes an array of image ids
			$gallery_attachment_ids = explode ( ",", $gallery['ids'] );
		}
	}else{
		$gallery_attachment_ids  = array();
	}
}
?>

    <header class="head">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <div class="col-xs-8 col-sm-11 col-lg-11">
                    <?php personal_info_page_title_info(); ?>
                </div>


                <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-close hover-animate ajaxcontent-close"><img class="logo-page" src="<?php echo esc_url( get_template_directory_uri() ) ?>/inc/img/close.svg" ></a>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </header>
    <!-- End Head section -->
    <div class="container">
    <div class="portfolio-content">
        <?php the_content(); ?>
    </div>
    <div class="portfolio-gallery">
        <?php if ( ! empty( $gallery_attachment_ids ) ) : ?>
            <div class="">
                <?php foreach ( $gallery_attachment_ids as $gallery_attachment_id ) : ?>
                    <div class="item">
                    <a data-fancybox="portfolio-gallery" href="<?php echo esc_url(wp_get_attachment_image_url($gallery_attachment_id, 'full' )); ?>">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url($gallery_attachment_id, 'thumbnail' )); ?>">
                    </a>
                        
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    
    </div>
<?php endwhile; ?>  
<?php
get_footer();