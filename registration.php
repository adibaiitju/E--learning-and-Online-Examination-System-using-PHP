<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <title>Registration</title>


<body class=" h-100  text-white bg-dark">
    <?php
    include "nav.php";
    $strconn = mysqli_connect("localhost", "adibaiit", "adiba1976", "web-project");
    if (!$strconn)
        echo "Connection failed" . mysqli_connect_error();
    else {
    }
    ?>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Rrgistration</h1>
                </div>
            </div>
        </div>
    </header>
    <br><br>
    <form method="POST" action="" id="regform">
        <table border=0 align="center">
            <tr>
                <td><label>Enter Your Full Name :</label></td>
                <td><input type="text" class="form-control" name="fname" placeholder="Full Name"></td>
            </tr>
            <tr>
                <td><label>Email address :</label></td>
                <td><input type="email" class="form-control" name="email" placeholder="Email ID"></td>
            </tr>
            <tr>
                <td><label>Enter Your User ID :</label></td>
                <td><input type="number" class="form-control" name="user" placeholder="Your Class ID"></td>
            </tr>
            
            <tr>
                <td><label>Enter Your Password :</label></td>
                <td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
            </tr>
            <tr>
                <td><label>Confirm Password :</label></td>
                <td><input type="password" class="form-control" name="pass1" placeholder="Confirm Password"></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <button class="btn btn-block  btn-outline-primary" name="btn">Register</button>
                    <!--<button class="btn btn-block  btn-outline-secondary">Reset</button>-->
                </td>

            </tr>

        </table>
    </form>
    <?php
    if (!empty($_POST['fname'])) {
        if (isset($_POST['btn'])) {
            $userid = $_POST['user'];
            $fname = $_POST['fname'];
            $btch = $_POST['batch'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $query = "INSERT INTO signup(User_Id, Full_Name, Email_ID, pass) VALUES('$userid','$fname','$email','$password')";
            $result = mysqli_query($strconn, $query);
            if ($result) {
                echo "<div class='alert alert-success' role='alert'>Sign up successful</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Username or Email already registered</div>";
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