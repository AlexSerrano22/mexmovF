<?php 
/*if(isset($_POST['boton'])){ 
    // Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB 
    if ((($_FILES["archivo"]["type"] == "image/gif") || 
    ($_FILES["archivo"]["type"] == "image/jpeg") || 
    ($_FILES["archivo"]["type"] == "image/pjpeg")) && 
    ($_FILES["archivo"]["size"] < 20000)) { 
  
    //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0). 
      if ($_FILES["archivo"]["error"] > 0) { 
        echo $_FILES["archivo"]["error"] . ""; 
      } else { 
        // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido 
        if (file_exists("archivos/" . $_FILES["archivo"]["name"])) { 
          echo $_FILES["archivo"]["name"] . " ya existe. "; 
        } else { 
         // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida 
          move_uploaded_file($_FILES["archivo"]["tmp_name"], 
          "archivos/" . $_FILES["archivo"]["name"]); 
          echo "Archivo Subido "; 
          echo "<img src="archivos/".$_FILES["archivo"]["name"]."">"; 
        } 
      } 
    } else { 
        // Si el usuario intenta subir algo que no es una imagen o una imagen que pesa mas de 20 KB mostramos este mensaje 
        echo "Archivo no permitido"; 
    } 
} 
*/

$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
if ($_FILES[uploadedfile][size]>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES[uploadedfile][type] =="image/pjpeg" OR $_FILES[uploadedfile][type] =="image/gif"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES[uploadedfile][name];
$add="uploads/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}


$target_path = "fperfil/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
echo "foto subida con exito";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
?> 


