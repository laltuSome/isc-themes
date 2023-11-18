<?php global $theme_options;?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<!-- COMMON META TAG -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#009de6">
<!-- COMMON META TAG -->
  <!--PAGE TITLE-->
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <!--PAGE TITLE-->
  <!--FAB ICON-->
 
 <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_options['fav-icon']['url'];?>">
  
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_options['app-icon']['url'];?>">

<!--FAB ICON-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css">




<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/aos.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">

  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/swiper-bundle.min.css" />


  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery.mCustomScrollbar.css">

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/baguetteBox.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">

<?php wp_head(); ?>


</head>
<body 
      <?php body_class( 'home' ); ?>>



  <!-- scrollup -->
  <div class="scrollup swich<?php echo $theme_options['opt-switch'];?>"><i class="fa fa-arrow-up" ></i></div>
  <!-- scrollup -->



 <div class="box">
 
  <div class="nav-hed">
     
      <a class="logo" href="<?php echo home_url();?>">
<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">
</a>
  </div>
  <ul class="mobile-menu">
              <?php
$args = array(
'theme_location'   => '',
'menu'         => 'mobile',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
            </ul>
            <ul class="header-info-mob">
 <li><a href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a> 
</li>
 <li>
  <a href="mailto:<?php echo $theme_options['email-footer'];?>"><?php echo $theme_options['email-footer'];?></a> </li>


              </ul> 
</div>

<header class="top-head sticky<?php echo $theme_options['opt-switch2'];?>">

<div class="menubars2">
    <div class="container ">
        <div class="row justify-content-between align-items-center header-border">
             <!-- logo -->
  <a class="logo" href="<?php echo home_url();?>">
<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">
</a>
     
   <div class="menu-right">
   <nav class="nav">
          <ul id="menu-bg">
                   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'top-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
          </ul>
        </nav>



      </div>
      
<div class="btn-group-header">
    
<a class="header-call" href="tel:<?php echo $theme_options['phone'];?>"><i class="fa fa-phone"></i> <span>Call us Today</span></a>


<ul class="socil-header">
   <li><a  href="mailto:<?php echo $theme_options['email-footer'];?>"><i class="fa fa-envelope" ></i></a></li>
                                    <li><a href="<?php echo $theme_options['social-facebook'];?>"><i class="fa fa-facebook-f"></i></a></li>
                             
                                    <li><a href="<?php echo $theme_options['social-in'];?>"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $theme_options['social-instagram'];?>"><i class="fa fa-instagram"></i></a></li>
                                </ul>

</div>
    <div class="menu_icon_box">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    

     
    </div>
</div>
</div>



 
</header>
 





            
        

<div class="section overflow-visible ">
 


  <?php if (is_front_page()) { ?>

    <div class="banner-height">


        <div class="swiper mySwiper">

          
    <div class="swiper-wrapper" >
        <?php if( have_rows('home_slider') ): ?>
  
    <?php while( have_rows('home_slider') ): the_row(); 
        $image = get_sub_field('slider_img');
        ?>
      <div class="swiper-slide sider-item" style="background:url('<?php the_sub_field('slider_img'); ?>');     background-size: cover;
    background-position: center center;">
<div class="container">
  <div class="row">
        <div class="col-12 slide-title">
<h2><?php the_sub_field('titel'); ?></h2>
        <h3 class="montserrat"><?php the_sub_field('description'); ?></h3>
            <a href="<?php echo esc_url( get_permalink(228) ); ?>" class="banner-btn">View more</a>
        </div>
             </div>
 </div>
        </div>
        <?php endwhile; ?>

<?php endif; ?>
    </div>


<div class="container">
  <div class="row">
      <div class="col-12" style="position: relative;">

<div class="butn-group">
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
      </div>
      </div>
   </div>
      </div>

  </div>
    



  




 
  </div>


   



  <?php }
else if ( is_home() || is_category() || is_archive() || is_search()) { ?>
  <!---blog-baner--->
  <div class="inner-banner" style=" background:url('<?php bloginfo('template_directory'); ?>/images/inner-banner.png'); background-position: center center;
                                    background-repeat:no-repeat; background-size:cover;">
 <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3>Blog</h3>

</div>

  </div>
   </div>   
  </div>

  <?php }



elseif ( is_single() ) { ?>
  <!---single---->
  <div class="inner-banner" style=" background:url('<?php bloginfo('template_directory'); ?>/images/inner-banner.png'); background-position: center center;
                                    background-repeat:no-repeat; background-size:cover;">
  <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3> Blog</h3>

</div>

  </div>
   </div>                        
 
  </div>
  <!---blog-baner--->
    
<?php }
elseif ( is_404() ) { ?>
 

<?php }
elseif ( is_page(array('cooling')) ) { ?>
 <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>
 <div class="inner-banner paddin-banner" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-12 text-center" data-aos="fade-up">

<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>

</div>

  </div>
   </div>
   
  </div>

 <?php  } else { ?>
  <?php
//Default image source
$templateDir = get_bloginfo('template_directory');
$thumbimg = "{$templateDir}/images/inner-banner.png";
$thumbid = get_post_thumbnail_id();
if (!empty($thumbid)) {
$thumbimg = wp_get_attachment_url($thumbid);
}
?>
  <div class="inner-banner" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">
     <div class="container">
  <div class="row">
<div class="col-12 text-center" data-aos="fade-up">

<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>

</div>

  </div>
   </div>
   
  </div>
    
   
    
  <?php } ?>
</div>

