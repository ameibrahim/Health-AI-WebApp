<?php
session_start();
if (isset($_SESSION['userlogin'])) {
  header('Location: index.php');
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

  <link rel="shortcut icon" href="images/neuhospital.png" />

  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

  <link rel="stylesheet" href="css/style.css" />

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</head>

<body>

  <header class="header header-sticky login">
    <div class="main-header my-3">
      <div class="container">
        <nav class="navbar navbar-static-top navbar-expand-lg bg-nav" style="border-radius: 10px;">
          <a class="" href="index.php">
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
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="register.php">Register</a>
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

  <section class="inner-banner bg-light">
    <div class="container">
      <div class="row align-items-center intro-title">
        <div class="col-12">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="javascript:void(0)">Login</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $(function () {
      $("#login").click(function (e) {
        var valid = this.form.checkValidity();
        if (valid) {
          var username = $("#username").val();
          var password = $("#password").val();
        }
        e.preventDefault();

        $.ajax({
          type: "POST",
          url: "jslogin.php",
          data: { username: username, password: password },
          success: function (data) {
            alert(data);
            if ($.trim(data) === "User Loged In") {
              setTimeout("window.location.href = 'index.php'", 500)
            }
          },
          error: function (data) {
            alert("error");
          }
        });
      })
    });
  </script>

  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-10">
          <div class="login-form">
            <form>
              <h3 class="mb-4 text-center color-link">Login to your Account</h3>
              <div class="row align-items-center">
                <div class="mb-3 col-md-12">
                  <input type="email" class="form-control" id="username" name="username" placeholder="Email">
                </div>
                <div class="mb-3 col-md-12">
                  <input type="password" class="form-control" id="password" name="password" maxlength="password"
                    placeholder="Password">
                </div>
                <div class="mb-3 col-md-6">
                </div>
                <div class="mb-3 col-sm-12 mb-0">
                  <button type="button" id="login" class="btn btn-blue-1 my-3 my-sm-0">Login Now</button>
                  <span class="ms-3">Don’t have an account? <a href="register.php">Create Account</a></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>