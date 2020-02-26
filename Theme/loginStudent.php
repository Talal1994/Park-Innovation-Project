<html>

<head>
    <title> Login Student </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>University Management System - Login</title>
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <style type="text/css">
        @import "gallery.css";
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo"><br>
                <table>

                    <tr>
                        <td>
                        </td>
                        <td width="280"></td>

                        <td>
                            <h1> MTH - University </h1>
                        </td>
                    </tr>
                </table>

                <p>MTH - Login Page</p><br>
            </div>
        </div><br>

        <!-- end #header -->

        <div id="banner">

            <center>
                <form method="POST">
                    <table>
                        <tr>
                            <td>UserName:</td>
                            <td><input type="text" name="userName" placeholder="student@mth.edu.lb" required></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>

                            <td>Password:</td>
                            <td><input type="password" name="password" placeholder="* * * * * * *" required></td>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>
                            <td colspan="2" style="text-align: center;"><input type="submit" value="Login"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>

</body>

</html>