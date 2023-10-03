<!DOCTYPE html>
<html>
  <body>
    <?php
      $id="";
      $valor="";
      $quant="";
      $total="";
      if ($_SERVER['REQUEST_METHOD'] == 'POST') 
      {
        $id=$_POST["id"];
        $valor=$_POST["valor"];
        $quant=$_POST["quantidade"];
        $total=$valor*$quant;
        
      
      }
      
    ?>
    <?php  echo "id: $id " . " valor: $valor ". " quant: $quant ";
    echo "total: $total"; ?>
    
  </body>
</html>
