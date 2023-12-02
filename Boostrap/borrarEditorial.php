<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="css/footersimple.css">

    <title>BORRAR EDITORIAL</title>
  </head>
  <body>



   <Header>  <!-- Aqui va la barra de navegacion -->
     
<div class = "container-fluid mb-3">
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark" style="background-color: #47B4BD;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</div>
   </Header>

   <section>
     
    <?php
      //Leer el id que viene del listado
      $id=$_GET['id_editoriales'];
      //   Ambos sirven el de arriba o este  $id=$_REQUEST['id_editoriales'];
      include 'coneccion.php';
      $consulta = "select * from editoriales where id_editoriales=$id";

     // esto solo  era para imprimir, para ver que funcionara  echo --> $consulta;
      $result = mysqli_query($coneccion, $consulta);

      // Lee el registro y lo guarda en row
      $row = mysqli_fetch_array($result);
?>
<div class = "container">


  <div class="card mb-2 border-success" style="">
  <div class="card-header text-center">
  
  <h1> Borrar Editorial</h1>
    
  </div>
</div>


<div class="card mb-2 border-success" style="">

  <div class = "card-body">




<form action="eliminarEditorial.php" method= "POST">

  <div class = "row">
  <div class = "col-md-4">
    <div class="form-group">
    <label for="clave">CLAVE EDITORIAL</label>
    <input type="text" class="form-control" name = "clave" placeholder = "Tecle el nombre de la editorial" required value = "<?php echo $row['id_editoriales']; ?>" readonly>

  </div>
  </div>
  <div class = "col-md-8">
  <div class="form-group">
    <label for="nombre">Editorial Name</label>
    <input type="text" class="form-control" name = "nombre" placeholder = "Tecle el nombre de la editorial" required value = "<?php echo $row['nombre_editorial']; ?>" readonly >

  </div>
</div> <!-- col 8 --> 
</div>


<div class = "row">
<div class = "col-md-8">
  <div class="form-group">
    <label for="ciudad"> Ciudad</label>
    <input type="text" class="form-control" name = "ciudad" placeholder = "Teclea la ciudad" required value = "<?php echo $row['ciudad']; ?>" readonly>
  </div>


</div> <!-- col1 -->

<div class =  col-md-4>
  
<div class="form-group">
    <label for="ciudad"> Estado</label>
    <input type="text" class="form-control" name = "estado" placeholder = "Teclea las 2 iniciales del estado" required value = "<?php echo $row['estado']; ?>" readonly>
  </div>


</div>



</div> <!-- row -->

<div class ="row">


 <div class="col-md-3 offset-md-6">
 <a href="listadoEditorial.php" class="btn btn-danger btn-block"> Cancelar</a>
  </div>

<div class="col-md-3">

<input type= "submit" name = "borrar"  value = "borrar" class="btn btn-primary btn-block" > </div>



</div> <!-- end row -->



</form>



</div> 
</div> <!-- card 2  -->

</div>  

   </section>






   <footer>
     

     <div class="container-fluid footer">
      <div class = "row">
        <div class= "col-md-4 text-center">
          <h3>
        
          Library system

          </h3>

          <p>The Short Answer: A galaxy is a huge collection of gas, dust, and billions of stars and their solar systems, all held together by gravity.</p>

        </div>


        <div class= "col-md-4">
        
        <h3>
        
        More aliens

        </h3>
        <p>Extraterrestrial life or alien life is life which may occur outside Earth and which did not originate on Earth. No extraterrestrial life has yet been conclusively detected, although efforts are under way.</p>

        </div>


          <div class= "col-md-4">
        
         <h3>
        
        Aliens 3

        </h3>
        <p>For the first time ever, a team of Nasa scientists is taking unidentified anomalous phenomena seriously. But how will they sift out the end.</p>

        </div>


     <h2 class = "container text-center">Christian Vela Pasillas</h2>
     </div>
     </div>


   </footer>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>