<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table With database</title>
  <style>
      table{
          border-collapse:collapse;
          width:100%;
          color:black;
          font-size:15px;
          text-align:left;
      }
      th{
          background-color:#588c7e;
          color:white;
      }
      </style>
</head>
<body>
   <table>
       
       <th>Name</th>
       <th>Email</th>
       <th>Country Code</th>
       <th>Phone Number</th>
       <th>Country</th>
       <th>Courses</th>
       <?php
       $con = mysqli_connect("localhost","root","","registrationform");
       if($con-> connect_error){
           die("connection failed:".$con->connect_error);
       }
       $sql = "select name,email,countrycode,phonenumber,country,courses from studentdata";
       $result =  $con->query($sql);

       if($result-> num_rows > 0){
           while ($row = $result->fetch_assoc()){
               echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['countrycode']."</td><td>".$row['phonenumber']."</td><td>".$row['country']."</td><td>".$row['courses']."</td></tr>";
           }
           echo "</table>";
       }
       else{
           echo "0 result";
       }
       $con ->close();
       ?>
   </table> 
</body>
</html>
