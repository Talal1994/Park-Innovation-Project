<?php require_once("header.php");?>
    
    <div id="banner">
            <div class="form-group">
                <label for="sel1">Select a Semester:</label>
                  <select class="form-control" id="sel1">
                    <?php
                        // include class data base manger to connect with the data base
                        require_once('DatabaseManager.php');

                        // new object of the class
                        $Connection = new DatabaseManager();

                        //select query to check the login 
                        $query = "SELECT * from semester";

                        // result of the query set in variable login
                        $studentCoursePage = $Connection->selectQuery($query);

                       foreach ($studentCoursePage as $semester)
                       {
                         echo "<option value=".$semester["semsterID"].">".$semester["semsterYear"]." ".$semester["semsterSeason"]."</option>";
                       }
                        
                    ?>
                  </select>
            </div>
        </p>

        <table style="width: 100%" align="center" border="1">
            <tr>
                <td colspan="8" align="center">My Courses</td>
            </tr>
            <tr>
                 <td align="center">Codes</td>
                 <td align="center">Course</td>
                 <td align="center">Schedule</td>
                 <td align="center">Teacher</td>
                 <td align="center">Grade</td>
                 <td align="center">Absence</td>
                 <td align="center">Type</td>
                 <td align="center">Folder</td>
            </tr>
            <tr>
                 <td align="center"><?php  ?></td>
                 <td align="center">Course</td>
                 <td align="center">Schedule</td>
                 <td align="center">Teacher</td>
                 <td align="center">Grade</td>
                 <td align="center">Absence</td>
                 <td align="center">Type</td>
                 <td align="center">Folder</td>
            </tr>
        </table>
    </div>

<?php require_once("footer.php");?>