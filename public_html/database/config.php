<?php
//database configurations

define("DB_HOST","localhost");
define("DB_UNAME","u479705502_manh");
define("DB_PASS","Manh2001a");
define("DB_DNAME","u479705502_quiz");
$conn=mysqli_connect(DB_HOST,DB_UNAME,DB_PASS,DB_DNAME);

// $conn = new mysqli("localhost","root","","quizller");

// Check connection
// if ($conn->connect_errno) {
//   echo "Kết nối MYSQLi lỗi" . $conn->connect_error;
//   exit();
// }




// $servername = "localhost";
// $database = "quizller";
// $username = "root";
// $password = "";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($conn);
// ?>
