<?php

/**
 * Template Name: Job Register
 */
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'page'); ?>
<section class="mission-section style-two">
    <div class="auto-container">
        <div class="row  justify-content-center mr-5 space-heading"> 

            <h1 class="font-weight-bold heading">Find Your Perfect Fit: Land the Right Job, Your Way. </h1>
            <p class="text-center">Unlock Your Potential: Discover Top Tools and Opportunities to Supercharge Your Caregiving Career!</p>
            
        </div>

        <div class="row justify-content-center">
            <!-- Text with Image -->
            <div class="col-md-6 col-lg-5 ">
                <div class="custom-text">
                    <div class="text-center p-4 img-rights ">
                        <img src="image.jpg" class="img-fluid mr-3" alt="Image">
                    </div>
                    <div class="text-center text-lefts ">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id justo et diam porta posuere. Sed euismod velit vitae diam lacinia, id lacinia nibh ullamcorper.</p>
                        <p>Aliquam erat volutpat. Phasellus aliquam eget lacus vel aliquam. In hac habitasse platea dictumst.</p>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <div class="col-md-6 col-lg-5 ml-5 ">
                <div class="form-box rounded p-4 shadow">
                    <!-- Centered Content -->
                    <div class="col-md-8 text-center mb-4 ml-5 ">
                        <h1 class="p-2 font-weight-bold">Contact Us</h1>
                        <p class="mb-4">Please fill out the form below to get in touch with us.</p>
                    </div>

                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>