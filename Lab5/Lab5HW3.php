<?php
  $final = $_POST['Final'];
  $mid  = $_POST['Midterm'];
  $assignment = $_POST['Assignment'];
  $home = $_POST['Homework'];
  $result = 0;

  echo "Final : $final <br>";
  echo "Midterm : $mid <br>";
  echo "Assignment : $assignment <br>";
  echo"Homework : $home <br>";
  $result = $final + $mid + $assignment + $home;
  echo"Total Score  $result <br>";

  if($result > 79){
      echo" Your Grade is : A "; 
  }
  else if($result > 74){
    echo" Your Grade is : B+ "; 
  }
  else if($result > 69){
    echo" Your Grade is : B "; 
  }
  
  else if($result > 64){
    echo" Your Grade is : C+ "; 
  }
  else if($result > 59){
    echo" Your Grade is : C "; 
  }
  else if($result > 54){
    echo" Your Grade is : D+ "; 
  }
  else if($result > 49){
    echo" Your Grade is : D "; 
  }
  else echo" Your Grade is F";



