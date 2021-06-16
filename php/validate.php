<?php

$user = $_POST['user'];
$password = $_POST['password'];

session_start();

$SESSION['user'] = $user;

include('config.php');

$query = "SELECT * FROM usuarios WHERE email = '$user' AND password = '$password'";
$request = mysqli_query($connection, $query);

$rows = mysqli_num_rows($request);

if ($rows) {
    header("location: ../admin/index.php");
} else {
?>
    <script>
        window.location.replace('../admin/login.html');
        alert('Usuario o contraseña incorrect@');
    </script>
<?php
}

mysqli_free_result($request);
mysqli_close($connection);
