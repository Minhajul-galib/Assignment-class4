<!DOCTYPE html>
<html>
<head>
  <title>For Loop inincrement 11 breack</title>
</head>
<body>
  <h1>
<?php
    $i=1;
    for($i=1; $i<=50; $i=$i+3){
      if($i%11!=0){
        echo $i." GALIB<br>";
      }
      elseif($i%11==0){
        break;
      }
      else{
        continue;
      }
    }
    ?>
    </h1>
</body>
</html>