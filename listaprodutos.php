
<!DOCTYPE html>
  <html>
    <head>
      <title>Lista de produtos</title>
    </head>
    <body>
      <h1>Lista de Produtos</h1>
      <?php
        $f=file("produtos.txt");
        $id="";
        $nome="";
        $valor="";
        function lista(){
          $f=file("produtos.txt");
          $r="";
          for ($i=0;$i < count($f); $i++)
          {

            $a=explode(";",$f[$i]);
            $r.="<option>".$a[1]."</option>";
          
          }
          return $r;
        }
      ?><br>
     
      <form action="#">
        <select name="id" class="form-control">
        <?php echo lista(); ?>
        </select>
        <input type="submit" name="b1" value="Mostrar">
      </form>
      <?php
        $id="";
        $nome="";
        $valor="";
        if(isset($_GET["b1"]))
          {
            $b=$_GET["id"];
            for ($i=0;$i < count($f); $i++)
            {
              $a=explode(";",$f[$i]);
              if($a[1]==$b)
              {
                $id=$a[0];
                $nome=$a[1];
                $valor=$a[2];

              }
            }
      }
      ?><br>
      
      <form action="carrinho.php" method="POST">
        ID<input type="text" value="<?= $id; ?>" name="id" id="id">
        nome<input type="text" value="<?=$nome; ?>" name="nome" id="nome">
        valor<input type="text" value="<?=$valor ?>" name="valor" id="valor">  
        quantidade<input type="number" name="quantidade" id="quantidade">
        <input type="submit" name="guardar" value="Adicionar ao carrinho">
       
      </form>
     

    </body>
  </html>