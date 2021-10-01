<?php
session_start();
?>
<html lang = "en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <div class="row">
        Click here to clean <a href = "logout.php" tite = "Logout">Session.
    </div>
</div>

<?php
if (isset($_SESSION["valid"])){

    echo 'Your on page';

} else {
    header("Location: login.php");
}
?>

</body>
</html>
