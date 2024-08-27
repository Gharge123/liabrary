<?php
session_start();
$errors = array();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'my_database');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Godjn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      .service-icon i {
          font-size: 3em; /* Increased font size */
          color: #fff; /* White color for icons */
          padding: 20px; /* Increased padding */
          background-color: #007bff; /* Background color */
          border-radius: 50%; /* Circular shape */
          display: flex;
          align-items: center;
          justify-content: center;
          width: 70px; /* Ensures the icon container is a circle */
          height: 70px; /* Ensures the icon container is a circle */
      }

      .service-item {
          box-shadow: 0 4px 8px rgba(0,0,0,0.1);
          transition: transform 0.3s, box-shadow 0.3s;
      }

      .service-item:hover {
          transform: translateY(-10px);
          box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      }

      .service-item .btn {
          transition: background-color 0.3s, color 0.3s;
      }

      .service-item .btn:hover {
          background-color: #007bff;
          color: #fff;
      }

      @media (max-width: 768px) {
          .service-icon {
              width: 60px; /* Adjusted width for smaller screens */
              height: 60px; /* Adjusted height for smaller screens */
              font-size: 2.5em; /* Adjusted font size for smaller screens */
          }
      }
  </style>
   <style>

    .godjn-section img {
        max-width: 50px;
        height: auto;
        margin-right: 10px;
    }

     @media (max-width: 768px) {
       .godjn-section img {
            max-width: 40px;
        }
    }
    @media (max-width: 576px) {
        .godjn-section img {
            max-width: 30px;
        }
    }
    .icon-container i {
    font-size: 3rem; /* Maximize icon size */
    color: #fb873f; /* Attractive color for icons */
    padding: 6px;
}
.icon-container {
    flex-shrink: 0;
    margin-right: 15px;
}
/* Responsive design */
@media (max-width: 768px) {
    .icon-container {
        margin-bottom: 10px;
    }
}
</style>

<style>
    .container1234 {
        width: 100%;
        max-width: 600px;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: auto;
    }

    .header1234 h2 {
        margin-bottom: 20px;
        color: #4CAF50;
    }

    .success-message h3 {
        background-color: #dff0d8;
        color: #3c763d;
        border: 1px solid #d6e9c6;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .content p {
        margin-bottom: 20px;
        color: #333;
    }

    .logout-button {
        display: inline-block;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .logout-button:hover {
        background-color: #45a049;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        display: inline-block;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .error {
        width: 100%;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #a94442;
        color: #a94442;
        background: #f2dede;
        border-radius: 5px;
        text-align: left;
    }

    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>Godjn@example.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-facebook-f"></i
            ></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-twitter"></i
            ></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-linkedin-in"></i
            ></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-instagram"></i
            ></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img class="img-fluid me-3" src="img/godjn.png" alt="" />Godjn
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
        <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="service.php" class="nav-item nav-link">Companies</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="dailytask.php" class="dropdown-item">Daily Task</a>
                    <a href="leave.php" class="dropdown-item">Leave Request Form</a>
                    <a href="performance.php" class="dropdown-item">Performance Rating</a>
                    <a href="salary.php" class="dropdown-item">Salary Sleep</a>

                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
        </div>
        </div>
        <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> -->
    </nav>
    <!-- Navbar End -->
    <div class="container1234">
    <div class="header1234">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <!-- <?php include('errors.php'); ?> -->
        <?php if (count($errors) > 0) : ?>
          <div class="error">
          	<?php foreach ($errors as $error) : ?>
          	  <p><?php echo $error ?></p>
          	<?php endforeach ?>
          </div>
        <?php endif ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" >
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class=" godjn-section col-lg-3 col-md-6">
                    <h1 class="text-white mb-4">
                        <img class="img-fluid me-3" src="img/godjn.png" alt="" />Godjn
                    </h1>
                    <p>
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i
  ></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i
  ></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i
  ></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i
  ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>Godjn@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="service.php">Companies</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
    SignUp
  </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br />Distributed By:
                        <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i
></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
      function validateForm() {
          var username = document.getElementById("username").value;
          var email = document.getElementById("email").value;
          var mobile = document.getElementById("mobile").value;
          var password = document.getElementById("password").value;
          var errorMessage = document.getElementById("errorMessage");

          if (username.trim() === "") {
              errorMessage.textContent = "Username is required";
              errorMessage.style.display = "block";
              return false;
          }

          if (email.trim() === "") {
              errorMessage.textContent = "Email is required";
              errorMessage.style.display = "block";
              return false;
          }

          if (mobile.trim() === "") {
              errorMessage.textContent = "Mobile Number is required";
              errorMessage.style.display = "block";
              return false;
          }

          if (password.trim() === "") {
              errorMessage.textContent = "Password is required";
              errorMessage.style.display = "block";
              return false;
          }

          return true;
      }

      // login form
      function login() {
      var mobile = document.getElementById("mobile").value;
      var password = document.getElementById("password").value;
      var errorMessage = document.getElementById("errorMessage");
      var successMessage = document.getElementById("successMessage");

      if (mobile === registeredUser.mobile && password === registeredUser.password) {
          errorMessage.style.display = "none";
          successMessage.textContent = "User login successful";
          successMessage.style.display = "block";

          // Redirect to main dashboard after successful login
          window.location.href = "index.php";

          return false; // Prevent form submission
      } else {
          successMessage.style.display = "none";
          errorMessage.textContent = "Invalid mobile number or password";
          errorMessage.style.display = "block";
          return false; // Prevent form submission
      }
  }
  </script>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        // Create a new FormData object and append the form data
        const formData = new FormData(this);

        fetch('logindata.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert('Your details have been submitted successfully');
            this.reset(); // Reset the form fields
        })
        .catch(error => {
            alert('There was an error submitting your details. Please try again.');
            console.error('Error:', error);
        });
    });
   </script>
</body>

</html>
