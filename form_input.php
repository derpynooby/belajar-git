<?php 
$conn = mysqli_connect("localhost","root","","test");

$name = ["name"];
$class = ["class"];
$age = ["age"];
$password = ["password"];

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $class = $_POST["class"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    
    $query = "INSERT INTO data VALUES('', '$name', '$class', '$age', '$password')";
    mysqli_query($conn, $query);
};
?>
<!DOCTYPE html>
<html>
<body>
   <form action="" method="post">
    <label for="name">Nama</label>
    <input type="text" name="name" placeholder="nama" required >
    <br><br>
    <label for="class">Class</label>
    <input type="text" name="class" placeholder="class" required >
    <br><br>
    <label for="age">Age</label>
    <input type="number" name="age" placeholder="age" required >
    <br><br>
    <label for="password">Password</label>
    <input type="number" name="password" placeholder="password" required >
    <br><br>
    <input type="submit" name="submit">

   </form>
</body>
</html>