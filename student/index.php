<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap-theme.css">


    <title>Student</title>
    <style>
    .display-4 {
        font-style: italic;
        font-family: cursive;
        text-align: start;
        color: lightblue;

    }

    .courses {
        border: 5px outset red;
        background-color: lightblue;
        text-align: center;
    }
    </style>
</head>

<body class=" h-100  text-white bg-dark">

    <?php
    include "nav.php";
    $strconn = mysqli_connect("localhost", "root", "", "final_project");
    if (!$strconn)
        echo "Connection failed" . mysqli_connect_error();
    else {
    }
    session_start();
    if (isset($_SESSION["User_Id"])) {
        $userid = $_SESSION["User_Id"];
    } else {
        echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";
    }
    ?>

    <div id="content-wrap">
        <div class="jumbotron">
            <div class="container">

                <img src="../images/ju.jpg" style="display:block;
        margin-left: auto;
        margin-right: auto;">

                <div class="col-sm-8">
                    <h1 class="display-4">Welcome <?php echo $userid; ?> to Online Text System</h1>
                </div>

            </div>
        </div>
    </div>


    <div id="courses">
        <section class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="featured-box">
                        <a href="#">
                            <i class="fa fa-cogs fa-2x"></i>
                            <div class="text">
                                <h3>Attain Exam</h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-box">
                        <a href="../feedback.php">
                            <i class="fa fa-leaf fa-2x"></i>
                            <div class="text">
                                <h3>Give Feedback</h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-box">
                        <a href="manage.php">
                            <i class="fa fa-leaf fa-2x"></i>
                            <div class="text">
                                <h3>Manage Profile</h3>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <?php
    include "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


</body>

</html>