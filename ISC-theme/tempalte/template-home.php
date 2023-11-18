<?php /* Template Name: Home Template */ ?>

<?php get_header();?>
<section class="section section-partner">
<div class="container">
		<div class="row justify-content-center">
<div class="col-lg-6 col-12">
	<div class="partners" >
		<div class="logos-partner">
				<?php $pat1 = get_field('partner_image'); ?>
	<img src="<?php echo $pat1['url']; ?>" alt="<?php echo $pat1['alt']; ?>" />
		</div>
		<span><?php the_field('partner_content'); ?></span>
	</div>
</div>
		</div>
	</div>
</section>


<section class="section section-about overflow-visible" >
	<div class="container">
		<div class="row align-items-center">
<div class="col-lg-7 col-md-7 col-12">
	
<div class="about-sec"  >
		<?php $ab1 = get_field('about_image'); ?>
	<img src="<?php echo $ab1['url']; ?>" alt="<?php echo $ab1['alt']; ?>" data-aos="fade-right" />
	<div class="box1" data-aos="fade-right" data-aos-duration="10"></div>
	<div class="box2" data-aos="fade-right" data-aos-duration="20"></div>
<div class="box3" data-aos="fade-left" data-aos-duration="30"></div>
</div>

</div>
<div class="col-lg-5 col-md-5 col-12">
	<div class="wel-texts robototext" data-aos="fade-in">

	<?php the_field('about_content'); ?>
	</div>
</div>

		</div>
	</div>
</section>

<section class="section section-why overflow-visible" id="why-choose">
	<div class="container position-relative">
<div class="why-box1 " ></div>
<div class="why-box2"></div>
<div class="why-box3" data-aos="zoom-in"></div>

<div class="why-box4">

	<?php $el = get_field('eliment_image'); ?>
	<img src="<?php echo $el['url']; ?>" alt="<?php echo $el['alt']; ?>" />	

</div>
<div class="why-box5"></div>

		<div class="sec-wraper">
		<div class="row">
<div class="col-12">
	<div class="wel-texts-abour" data-aos="fade-in">
	
	<?php the_field('why_content1'); ?>
	</div>

</div>
	</div>	


</div>

<div class="whynd" data-aos="fade-up">
<div class="row justify-content-center">
<div class="col-lg-8 col-12">
	<div class="wel-texts-abour2">
	
	<?php the_field('why_content2'); ?>
	</div>

</div>
	</div>
		</div>

		</div>
	</section>


<section class="section section-services overflow-visible" id="services">
	<div class="container position-relative">
<div class="row align-items-center">
<div class="col-lg-7 col-md-7 col-12">
	
<div class="image-servci">

	<?php $el = get_field('services_image'); ?>
	<img src="<?php echo $el['url']; ?>" alt="<?php echo $el['alt']; ?>" data-aos="fade-right"/>	

	<div class="serv-elment1">
			<?php $el = get_field('services_eliment_image'); ?>
	<img src="<?php echo $el['url']; ?>" alt="<?php echo $el['alt']; ?>" />	
	</div>

</div>

</div>
<div class="col-lg-5 col-md-5 col-12">

<div class="services-content-holder text-start text-lg-end" data-aos="fade-left">
		<?php the_field('services_content'); ?>


		<a href="#" class="large-btn"><span><img src="<?php bloginfo( 'template_url' ); ?>/images/icon-time.png"></span> Make an Appointment</a>
</div>

</div>

</div>
	</div>
</section>


<section class="section section-services2 overflow-visible" >
	<div class="container position-relative">
<div class="row justify-content-between">
<div class="big-texts">Servis</div>

<div class="col-lg-6 col-md-6 col-12">

	<?php
$sales = get_field('services1');
if( $sales ): ?>
	<div class="servis-boxs">
		<div class="serv-titel-inner">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>
		</div>

	</div>
<?php endif; ?>

<?php
$sales = get_field('services2');
if( $sales ): ?>
	<div class="servis-boxs">
		<div class="serv-titel-inner">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>
		</div>

	</div>
<?php endif; ?>


<?php
$sales = get_field('services3');
if( $sales ): ?>
	<div class="servis-boxs">
		<div class="serv-titel-inner">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>
		</div>

	</div>
<?php endif; ?>

	<?php
$sales = get_field('services4');
if( $sales ): ?>
	<div class="servis-boxs left-serv-last">
		<div class="serv-titel-inner">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>

<a href="#" class="small-btn"><span><img src="<?php bloginfo( 'template_url' ); ?>/images/clock.png"></span> Read more</a>

		</div>

	</div>
<?php endif; ?>



</div>

<div class="col-lg-6 col-md-6 col-12">
	<?php
$sales = get_field('services5');
if( $sales ): ?>
	<div class="servis-boxs">
		<div class="serv-titel-inner">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>


		</div>

	</div>
<?php endif; ?>


	<?php
$sales = get_field('services6');
if( $sales ): ?>
	<div class="servis-boxs">
		<div class="serv-titel-inner">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>


		</div>

	</div>
<?php endif; ?>


	<?php
$sales = get_field('services7');
if( $sales ): ?>
	<div class="servis-boxs last-icon-ser">
		<div class="serv-titel-inner ">
		 <img src="<?php echo esc_url( $sales['icon']['url'] ); ?>" alt="<?php echo esc_attr( $sales['icon']['alt'] ); ?>" />
			<h3> <?php echo $sales['titel']; ?></h3>
		</div>
		<div class="serv-content-inner">
			<p><?php echo $sales['description']; ?></p>


		</div>

	</div>
<?php endif; ?>


</div>



</div>
</div>
</section>


<section class="section section-about-me overflow-visible" id="about">
	<div class="container position-relative">
<div class="row justify-content-center">


	<?php
$aboutme = get_field('about_me');
if( $aboutme ): ?>

		<div class="col-lg-10 col-md-10 col-12">
			
			<div class="about-me-content text-center mb-4">
<h2 data-aos="fade-up"> <?php echo $aboutme['titel']; ?></h2>
	<h3 class="montserrat"  data-aos="fade-up"> <?php echo $aboutme['sub_titel']; ?></h3>



	</div>
		</div>
		
	<div class="col-12">
	<div class="about-me-content text-center">

<?php echo $aboutme['description']; ?>

<div class="author">
	<strong> <?php echo $aboutme['author_name']; ?></strong>
	<div class="text-line"></div>
<p><?php echo $aboutme['author_designation']; ?></p>
</div>
	</div>
</div>

<?php endif; ?>




</div>
</div>
</section>



<section class="section section-contact " id="contact">
	<div class="container position-relative">
<div class="row">
<div class="col-lg-5 col-md-5 col-12">
	<div class="form-img">
<?php $formimg = get_field('form_image'); ?>
	<img src="<?php echo $formimg['url']; ?>" alt="<?php echo $formimg['alt']; ?>" />	
<div class="box-form"></div>
	</div>

	<div class="form-subtxt">
	<?php the_field('contact_content1'); ?>

	</div>

</div>
<div class="col-lg-7 col-md-7 col-12 ps-lg-5 ps-md-2  ps-sm-0 padin-top-btom">
	
<div class="page-form">
	<?php the_field('contact_content2'); ?>
<?php echo do_shortcode('[contact-form-7 id="128" title="contact page form"]');?>


</div>

</div>

	</div>
</div>
</section>


<?php get_footer();?>