<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
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
    <hr>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Feedback</h1>
                </div>
            </div>
        </div>
    </header>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Your Message</h3>
                <form name="sentMessage" id="contactForm" novalidate method="post" action="">
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required
                                data-validation-required-message="Please enter your name" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="Email" name="email" required
                                data-validation-required-message="Please enter your email" />
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" placeholder="Message" name="message"
                                required data-validation-required-message="Please enter your message" minlength="5"
                                data-validation-minlength-message="Min 5 characters" maxlength="999"
                                style="resize:none;margin-top:10px"></textarea>
                        </div>
                    </div>
                    <br>
                    <div id="success">
                        <?php
                        if (isset($_POST['btnsubmit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            $strInsert = "INSERT INTO feedback(Description,Full_Name,Email_ID) VALUES('$message','$name','$email')";
                            if (mysqli_query($strconn, $strInsert))
                                echo "<div class='alert alert-success' role='alert'>Thanks for feedback.</div>";
                            else
                                echo "<div class='alert alert-danger' role='alert'>something wrong.</div>";
                        }
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"
                        name="btnsubmit">Send</button><br /><br /><br /><br />
                </form>
            </div>
        </div>
    </div>

    &nbsp;

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