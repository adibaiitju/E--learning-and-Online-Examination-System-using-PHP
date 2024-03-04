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
    </style>
</head>

<body class=" h-100  text-white bg-dark">
    <?php include "nav.php";
    $strconn = mysqli_connect("localhost", "root", "", "final_project");
    if (!$strconn) echo "Connection failed" . mysqli_connect_error();

    else {
    }

    session_start();

    if (isset($_SESSION["User_Id"])) {
        $userid = $_SESSION["User_Id"];
    } else {
        echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";
    }
    ?>

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="display-4">Manage Profile</h1>
                </div>
            </div>
        </div>
    </header>
    <?php
    $query = "INSERT INTO student(User_Id, Full_Name, Batch, Email_ID, Password) VALUES('$userid','$fname','$btch','$email','$password')";
    $result = mysqli_query($strconn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $userid = $row["User_Id"];
        $fname = $row["Full_Name"];
        $btch = $row["Batch"];
        $email = $row["Email_ID"];
        $password = $row["Password"];
    }
    ?>
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