<?php
$id = $_GET['id'];

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
$sql = "DELETE FROM `std_info` WHERE id = $id;";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully <a href='student.php'>Back</a>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>
  
  