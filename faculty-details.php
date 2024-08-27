<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{
    header('location:index.php');
}
else{
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Faculty Details</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        .faculty-box {
            background-color: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .faculty-box img {
            margin-bottom: 15px;
            max-height: 150px;
            width: 100%;
            object-fit: cover;
        }

        .faculty-box h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .faculty-box p {
            margin-bottom: 5px;
            color: #555;
        }

        .faculty-box a.btn {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .faculty-box {
                margin-bottom: 30px;
            }
        }

        .row.equal-height {
            display: flex;
            flex-wrap: wrap;
        }

        .row.equal-height [class*='col-'] {
            display: flex;
            margin-bottom: 20px;
        }

        .row.equal-height [class*='col-'] > .faculty-box {
            flex: 1;
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
                    <h4 class="header-line">Faculty Members</h4>
                </div>
            </div>

            <div class="row equal-height">
                <?php
                $sql = "SELECT * FROM copy_of_facultymaster";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0) {
                    foreach($results as $result) {
                ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="faculty-box text-center">
                            <img src="facultyimages/<?php echo htmlentities($result->ImagePath);?>" alt="<?php echo htmlentities($result->FacultyName);?>" class="img-responsive img-thumbnail" />
                            <h4><?php echo htmlentities($result->FacultyName);?></h4>
                            <p><?php echo htmlentities($result->Designation);?></p>
                            <p><strong>Department:</strong> <?php echo htmlentities($result->Department);?></p>
                            <a href="faculty-profile.php?id=<?php echo htmlentities($result->id);?>" class="btn btn-info">View Profile</a>
                        </div>
                    </div>
                <?php }} ?>
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
