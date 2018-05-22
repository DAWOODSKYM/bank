<?php require "protect.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>issue loan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php require "navbar.php";?>
<div class="container">
   <table class="table">
       <thead>
           <tr>
               <th>ID</th>
               <th>NAMES</th>
               <th>NATIONAL ID</th>
               <th>PHONE</th>
               <th>ISSUE</th>
           </tr>
       </thead>
       <tbody>



       <?php
       require "connect.php";
       $query="select * from customers";
       $result = mysqli_query($conn,$query);
       while($row = mysqli_fetch_assoc($result))
       {
         extract($row);
         echo "<tr>
           <td>$customer_id</td>
           <td>$names</td>
           <td>$natid</td>
           <td>$phone</td>
           <td><a href='process.php?customer_id=$customer_id&names=$names'>Issue Loan</a></td>
       </tr>";
       }

       ?>
       </tbody>
   </table>
</div>
</body>
</html>