	<!DOCTYPE html>
    <html lang="es">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo NAME; ?></title>
    <link rel="icon" type="image/png" href="<?php echo PATH;?>/img/favicon.png" />
    </head>
    <body>
	<style>
* {
	margin: 0;
	padding: 0;
}
body {
	background: #ddd none repeat scroll 0 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
	line-height: 1.5;
	background-color: rgb(64, 68, 73);
}
textarea:focus, input:focus, input[type]:focus, button:focus{
	outline: 0 none;
}
header {
    background-color: #34363a;
    border-bottom: 1px solid #686b70;
}
.container {
	padding-right: 15px;
	padding-left: 15px;
	margin-right: auto;
	margin-left: auto;
}
.logo-header {
	display: inline-flex;
	font-size: 1.3125rem;
	font-family: "Tiempos Headline";
	font-weight: 700;
	line-height: 1;
	float: left;
    padding: 20px 20px 1em 0px;
}
.logo-header .text {
    float: left;
    padding: 0 0 0 10px;
    text-decoration: none;
}
.logo-header .text .name {
    display: block;
    color: #fefefefe;
    font-size: 1.2em;
    font-weight: 600;
}
.logo-header .text .desc {
    display: block;
    text-align: center;
    color: #b7b7b8;
    font-size: 1rem;
    font-weight: 400;
    letter-spacing: 0.075em;
}
svg.icon-logo {
    padding-left: 20px;
}
/* DISEÑO WEB*/
nav ul.web {
	float: right;
    margin: 0;
    padding: 0;
    list-style: none;
    padding-right: 20px;
}
nav ul.web li {
    display: inline-block;
    line-height: 80px;
}
nav ul.web li a {
    display: block;
    padding: 0 10px;
    text-decoration: none;
	color: #fefefefe;
    font-weight: 300;
    font-size: 1rem;
    text-transform: uppercase;
}
nav ul.web li a:hover{
	background: #2a2c31;
}
nav ul.web li a.selected {
	font-weight: 500;
    background-color: #2a2c31;
}
/* DISEÑO PARA PANTALLAS PEQUEÑAS*/
.control-menu {
	margin-top: 1rem;
    background-color: transparent;
    background-position: center center;
    border: 1px solid #fff;
    display: none;
    float: right;
    height: 40px;
    margin-right: 1.3em;
    width: 40px;
}
.control-menu .open {
    background-image: url("img/open-menu.png");
    background-position: center center;
    background-repeat: no-repeat;
    display: block;
}
.control-menu .close {
    background-image: url("img/close-menu.png");
    background-position: center center;
    background-repeat: no-repeat;
    display: none;
}
.control-menu a span {
    display: inline-block;
    height: 40px;
    text-indent: -9999px;
    width: 40px;
}
ul, ol, li {
	list-style: outside none none;
}
ul.nav-items {
	clear: both;
    height: 0;
    overflow: hidden;
}
#navigation:target ul.nav-items {
	border-bottom: 1px solid #686b70;
	border-top:1px solid #686b70;
    background: #34363a none repeat scroll 0 0;
    height: 100%;
}
.close { 
   display:none;
}
        
#navigation:target .open {
      display: none;
}
#navigation:target .close {
        display: block;
}
ul.nav-items a {
    border-top: 2px dotted #dddbdb;
    color: #333;
    display: block;
    height: 3em;
    line-height: 3em;
    margin: 0 1.3em;
}
ul.nav-items li {
    display: block;
}
ul.nav-items li:first-child a {
	border-top: 2px solid transparent;
}
ul.nav-items li a span {
	border-left: 3px solid;
	text-transform: uppercase;
	font-weight: 300;
	color: #fefefefe;
    padding: 0.4em 0.5em;
}
ul.nav-items li a span.selected {
	background-color: #2a2c31;
	font-weight: 500;
}
ul.nav-items li.blue a span{
	border-color: #007bff;
}
ul.nav-items li.midnightblue a span{
	border-color: midnightblue;
}
ul.nav-items li.skyblue a span{
	border-color: #5ED6E3;
}
.column-1, .column-2{
	width: 100%;
    margin: auto;
	margin-top: 10px;
}
.box {
	margin-bottom: 20px;
    position: relative;
    padding: 0 1.5em;
    background-color: #34363a;
    border: 1px solid #323335;
    border-radius: 0.25em;
    box-shadow: 0 0.5em 2em rgba(27,41,42,0.0625);
}
.box h2 {
    text-align: center;
	text-transform: uppercase;
	font-weight: 400;
	font-size: 1rem;
    color: #b7b7b8;
    padding: 10px;
}
.counters_header {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1.25em 0 1em;
    border-bottom: 1px solid #686b70;
}
.counters_header .counter_title {
    color: #b7b7b8;
    margin-top: 0;
    margin-bottom: 0.25rem;
    font-size: 0.75rem;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0.075em;
}
.counters_header .count {
    display: inline-block;
    color: #fefefefe;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1;
}
.editor_input{
	overflow-y: scroll;
	width: 100%;
	height: 550px;
	padding: 1em 0 0 0.5em;
    border: 0;
	background-color: #393b3f;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
	font-size: 0.95rem;
    color: lightgray;
    line-height: 1.5;
}
.scrollData { 
	height:195px;
    width: 100%; 
    overflow-y: scroll; 
 
}
.parentTbl table { 
	border-spacing: 0; 
	border-collapse: collapse; 
	border: 0; 
	width: 100%; 
}
.childTbl table { 
	border-spacing: 0; 
	border-collapse: collapse;  
	width: 100%; 
} 
th.name, th.vc {
    width: 10%;
    color: #b7b7b8;
    text-transform: uppercase;
    font-size: 0.75rem;
    font-weight: 400;
}
td.carac {
    color: gainsboro;
}
td.v {
	color: gainsboro;
    font-size: 13px;
}
td.rep{
    color: white;
    font-size: 18px;
    font-weight: 600;
    font-family: "Calibre", "Helvetica Neue", Helvetica, Arial, "Microsoft YaHei New", "Microsoft Yahei", "å¾®è½¯é›…é»‘", å®‹ä½“, SimSun, STXihei, "åŽæ–‡ç»†é»‘", sans-serif;
}
tr {
    text-align: center;
}
tr.odd {
	background-color: #3d3e41;
}
.content {
	width: 90%;
    font-family: sans-serif;
    margin: auto;
}
.keyw {
	width: 80%;
}
.content ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}
.content .character, .content .keyw {
    margin-top: 10px;
	background-color: #34363a;
    border: #323335 solid 1px;
	font-weight: 700;
    width: 117px;
    height: 72px;
    font-size: 25px;
	text-align: center;
}
.character span.name, .keyw span.name{
	color: #fefefefe;
    font-size: 1.8rem;
    font-weight: 600;
}
.keyw span.name{
    font-size: 1.3rem;
}
.character .desc-background, .keyw .desc-background, .desc-background {
	display: block;
	font-size: 50%;
    padding: 0.25em 0.4em;
    line-height: 1;
    border-radius: 0.25rem;
    color: #fff;
    background-color: #007bff;
}
span.desc-background,td.desc-background.text{
	font-size: 85%;
    display: inline-block;
}
span.desc-background.simple {
	background: purple;
}
span.desc-background.compuesta {
	background: brown;
}
.character span.desc-background.separator,td.desc-background.text.separator {
    background-color: #cbcb0c;
}
.character span.desc-background.letter,td.desc-background.text.letter {
    background-color: green;
}
.character span.desc-background.number,td.desc-background.text.number {
    background-color: hotpink;
}
span.desc-background.error, .character span.desc-background.error,td.desc-background.text.error {
    background-color: darkred;
}
.character span.desc-background.operator,td.desc-background.text.operator {
    background-color: darkcyan;
}
.character span.desc-background.especial,td.desc-background.text.especial {
    background-color: orange;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 5.5rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    color: #fff;
    background-color: midnightblue;
    border-color: midnightblue;
}
/* PANTALLA MÍNIMA DE 768 PX*/
@media screen and (min-width: 768px){
.container {
	width: 750px;
}
}
/* PANTALLA MÍNIMA DE 992 PX*/
@media screen and (min-width: 992px){
.container {
	width: 920px;
}
.column-1 {
    width: 63.221%;
    float: left;
}
.column-2 {
    width: 35%;
    float: right;
}
}
@media screen and (min-width: 1024px){
.container {
	width: 970px;
}
}
/* PANTALLA MÍNIMA DE 1280 PX */
@media screen and (min-width: 1280px){
.container {
	width: 1130px;
}
}
/* PANTALLA MÁXIMA DE 375 PX */
@media screen and (max-width: 375px){
.container {
	padding-right: 0;
    padding-left: 0;
    margin-right: 0;
    margin-left: 0;
}
.logo-header .text .name {
	font-size: 1em;
}
.logo-header .text .desc {
    letter-spacing: 0;
}
.btn {
    padding: 0.375rem 2.5rem;
}
}
/* PANTALLA MÁXIMA DE 768 PX */
@media screen and (max-width: 768px){
nav ul.web {
	display: none;
}
.control-menu {
	display:block;
}
}
	</style>

<header>
<div class="container">
<div class="logo-header"> 
<svg class="icon-logo" width="48px" height="32px" viewBox="0 0 48 32" version="1.1">
   
    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Group" transform="translate(5.000000, 4.000000)">
    <rect id="Rectangle-2" fill="midnightblue" transform="translate(14.598076, 12.892305) rotate(30.000000) translate(-14.598076, -12.892305) " x="11.5980762" y="0.892304845" width="6" height="24" rx="3"></rect>
    <rect id="Rectangle-2-Copy-2" fill="#007bff" transform="translate(5.408494, 6.145354) rotate(30.000000) translate(-5.408494, -6.145354) " x="2.40849365" y="1.64535393" width="6" height="9" rx="3"></rect>
    <rect id="Rectangle-2-Copy" fill="#5ED6E3" transform="translate(28.310417, 12.547278) rotate(30.000000) translate(-28.310417, -12.547278) " x="25.3104174" y="0.547277717" width="6" height="24" rx="3"></rect>
    </g>
    </g>
    </svg>  
</a>

<a class="text" href="index.php">
      <span class="name"><?php echo NAME; ?></span>
      <span class="desc"><?php echo DESC; ?> ☺</span>
    </a>
</div></div>

	<nav id="navigation">
	
<ul class="web">
<li> <a <?php if($page == 1) echo 'class="selected"'?> href="<?php echo PATH;?>/index.php">compilador</a> </li>
        <li> <a <?php if($page == 2) echo 'class="selected"'?> href="<?php echo PATH;?>/tascii.php">tabla ascii</a> </li>
		<li> <a <?php if($page == 3) echo 'class="selected"'?> href="<?php echo PATH;?>/kwords.php">palabras reservadas</a> </li>
      </ul>
<?php // diseño móvil ?>
    <div class="control-menu">
    <a href="#navigation" class="open"><span>MENU</span></a>
    <a href="#" class="close"><span>CERRAR</span></a>
    </div>
    <ul class="nav-items">
    <li class="blue">
	<a href="<?php echo PATH;?>/index.php"> 
	<span <?php if($page == 1) echo 'class="selected"'?>>compilador</span>
	</a>
	</li>
    <li class="midnightblue">
	<a href="<?php echo PATH;?>/tascii.php"> 
	<span <?php if($page == 2) echo 'class="selected"'?>>tabla ascii</span>
	</a>
	</li>
    <li class="skyblue">
	<a href="<?php echo PATH;?>/kwords.php">
	<span <?php if($page == 3) echo 'class="selected"'?>>palabras reservadas</span>
	</a>
	</li>
    </ul>
	</nav>
    </header>