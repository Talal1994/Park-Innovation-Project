<html>
    <head>
        <title>University Management System</title>

        <link href="../CSS/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />

        <link href="loginCSS.css" rel="stylesheet" type="text/css" media="screen" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script src="../CSS/js/bootstrap.min.js"> </script>

    </head>
    <center><body class="bg"> 
        <div class="row loginHeader">
            <div class="col-sm-3"><img src="https://www.park-innovation.com/home/assets/images/logo.png" width="150" height="100"></div>
            <div class="col-sm-5 title" ><h1 style="font-size: 60px" ><strong>Park Innovation - UMS</strong></h1></div>
        </div>

        <div class="loginDiv">  
            <form class="formLogin" method="POST" action="../Controller/verifyLogin.php">
            <table>
                        <tr>
                            <td style="font-size: 35px"><strong>UserName:</strong></td>
                            <td><input class="form-control" id="usr" type="text" name="userName" placeholder="username" required></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>

                            <td style="font-size: 35px"><strong>Password:</strong></td>
                            <td><input class="form-control" id="usr" type="password" name="password" placeholder="* * * * * * *" required></td>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>
                            <td colspan="2" style="text-align: center;"><input class="btn btn-secondary" type="submit" value="Login"></td>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>
                          <td colspan="2" align="center"><strong><p style="font-size: 20px">Website : <a target="_blank" rel="noopener noreferrer" href="https://www.park-innovation.com/home/" style="color:blue">Park-Innovation.com</a></p></strong></td>
                        </tr>
                    </table>
                
            </form>
        </div>
        <p style="margin-top: 110px">&copy; Design by MTH Team</p>
    </body></center>
</html>