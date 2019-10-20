   <?php
   require_once 'inc/core.php';
   $page = 2;
   $page_title = "Tabla Ascii";
   require_once 'header.php';
   ?>
   <style>
   </style>
   <div class="container">
   <section class="content">
   <ul>
   <?php 
   $query = $conexion->query("SELECT * FROM characters");
   while($f = $query->fetch_array()){
	   if($f['ascii_id'] == 32)  $text = "espacio";
	   elseif($f['ascii_id'] == 255) $text = "nbsp";
	   else $text = $f['symbols'];
   ?>
   <div class="character">
   <div class="r" style="display: inline-block;">
   <span class="name"><?php echo $text;?></span>
   <span class="desc-background <?php echo $f['type'];?>"><?php echo translate($f['type']);?></span>
   </div>
   </div>
   <?php }?>
   </ul>
   </section>
   </div>
   </body>
   </html>