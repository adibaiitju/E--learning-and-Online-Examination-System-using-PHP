<?php
if (isset($_POST['insert']))
    $host = "localhost";
$dbuser = "root";


$dbpwd = "";
$dbname = "final_project";


$con = mysqli_connect($host, $dbuser, $dbpwd, $dbname);
if ($con == false) {
    echo "<h1>Error connect to Database</h1>";
}
if (mysqli_select_db($con, 'final_project')) {
    echo 'database selected';
}
$qs_id = $_POST['qs_id'];
$question = $_POST['question'];



// connect to mysql database using mysqli


$sql = "INSERT INTO ques1 (qs_id,question)
VALUES ('$qs_id','$question')";

if (mysqli_query($con, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
$mysql = "SELECT * FROM ques1";
$result = $con->query($mysql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["qs_id"] . "</td><td>" . $row["question"] . "</td></tr>";
        # code...
    }
    # code...
    echo "</table>";
} else {
    echo "0 result";
}


mysqli_close($con);