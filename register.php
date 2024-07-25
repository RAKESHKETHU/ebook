<?php
$servername = "localhost";
$username = "root";
$password="";
$database="usersdb";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error".mysqli_error($con));
}
else
    {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into users(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>register successfully</script>";
        echo "<script>
            window.open('in.html','_self')</script>";
    }
    else
        echo "error".mysqli_error($con);
}
    mysqli_close($con);
?>
