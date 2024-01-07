<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

     <!-- Header Start -->
     <?php
          include '../assets/includes/header.php'
     ?>
      <!-- Header End -->


<!-- Carousel Start -->
      <div class="container-fluid p-0 mb-5">
        <div
          id="header-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="w-100"
                src="../assets/images/images (13).jpeg"
                alt="Image"
              />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center"
              >
                <div class="p-3" style="max-width: 700px">
                  <h6
                    class="section-title text-white mb-3 animated slideInDown"
                  >
                    MOTECH Company
                  </h6>
                  <h1
                    class="display-3 text-white mb-4 animated slideInDown"
                    style="font-size: 50px"
                  >
                    Innovative Technology for a Brighter Future
                  </h1>
                  <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="w-100"
                src="../assets/images/images (12).jpeg"
                alt="Image"
              />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center"
              >
                <div class="p-3" style="max-width: 700px">
                  <h6
                    class="section-title text-white mb-3 animated slideInDown"
                  >
                    MOTECH Company
                  </h6>
                  <h1
                    class="display-3 text-white mb-4 animated slideInDown"
                    style="font-size: 50px"
                  >
                    The Best and High Quality Digital Solutions
                  </h1>
                  <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="w-100"
                src="../assets/images/images (12).jpeg"
                alt="Image"
              />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center"
              >
                <div class="p-3" style="max-width: 700px">
                  <h6
                    class="section-title text-white mb-3 animated slideInDown"
                  >
                    MOTECH Company
                  </h6>
                  <h1
                    class="display-3 text-white mb-4 animated slideInDown"
                    style="font-size: 50px"
                  >
                    Quality Designs and Comprehensive Branding
                  </h1>
                  <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Carousel End -->



        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">About Service</h6>
                    <h1 class="mb-5">About <span class="text-primary text-uppercase">System development service</span></h1>
                </div>


          <!-- About service Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <div class="row g-3">

                <div class="col">
                  <img
                    class="img-fluid rounded wow zoomIn"
                    data-wow-delay="0.7s"
                    src="../assets/images/images.png"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <p class="mb-4">
                Creativity, Innovation, and Reliability form the foundation of our work. We believe in pushing boundaries to exceed expectations and deliver unparalleled results
              </p>
              <br>
              <p class="mb-4">
                As three brothers, our journey has just begun. MOTECH is not just a company, it's a testament to familial bonds and a commitment to evolving with technology. Join us on the exciting adventure as we continue to grow, innovate, and leave a mark in the realms of design and technology 
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->



                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Serice Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">System development service</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="../assets/images/graphic.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="../assets/images/soft dev.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="../assets/images/web dev.png">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="../assets/images/security.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        

        <!-- Footer Start -->
    <?php
          include '../assets/includes/footer.php'
     ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>