<?php

 $banco = "playlist.txt";

 $titulo = $_GET['title'];


?>

<DOCTYPE html><html>
<html land="pt">
<HEAD>
<TITLE></TITLE>
<meta charset="utf-8">

 <style>
  .fleft {
   float: left;
  }

  .fright {
   float: right;
  }
 </style>


</HEAD>

<BODY BGCOLOR="#000000" TEXT="#FFFFFF" LINK="#00FFFF" VLINK="#CCCCC0">

<div class="fright">
  </div>
<div class="fright">

<form name=form method=GET action=menu.php>

<div class="form-group">
<label for="sel1"></label>
  <select class="form-control"  name="title">
  <option>Selecione uma musica:</option>
  <?php
$arquivo = fopen($banco,"r");
$while = fread($arquivo,filesize($banco));
if($while == "0"){echo"<br><br><br><br><font face=verdana size=1>Nenhuma noticia inserida!</font><br><br><br><br>";}else{echo"<font face=verdana size=1>$while</font>";}
fclose($arquivo);
?>
 </select>

<input type = submit value = ouvir></div>
</form>
 <audio controls="" source="" autoplay="true" src="<?php echo $titulo ?>" type="audio/mpeg"> Your browser does not support the HTML5 audio element; please use the download button. </audio>

 </div>   


<FONT face=Impact>DashBoard</FONT>


</BODY>
</HTML>
