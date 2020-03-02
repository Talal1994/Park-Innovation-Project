<?php
session_start();

require_once("studentHeader.php");
// require("../../Controller/verifyLogin.php");

if(isset($_SESSION['studentName']) && $_SESSION['studentPassword'])
{ 
  ?>
      
      <div id="banner">
        <div class="form-group">
          <label for="sel1">Select a Semester:</label>
            <select class="form-control" id="sel1">
              <?php
              // include class data base manger to connect with the data base
              require_once('../../Model/DatabaseManager.php');

              // new object of the class
              $Connection = new DatabaseManager();

              //select query to check the login 
              $semesterQuery = "SELECT * from semester";

              // result of the query set in variable login
              $studentSemester = $Connection->selectQuery($semesterQuery);

              foreach ($studentSemester as $semester)
              {
                echo "<option value=".$semester["semsterID"].">".$semester["semsterYear"]." ".$semester["semsterSeason"]."</option>";
              }
                          
              ?>
          </select>
        </div><br>

        <table style="width: 100%" align="center" border="1">
            <tr  align="center"> 
              <td> <strong>Codes</strong> </td>
              <td><strong>Course</strong></td>
              <td><strong>Credit</strong> </td>
              <!--<td align="center">Absence</td>
              <td align="center">Type</td>
              <td align="center">Folder</td>-->
          </tr>

          <?php
          //select query to check the login 
          $courseQuery = "SELECT * from courses";

          // result of the query set in variable login
          $studentCourses = $Connection->selectQuery($courseQuery);

        for($i=0; $i<count($studentCourses); $i++){	
          ?>	
          <tr  align="center">
            <td><?php echo $studentCourses[$i]["courseCode"];?></td>
            <td><?php echo $studentCourses[$i]["courseName"];?></td>
            <td><?php echo $studentCourses[$i]["courseCredit"];?></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>

  <?php require_once("studentFooter.php");
}
else
{
  // if he/she is not logined, return to login page
  header("Location:../View/Login.php");
}
?>