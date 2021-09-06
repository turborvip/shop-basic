<?php 
session_start();
if (isset($_SESSION["fullname"])) {
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to</title>
</head>

<body>
    <h1>Welcome to <?php echo isset($_SESSION["fullname"])? $_SESSION["fullname"]: ""; ?></h1>
    <p>This is Login page</p>
    <?php  ?>
    <a href="../controller/ControllerSignOut.php"><h3>LogOut</h3></a>
</body>

</html>
<?php 
} else {
    header("Location: ../view/login.php");
}

?>