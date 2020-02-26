<?php require_once("header.php"); ?>
<html>

<head>
    <title> Admin Page </title>
</head>

<body>

    <div id="banner">
        <p class="p1">Select a Semester:
            <select class="">

                <option value=""> 2019/2020 </option>
                <option value=""> Spring 2019 - 2020 </option>
                <option value=""> Fall 2019 - 2020 </option>
                <option value=""> Summer 2018 - 2019 </option>
                <option value=""> Spring 2018 - 2019 </option>

            </select>
        </p>


        <div class="">

            <p class="column"> Select a Course:
                <select class="">

                    <option value=""> Select Course </option>
                    <option value=""> Programming 1 </option>
                    <option value=""> Calsuluss </option>
                    <option value=""> Programming 2 </option>

                </select>
            </p>


            <div class="">
                <p class="column"> Select a Schedual :
                    <select class="">

                        <option value=""> Select Schedual </option>
                        <option value=""> MWF 9 - 10:30 AM </option>
                        <option value=""> TTH 3 - 4:30 PM </option>

                    </select>
                </p>


                <div class="">
                    <p class="column"> Select a Teacher :
                        <select class="">
                            <option value=""> Select Teacher </option>
                            <option value=""> Mr. Shadi </option>
                            <option value=""> Mr. Adham </option>
                            <option value=""> Mr. Samer </option>

                        </select>
                    </p>

                    <br>
                    <br>
                    <br>

                    <div>

                        <input type="submit" value="Offer" id="input">
                    </div>
                </div>
                <br>

                <div>

                    <table style="width: 100%" border="1">

                        <tr>

                            <th align="center"> Codes </th>
                            <th align="center"> Course Offering </th>
                            <th align="center"> Schedule </th>
                            <th align="center"> Teacher </th>
                        </tr>

                        <tr>
                            <td> CSP101 </td>
                            <td> Programming 1 </td>
                            <td> MWF 9 - 10:30 AM </td>
                            <td> Mr.Adham </td>
                        </tr>

                        <tr>
                            <td> MCL </td>
                            <td> Calsuluss </td>
                            <td> TTH 3 - 4:30 PM </td>
                            <td> Mr.Samer </td>
                        </tr>

                        <tr>
                            <td> CSP102 </td>
                            <td> Programming 2 </td>
                            <td> MWF 9 - 10:30 AM </td>
                            <td> Mr.Shadi </td>
                        </tr>

                    </table>




                </div>







                <?php require_once("footer.php"); ?>

</body>

</html>