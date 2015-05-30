<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/11/2015
 * Time: 5:38 PM
 */
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
require_once('submit.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $gender=$_POST['optionsRadios'];
    $education=$_POST['optionsRadios1'];
    $query="INSERT INTO `users`(user_name, password, firstname, lastname,DateOfBirth,Gender,Education) VALUES ('{$username}',";
     $query.= "'{$password}',";
     $query .= "'{$firstname}','{$lastname}','{$dob}','{$gender}','{$education}')";

    mysqli_escape_string($query,$username,$password,$firstname,$lastname);

    $result = mysqli_query($conn,$query);
        if($result){
            redirect("Firstwelcome.php");

        }
        else{
            echo"Unable to create your account please try again";
        }
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/ripples.min.css" rel="stylesheet">
    <link href="bootstrap/css/material-wfont.min.css" rel="stylesheet">
    <script src="js/respond.js" rel="script"></script>
</head>
<body class="container" >
<h1>Register with us Here</h1>
<div class="row">
    <div class="col-lg-4 jumbotron pull-right">
        <form action="register.php" method="post" class="form-horizontal">
            <fieldset>
                <legend class="label-success mdi-action-stars  "style="color: #ffffff;
                padding-left: 3em; ><b
                ">WELCOME</b></legend>
                <div class="form-group">

                    <label for="inputName" control-label"><b>Username:</b></label>
                    <div class="col-lg-11">
                        <input class="form-control" type="text" name="username" required="true" placeholder="name" min="6"/></p>
                    </div>
                </div>
                <div class="form-group">

                    <label for="inputPassword"  control-label"><b>Password:</b></label>
                    <div class="col-lg-10">
                        <input class="form-control" type="password" name="password" required="true" placeholder="password"/></p>
                    </div>
                </div>

                <div class="form-group">

                    <label for="inputfirstname"  control-label"><b>Firstname:</b></label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="firstname" required="true" placeholder="Firstname"/></p>
                    </div>
                </div>
                <div class="form-group">

                    <label for="inlastname"  control-label"><b>LastName:</b></label>
                    <div class="col-lg-10">
                        <input class="form-control" type="password" name="lastname" required="true" placeholder="LastName"/></p>
                    </div>
                </div>
                <div class="form-group">

                    <label for="d0b"  control-label"><b>DateOfBirth:</b></label>
                    <div class="col-lg-10">
                        <input  type="date" required="true" name="dob" value=""></p>
                    </div>
                </div>
                    <label class="control-label"><b>GENDER:</b></label>
                    <div class="row">
                    <div class="col-lg-10">
                        <div class="radio radio-primary">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" checked=""><span class="circle"></span><span class="check"></span>
                                Male
                            </label>
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female"><span class="circle"></span><span class="check"></span>
                                Female
                            </label>
                        </div>
                      </div>
                        </div>
                        <label class="control-label"><b>Education:</b></label>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="optionsRadios1" id="optionsRadios1" value="Graduate" checked=""><span class="circle"></span><span class="check"></span>
                                        Graduate
                                    </label>
                                    <label>
                                        <input type="radio" name="optionsRadios1" id="optionsRadios2" value="PostGraduate"><span class="circle"></span><span class="check"></span>
                                        PostGraduate
                                    </label>
                                </div>
                            </div>
                            </div>



                        <input class="btn  btn-success  spacemelit" type="submit" name="submit" value="Register"/></br>
            </fieldset>
        </form>
    </div>
</div>
</div>

<!---Script----->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>

<!---Script----->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>