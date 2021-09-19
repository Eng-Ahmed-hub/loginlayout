<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div class="container">
        <form class="form-horizontal" role="form" action="insert.php" method="post"><br><br><br><br>
            <h2 style="text-align: center; color: red;">REGISTRATION</h2><br><br><br>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your First Name" class="form-control" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your Last Name" class="form-control" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" name="mail" placeholder="Enter your Email" class="form-control" name= "email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" name="pass" placeholder="Enter your Password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Enter your Confirm Password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" id="birthDate" name="dates" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                <div class="col-sm-9">
                    <input type="phoneNumber" id="phoneNumber" name="phone" placeholder="Enter your Phone number" class="form-control" required>
                    <span class="help-block">Your phone number won't be disclosed anywhere </span>
                </div>
            </div>
          
            <button type="submit" name="reg" class="btn btn-primary btn-block">REGISTRATION</button>
            </form>
    </div> <!-- ./container -->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</body>
</html>