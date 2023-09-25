<?php
$id = $_GET['id'];
$en_name=$_POST["en_name"];
$en_surname=$_POST["en_surname"];
$th_name=$_POST["th_name"];
$th_surname=$_POST["th_surname"];
$major_code=$_POST["major_code"];
$email=$_POST["email"];
//echo $id; echo $en_name; echo $en_surname; echo $th_name; echo $th_surname;
//echo $major_code; echo $email;
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "students";
// create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
echo "Connected successfully</br>";
echo $id;
$sql = "UPDATE `std_info` SET th_surname=$th_name , en_name = $en_name WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>
  