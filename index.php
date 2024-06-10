<?php
session_start();
// if(!isset($_SESSION['userlogin'])) {
//   header('Location: login.php');
// }
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION);
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Health AI Bot" />
  <meta name="description" content="Health AI App" />
  <meta name="author" content="mehmetcakirkaya.com.tr" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health AI</title>

  <link rel="shortcut icon" href="images/neu-logo.png" />

  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

  <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />

  <link rel="stylesheet" href="css/style.css" />

</head>

<body>


  <header class="header header-02 header-transparent header-sticky">
    <div class="container" style="backdrop-filter: blur(3px);">
      <div class="row d-none d-lg-flex">
        <div class="col-md-3 p-3">
          <a class="" href="index.php">
            <img class="img-fluid logo-ai" src="images/neu-logo.png" alt="logo">
          </a>
        </div>
        <div class="col-md-9 d-block d-md-flex justify-content-xl-end justify-content-center align-items-center">
          <div class="d-flex me-3 me-xl-5">
            <div class="ms-3">
              <span class="text-dark fw-bold">AI-Powered Insights </span>
              <p class="mb-0 text-dark small">Harness the intelligence of AI for health insights </p>
            </div>
          </div>
          <div class="d-flex me-3 me-xl-5">
            <div class="ms-3">
              <span class="text-dark fw-bold">AI Support</span>
              <p class="mb-0 text-dark small">Get assistance and answers with the power of AI </p>
            </div>
          </div>
          <div class="d-flex">
            <div class="ms-3">
              <span class="text-dark fw-bold">AI Availability </span>
              <p class="mb-0 text-dark small">AI is ready to assist you whenever you need </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-header">
      <div class="container">
        <nav class="navbar navbar-static-top navbar-expand-lg bg-nav" style="border-radius: 10px;">
          <a class="navbar-brand" href="index.php">
            <img class="img-fluid logo-ai" src="images/neu-logo.png" alt="logo">
          </a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i
              class="fas fa-align-left"></i></button>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="account.php">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?logout=true">Log out</a>
              </li>
              <li class="nav-item mobile-chat-btn">
                <a class="nav-link" href="chat.php">Health AI</a>
              </li>
            </ul>
          </div>
          <div class="add-listing d-none d-lg-block">
            <a class="btn btn-sec text-white chat-btn" href="chat.php"><i class="fa fa-star-of-life"></i>Health AI</a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <section class="banner banner-02">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 order-lg-2 position-relative">
          <div class="banner-img3"><img class="img-fluid" src="images/svg/13.svg" alt=""></div>
          <div class="banner-img4"><img class="img-fluid" src="images/svg/12.svg" alt=""></div>
          <div class="banner-content my-4 my-md-5 my-lg-8">
            <h1 class="">Elevate Your Health with AI.</h1>
            <p class="mb-5">Experience cutting-edge health insights and personalized recommendations with our AI-driven
              platform. Your journey to a healthier life starts here</p>
            <a class="btn btn-blue-1" href="chat.php">Try Health AI</a>
          </div>
        </div>
        <div class="col-12 col-lg-7 order-lg-1 position-relative d-flex align-items-end">
          <img class="img-fluid" src="images/bg/robot.svg" alt="">
          <div class="banner-img1"><img class="img-fluid" src="images/svg/10.svg" alt=""></div>
          <div class="banner-img2"><img class="img-fluid" src="images/svg/11.svg" alt=""></div>
        </div>
      </div>
    </div>
  </section>

  <section class="space-pt">
    <div class="container">
      <div class="row  g-0">
        <div class="col-md-4 col-sm-6">
          <div class="section-title left-divider">
            <span>Transforming Health with AI</span>
            <h2>AI-Powered Health Transformation.</h2>
            <p>Embark on a journey of health transformation with our state-of-the-art AI technology. From personalized
              recommendations to early detection, we're here to guide you towards a healthier and happier life. Explore
              the future of healthcare today.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-items feature-items-style-02">
            <div class="feature-icon">
              <i class="fas fa-notes-medical"></i>
            </div>
            <div class="feature-number">
              <span>01</span>
            </div>
            <div class="feature-content">
              <h6>Unlock Health Insights with AI</h6>
              <p class="mb-0">Explore a wealth of valuable health insights using our advanced AI technology. Whether
                you're tracking your well-being or seeking early illness detection, our platform is here to support you.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-items feature-items-style-02">
            <div class="feature-icon">
              <i class="fas fa-virus-slash"></i>
            </div>
            <div class="feature-number">
              <span>02</span>
            </div>
            <div class="feature-content">
              <h6>Your Personalized Health Assistant</h6>
              <p class="mb-0">Meet your dedicated health assistant. Our AI is designed to provide you with personalized
                health recommendations, answer your questions about well-being, and empower you to make informed choices
                about your health.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-items feature-items-style-02">
            <div class="feature-icon">
              <i class="fas fa-user-md"></i>
            </div>
            <div class="feature-number">
              <span>03</span>
            </div>
            <div class="feature-content">
              <h6>Peace of Mind through Early Detection</h6>
              <p class="mb-0">Early detection is the key to addressing health concerns effectively. With our AI, you can
                proactively identify potential health issues, offering you peace of mind through timely health
                assessments.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-items feature-items-style-02">
            <div class="feature-icon">
              <i class="fas fa-file-medical-alt"></i>
            </div>
            <div class="feature-number">
              <span>04</span>
            </div>
            <div class="feature-content">
              <h6>Convenience and Reliability in Health Assessments</h6>
              <p class="mb-0">Our user-friendly web-based platform ensures that monitoring your health is simple and
                reliable. Access trustworthy health assessments and recommendations in just a few clicks, all from the
                comfort of your home.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="feature-items feature-items-style-02">
            <div class="feature-icon">
              <i class="fa fa-heartbeat"></i>
            </div>
            <div class="feature-number">
              <span>05</span>
            </div>
            <div class="feature-content">
              <h6>Take Charge of Your Health Journey</h6>
              <p class="mb-0">Your health journey is unique, and our AI is here to guide you through it. Regain control
                of your well-being and pave the way for a healthier future with our innovative health AI solution.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="space-pb space-pt">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="owl-carousel testimonial" data-nav-arrow="false" data-items="1" data-md-items="1"
            data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoheight="true"
            style="background-image: url(images/pattern.png);">
            <div class="item">
              <div class="testimonial-item">
                <div class="testimonial-avatar">
                  <img class="img-fluid rounded-circle" src="images/avatar/mother.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>Being a mother is a demanding role, and this AI has been a lifesaver. It's like having a personal
                    health assistant right at my fingertips. I get quick answers to my kids' health questions, ensuring
                    their well-being and my peace of mind.</p>
                </div>
                <div class="testimonial-author">
                  <div class="testimonial-name">
                    <div class="testimonial-quote">
                      <i class="flaticon-left-quote"></i>
                    </div>
                    <h6 class="mb-1">Alice Williams</h6>
                    <span>- Mother.</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="testimonial-item">
                <div class="testimonial-avatar">
                  <img class="img-fluid rounded-circle" src="images/avatar/profile1.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>As a cancer patient, I can't emphasize enough how valuable this AI has been in my journey. It
                    provided early warnings and helped me understand my condition better. The support and insights I've
                    gained have truly made a difference in my fight against cancer.</p>
                </div>
                <div class="testimonial-author">
                  <div class="testimonial-name">
                    <div class="testimonial-quote">
                      <i class="flaticon-left-quote"></i>
                    </div>
                    <h6 class="mb-1">Felica Queen</h6>
                    <span>- Cancer patient.</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="testimonial-item">
                <div class="testimonial-avatar">
                  <img class="img-fluid rounded-circle" src="images/avatar/profile2.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>I recently underwent surgery, and the AI support was invaluable. It provided me with clear
                    pre-surgery guidelines and answered my post-op concerns promptly. Having this resource by my side
                    was reassuring throughout the surgical process.</p>
                </div>
                <div class="testimonial-author">
                  <div class="testimonial-name">
                    <div class="testimonial-quote">
                      <i class="flaticon-left-quote"></i>
                    </div>
                    <h6 class="mb-1">Harry Russell</h6>
                    <span>- Surgery patient.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer space-pt">
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center copyright text-md-start mb-3 mb-md-0">
            <img height="50px" src="images/rcaiot-logo.png" alt="">
          </div>
          <div class="col-md-6 text-center text-md-end">
          <img height="50px" src="images/air-logo.png" alt="">
            <!-- <p class="mb-0"> &copy; Copyright <span id="copyright">
                <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
              </span> <a href="https://mehmetcakirkaya.com.tr"> Mehmet Çakırkaya </a> All Rights Reserved</p> -->
          </div>
        </div>
      </div>
    </div>
  </footer>
 
  <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-up"></i> </a>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <script src="js/jquery.appear.js"></script>
  <script src="js/owl-carousel/owl.carousel.min.js"></script>

  <script src="js/custom.js"></script>
</body>

</html>