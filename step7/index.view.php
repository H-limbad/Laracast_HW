<!DOCTYPE html>
<html>
<body>

<?php

    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b> $row</b></p>";
 
  for ($col = 0; $col < 4; $col++) {
    echo $tasks [$row] [$col];
    echo "  ";
  }
  
}
?>

</body>
</html>