<!DOCTYPE html>
<html>
<head>
    <title>-The SoundMX-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/NEW_estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
        
</head>
    
    
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">
      The SoundMX <img src="Imagenes_soundmx/sound_mx_I.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/soundmx/NEW_index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/soundmx/NEW_contact.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tienda - próximamente</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acerca de nosotros</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <a class="dropdown-item" href="#">Únete al equipo SoundMX</a>
            <a class="dropdown-item" href="#">Contáctanos</a>
            <a class="dropdown-item" href="#">Foro</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
      </form>
    </div>
  </div>
</nav>

    
<div class="container">
<br>
    <div class="jumbotron">
        <h1>The SoundMX</h1>
        <h2>La marca promotora de tus pasiones</h2>
    </div>  
</div>
    

<?php
//Example (MySQLi Object-oriented)    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soundmx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, email FROM contacto_soundmx";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    
<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Si <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Deseas contactarnos</span></h1>
				<h3>Simplemente llena esta forma, y mandanos un mensaje</h3>
			</div>
			
			<div class="container">
				<form>
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Nombre</label>
					    	<input type="text" class="form-control" id="" placeholder=" Pon tu nombre">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Correo Email</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Pon tu Email">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Número de cel.</label>
					    	<input type="tel" class="form-control" id="telephone" placeholder=" Ingresa tu numero de cel. a 10 digitos">
			  			</div>
			  		
			  			<div class="form-group">
			  				<label for ="description"> Mensaje</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Pon aquí tu mensaje"></textarea>
			  			</div>
			  			<div>
			  				<button type="button" class="btn btn-default submit">Enviar mensaje</button>
					    </div>
				</form>
			</div>
		</section>
</body>
</html>
