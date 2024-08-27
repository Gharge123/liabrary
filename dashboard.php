<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0) {
    header('location:index.php');
} else {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | User Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
    .back-widget-set {
padding: 20px;
border-radius: 8px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease;
}

.back-widget-set:hover {
transform: translateY(-5px);
}

.guest-box {
padding: 20px;
margin-bottom: 20px;
border-radius: 8px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
background-color: #ffffff;
transition: transform 0.3s ease;
}

.guest-box:hover {
transform: translateY(-10px);
}

.guest-box h4 {
margin-top: 15px;
margin-bottom: 15px;
font-weight: 600;
}

.guest-box p {
margin: 0;
margin-bottom: 10px;
color: #333;
}

.guest-box .btn-info {
margin-top: 10px;
background-color: #17a2b8;
border-color: #17a2b8;
color: #fff;
font-weight: 500;
border-radius: 5px;
}

.guest-box .btn-info:hover {
background-color: #138496;
border-color: #117a8b;
}

@media (max-width: 768px) {
.guest-box {
    margin-bottom: 30px;
}
}

    </style>
</head>
<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php');?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
      <div class="container">
          <div class="row pad-botm">
              <div class="col-md-12">
                  <h4 class="header-line">User DASHBOARD</h4>
              </div>
          </div>

          <div class="row">
              <a href="listed-books.php">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                          <i class="fa fa-book fa-5x"></i>
                          <?php
                          $sql = "SELECT id FROM tblbooks";
                          $query = $dbh->prepare($sql);
                          $query->execute();
                          $listdbooks = $query->rowCount();
                          ?>
                          <h3><?php echo htmlentities($listdbooks); ?></h3>
                          Books Listed
                      </div>
                  </div>
              </a>

              <div class="col-md-4 col-sm-4 col-xs-6">
                  <div class="alert alert-warning back-widget-set text-center">
                      <i class="fa fa-recycle fa-5x"></i>
                      <?php
                      $rsts = 0;
                      $sid = $_SESSION['stdid'];
                      $sql2 = "SELECT id FROM tblissuedbookdetails WHERE StudentID=:sid AND (RetrunStatus=:rsts OR RetrunStatus IS NULL OR RetrunStatus='')";
                      $query2 = $dbh->prepare($sql2);
                      $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
                      $query2->bindParam(':rsts', $rsts, PDO::PARAM_STR);
                      $query2->execute();
                      $returnedbooks = $query2->rowCount();
                      ?>
                      <h3><?php echo htmlentities($returnedbooks); ?></h3>
                      Books Not Returned Yet
                  </div>
              </div>

              <a href="issued-books.php">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                          <i class="fa fa-book fa-5x"></i>
                          <h3>&nbsp;</h3>
                          Issued Books
                      </div>
                  </div>
              </a>
          </div>

          <div class="row">
              <a href="faculty-details.php">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                          <i class="fa fa-user fa-5x"></i>
                          <h3></h3>
                          Faculty Members
                          <?php
                          $sql = "SELECT id FROM copy_of_facultymaster";
                          $query = $dbh->prepare($sql);
                          $query->execute();
                          $totalfaculty = $query->rowCount();
                          ?>
                          <h3><?php echo htmlentities($totalfaculty); ?></h3>
                          Faculty Members
                      </div>
                  </div>
              </a>
          </div>

          <!-- Display Faculty Members List -->
          <div class="row">
              <div class="col-md-12">
                  <h4 class="header-line">Faculty Members List</h4>
                  <table class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Faculty Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $cnt = 1;
                          if ($results) {
                              foreach ($results as $result) {
                          ?>
                                  <tr>
                                      <td><?php echo htmlentities($cnt); ?></td>
                                      <td><?php echo htmlentities($result->FacultyName); ?></td>
                                      <td>
                                          <a href="faculty-profile.php?id=<?php echo htmlentities($result->id); ?>" class="btn btn-primary">
                                              View Profile
                                          </a>
                                      </td>
                                  </tr>
                          <?php
                                  $cnt++;
                              }
                          } else {
                          ?>
                              <tr>
                                  <td colspan="3" class="text-center">No Faculty Members Found</td>
                              </tr>
                          <?php
                          }
                          ?>
                      </tbody>
                  </table>
              </div>
          </div>

          <!-- Guest Members Section -->
          <div class="row pad-botm">
              <div class="col-md-12">
                  <h4 class="header-line">Guest Members</h4>
              </div>
          </div>
          <div class="row">
              <?php
              $sql = "SELECT * FROM copy_of_facultymaster LIMIT 5"; // Adjust this query if needed
              $query = $dbh->prepare($sql);
              $query->execute();
              $results = $query->fetchAll(PDO::FETCH_OBJ);

              if ($query->rowCount() > 0) {
                  foreach ($results as $result) {
              ?>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="guest-box alert alert-info text-center">
                              <i class="fa fa-user fa-5x"></i>
                              <h4><?php echo htmlentities($result->GuestName); ?></h4>
                              <p><strong>Guest Type:</strong> <?php echo htmlentities($result->GuestType); ?></p>
                              <p><strong>Books Allowed:</strong> <?php echo htmlentities($result->BooksAllowed); ?></p>
                              <p><strong>Days Allowed:</strong> <?php echo htmlentities($result->DaysAllowed); ?></p>
                              <p><strong>Email:</strong> <?php echo htmlentities($result->EmailID); ?></p>
                              <p><strong>Contact:</strong> <?php echo htmlentities($result->TelNo); ?></p>
                              <a href="guest-details.php?id=<?php echo htmlentities($result->id); ?>" class="btn btn-info">View Profile</a>
                          </div>
                      </div>
              <?php
                  }
              } else {
              ?>
                  <div class="col-md-12">
                      <div class="alert alert-danger text-center">
                          <strong>No Guest Members Found</strong>
                      </div>
                  </div>
              <?php
              }
              ?>
          </div>
      </div>
  </div>

    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
