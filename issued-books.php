<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {
header('location:index.php');
}
else{
   // SQL query to fetch data from the table
$sql = "SELECT * FROM issuereport ORDER BY id DESC";

$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);



    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System |  Issued Books</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Issued Books</h4>
    </div>


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Issued Books
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ACS NO</th>
                                            <th>Author Name</th>
                                            <th>Book Name</th>
                                            <th>ISBN </th>
                                            <th>Member Card Number</th>
                                            <th>Student Name</th>
                                            <th>Issued Date</th>
                                            <th>Due Date</th>
                                            <th>Return Date</th>
                                            <th>Price</th>
                                            <th>Unit</th>
                                            <th>Fine in(USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      if ($query->rowCount() > 0) {
                                          $cnt = 1;
                                          foreach ($results as $result) {
                                              echo '<tr>';
                                              echo '<td>' . htmlentities($cnt) . '</td>';
                                              echo '<td>' . htmlentities($result->acs_no) . '</td>';
                                              echo '<td>' . htmlentities($result->author_name) . '</td>';
                                              echo '<td>' . htmlentities($result->book_name) . '</td>';
                                              echo '<td>' . htmlentities($result->isbn) . '</td>';
                                              echo '<td>' . htmlentities($result->memcard_no) . '</td>';
                                              echo '<td>' . htmlentities($result->stu_name) . '</td>';
                                              echo '<td>' . htmlentities($result->issue_date) . '</td>';
                                              echo '<td>' . htmlentities($result->due_date) . '</td>';
                                              echo '<td>' . htmlentities($result->return_date == "" ? "Not Returned Yet" : $result->return_date) . '</td>';
                                              echo '<td>' . htmlentities($result->price) . '</td>';
                                              echo '<td>' . htmlentities($result->unit) . '</td>';
                                              echo '<td>' . htmlentities($result->fine) . '</td>';
                                              echo '</tr>';
                                              $cnt++;
                                          }
                                      } else {
                                          echo '<tr><td colspan="13">No Records Found</td></tr>';
                                      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>



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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
<?php } ?>
