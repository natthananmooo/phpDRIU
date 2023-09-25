<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
</head>
<body>

<form action="updatsuscess.php" method="post">

    <input type="hidden" name="id" value="<?php $id = $_GET['id']; echo $id; ?>">
    <input type="text" name="en_name" placeholder="English name">
    <input type="text" name="en_surname" placeholder="English surname">
    <input type="text" name="th_name" placeholder="Thai name">
    <input type="text" name="th_surname" placeholder="Thai surname">
    <input type="text" name="major_code" placeholder="Major code">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Update">
</form>

</body>
</html>

