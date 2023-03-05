<?php
if(isset($_FILES['audioFile'])) {
    $target_dir = "uploads/"; // Directorio donde se guardará el archivo de música
    $target_file = $target_dir . basename($_FILES["audioFile"]["name"]);
    $uploadOk = 1;
    $audioFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Verifica si el archivo es un archivo de música válido
    if($audioFileType != "mp3" && $audioFileType != "wav" && $audioFileType != "ogg" ) {
        echo "Lo siento, solo se permiten archivos MP3, WAV y OGG.";
        $uploadOk = 0;
    }
    // Verifica si el archivo se ha cargado correctamente
    if ($uploadOk == 0) {
        echo "Lo siento, hubo un error al cargar el archivo.";
    } else {
        if (move_uploaded_file($_FILES["audioFile"]["tmp_name"], $target_file)) {
            echo "El archivo ". basename( $_FILES["audioFile"]["name"]). " se ha cargado correctamente.";
            // Agrega aquí el código para guardar la información del archivo en la base de datos
        } else {
            echo "Lo siento, hubo un error al cargar el archivo.";
        }
    }
}
?>
