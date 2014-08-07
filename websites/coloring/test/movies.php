<!DOCTYPE html>
<html>
  <head>
     <title>Actors</title>
  </head>
  <body>
     <h2>Actors</h2>
     <form action="movies.php" method="post">
     <?php

        $DBServer = 'localhost';
        $DBUser   = 'root';
        $DBPass   = 'n';
        $DBName   = 'Movies';
        
        $mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

        if ($mysqli->connect_errno)
        {
          echo "Check your Connection: " . $mysqli->connect_error;

        }
        else
        {
          $query = "SELECT * FROM Actors";
       
          $result = $mysqli->query($query);

          echo "<select name='a'>";
          if ($result->num_rows > 0)
          {
            while ($row = $result->fetch_assoc())
            {
              echo "<option value='". $row["ID"] . "'>" . $row["Name"] . "</option>";
            }   
          }
          echo "</select>";
        }
     ?>
      <input type="submit" value="Search"/>
     </form>
  </body>
</html>



Movies:

<?php 
   echo $_POST["a"];
?>