<html>

<head>
    <title> teacher Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="offset-4 col-4">
                <div class="dropdown-item">

                    <table>
                        <tr>
                            <td>
                            </td>
                            <td width="90"></td>
                            <td>
                                <h1> <b> New Teacher </b> </h1>
                            <td>
                        </tr>
                    </table>

                    <br>
                    <form>
                        <div class="form-group">


                            <label> First Name :</label> <input class="form-control" type="text" name="username">

                            <label> Last Name :</label> <input class="form-control" type="text" name="lastname">


                            <label> Email :</label>
                            <input class="form-control" type="text" name="email">


                            <label> Number :</label> <input class="form-control" type="text" name="number">



                            <label> Gender :</label>
                            <br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="teacher_gender" value="male">
                                <label class="form-check-label"> Male </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="teacher_gender" value="female">
                                <label class="form-check-label"> Female </label>
                            </div>

                            <br>
                            <label> Major :</label>
                            <select class="form-control">

                                <option value=""> Select Major </option>
                                <option value=""> Programming 1 </option>
                                <option value=""> Calsuluss </option>
                                <option value=""> Programming 2 </option>

                            </select>
                            <br>
                            <input type="submit" value="ADD" class="offset-4 col-4" name="addname">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>