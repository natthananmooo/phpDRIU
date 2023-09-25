<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');


$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "students";


// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed ".mysqli_connect_error());
}
echo "Connected successfully</br>";
$sql="SELECT * FROM `std_info`";
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)>0){

        echo "<table border='1'>";
        echo "<tr><th>id</th><th>name</th><th>surname</th>";
        echo "<th>ชื่อ</th><th>นามสกุล</th>";
        echo "<th>Major</th><th>email</th>";
        echo "<th>delete</th><th>update</th></tr>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["id"]."</td>";
            echo "<td>".$row["en_name"]."</td>";
            echo "<td>".$row["en_surname"]."</td>";
            echo "<td>".$row["th_name"]."</td>";
            echo "<td>".$row["th_surname"]."</td>";
            echo "<td>".$row["major_code"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>"."<a href='http://www.localhost/delete_std.php?id=".$row["id"]."'>delete</a></td>";
            echo "<td>"."<a href='http://www.localhost/update_std_from.php?id=".$row["id"],"'>update</a></td></tr>";
        }
        echo "</table>";
    }
}
echo "<a href='http://www.localhost/insert_std_from.html'>Insert new record</br></a>";


mysqli_close($conn);
?>