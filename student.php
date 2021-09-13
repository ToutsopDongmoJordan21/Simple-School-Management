<?php

$connect = mysqli_connect("localhost", "root", "", "schooldb");

$sql="SELECT * FROM stude";
$record=mysqli_query($connect,$sql);






/*if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $class=$_POST['class'];
    $age=$_POST['age'];
    $query="INSERT INTO `stude`(`name`, `class`, `age`) VALUES ('$name','$class','$age')";
    mysqli_query($connect,$query);

    echo $name;
}
 else{*/
    $name=$_POST['name'];
    $class=$_POST['class'];
    $age=$_POST['age'];
    $query="INSERT INTO `stude`(`name`, `class`, `age`) VALUES ('$name','$class','$age')";
    mysqli_query($connect,$query);

   
 //}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/school.css">

    <title>school management system</title>
</head>
<body>
    <div class="container">

    <div class="container">
        <form action="student.php" method="post">
           name <input type="text" name="name"><br>
            class<input type="text" name="class"><br>
            age<input type="number" name="age">

            <input type="submit">
        </form>

    </div>
    <table class="table table-striped">
    <tr>
      <th>ID </th>
      <th>NAME</th>
      <th>CLASS</th>
      <th>AGE</th>
    </tr>
    
      <?php
      while($stude=mysqli_fetch_assoc($record)){
           echo "<tr>";
           echo "<td>".$stude['id']."</td>"; 
           echo "<td>".$stude['name']."</td>"; 
           echo "<td>".$stude['class']."</td>"; 
           echo "<td>".$stude['age']."</td>";  
          

           echo "</tr>";
      }

      ?>
   
    </table>
    <?php
/*
    $my_array=array("eva","john","rose");
    var_dump($my_array);


    class car{
        
        function speed(){
          
            $speeds=$this->age*$this->size;
            echo $speeds;
            echo "      ";
        }
    }

     $limo = new car();
     $limo->age=10;
     $limo->size=4;

     $limo->speed();

     
     $lim = new car();
     $lim->age=14;
     $lim->size=42;

     $lim->speed();
*/
    
    ?>
    <button><a href="students info.php">return</a></button>
    </div>
    
</body>
</html>