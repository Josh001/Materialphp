<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="mypeople";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_error()){
    die("Database Connection Failed: "
        .mysqli_connect_error()." (".mysqli_connect_errno().")"
    );
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 3/17/2015
 * Time: 5:07 PM
 */
require_once('submit.php');
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            if ($username == $row['user_name'] && $password == $row['password']) {
                redirect("index.php?username={$username}");
            } else {
                $username = $_POST['username'];
                $message = "UserName/Password Incorrect";
            }
        }
        }else{
            $username="";
            $message="Pls log in with the right credentials";
    }

?>

<!DOCTYPE html>
<html>
<head lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/ripples.min.css" rel="stylesheet">
    <link href="bootstrap/css/material-wfont.min.css" rel="stylesheet">
    <script src="js/respond.js" rel="script"></script>
</head>
<body class="container container-fluid" >
<div style="margin-top:4em">
<div class="row"  >
    <div class="col-lg-8">
        <label class="label-material-green-400 "><h2 style="color: #f5f5f5; font-size: 40px"><i class="mdi-action-assignment">WELCOME TO MY SITE</i></h2>    </label>
        <div class="card">


        </div>

    </div>
    <div class="col-lg-4 jumbotron-white withripple">
<form class="form-horizontal" action="formsingle.php" method="post" style="margin-top: 2em">
    <fieldset>
        <legend ><b class="mdi-image-lens mdi-material-green-400">WELCOME</b></legend>
        <div class="form-group">
            <label for="inputEmail"  class="mdi-social-person" control-label"><b>Username:</b></label>
            <div class="col-lg-11">
                <input class= "form-control" type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" placeholder="name" min="6"/></p>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="mdi-social-whatshot"  control-label"><b>Password:</b></label>
            <div class="col-lg-10">
           <input class="form-control" type="password" name="password" value="" placeholder="password"/></p>
            </div>
         </div>
        <input class=" btn  btn-success spacemelit" type="submit" name="submit" value="Log in"/></br>
        <div class="form-group">
            <div class="col-lg-6 pull-left label-success" style="margin-top:2em; color: #ffffff">
            <i class="mdi-social-domain"> Haven't Registered ?</i>
            </div>
            <div class="col-lg-6">
            <a href="register.php?<?php $username?>" class=" shadow-z-3 mdi-social-people btn btn-material-green-A700 spaceme"> Register</a>
            </div>
        </div>
    </fieldset>
</form>
        <div class="alert  alert-success">
            <button type="button" class="close"  data-dismiss="alert">×</button>
            <strong><?php echo $message ?></strong>
        </div>
</div>
<!---Script----->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</diV>
</body>
</html>
<form class="form-horizontal" action="formsingle.php" method="post">-->
