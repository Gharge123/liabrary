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
    <title>Guest Profile</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Open Sans', sans-serif;
        }

        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 30px auto;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header .fa {
            font-size: 80px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .profile-header h2 {
            margin-bottom: 10px;
            color: #333;
            font-size: 24px;
        }

        .profile-details {
            margin-top: 20px;
        }

        .profile-details p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #555;
        }

        .profile-details p strong {
            color: #333;
        }

        @media (max-width: 768px) {
            .profile-container {
                padding: 20px;
            }

            .profile-details p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php'); ?>
    <!-- MENU SECTION END-->

    <div class="content-wrapper">
        <div class="container">
            <div class="profile-container">
                <div class="profile-header">
                    <i class="fa fa-user-circle"></i>
                    <h2><?php echo htmlentities($result->GuestName); ?></h2>
                </div>

                <div class="profile-details">
                    <p><strong>Guest ID:</strong> <?php echo htmlentities($result->GuestID); ?></p>
                    <p><strong>Guest Type:</strong> <?php echo htmlentities($result->GuestType); ?></p>
                    <p><strong>Books Allowed:</strong> <?php echo htmlentities($result->BooksAllowed); ?></p>
                    <p><strong>Address Line 1:</strong> <?php echo htmlentities($result->Add1); ?></p>
                    <p><strong>Address Line 2:</strong> <?php echo htmlentities($result->Add2); ?></p>
                    <p><strong>Address Line 3:</strong> <?php echo htmlentities($result->Add3); ?></p>
                    <p><strong>Pin Code:</strong> <?php echo htmlentities($result->PinCode); ?></p>
                    <p><strong>Telephone Number:</strong> <?php echo htmlentities($result->TelNo); ?></p>
                    <p><strong>Email ID:</strong> <?php echo htmlentities($result->EmailID); ?></p>
                    <p><strong>Days Allowed:</strong> <?php echo htmlentities($result->DaysAllowed); ?></p>
                    <p><strong>Description:</strong> <?php echo htmlentities($result->Description); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php'); ?>
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
