<?php
$nivel = $_POST['nivel'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$numI = $_POST['numI'];
$numF = $_POST['numF'];
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="icons/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
   @media print {
    .pagebreak { page-break-before: always; } /* page-break-after works, as well */
}
    </style>
    <title>GERADOR DE FICHAS</title>
  </head>
  <body style="width:700px; font-family: 'Open Sans', sans-serif;">
    <div class="container" >
      <br>
      <br>
      

      <div class="row" style="page-break-after: always;">
      <?php
        while($numI <= $numF){
      ?>

          <div class="col col-sm-4" style="margin-top: 10px">
            <div class="card" style="border-color: #2067FF; border-width: 5px; width: 200px; font-size: small; text-align: center;">
              <div class="card-body">
                <img src="logo.png" class="card-img-top" alt="...">
                <p style=" margin: 0; font-size: 14px;">EXAME SUPLETIVO<br>
                <b><?php  echo $nivel ?></b><br>
                DIA DA INSCRIÇÃO
               <h6 style=" margin: 0; color: #F56508;"><b><?php  echo $data ?></b></h6>
               <p style=" margin: 0; color: #F56508; font-size: 13px;"> Horário de atendimento:</p>
                <h6 style="margin: 0; color: #F56508;"><b><?php  echo $hora ?></b></h6>
              <?php
                $numI = str_pad($numI, 3, '0', STR_PAD_LEFT);
                ?>

               <h6 style="margin: 0; color: #2067FF;"><b>SENHA <?php  echo ($numI ++) ?></b></h6>
              </div>
            </div>
          </div>
        <br>
        <br>
        <?php
        if($numI == 13 or $numI == 33 or $numI == 53 or $numI == 73 or $numI == 93 or $numI == 113 or $numI == 133 or $numI == 153 or $numI == 173 or $numI == 193 or $numI == 213 or 
        $numI == 233 or $numI == 253 or $numI == 273 or $numI == 293 or $numI == 313 or $numI == 333 or $numI == 353 or $numI == 373 or $numI == 393 or 
        $numI == 413 or $numI == 433 or $numI == 453 or $numI == 473 or $numI == 493 or $numI == 513 or $numI == 533 or $numI == 553 or 
        $numI == 573 or $numI == 593 or $numI == 613 or $numI == 633 or $numI == 653 or $numI == 673 or $numI == 693 or $numI == 713 or
        $numI == 733 or $numI == 753 or $numI == 773 or $numI == 793 or $numI == 813 or $numI == 833 or $numI == 853 or $numI == 873 or 
        $numI == 893 or $numI == 913 or $numI == 933 or $numI == 953 or $numI == 973 or $numI == 993 or $numI == 1013 
        
        ){
          ?>
          <div class="pagebreak"> <br> <br> <br></div>
          <?php
        }
      }
   ?>

   </div>
      </div>
   

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  </body>
</html>