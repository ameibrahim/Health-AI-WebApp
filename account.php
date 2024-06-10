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

require_once ("config.php");


$sql = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$_SESSION['userlogin']]);

$userId = $stmtselect->fetch(PDO::FETCH_ASSOC)['id'];


$get_chats = "Select * From chats Where userId = ?";
$stmt_get = $db->prepare($get_chats);
$get_execute = $stmt_get->execute([$userId]);

$datas = $stmt_get->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Medileaf - Health and Medical HTML Template" />
  <meta name="author" content="potenzaglobalsolutions.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Health AI</title>

  <link rel="shortcut icon" href="images/neu-logo.png" />

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

  <section class="inner-banner bg-light">
    <div class="container">
      <div class="row align-items-center intro-title">
        <div class="col-12">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php"> <i class="fas fa-home"></i> </a></li>
            <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="index.php">Home</a></li>
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Account </span></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="space-pt space-pb half-overlay right-position position-relative">
    <div class="container">
      <div class="row align-items-center mb-lg-0 mb-5">
        <!-- <div class="col-lg-5 text-center">
            <img class="img-fluid" src="images/about/04.png" alt="">
          </div> -->
        <div class="col-lg-12 position-relative">
          <div class="appointment-form rounded">
            <!-- <h4 class="color-link">Account Details</h4>
              <div class="row align-items-center">
                <div class="form-group mb-3 col-md-6">
                  <input type="text" class="form-control" id="first-name" placeholder="First Name">
                </div>
                <div class="form-group mb-3 col-md-6">
                  <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                </div> 
                <div class="form-group mb-3 col-md-6">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group mb-3 col-md-6">
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                </div>
              </div> -->
              
              <div class="account-container mt-3">
                <h4 class="color-link">Chat History</h4>
                <div class="account-chat-container">


                  <?php
                  //echo "<pre>" . print_r($datas, true) . "</pre>";
                  ?>

                  <table id="chatTable">
                    <tr>
                      <th>Chat ID</th>
                      <th>Action</th>
                    </tr>
                  </table>

                  <div id="myModal" class="modal">
                    <div class="modal-content">
                      <p class="close"><span>&times;</span></p>
                      <div id="chatContainer" class="chat-container"></div> <!-- Bu satırı ekleyin -->
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
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <script>
    var datas = <?php echo json_encode($datas); ?>;

    document.addEventListener('DOMContentLoaded', function () {
      const chatTable = document.getElementById('chatTable');

      datas.forEach(data => {
        const row = chatTable.insertRow();
        const chatIdCell = row.insertCell(0);
        const actionCell = row.insertCell(1);

        chatIdCell.textContent = data.chatId;
        const button = document.createElement('button');
        button.textContent = 'View Chat';
        button.addEventListener('click', function (event) {
          event.preventDefault();
          showModal(data.history);
        });
        actionCell.appendChild(button);
      });

      // Modal functionality
      var modal = document.getElementById("myModal");
      var span = document.getElementsByClassName("close")[0];
      var chatContainer = document.getElementById("chatContainer");

      function showModal(historyJSON) {
        chatContainer.innerHTML = '';
        const history = JSON.parse(historyJSON);
        history.forEach(function (message) {
          var messageElement;

          if (message.content && message.content.startsWith && message.content.startsWith('data:image/jpeg;base64,')) {
            var imgElement = document.createElement('img');
            imgElement.src = message.content;
            imgElement.classList.add('image-preview');
            imgElement.style.width = '100px';
            messageElement = document.createElement('div');
            messageElement.className = `${message.role}-message`;
            var messageInsideElement = document.createElement('div');
            messageInsideElement.className = `${message.role}-message-inside`;
            messageInsideElement.appendChild(imgElement);
            messageElement.appendChild(messageInsideElement);
            chatContainer.appendChild(messageElement);
          } else {
            messageElement = document.createElement('div');
            messageElement.className = `${message.role}-message`;
            var messageInsideElement = document.createElement('div');
            messageInsideElement.className = `${message.role}-message-inside`;
            var paragraph = document.createElement('p');
            paragraph.textContent = message.content;
            messageInsideElement.appendChild(paragraph);
            messageElement.appendChild(messageInsideElement);
            chatContainer.appendChild(messageElement);
          }
        });

        modal.style.display = "block";
      }

      span.onclick = function () {
        modal.style.display = "none";
      }

      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    });
  </script>

  <script src="js/custom.js"></script>

</body>

</html>