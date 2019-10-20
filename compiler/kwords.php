   <?php
   require_once 'inc/core.php';
   $page = 3;
   $page_title = "Palabras reservadas";
   require_once 'header.php';
   ?>
   <div class="container">
   <section class="content keyw">
   <ul>
   <?php 
   $query = $conexion->query("SELECT * FROM words");
   while($f = $query->fetch_array()){
   ?>
   <div class="keyw">
   <div class="r" style="display: inline-block;">
   <span class="name"><?php echo $f['word'];?></span>
   <span class="desc-background <?php echo $f['type'];?>"><?php echo $f['type'];?></span>
   </div>
   </div>
   <?php }?>
   </ul>
   </section>
   </div>
   </body>
   </html>