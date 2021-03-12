<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['username'])) {



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

        <h1>hello <?php echo $_SESSION['name']; ?> , WELCOME TO ARCANE</h1>
        <br><br>


        <a href="logout.php">Logout</a>


</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}


?>