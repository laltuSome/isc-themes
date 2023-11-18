<?php global $theme_options;?>
<?php get_header(); ?>
<?php
$term = get_queried_object();
?>
 <!-- service-details-area -->
    <section class="service-details-wrapper">
        <div class="container">
            <!-- service-details-content -->
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="service-details-content-outer">
                      <?php the_field('service_information_content', $term); ?>
                      
                        
                        <div class="service-details-content-item-row service-details-content-faq-box">
                            <div class="page_hdng faq-hdng">
                                <h3><?php the_field('faq_section_main_title', $term); ?></h3>
                            </div>
                            <div id="faq_acrdn" class="faq_acrdn" itemscope itemtype="https://schema.org/FAQPage">                              
                                <?php 
                                $i=0;
                                while( have_rows('faq_section_content', $term ) ): the_row();                           
                                $text9 = get_sub_field('faq_section_title', $term );
                                $text10 = get_sub_field('faq_section_description', $term ); 
                                $i++;                                        
                                ?>
                                <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                        <div class="card-header accor_hdng" id="heading<?php echo $i; ?>">
                                            <h3 itemprop="name" class="btn btn-link <?php if ($i > 1) {echo 'collapsed';} ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><?php echo $text9;?></h3>
                                        </div>
                                        <div id="collapse<?php echo $i; ?>" class="collapse <?php if ($i=="1") {echo 'show';} ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#faq_acrdn" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                            <div class="card-body">
                                                <div class="accor_para" itemprop="text">
                                                    <?php echo $text10;?>                                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 styck-s">
                    <!-- service-details-sidebar -->
                    <aside class="service-details-sidebar">
                        <?php dynamic_sidebar('main-sidebar'); ?>
   <a href="tel:<?php echo $theme_options['phone'];?>" class="call-bacground" style="background: url('<?php echo $theme_options['background-call']['url'];?>');">
<div class="cal-data">
    <span>Call Us Now</span>
    <strong><?php echo $theme_options['phone'];?></strong>
</div>
   </a>
<?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    'cat' => $term->term_id ,
                    'posts_per_page' => -1
                ) );
                ?>
<?php if (  $loop->have_posts() ) : ?>
 <div class="artical-related">
                <h3>Larn More</h3>
       
            <ul class="ul">
                <?php            
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
<?php endif; ?>
                    </aside>
                 
                </div>
           
            </div>
        </div>
    </section>
  
 
<!-- START OF PRODUCT SCHEMA -->
<?php the_field('product_schema', $term); ?>
<!-- START OF PRODUCT SCHEMA -->

<!-- START OF LOCAL BUSINESS SCHEMA -->
<!-- <?php //the_field('local_business_schema', $term); ?> -->
<!-- END OF LOCAL BUSINESS SCHEMA -->   
<?php get_footer();
