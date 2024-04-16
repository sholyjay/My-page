<?php
    $pageTitle = 'Quote';
    include './inc/header.php';
?>

    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-warning">Get A Free Quote</p>
                    <h1 class="display-5 mb-4">Need Our Expert Help? We're at Your Service!</h1>
                    <p>Achieve your financial goals with our expert assistance. Get in touch today!. Maximize your trading success. Tap into our expertise for tailored solutions.</p>
                    <p class="mb-4">Empower your trading journey. Let our experienced team assist you. Experience the difference with our expert support. Reach out to us now!</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-warning" href="">
                        <span class="btn-lg-square bg-warning" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4 dog3">+234 9060197423</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Get A Free Quote</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Trading Education</option>
                                    <option value="">Market Analysis</option>
                                    <option value="">Trading Signals</option>
                                    <option value="">Personalized Trading Coaching</option>
                                    <option value="">Account Management Services</option>
                                    <option value="">Technical Support</option>
                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-warning w-100 py-3" id="submitBtn" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Quote END -->

<?php
    include './inc/footer.php';
?>