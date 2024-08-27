<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ourinsti_nes_library";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT * FROM copy_of_facultymaster";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style media="screen">

    .table-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.styled-table {
  width: 100%;
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 18px;
  text-align: left;
}

.styled-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: center;
  font-weight: bold;
}

.styled-table th, .styled-table td {
  padding: 12px 15px;
}

.styled-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

@media screen and (max-width: 768px) {
  .styled-table {
      font-size: 16px;
  }
}

@media screen and (max-width: 480px) {
  .styled-table {
      font-size: 14px;
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
<!--Slider---->
     <div class="row">
              <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/1.jpg" alt="" />
                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" alt="" />
                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt="" />
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
             </div>
<hr />



<div class="table-container">
       <h1>Faculty Information</h1>
       <table class="styled-table">
           <thead>
               <tr>
                   <th>Faculty ID</th>
                   <th>Faculty Name</th>
                   <th>Faculty Type</th>
                   <th>Designation</th>
                   <th>Department</th>
                   <th>Books Allowed</th>
                   <th>Date of Birth</th>
                   <th>Academic Year</th>
                   <th>Address 1</th>
                   <th>Address 2</th>
                   <th>Address 3</th>
                   <th>Pincode</th>
                   <th>Telephone</th>
                   <th>Email ID</th>
                   <th>Days Allowed</th>
                   <th>Description</th>
                   <th>Image Path</th>
                   <th>College</th>
               </tr>
           </thead>
           <tbody>
               <?php
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                       echo "<tr>
                               <td>{$row['FacultyID']}</td>
                               <td>{$row['FacultyName']}</td>
                               <td>{$row['FacultyType']}</td>
                               <td>{$row['Designation']}</td>
                               <td>{$row['Department']}</td>
                               <td>{$row['BooksAllowed']}</td>
                               <td>{$row['DateofBirth']}</td>
                               <td>{$row['AcademicYear']}</td>
                               <td>{$row['Add1']}</td>
                               <td>{$row['Add2']}</td>
                               <td>{$row['Add3']}</td>
                               <td>{$row['Pincode']}</td>
                               <td>{$row['Telno']}</td>
                               <td>{$row['EmailID']}</td>
                               <td>{$row['Daysallowed']}</td>
                               <td>{$row['Description']}</td>
                               <td>{$row['ImagePath']}</td>
                               <td>{$row['College']}</td>
                           </tr>";
                   }
               } else {
                   echo "<tr><td colspan='18'>No records found</td></tr>";
               }
               $conn->close();
               ?>
           </tbody>
       </table>
   </div>
        <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
