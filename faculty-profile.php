<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  {
header('location:index.php');
}
else{
// Get faculty ID from URL
$faculty_id = intval($_GET['id']);

$sql = "SELECT * FROM copy_of_facultymaster WHERE id=:faculty_id";
$query = $dbh->prepare($sql);
$query->bindParam(':faculty_id', $faculty_id, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);

if($result) {
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Faculty Profile</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                <h4 class="header-line">Faculty Profile</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="facultyimages/<?php echo htmlentities($result->ImagePath);?>" alt="<?php echo htmlentities($result->FacultyName);?>" class="img-responsive img-thumbnail" />
            </div>
            <div class="col-md-8 col-sm-8">
                <h2><?php echo htmlentities($result->FacultyName);?></h2>
                <p><strong>Designation:</strong> <?php echo htmlentities($result->Designation);?></p>
                <p><strong>Department:</strong> <?php echo htmlentities($result->Department);?></p>
                <p><strong>Email:</strong> <?php echo htmlentities($result->EmailID);?></p>
                <p><strong>Phone:</strong> <?php echo htmlentities($result->Telno);?></p>
                <p><strong>Date of Birth:</strong> <?php echo htmlentities($result->DateofBirth);?></p>
                <p><strong>Address:</strong> <?php echo htmlentities($result->Add1 . ', ' . $result->Add2 . ', ' . $result->Add3 . ', ' . $result->Pincode);?></p>
                <p><strong>Description:</strong> <?php echo htmlentities($result->Description);?></p>
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
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } else {
    echo "<script>alert('Faculty not found');</script>";
    echo "<script>window.location.href='dashboard.php';</script>";
} } ?>
