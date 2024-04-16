<!-- Footer Start -->
<div class="container-fluid bg-warning footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>3A, Akinlade Street Alekuwodo Osogbo.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+234 805 876 9488</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>olakanmisola042@gmail</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Stay ahead of the curve with our latest market insights and trading tips.Subscribe now for exclusive updates delivered straight to your inbox!</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Footer End -->

<!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Accessify</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    
                    Designed By <a class="fw-medium text-light" href="#">Olakanmi Sola Alade (Sholyjay)</a>
                </div>
            </div>
        </div>
    </div>
<!-- Copyright End -->

<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- Back to Top End-->

<!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/wow/simple.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- JavaScript Libraries Ends -->
<!-- Template Javascript -->
     <script src="js/main.js"></script>
<!-- Template Javascript -->
    
<script>
    let formA = {
        name:'',
        email:'',
        subject:'',
        message:''
    }

    $(document).ready(function(){
        $('#contactForm').submit(function(e){
            alert();
            e.preventDefault();
            //validate the form data
            if(validateForm()){
                //pass the form data to the submitForm function
                submitForm();
            }
                
        })

        function validateForm() {
            var valid = true;
            // Validate name
            var name = $('#name').val();
            
            if (!name || name.trim() === '') {
                $('#name').addClass('is-invalid');
                valid = false;
            } else {
                formA.name = name;
                $('#name').removeClass('is-invalid');
            }

            // Validate email
            var email = $('#email').val();
            if (!email || email.trim() === '' || !isValidEmail(email)) {
                $('#email').addClass('is-invalid');
                valid = false;
            } else {
                formA.email = email;
                $('#email').removeClass('is-invalid');
            }

            // Validate subject
            var subject = $('#subject').val();
            if (!subject || subject.trim() === '') {
                $('#subject').addClass('is-invalid');
                valid = false;
            } else {
                formA.subject = subject;
                $('#subject').removeClass('is-invalid');
            }

            // Validate message
            var message = $('#message').val();
            if (!message || subject.trim() === '') {
                $('#message').addClass('is-invalid');
                valid = false;
            } else {
                formA.message = message;
                $('#message').removeClass('is-invalid');
            }

            return valid;
        }
        
        //validate the email
        function isValidEmail(email){
            var pattern = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
            return pattern.test(email);
        }

        //this passes the form data into the send_email.php
        function submitForm() {
            var formData = formA;
            console.log('Contact form data:::',formA);
            // Send AJAX request Asynchronous JavaScript
            //TYPE OF API OPERATIONS E.G. POST, GET, PUT
            $.ajax({
                type: 'POST',
                url: 'send_email.php', // Path to your PHP script RestAPI URL
                data: formData, //Payload
                success: function(response) {
                    // Display response message
                    
                    $('#alertContainer').html('<div class="alert ' + (response.success ? 'alert-success' : 'alert-danger') + '" role="alert">' + response.message + '</div>');
                    // Reset form if email sent successfully
                    if (response.success) {
                        $('#contactForm')[0].reset();
                    }
                },
                error: function(xhr, status, error) {
                    // Display error message
                    $('#alertContainer').html(`<div class="alert alert-danger col-6" role="alert">${error}.</div>`);
                }
            });

            setTimeout(() => {
                $('#alertContainer').hide();
            }, 6000);
        }
    });
</script>

</body>
</html>