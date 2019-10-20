<?php
# *************************************************
// Funciones
###################################################
/**
 * 
 */

class functions {

	public function Read($db){
		if(isset($_POST['Str'])){
			$Str = $_POST['Str'];
			$query = $db->query("SELECT * FROM tascii");
	        while($r = $query->fetch_array()){
		        for ($i=0; $i <strlen($Str); $i++) { 
		            if ($Str[$i]==$r['Caracter'] || (($Str[$i].$Str[$i+1])==$r['Caracter'] && $r['Tipo']!=='N') || (($Str[$i].$Str[$i+1].$Str[$i+2])==$r['Caracter'] && $r['Tipo']!=='N') ) {   	
		                if (empty($LL)) {
		                    $char[0][$LL] = $r['Caracter'];    
		                    $char[1][$LL] = $r['Tipo'];
		                    $char[2][$LL] = 1;
		                    $LL++;
		                }elseif(!in_array($r['Caracter'],$char[0])){
		                    $char[0][$LL] = $r['Caracter'];
		                    $char[1][$LL] = $r['Tipo'];
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
		    return $char;

		}
		header("LOCATION: ". PATH ."/index.php");
		exit;
	}
}
?>