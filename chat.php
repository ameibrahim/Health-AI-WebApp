<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
  header('Location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION);
  header("location: login.php");
}

$thisChatId = microtime() . '_' . rand(111111111111, 999999999999);
$thisChatId = md5($thisChatId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Health AI Bot" />
  <meta name="description" content="Health AI App" />
  <meta name="author" content="mehmetcakirkaya.com.tr" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health AI - <?= $thisChatId ?></title>

  <link rel="shortcut icon" href="images/neu-logo.png" />

  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</head>

<body>

  <header class="header header-02 header-transparent header-sticky">

    <div class="main-header" style="margin-top: 10px;">
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

  <section class="half-overlay right-position position-relative big-chat-container"
    style="padding-bottom: 60px; padding-top: 60px;">
    <div class="container">
      <div class="row align-items-center mb-lg-0 mb-5">
        <div class="chat-head col-lg-12 position-relative">
          <div class="btn-sec p-3 chat-head-inside">
            <h3 class="text-light m-0">Welcome to Health AI</h3>

            <div class="save-check">
              <input type="hidden" name="chatId" id="chatId" value="<?= $thisChatId; ?>">

              <input type="checkbox" name="saveHistory" id="saveHistory"" /><label for="saveHistory">Toggle</label>

                <h4>Save Chat</h4>

              <!-- <input type="checkbox" name="saveHistory" id="saveHistory"
                style="visibility: visible!important; width: 20px; height:20px;"> -->

            </div>
          </div>
        </div>
        <div class="col-lg-12 position-relative">
          <div class="chat-container">
          </div>
          <div class="chat-form" id="chatForm">
            <div id="selected-image"></div>
            <input type="file" id="fileInput" style="display: none;">
            <button for="fileInput" id="upload"><i class="fa-solid fa-paperclip"></i></button>
            <input type="text" id="userMessage" placeholder="Mesajınızı yazın" required>
            <button id="submit-btn" type="submit">Gönder</button>
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