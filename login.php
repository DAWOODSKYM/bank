<?php
$message="";
if (isset($_POST["email"]))
{
    require "connect.php";
    extract($_POST);
    $query="select * from users WHERE email='$email'AND type!=3";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    $count =mysqli_num_rows($result);
    if($count==1)
    {
        //success
        $row =mysqli_fetch_assoc($result);
        extract($row);
        session_start();
        $_SESSION["names"]=$names;
        $_SESSION["type"]=$type;
        header("location:issue.php");
       

    }
    else
        {
        $message="<p class='text-danger'>WRONG EMAIL OR PASSWORD.</p>";

    }

}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            width: 100%;
            height: 100%;
        }
        .container{
            display: flex;
            height: 100vh;
            align-content: center;
            align-items: center;
        }
        .glyphicon{
            font-size: 80px;
            color: #2aabd2;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="col-sm-4 col-sm-offset-4">
            <form role="form" method="post" action="login.php">
                <div class="form-group">
                    <p class="text-center">
                        <span class="glyphicon glyphicon-user"></span>
                    </p>
                    <label for="email">Email address:</label>
                    <input type="email"  name="email" required class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" required class="form-control" id="pwd">
                </div>

                <button type="submit" class="btn btn-danger">Sign in here</button>
            </form>

            <?=$message?>

        </div>
    </div>
</body>
</html>