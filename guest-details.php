<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{
    header('location:index.php');
}
else {
    if(isset($_GET['id'])){
        $guest_id = intval($_GET['id']);
        $sql = "SELECT * FROM copy_of_facultymaster WHERE id = :guest_id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':guest_id', $guest_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Guest Details</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        .guest-box {
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

        .guest-box img {
            margin-bottom: 15px;
            max-height: 150px;
            width: 100%;
            object-fit: cover;
        }

        .guest-box h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .guest-box p {
            margin-bottom: 5px;
            color: #555;
        }

        .guest-box a.btn {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .guest-box {
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

        .row.equal-height [class*='col-'] > .guest-box {
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
                    <h4 class="header-line">Guest Details</h4>
                </div>
            </div>

            <div class="row equal-height">
                <div class="col-md-12">
                    <div class="guest-box text-center">
                        <img src="guestimages/<?php echo htmlentities($result->ImagePath);?>" alt="<?php echo htmlentities($result->GuestName);?>" class="img-responsive img-thumbnail" />
                        <h4><?php echo htmlentities($result->GuestName);?></h4>
                        <p><strong>Guest Type:</strong> <?php echo htmlentities($result->GuestType);?></p>
                        <p><strong>Books Allowed:</strong> <?php echo htmlentities($result->BooksAllowed);?></p>
                        <p><strong>Address Line 1:</strong> <?php echo htmlentities($result->Add1);?></p>
                        <p><strong>Address Line 2:</strong> <?php echo htmlentities($result->Add2);?></p>
                        <p><strong>Address Line 3:</strong> <?php echo htmlentities($result->Add3);?></p>
                        <p><strong>Pin Code:</strong> <?php echo htmlentities($result->PinCode);?></p>
                        <p><strong>Telephone Number:</strong> <?php echo htmlentities($result->TelNo);?></p>
                        <p><strong>Email ID:</strong> <?php echo htmlentities($result->EmailID);?></p>
                        <p><strong>Days Allowed:</strong> <?php echo htmlentities($result->DaysAllowed);?></p>
                        <p><strong>Description:</strong> <?php echo htmlentities($result->Description);?></p>
                        <a href="guest-profile.php?id=<?php echo htmlentities($result->id);?>" class="btn btn-info">Edit Details</a>
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
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
