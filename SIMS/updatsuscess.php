<?php

$id = $_POST['id'];
$en_name = $_POST['en_name'];
$en_surname = $_POST['en_surname'];
$th_name = $_POST['th_name'];
$th_surname = $_POST['th_surname'];
$major_code = $_POST['major_code'];
$email = $_POST['email'];
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


// Update the database record
$sql = "UPDATE `std_info` SET en_name = '$en_name', en_surname = '$en_surname', th_name = '$th_name', th_surname = '$th_surname', major_code = '$major_code', email = '$email' WHERE id = $id";
$result=mysqli_query($conn,$sql);
if($result){
    echo "New record created successfully!<a href='student.php'>Back</a>";
}
else echo "Error: ".$sql."<br>".mysqli_error($conn);
mysqli_close($conn);
?>