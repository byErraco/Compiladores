<?php
    require_once 'inc/core.php';
    $LL=0;
    $LS=0;
    $NR=0;
    require_once 'header.php';
    $Str = $_POST['Str'];
    $St = preg_split("/[\s;\(\)\{\}\]\[\+\-\*\/=]/", $Str);
    $query = $conexion->query("SELECT * FROM tascii"); 
    while($r = $query->fetch_array()){
        for ($i=0; $i < strlen($Str); $i++) { 
            if ($Str[$i]==$r['Caracter'] || (($Str[$i].$Str[$i+1])==$r['Caracter'] && $r['Tipo']!=='N') || (($Str[$i].$Str[$i+1].$Str[$i+2])==$r['Caracter'] && $r['Tipo']!=='N') ) {  
                if ($r['Tipo']=='R') {
                	$Lex = True;
                    } 	
                if (empty($LL)) {
                    $char[0][$LL] = $r['Caracter'];    
                    if($r['Tipo']=='L'){
						$char[1][$LL] = "LETRA";
					}elseif($r['Tipo']=='N'){$char[1][$LL] = "NUMERO";}
					elseif($r['Tipo']=='O'){$char[1][$LL] = "OPERADOR";}
					elseif($r['Tipo']=='S'){$char[1][$LL] = "SEPARADOR";}
					elseif($r['Tipo']=='E'){$char[1][$LL] = "ESPECIAL";}
					elseif($r['Tipo']=='R'){$char[1][$LL] = "ERROR";}
                    $char[2][$LL] = 1;
                    $LL++;
                }elseif(!in_array($r['Caracter'],$char[0])){
                    $char[0][$LL] = $r['Caracter'];
					if($r['Tipo']=='L'){
						$char[1][$LL] = "LETRA";
					}elseif($r['Tipo']=='N'){$char[1][$LL] = "NUMERO";}
					elseif($r['Tipo']=='O'){$char[1][$LL] = "OPERADOR";}
					elseif($r['Tipo']=='S'){$char[1][$LL] = "SEPARADOR";}
					elseif($r['Tipo']=='E'){$char[1][$LL] = "ESPECIAL";}
					elseif($r['Tipo']=='R'){$char[1][$LL] = "ERROR";}
                    $char[2][$LL] = 1;
                    $LL++;                         
                }elseif (in_array($r['Caracter'],$char[0])) {            
                    for ($j=0; $j < count($char[0]); $j++) { 
                        if($r['Caracter']==$char[0][$j]){
                            $char[2][$j]++;
                        }
                    } 
                } 
            }
        }
    } 
    if (!$Lex) {
		$qery = $conexion->query("SELECT * FROM keyw");
        while ($s = $qery->fetch_array()) {
            if(!empty(strstr($Str, $s['Palabra'])) && $s['operador']=="yes"){
               $wor[0][$LS] = $s['Palabra'];
                $wor[1][$LS] = $s['Tipo'];
                $LS++;
                }
            for($i=0; $i < count($St); $i++) { 

                if (strtolower($St[$i])==strtolower($s['Palabra']) && !in_array($s['Palabra'], $wor[0])) {
                	$wor[0][$LS] = strtolower($s['Palabra']);
                    $wor[1][$LS] = $s['Tipo'];
                    $LS++;
                }
            }
        }
        for ($i=0; $i < count($St); $i++) { 
            if (!in_array(strtolower($St[$i]), $wor[0]) && $St[$i]!= "" && !in_array($St[$i], $nrw)) {
        		$nrw[$NR] = $St[$i];
        		$NR++;
        	}
        }
    }
?>
<h1>ESCRIBA SU CODIGO AQUÍ</h1>
<form action="index.php" method="post">
	<div ><textarea class="CodeText" id="Str" name="Str"><?php echo $_POST['Str']; ?></textarea></div>
	<div class="boton-compilar">
		<button class="btn black" type="submit"> <span><b>Compilar</b></span> </button>
	</div>
</form>
<div id="AnsT" class="AnsText"> 
	<div class="AnsText" id="AnsTex" >
		<b>CARACTERES ENCONTRADOS:</b><br>
		<?php for ($i=0; $i < count($char[0]); $i++) { 
			if($char[1][$i]!=="ERROR"){
		      echo "<b>El caracter:</b> \"", $char[0][$i];echo "\" aparece ", $char[2][$i];echo " veces. <b>Tipo:</b> ", $char[1][$i],"<br>"; 
            }
            } ?> 
	</div>
	<div class="AnsText" id="<?php if($Lex) {echo "AnsErr";}else{echo "AnsTex";} ?>" >
        <?php 
            if($Lex){
                echo "<b>ERRORES LÉXICOS:</b><br>";
                for ($i=0; $i < count($char[0]); $i++) { 
                    if($char[1][$i]=="ERROR"){
                        echo "<b>El caracter:</b> \"", $char[0][$i];echo "\" aparece ", $char[2][$i];echo " veces. <b>Tipo:</b> ", $char[1][$i],"<br>"; 
                    }  
                }
            }elseif(!$Lex){
                echo "<b>PALABRAS RESERVADAS:</b><br>";
                for ($i=0; $i < count($wor[0]); $i++) { 
                    echo "<b>Palabra reservada:</b> \"",$wor[0][$i],"\". <b>Tipo:</b> ",$wor[1][$i],"<br>";
                }
                echo "<br><b>PALABRAS NO RESERVADAS:</b><br>";
                for ($i=0; $i < count($nrw); $i++) { 
                    echo "<b>Palabra:</b> \"",$nrw[$i],"\"<br>";
                }
            }
     	?> 
	</div>
</div>       