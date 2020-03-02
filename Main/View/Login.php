<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : OfficialWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20121012

-->
<?php
session_reset();
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>University Management System - Login</title>
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
    <link href="../CSS/style.css" rel="stylesheet" type="text/css" media="screen" />
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
                            <img src="https://rinnoo.net/f/CMS/Listings/4883_1524723_580532172035743_1207853981_N_-_Qu80_RT1600x1024-_OS200x200-_RD200x200-.jpg" width="180" height="130">
                        </td>
                        <td width="130"></td>

                        <td>
                            <h1>MUBS - UMS</h1>
                        </td>
                    </tr>
                </table>

                <p>UMS - Login Page</p><br>
            </div>
        </div><br>

        <!-- end #header -->

        <div id="banner">

            <center>
                <form method="POST" action="../Controller/verifyLogin.php">
                    <table>
                        <tr>
                            <td>UserName:</td>
                            <td><input type="text" name="userName" placeholder="student@mubs.edu.lb" required></td>
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
    <div id="footer">
        <p>Copyright © 2020 Modern University for Business & Science</p>
        <p>Website : <a target="_blank" rel="noopener noreferrer" href="https://www.mubs.edu.lb/" style="color:blue"> MUBS.EDU.LB</a></p>
        <p>&copy; Design by MTH Team</p>
    </div>
</body>
</html>