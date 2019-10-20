   <?php
   require_once 'inc/core.php';
   $page = 1;
   $page_title = "Compilador";
   require_once 'header.php';
   $j = $cl = $cn = $co = $cs = $ce = $ces = $ct = $pr = $pnr = 0;
   $texto = $_POST['text'];
   $textor = preg_split("/[\s;\(\)\{\}\]\[\+\-\*\/=<>&:!]/", $texto);
   $data = $conexion->query("SELECT symbols, type FROM characters");
   while($f = $data->fetch_array()){
       for($i=0; $i < strlen($texto); $i++){
		$var = substr_count($texto, $f['symbols']);  
            if (($texto[$i]==$f['symbols'] || (($texto[$i].$texto[$i+1])==$f['symbols']) || (($texto[$i].$texto[$i+1].$texto[$i+2])==$f['symbols'] ) ) && !in_array($f['symbols'], $sym[0])) { 
		       $sym[0][$j] = $f['symbols'];
               $sym[1][$j] = $f['type'];
			   $sym[2][$j] = $var;
               $j++;
			   $ct = $ct + $var;
		       // CONTADORES PARA CADA TIPO
		       if($f['type'] == 'letter')            $cl = $cl + $var;
		       elseif($f['type'] == 'number')        $cn = $cn + $var;
		       elseif($f['type'] == 'operator')      $co = $co + $var;
		       elseif($f['type'] == 'separator')     $cs = $cs + $var;
		       elseif($f['type'] == 'especial')     $ces = $ces + $var;
		       elseif($f['type'] == 'error'){
				   $error = true;
				   $ce = $ce + $var;
			   }
		   }
	   }
   }
   if (!$error) {
	   $query = $conexion->query("SELECT * FROM words");
	   while ($d = $query->fetch_array()) {
		   if(!empty(strstr($texto, $d['word'])) && $d['operator'] == 1){
			   $kword[0][$pr] = $d['word'];
               $kword[1][$pr] = $d['type'];
               $pr++;
		   }		   
		   for($i=0; $i < count($textor); $i++) { 
		       if ( strtolower($textor[$i]) == strtolower($d['word']) && !in_array($d['word'], $kword[0])) {
				   $kword[0][$pr] = strtolower($d['word']);
                   $kword[1][$pr] = $d['type'];
                   $pr++;
                }
            }
	   }
	   for ($i=0; $i < count($textor); $i++) { 
	       if (!in_array(strtolower($textor[$i]), $kword[0]) && $textor[$i]!= "" && !in_array($textor[$i], $nkword)) {
		       $nkword[$pnr] = $textor[$i];
        	   $pnr++;
	       }
	   }
   }
   ?>
   <div class="container">
   <div class="column-1">
   <div class="box">
   <div class="counters_header">
   <div class="count_letter">
   <h4 class="counter_title">Letras</h4>
   <span class="count"><?php echo $cl;?></span>
   </div>
   <div class="count_number">
   <h4 class="counter_title">Números</h4>
   <span class="count"><?php echo $cn;?></span>
   </div>
   <div class="count_operator">
   <h4 class="counter_title">Operadores</h4>
   <span class="count"><?php echo $co;?></span>
   </div>
   <div class="count_separator">
   <h4 class="counter_title">Separadores</h4>
   <span class="count"><?php echo $cs;?></span>
   </div>
   <div class="count_error">
   <h4 class="counter_title">Especiales</h4>
   <span class="count"><?php echo $ces;?></span>
   </div>
   <div class="count_error">
   <h4 class="counter_title">Errores</h4>
   <span class="count"><?php echo $ce;?></span>
   </div>
   </div>
   <span class="desc-background text">Escriba su código aquí!</span>	
   <div class="editor_content">
   <form action="" method="post">
   <textarea class="editor_input" placeholder="Type or paste your text" id="text" name="text"><?php echo $_POST['text']; ?></textarea>
   <div style="text-align: center;padding: 20px;"><button class="btn"><b>COMPILAR</b></button></div>
   </form>
   </div>
   </div></div>
   
   <div class="column-2">
   <div class="box">
   <h2>¡Observa los resultados aquí!</h2>
   <?php if(!$error){ ?>
   <span class="desc-background text">PALABRAS RESERVADAS: <?php echo count($kword[0]);?></span>
   <?php if (count($kword[0]) > 0) { ?>
   <div class="parentTbl">
   <table>
   <tbody><tr>
   <td>
   <div class="childTbl">
   <table class="childTbl">
   <tbody><tr>
   <th class="name" style="width: 50%;">Palabra</th>
   <th class="name" style="width: 50%;">Tipo</th>
   </tr>
   </tbody></table>
   </div>
   </td>
   </tr>
   <tr>
   <td>
   <div class="scrollData childTbl">
   <table>
   <tbody>
   <?php 
   for ($i=0; $i < count($kword[0]); $i++) {
       if(IsEven($i)){ 
	       $even = "odd"; 
       } else {
		   $even = "even";
	   }	   
   ?>
   <tr class="<?php echo $even ?>">
   <td class="carac" style="width: 50%;"><?php echo $kword[0][$i];?></td>
   <td class="rep" style="width: 50%;"><?php echo $kword[1][$i];?></td>
   </tr> 
   <?php } ?>
   </tbody></table>
   </div>
   </td>
   </tr>
   </tbody></table>
   </div>
   <?php }else{ echo '<br>';}?>
   <span class="desc-background text">PALABRAS NO RESERVADAS: <?php echo count($nkword);?></span>
   <?php if (count($nkword) > 0) { ?>
   <div class="parentTbl">
   <table>
   <tbody><tr>
   <td>
   <div class="childTbl">
   <table class="childTbl">
   <tbody><tr>
   <th class="name" style="width: 100%;">Palabra</th>
   </tr>
   </tbody></table>
   </div>
   </td>
   </tr>
   <tr>
   <td>
   <div class="scrollData childTbl">
   <table>
   <tbody>
   <?php 
   for ($i=0; $i < count($nkword); $i++) { 
       if(IsEven($i)){ 
	       $even = "odd"; 
       } else {
		   $even = "even";
	   }
   ?>
   <tr class="<?php echo $even ?>">
   <td class="carac" style="width: 50%;"><?php echo $nkword[$i];?></td>
   <td class="carac" style="width: 50%;"></td>
   </tr> 
   <?php } ?>
   </tbody></table>
   </div>
   </td>
   </tr>
   </tbody></table>
   </div>
   <?php }else{ echo '<br>';}?>
   <?php }else{?>
   <span class="desc-background text error">No se puede realizar el análisis sintáctico porque hay errores léxicos</span><br><br>
   <?php }?>
   <span class="desc-background text">CARACTERES ENCONTRADOS: <?php echo $ct;?></span>
   <?php if ($ct > 0) { ?>
    <div class="parentTbl">
    <table>
    <tbody><tr>
    <td>
    <div class="childTbl">
    <table class="childTbl">
    <tbody><tr>
    <th class="name" style="width: 20%;">Cáracter</th>
    <th class="name" style="width: 40%;">Tipo</th>
    <th class="name" style="width: 20%;">Repeticiones</th>
    <th class="vc" style="width: 20%;"></th>
    </tr>
    </tbody></table>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="scrollData childTbl">
    <table>
     <tbody>
	 <?php 
	 for ($i=0; $i < count($sym[0]); $i++) { 
	     if(IsEven($i)){ 
		     $even = "odd"; 
		 } else {
			 $even = "even";
		 }
	     // LE COLOCAMOS NOMBRE AL ESPACIO Y AL NBSP
	     if($sym[0][$i] == " ") $caracter_n = 'espacio';
	     elseif($sym[0][$i] == " ") $caracter_n = 'nbsp';
	     else         $caracter_n = $sym[0][$i];
	 ?>
	 <tr class="<?php echo $even ?>">
	 <td class="carac" style="width: 20%;"><?php echo $caracter_n;?></td>
	 <td class="desc-background text <?php echo $sym[1][$i];?>" style="    width: 60px;"><?php echo translate($sym[1][$i]);?></td>
	 <td class="rep" style="width: 20%;"><?php echo $sym[2][$i];?></td>
	 <td class="v" style="width: 15%;">vez</td>
	 </tr> 
	 <?php } ?>
		   </tbody></table>
    </div>
     </td>
    </tr>
    </tbody></table>
    </div>
	<?php }else{ echo '<br><br>';}?>
   </div></div>
   </div>