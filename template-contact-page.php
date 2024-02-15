<?php

/**
 * The template for displaying contact form
 *
 * Template Name:  Contact Template
 */
?>
<?php

get_header();




?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- include page title and breadcrumb -->
	<?php get_template_part('template-parts/content', 'page'); ?> 

	<section class="contact-form-section">
		<div class="auto-container">

			<!-- Title Box -->
			<div class="title-box">
				<h2>Get In Touch</h2>
				<div class="bold-text">Alternatively fill in the form and we will get back to you:</div>
				<div class="required">Fields marked with an * are required</div>
			</div>

			<div class="row clearfix">

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="" id="contact-form">

								<div class="form-group">
									<input type="text" name="username" value="" placeholder="Name*" required>
								</div>

								<div class="form-group">
									<input type="text" name="phone" value="" placeholder="Phone Number*" required>
								</div>

								<div class="form-group">
									<input type="text" name="email" value="" placeholder="Email*" required>
								</div>

								<div class="form-group">
									<textarea name="message" placeholder="Your Message"></textarea>
								</div>


								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit now</span></button>
								</div>

							</form>
						</div>
						<!--End Default Form-->

					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/contact-1.jpg" alt="" />
						</div>
						<h3>Head Office:</h3>
						<div class="text">The Royal Building <br> 85 Lourance Road, New York <br> HL 214588</div>
						<ul>
							<li>Tel: <a href="tel:1800-456-7890">1800 456 7890</a></li>
							<li>Email: <a href="mailto:info@caregiver.co.in">info@caregiver.co.in</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
</article>
<?php
get_footer();
?>