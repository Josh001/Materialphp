
<?php
    include("submit.php");
    $currentuser=$_GET['username'];
if(!isset($currentuser)) {
    redirect("formsingle.php");
}

?>
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="users";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_error()){
    die("Database Connection Failed: "
        .mysqli_connect_error()." (".mysqli_connect_errno().")"
    );
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/ripples.min.css" rel="stylesheet">
    <link href="bootstrap/css/material-wfont.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js" rel="script"></script>
</head>
<body class="container ">
<h1 class="label-success">Thanks for Logging in:You are currently logged in as <?php echo $currentuser?></h1>
<?php
//2---perform query
$query="SELECT * FROM mypeople";
$result=mysqli_query($conn,$query);
if(!$result){
    die("database query failed");
}

?>
<!---Script----->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>