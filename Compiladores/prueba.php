<?php
    require_once 'inc/core.php';
    $LL=0;
    $LS=0;
    $NR=0;
	$j = 0;
    require_once 'header.php';
    $Str = $_POST['Str'];
    $query = $conexion->query("SELECT * FROM tascii");
   while($f = $query->fetch_array()){
       for($i=0; $i < strlen($Str); $i++){
		   $var = substr_count($Str, $f['Caracter']);
		   if (($Str[$i]==$f['Caracter'] || (($Str[$i].$Str[$i+1])==$f['Caracter']) || (($Str[$i].$Str[$i+1].$Str[$i+2])==$f['Caracter'] ) ) && !in_array($f['Caracter'], $char[0])) { 
		       $char[0][$j] = $f['Caracter'];
               $char[1][$j] = $f['Tipo'];
			   $char[2][$j] = substr_count($Str, $f['Caracter']);
               $j++;
		   }
	   }
   }	
?>
<h1>ESCRIBA SU CODIGO AQUÍ</h1>
<form action="" method="post">
	<div ><textarea class="CodeText" id="Str" name="Str"><?php echo $_POST['Str']; ?></textarea></div>
	<div class="boton-compilar">
		<button class="btn black" type="submit"> <span><b>Compilar</b></span> </button>
	</div>
</form>
<div id="AnsT" class="AnsText"> 
	<div class="AnsText" id="AnsTex" >
		<b>CARACTERES ENCONTRADOS:</b><br>
		<?php for ($i=0; $i < count($char[0]); $i++) { 
		      echo "<b>El caracter:</b> \"", $char[0][$i];echo "\" aparece ", $char[2][$i];echo " veces. <b>Tipo:</b> ", $char[1][$i],"<br>"; 
            } ?> 
	</div>
	
</div>       