<?php 
    require_once 'inc/core.php';
    require_once 'header.php';
    $query = $conexion->query("SELECT * FROM tascii");

	/*<?php while($r = $query->fetch_array()){
		echo " ",$r['Id'],"   ",$r['Caracter'],"   ",$r['Tipo'],"   ",$r['Descrip'],"<br>"; } ?>*/
?>
<div id="Tascii" >
	<div class="asciicol">
		<?php while($r = $query->fetch_array()){
		echo "    ",$r['Id'],"   ",$r['Caracter'],"   ",$r['Tipo'],"   ",$r['Descrip'],"<br>"; } ?>
	</div>
</div>

