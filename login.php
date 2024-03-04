<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
    body {
        background-color: seagreen;
        font-weight: bold;
        color: black;
    }

    #form {
        border: black;
        width: 20%;
        border-radius: 5px;
        margin: 10px auto;
        background-color: dimgray;
        padding: 50px;
        color: whitesmoke;
    }

    #btn {
        color: black;
        background-color: whitesmoke;
        padding: 5px;
        margin-left: 70%;
    }

    button {
        color: whitesmoke;
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
    ?>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </header>
    <br><br>

    <div id="form">
        <form action="" method="post">
            <p>
                <label>UserID:</label>
                <input type="text" id="user" name="user" placeholder="Your Class Roll">
            </p>
            <p>
                <label>Password:</label>
                <input type="password" id="pass" name="pass">
            </p>
            <p>
                <button name="btnsubmit" class="btn btn-block btn-outline-primary">Submit</button></td>
            </p>
            <p>
                <a href="registration.php" class="btn btn-block">Create Account?</a>
            </p>
            <p>
                <a href="teacher_login.php" class="btn btn-block">Login as Teacher</a>
            </p>

        </form>

    </div><br><br><br>

    <?php
    if (!empty($_POST['user']) && !empty($_POST['pass'])) {
        if (isset($_POST['btnsubmit'])) {
            $userid = $_POST["user"];
            $password = $_POST["pass"];
            $query = "SELECT * FROM student WHERE User_Id='$userid' and Password='$password'";
            $result = mysqli_query($strconn, $query);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                session_start();
                //session_id("my_session");
                $_SESSION["User_Id"] = $_POST['user'];
                //header("location:user/index.php");
                echo ("<script>location.href = 'student/index.php';</script>");
            } else {
                echo "<div class='alert alert-danger' role='alert'>Username or password is incorrect..Try again</div>";
            }
        }
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