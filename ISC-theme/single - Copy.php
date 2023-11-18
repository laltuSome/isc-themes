<?php get_header(); ?>
<?php
$terms = get_the_terms( $post->ID, 'category' );
if ( !empty( $terms ) ){
    $term = array_shift( $terms );
}
?>
<!-- service-details-area -->
    <section class="service-details-wrapper">
        <div class="container">
            <!-- service-details-content -->
            <div class="row service-details-content-row">
                <div class="col-lg-8 col-md-12">
                    <div class="service-details-content-outer">                     
                        <div class="service-details-content-item-row service-details-content-top-box">
                            <div class="page_hdng">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                        </div>                                               
                                              
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <!-- service-details-sidebar -->
                 <aside class="service-details-sidebar">
                        <?php dynamic_sidebar('main-sidebar'); ?>
   <a href="tel:<?php echo $theme_options['phone'];?>" class="call-bacground" style="background: url('<?php echo $theme_options['background-call']['url'];?>');">
<div class="cal-data">
    <span>Call Us Now</span>
    <strong><?php echo $theme_options['phone'];?></strong>
</div>
   </a>


 <div class="artical-related">
                <h3>Larn More</h3>
       
            <ul class="ul">
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    'cat' => $term->term_id ,
                    'posts_per_page' => -1
                ) );            
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <li>
               <a href="<?php the_permalink();?>">
                 <?php the_title(); ?>
                     </a>
                </li>
                <?php
                endwhile;               
                ?>
            </ul>
 </div>

                    </aside>
                    <!-- service-details-sidebar -->
                </div>
                <!-- service-details-content -->
            </div>
        </div>
    </section>
   
<?php get_footer();
