<!DOCTYPE html>
<html lang="en">
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container"><br>
        <h1 class="text-success text-center">Registeration</h1><br>
        <div class="col-lg-8 m-auto d-block">

            <form name="registrationform" action="connect.php" method="GET" class="bg-dark">

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" id="username">
                    <span id="spamuser" class="text-danger font-weight-bold"></span>

                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-control" id="password">
                    <span id="spampass" class="text-danger font-weight-bold"></span>
                </div>

                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="text" name="repassword" class="form-control" id="repassword">
                </div>

    
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <span id="spanemail" class="text-danger font-weight-bold"></span>
                </div>
                <div class="form-group">
                    <label>Mobile:</label>
                    <input type="text" name="mobile" class="form-control" id="mobile">
                </div>

                <input type="submit" name="submit" value="submit" class="btn btn-success">


            </form>

        </div>

    </div>

    <script type="text/JavaScript">

    function validationscript()
    {
        var user = document.getElementById('username').value;
        var pass = document.getElementById('password').value;
        var repass = document.getElementById('repassword').value;
        var email = document.getElementById('email').value;

           /*  if(user== "")
        {
           
            document.getElementById('spamuser').innerHTML="Please enter the username";
            return false;
        }
       
        if((user.length<=2) || (user.length)>30)
        {
           document.getElementById('spamuser').innerHTML="Length must be as specified";
             return false;
        }

         if(!isNaN(user)){
          document.getElementById('spamuser').innerHTML="Char only";
            return false;
         }
          if(pass!=repass)
          {
          document.getElementById('spampass').innerHTML="Pass did not match";
             return false;
        }
*/
         var pattern= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
          if(email.match(pattern))
              {
             alert("ok email");
               // document.getElementById('spanemail').innerHTML="Email is not in correct format";
                 //return false;
    }
    else
    {
        alert("wrong email");
    }

   }
          
    </script>
</body>

</html>