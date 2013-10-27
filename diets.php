<?php
     //include 'BD.php';
$con=mysqli_connect("localhost","root","","observatorio");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$i=0;
$result = mysqli_query($con,"SELECT * FROM `rutas` ");

?>
<!DOCTYPE html>
<html class="no-js"  lang="en">
<head>
<title>MexMov | Rutas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/css.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">




<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>


<script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>

<script src="js/jqueryRutas.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page3">
<div class="bg">
  <!--==============================header=================================-->
  <header>
    <div class="menu-row">
      <div class="main">
        <nav>
          <ul class="menu wrapper">
            <li><a href="index.html">Home Page</a></li>
            <li><a href="nutrition.html">Nutrition</a></li>
            <li><a class="active" href="diets.php">Rutas</a></li>
            <li><a href="programs.html">Programs</a></li>
            <li><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="main">
      <div class="wrapper p3">
        <h1><a href="index.html">MexMov</a></h1>
        <form id="search-form" action="#" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="search-field">
              <input name="search" type="text" value="Search" onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''" />
              <a class="search-button" href="#"></a> </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="row-bot"></div>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <article class="grid_4">
            <div class="indent-right">
              <h3 class="p1">Rutas</h3>


                <div id="accordion">
                  
  
          <?php
            while($row = mysqli_fetch_array($result))
               {  
           echo "<div> <h3>$row[NOMBRE]</h3> </div>";
            echo "<div><p>Descripcion: $row[DESCRIPCION].</br>
            Distancia: $row[DISTANCIA] km.<p></br>
            <input type=button value='ver ruta' onClick='rutas($row[idRUTAS])'></div>";
          }
                
          ?>

  
                  
                </div>

           
              <ul class="list-1">
                <li><a href="#">At vero eos et accusamus</a></li>
                <li><a href="#">Lusto odio dignissimos ducimus</a></li>
                <li><a href="#">Qui blanditiis praeseium</a></li>
                <li><a href="#">Voluptatum deleniti atque corrupti</a></li>
                <li><a href="#">Quos dolores et quas molestias</a></li>
                <li><a href="#">Excepturi sint occaecati</a></li>
                <li><a href="#">Cupiditate provident</a></li>
              </ul>
            </div>

          </article>
          <article class="grid_8">
            <h3 class="prev-indent-bot">Today’s Diet Recipes</h3>
            <div class="wrapper p2">
              
              <div class="extra-wrap">
                <div id="iframe">

                </div>
              </div>
            </div>
            <div class="wrapper img-indent-bot">
              <div class="grid_4 alpha">
                <ul class="linea" >
                  <li><a href="#">Eius </a></li>
                  <li><a href="#">Dolore </a></li>
                  <li><a href="#">Uenim </a></li>
                  <li><a href="#">Exercitationem </a></li>
                </ul>
              </div>
             
            </div>
            
        </div>
      </div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="aligncenter"> <span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</span> Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
  </div>
</footer>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>

</body>
</html>
