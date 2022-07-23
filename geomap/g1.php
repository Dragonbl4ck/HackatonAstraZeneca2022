<?php include 'conexion.php'?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Geolocalización</title>
  </head>
  <body>
    <br/><br/>
    <?php

    $sql = "SELECT * FROM direcciones_tonala";
    $result = mysqli_query($conn, $sql);
    ?>
    <hr/>
    <p class="h1 text-center">Busca tu ubicación</p>
  <br/>
  <?php    

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $direccion = $row["calleNum"].",".$row["colonia"].",".$row["municipio"].",".$row["estado"];
 
    $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($direccion).'&sensor=false'.'&key=AIzaSyC2ULo86zmfgg4yTI6P_VmiLnGuO1UiKL4');
     
    $geo = json_decode($geo, true);
    $idbonita = $row["id"]; 

    // Si todo esta bien
    if ($geo['status'] = 'OK') {
      // Obtener los valores
      $latitud = $geo['results'][0]['geometry']['location']['lat'];
      $longitud = $geo['results'][0]['geometry']['location']['lng'];
      $sql1 = "UPDATE direcciones_tonala SET latitud='$latitud', longitud='$longitud' WHERE id=$idbonita";
    }
    ?>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Calle y Número</th>
            <th scope="col">Colonia</th>
            <th scope="col">Municipio</th>
            <th scope="col">Estado</th>
            <th scope="col">Latitud</th>
            <th scope="col">Longitud</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
          <tr> 
            <th><?php echo $row["id"]?></th>
            <td><?php echo $row["calleNum"]?></td>
            <td><?php echo $row["colonia"]?></td>
            <td><?php echo $row["municipio"]?></td>
            <td><?php echo $row["estado"]?></td>
            <td><?php echo $latitud ?></td>
            <td><?php echo $longitud ?></td>
            <td><a class="btn btn-block btn-lg btn-warning" href="https://www.google.com/maps/place/<?php echo $latitud.','.$longitud?>" target="_blank">Mapa</a></td>
          </tr>
        </tbody>
      </table>
    <?php
    if($latitud&&$longitud!=null){        
        $result1 = mysqli_query($conn, $sql1); 
    }
        }
    } else {
        echo "0 results";
    }    
    mysqli_close($conn);    
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
