<?php 
    $pageTitle = 'Home';
    include './inc/header.php';
?>
    <!--Carousel start!-->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 dog1" src="img/Tv HD.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to <strong>Accessify!</strong></p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Potential. Trade with Confidence.</h1>
                                    <a href="" class="btn btn-warning rounded-pill py-3 px-15 animated slideInRight">Create Demo Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 dog1" src="img/trade.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>Accessify!</strong></p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Empower Your Investments. Trade Like a Pro.</h1>
                                    <a href="" class="btn btn-warning rounded-pill py-3 px-5 animated slideInLeft">Create Live Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/forex-size.webp" alt="Icon">
                        </div>
                        <h5 class="mb-3">Forex</h5>
                        <p class="mb-0">Navigate forex with clarity. Trade the world's currencies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/crypto.png" alt="Icon">
                        </div>
                        <h5 class="mb-3">Cryptocurrencies</h5>
                        <p class="mb-0">Decentralize your portfolio. Invest in crypto,It Pays!!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/shares.webp" alt="Icon">
                        </div>
                        <h5 class="mb-3">shares</h5>
                        <p class="mb-0">Seize opportunities. Trade shares with confidence.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="img/icon/original-size.webp" alt="Icon">
                        </div>
                        <h5 class="mb-3">Indices</h5>
                        <p class="mb-0">Index trading redefined, Discover your path.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-warning">About Us</p>
                        <h1 class="display-6 mb-4">Open your eyes,expand your mind, and fill your soul with endless posibilities!.</h1>
                        <p class="mb-4">At Accessify, our mission is to empower individuals with the tools and knowledge needed to navigate the financial markets confidently. We strive to provide a user-friendly platform that facilitates seamless trading experiences and fosters financial literacy and success.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                                <h5 class="mb-3">Our Story</h5>
                                <span>Founded by a team of experienced traders and finance professionals.</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                                <h5 class="mb-3">What Sets Us Apart!</h5>
                                <span>At Accessify, we understand that each trader is unique, and diverse in trading.</span>
                            </div>
                        </div>
                        <a class="btn btn-warning rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/cN44FelV-ZA?si=XdK6bR7oc1Qutofz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-warning">Our Services</p>
                <h1 class="display-5 mb-5">Trading Services that We Offer on our Page</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Trading Education</h4>
                            <p class="mb-0">Provide comprehensive educational resources and materials to help traders of all levels improve their knowledge and skills in trading. </p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-warning fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Market Analysis</h4>
                            <p class="mb-0"> Offer regular market analysis and research reports to keep traders informed about market trends, news, and potential trading opportunities.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-warning fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-7.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Trading Signals</h4>
                            <p class="mb-0">Provide trading signals or alerts based on technical analysis and market indicators to assist traders in identifying potential entry and exit points for trades.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-warning fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-8.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Personalized Trading Coaching</h4>
                            <p class="mb-0">Offer personalized one-on-one coaching and mentorship programs for traders seeking individualized guidance and support.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-warning fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-9.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Account Management Services</h4>
                            <p class="mb-0">Offer account management services for traders who prefer a hands-off approach to trading or lack the time or expertise to actively manage their accounts. </p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-warning fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-10.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Technical Support</h4>
                            <p class="mb-0">Offer prompt assistance with account setup, platform navigation, troubleshooting, and other technical issues and hassle-free trading experience for clients.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-warning fw-medium" href="">Read More<i class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-warning">Our Projects</p>
                <h1 class="display-5 mb-5">We have done different kind of Awesome Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/uda11.jpg" alt="project-1">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-1.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block dog2 h5" href="">Developed Trading Algorithms</a>
                        <span>We've built those! Our algorithms are designed to navigate market flunctuations </span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/uda1.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-2.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block dog2 h5" href="">Created Trading Tools/Software</a>
                        <span>We've developed trading platforms, charting tools, and risk management software </span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/uda6.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-3.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block dog2 h5" href="">Conducted Market Research.</a>
                        <span> We've conducted extensive research to uncover market trends and patterns.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/uda5.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block dog2 h5" href="">Implement Risk Management.</a>
                        <span>We've implemented robust risk management strategies to protect trading capital and minimize losses.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/uda17.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block dog2 h5" href="">Execute Trading Strategies</a>
                        <span>we've executed various trading strategies across different asset classes.</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/uda15.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-4.jpg" data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block dog2 h5" href="">Provides Trading Education.</a>
                        <span>We've mentored aspiring traders, providing them with the education and guidance they need.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

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

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-warning">Our Team</p>
                <h1 class="display-5 mb-5">Our Expert Team! Ready to Help You.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-1.jpg" alt="">
                        <h5>Olakanmi Sola Alade</h5>
                        <span class="text-warning">Founder & CEO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.instgram.com"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4 dig" src="img/paul1.JPG" alt="paul1">
                        <h5>Paul-Mark Eroma</h5>
                        <span class="text-warning">Co Founder</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.instgram.com"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-3.jpg" alt="">
                        <h5>Olakanmi Tunji Jamiu</h5>
                        <span class="text-warning">Executive Manager</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.instgram.com"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="img/team-4.jpg" alt="">
                        <h5>Olakanmi Odetayo Faruq</h5>
                        <span class="text-warning">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.instgram.com"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-warning">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/Kaussy2.jpg" alt="Kaussy2">
                    <p class="mb-4">I was new to trading and felt overwhelmed,thanks to the expert guidance from Accessify,I now feel confident in navigating markets. </p>
                    <h5>Kaosarat Ibitayo</h5>
                    <span class="text-warning">Fashion Designer</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/st2.jpg" alt="st2">
                    <p class="mb-4">I've tried various trading platforms, but none compare to Accessify. Their user-friendly interface, extensive research tools.</p>
                    <h5>Jolade Oluwatosin Kilani</h5>
                    <span class="text-warning">Data Analyst</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/data3.jpg" alt="data3">
                    <p class="mb-4">Their advanced trading tools, comprehensive market analysis, and reliable execution have consistently exceeded my expectations.</p>
                    <h5>Johnson Clitton</h5>
                    <span class="text-warning">Business Guru</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/Btc-dog.jpg" alt="Btc-dog">
                    <p class="mb-4">I was hesitant to start trading, but Accessify made the process easy and rewarding. Their transparent approach to risk management is Awesome.</p>
                    <h5>Joseph Luke Adesoji</h5>
                    <span class="text-warning">Student</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/outreachy.jpg" alt="outreachy">
                    <p class="mb-4">I've seen remarkable results since I started trading with Accessify.Their expert team provided tailored strategies and ongoing support to the system. </p>
                    <h5>Jessica Minas</h5>
                    <span class="text-warning">UI/UX Designer</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="img/testimonial-4.jpg" alt="">
                    <p class="mb-4">Trading with Accessify has been a game-changer for me.Their innovative approach and cutting-edge technology Make the different </p>
                    <h5>Oladeji Muiz Ayomide</h5>
                    <span class="text-warning">Student</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<?php
    include './inc/footer.php';
?>

