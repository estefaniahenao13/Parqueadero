<?php  include 'menu.php'; 

?>
<li class="lista salidav"><a class="enlacem" href="index.php">Regresar</a></li>

<div class="logo">
        <i  class="logotipo fas fa-parking">Reporte</i>
</div>

<form class="generar" name="generar" method="POST" action="index.php?c=vehiculos&a=generar">


<input class="inputs" type="datetime-local" name="fecha_inicial">
<input  class="inputs" type="datetime-local" name="fecha_final">
<button id="generar" name="generar" type="submit">Generar</button>



</form>