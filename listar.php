<?php
    require('conexion.php');
    
    $sql = "select * from publicacion order by id desc";
    $res = mysqli_query($db, $sql);

    if($res){     
        $lista = array();
        $indice = 0;
        while($fila = mysqli_fetch_assoc($res)){
            $id     = $fila["id"];
            $titulo = $fila["titulo"];
            $info = $fila["informacion"];
            $correo = $fila["correo"];
            
            $lista[$indice]["id"]     = $id;
            $lista[$indice]["titulo"] = $titulo;
            $lista[$indice]["informacion"]     = $info;
            $lista[$indice]["correo"] = $correo;

            
            $indice++;
        }
        
        header("Content-type: application/json"); 
        echo json_encode($lista); 
    } 
?>