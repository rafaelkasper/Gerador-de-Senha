<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="icons/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>GERADOR DE FICHAS</title>
  </head>
  <body>
<br>
    <div class="container">
      <h1>GERADOR DE FICHAS</h1>
      <br>
        <form method="POST" action="gerar.php">

        <?php 
    $fund = "Ensino Fundamental";
    $med = "Ensino Médio";
    

?>
      <div class="row">
          <div class="col col-sm-4">
            <select class="form-select" aria-label="Default select example" name="nivel">
              <option selected>Escolha o nível</option>
              <option value="<?php echo $fund ?>">Ensino Fundamental</option>
              <option value="<?php echo $med ?>">Ensino Médio</option>
            </select>
          </div>
        </div>
        <br>


        <div class="row">
            <div class="col col-sm-4">
              <input type="text" class="form-control" placeholder="Data" aria-label="Data" name="data">
            </div>
            </div>
            <br>
<?php 
//$hora1 = "17:30 - 18:30";
//$hora2 = "18:30 - 19:30";
//$hora3 = "19:30 - 20:30";
//$hora4 = "20:30 - 21:30";

?>

            <div class="row">
            <div class="col col-sm-4">
              <select class="form-select" aria-label="Default select example" name="hora">
                <option selected>Escolha o horário</option>
                <option value="17:30 - 18:30">17:30 - 18:30</option>
                <option value="18:30 - 19:30">18:30 - 19:30</option>
                <option value="19:30 - 20:30">19:30 - 20:30</option>
                <option value="20:30 - 21:30">20:30 - 21:30</option>
              </select>
            </div>
            </div>
            <br>
          
          
            <div class="row">
            <div class="col col-sm-4">
              <input type="text" class="form-control" placeholder="Número inicial" aria-label="Número inicial" name="numI"> 
            </div>
            </div>
            <br>

            <div class="row">
            <div class="col col-sm-4">
              <input type="text" class="form-control" placeholder="Número final" aria-label="Número final" name="numF">
            </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary col-sm-4" style="float: left;">GERAR</button>
            </form>


      </div>



   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  </body>
</html>