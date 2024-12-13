<?php
        $nombre_imagen = $_FILES['imagen']['name'];
        $tipo_imagen = $_FILES['imagen']['type'];
        $tamano_imagen = $_FILES['imagen']['size'];

        if($tamano_imagen<=3000000){
            
            if($tipo_imagen=='image/jpeg' || $tipo_imagen=='image/jpg' || $tipo_imagen=='image/png' || $tipo_imagen=='image/gif'){
                $carpeta_destino =$_SERVER['DOCUMENT_ROOT'].'/images/';
                move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
                echo "El archivo se ha subido correctamente";

            }else{
                echo "El archivo no es una imagen";
            }	
            
        }else{
            echo "El archivo es muy grande";
        }
        
        


            
   

?>
