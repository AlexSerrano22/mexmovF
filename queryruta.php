<?php
     //include 'BD.php';
$con=mysqli_connect("localhost","root","","observatorio");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$i=0;
$result = mysqli_query($con,"SELECT * FROM `rutas` WHERE idRUTAS='$_GET[id]'");
$salida='';
while($row = mysqli_fetch_array($result))
  {

  $salida.= '<iframe src="'.$row['URLGOOGLE'].'" width="640" height="480"></iframe>';


  }
  

mysqli_close($con);
  echo $salida;


      ?>