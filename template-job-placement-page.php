<?php

/**
 * The template for displaying contact form
 *
 * Template Name: Job Placement Template
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'page'); ?>

<section class="mission-section style-two">
    <div class="auto-container">
        <div class="container w-100 h-100">

            <h1 class="text-center p-2 font-lg font-weight-bold">Connect with Us!</h1>

            <p class="text-center p-4 font-weight-normal">Be a part of our Healthy Community, where more than half of U.S. health professionals come to land their next jobs.</p>

            <div class="row justify-content-between">
                <div class="col-md-5 mb-4 box1">
                    <div class=" text-black text-center p-5 h-100">
                        <h3 class="mb-4">Health Care Professionals</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/jobfinder.jpg" alt="Box 1 Image" class="img-fluid rounded-circle mb-4">
                        <p class="font-weight-bold mb-4">I'm interested for a job in Health Careers</p>
                        <button id="registerButton" class="btn btn-lg mt-2 rounded px-4 mb-4 custom-btn border border-4 border-secondary ">Register New Profile</button>

                    </div>
                </div>
                <div class="col-md-5 mb-4 box2">
                    <div class=" text-black text-center p-5 h-100">
                        <h3 class="mb-4">Looking to Hire</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/css/images/jobfinder.jpg" alt="Box 2 Image" class="img-fluid rounded-circle mb-4">
                        <p class="font-weight-bold mb-4">I'm looking to hire experienced health providers </p>
                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn border border-2 border-secondary custom-btn btn-lg mr-4">Post a Job</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>

<script>
    document.getElementById("registerButton").onclick = function() {
        location.href = "<?php echo esc_url(home_url('/job-register-new-user/')); ?>";
    };
</script>