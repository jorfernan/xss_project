<?php
# No hay solución al reto, nunca la hubo.
if(isset($_POST['clave']) && $_POST['clave'] !== ''){
    $txt = "<p class='w-100 text-center text-danger'><b>" .$_POST['clave'] . "</b>" . " </br></br>La clave introducida <b>NO</b> es la solución de la imágen de este mes</p>";
}

require './views/reflected-view.php';