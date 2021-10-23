<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
$conn=null;
 try {
   $conn = new PDO("mysql:host=$servername;dbname=studentapplication", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO student (fname, email)
   VALUES ($_POST['fullName'], $_POST['email'])";
   // use exec() because no results are returned
   $conn->exec($sql);


 } catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }




 ?>