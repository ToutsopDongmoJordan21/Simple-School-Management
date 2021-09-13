<?php
 

if(isset($_POST['submit']))
{
    for($i=0;$i>0;$i++){
        $id=1;
    }
    $task=$_POST['task'];
    $current_date=$_POST['cdate'];
    $due_date=$_POST['ddate'];

 echo $task;
 echo "this is the task we are talking about";
}

$tropen="<tr>";
$rowid= "<td>".$id."</td>";
 $rowtask= "<td>".$task."</td>";
 $rowc= "<td>".$current_date."</td>";
 $rowd= "<td>".$due_date."</td>";
 $trclose = "</tr>";
  
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
    <h2>TO DO LIST</h2>
    <form action="" method="post">
    Task<input type="text" name="task">
Current Date<input type="date" name="cdate">
 Due Date<input type="date" name="ddate">

<input type="submit" name="submit">


    </form>

  
<table class="table table-striped">
      <tr>
          <th>id</th>
          <th>Task</th>
          <th>Current Date</th>
          <th>Due Date</th>
          
      </tr>
       
         <?php
           if(isset($_POST['submit']))
           { 
            
            echo $tropen;
               echo $rowid;
               echo $rowtask;
               echo $rowc;
               echo $rowd;
               echo $trclose;
           }
           
           echo readfile("text.txt");
           $myfile = fopen("testfile.txt", "w")
        
       ?>
</table>

    </div>
</body>
</html>