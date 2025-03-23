<?php include 'inc/header.php'; ?>


<section class="hero text-white text-center d-flex flex-column justify-content-center align-items-center">
    <h1 class="fw-bold">Welcome to Legacy I.T Solutions</h1>
    <p class="lead">Building a Future Through Innovative Technology</p>
    <a href="#services" class="btn btn-dark mt-5">Explore Our Services</a>
</section>

<style>
    .hero {
        background: url('images/coe.jpg') center/cover no-repeat;
        height: 100vh; /* Full screen height */
        width: 100%;
    }
</style>


    <!--  Services Section -->
    <section id="services" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold">Our Services</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="p-4 shadow rounded bg-white">
                        <i class="service-icon fas fa-code"></i>
                        <h5 class="mt-3">Software Development</h5>
                        <p>We build cutting-edge applications tailored to your business needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow rounded bg-white">
                        <i class="service-icon fas fa-shield-alt"></i>
                        <h5 class="mt-3">Cybersecurity</h5>
                        <p>Protect your data and infrastructure with our top-tier security solutions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow rounded bg-white">
                        <i class="service-icon fas fa-cloud"></i>
                        <h5 class="mt-3">Cloud Solutions</h5>
                        <p>Seamless cloud integration and management for businesses of all sizes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!--  Contact Section -->
     <section id="contact" class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>