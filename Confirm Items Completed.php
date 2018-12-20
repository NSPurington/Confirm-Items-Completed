<html>

<?php

echo "<h2><a href=\"test.php?viewed=yes\">Training Video</a></h2>";

// Check if Training Video link has been clicked
if ($_SERVER['QUERY_STRING'] === 'viewed=yes') {
     echo "<img src=\"check.jpg\">";
    } else {
     echo "<img src=\"redx.jpg\"> ";
}

// MySQL connection variables
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection Failed: " . $conn->connect_error);
}

// Database query
$sql = "SELECT result FROM quizresult WHERE tutorid=12 AND quizid=20";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Check if quiz results are greater than %90
if ($row['result'] >= 90) {
    echo "<h2>Training Quiz</h2><img src=\"check.jpg\">";
    } else {
    echo "<h2>Training Quiz</h2><img src=\"redx.jpg\">";
}

$conn->close();

?>

</html>
