<?php
    $Paises = Array("Opcion1", "Opcion2", "Opcion3");
    $Año = Array(2020, 2021, 2022);
    $Tema = Array("Opcion1", "Opcion2", "Opcion3");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/documentos.css">
    <title>Documentos de la OMS</title>
</head>
<body>
   <header>
        <nav></nav>
        <h1>Documentos Sensados de la OMS</h1>
   </header>
   
   <section>
        <form action="" name="Filtros" method="GET">
            <img src="img/9.png">
            <label for="Lugares">Lugar:</label>
            <select>
                <?php
                    $nombre_Pais = "";
                    $i = 0;
                    foreach($Paises as $p){
                        $nombre_Pais .= "<option value='".$i."'>".$p."</option>";
                        $i++;
                    }
                    echo $nombre_Pais;
                    
                ?>
            </select>

            <img src="img/10.png">
            <label for="Año">Año:</label>
            <select>
                <?php
                    $year = "";
                    foreach($Año as $a){
                        $year .= "<option value='".$i."'>".$a."</option>";
                        $i++;
                    }
                    echo $year;
                    
                ?>
            </select>

            <img src="img/11.png">
            <label for="Tema">Tema:</label>
            <select>
                <?php
                    $nombre_tema = "";
                    foreach($Tema as $t){
                        $nombre_tema .= "<option value='".$i."'>".$p."</option>";
                        $i++;
                    }
                    echo $nombre_tema;
                    
                ?>
            </select>

            <button>Buscar</button>

        </form>
        <br>

        <table border="1">
            <?php
                $fila;
                $celda;
                $tabla = "";
                for($fila =0; $fila <11; $fila++){
                    $tabla .= "<tr>";
                    for($celda=0; $celda<11; $celda++){
                        $tabla .= "<td>";
                        $tabla .= "</td>";
                    }
                    $tabla .= "</tr>";
                }
                echo $tabla;
            ?>
        </table>
   </section>

   <footer>

   </footer>
</body>
</html>