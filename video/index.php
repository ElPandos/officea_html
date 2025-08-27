<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Login Page</title>

    <link rel="stylesheet" type="text/css" href="./css/My/mystyle.css">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="login">
    <table>
        <form name="LoginPage" method="post" action="checklogin.php">

            <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="input-group" width="auto">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="input-group" width="auto">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="input-group" width="auto">
                    <input type="submit" class="btn btn btn-primary btn-block" value="Login">
                </div>
            </div>

        </form>
    </table>
</div>
</body>
</html>

