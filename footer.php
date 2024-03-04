<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/da55c0c57e.js" crossorigin="anonymous"></script>
    <title>Footer</title>
    <style>
    .footer {
        padding: 50px 0 20px 0;
        background-color: #696969;
        color: #878c94;
    }

    .footer .title {
        text-align: left;
        color: #fff;
        font-size: 25px;
    }


    .footer .social-icon {
        padding: 0px;
        margin: 0px;
        background-color: #696969;
    }

    .footer .social-icon a {
        display: inline-block;
        color: #fff;
        font-size: 25px;
        padding: 5px;
    }

    .footer .acount-icon a {
        display: block;
        color: #fff;
        font-size: 18px;
        padding: 5px;
        text-decoration: none;
    }

    .footer .acount-icon .fa {
        margin-right: 25px;
    }


    .footer .category a {
        text-decoration: none;
        color: #fff;
        display: inline-block;
        padding: 5px 20px;
        margin: 1px;
        border-radius: 4px;
        margin-top: 6px;
        background-color: black;
        border: solid 1px #fff;
    }

    .footer .payment {
        margin: 0px;
        padding: 0px;
        list-style-type: none
    }

    .footer .payment li {
        list-style-type: none
    }

    .footer .payment li a {
        text-decoration: none;
        display: inline-block;
        color: #fff;
        float: left;
        font-size: 25px;
        padding: 10px 10px;
    }

    .btn {
        background-color: black;
        color: white;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="title">Social</h4>

                    <ul class="social-icon">
                        <a href="www.facebook.com" class="social"><i class="fa fa-facebook"></i></a>
                        <a href="www.twitter.com" class="social"><i class="fa fa-twitter"></i></a>
                        <a href="www.instagram.com" class="social"><i class="fa fa-instagram"></i></a>
                        <a href="www.youtube.com" class="social"><i class="fa fa-youtube-play"></i></a>
                        <a href="www.github.com" class="social"><i class="fa fa-github"></i></a>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4 class="title">Navigation Bar</h4>
                    <span class="acount-icon">
                        <a href="index.php"><i class="fa fa-heart" aria-hidden="true"></i> Home</a>
                        <a href="feature.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Features</a>
                        <a href="feedback.php"><i class="fa fa-user" aria-hidden="true"></i> Feedback</a>
                        <a href="about.php"><i class="fa fa-globe" aria-hidden="true"></i> About us</a>
                    </span>
                </div>
                <div class="col-sm-4">
                    <h4 class="title">Subscribe</h4>
                    <form class="d-flex">
                        <input class="form-control me-2" type="email" placeholder="Your Mail Address"
                            aria-label="email">
                        <button class="btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <hr style="color: orange;">
        </div>


    </footer>


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