<?php


$banco = "menu.txt";



?>

<DOCTYPE html><html>
<head>
 <meta charset="utf-8">
 <title>Meus favoritos</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
 <!-- Optional Bootstrap theme -->
 <Style>body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 20px;
  line-height: 1.42857143;
   transition:all .4s linear;
  color: white;
  background-color: #cdcdcd;
 background-image: url("");
  background-repeat: repeat;
  background-attachment: fixed;
}
 #rodape {
  position: fixed;
  left: 0px;
  bottom: 0px;
  height: 40px;
  width: 100%;
  background: black;

 }
 .container{
    color: white;
    background-color: #123;
 }
  .navbar{
  width: 100%;
  background: black;
  color: white;
 }
   .navbar-brand{
bottom: 0px;

 }

</style>
</head>

<body>
 <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
  <div class="container2">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
 <a href="main.php" class="navbar-brand"><img src="logo.jpg" width="120" height="30" border="0"></a>
   </div>
   <!-- Collection of nav links and other content for toggling -->
   <div id="navbarCollapse" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
     <li class=""><a href="insert_music.php">Inserir Musica na Playlist</a></li>
     <li><a href="../slides/inserir_slide.php">Inserir Slide </a></li>
     <li><a href="insert3.php">Inserir Link de Artigo</a></li>
    <li><a href="insert_link.php">Inserir Link de Website</a></li>
    <li><a href="insert_sala.php">Inserir Sala</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="insert.php">Entrar</a></li>
    </ul>
   </div>
  </div>
 </nav>
      <div class="container">
   <h1>Meus Favoritos</h1>
   <img src="logo.jpg" width="300" height="210" border="3">
   <p><h3>O seu guia na internet</h3>
   <br>
 <table border="0" width="100%">
<?php
$arquivo = fopen($banco,"r");
$while = fread($arquivo,filesize($banco));
if($while == "0"){echo"<br><br><br><br><font face=verdana size=1>Nenhuma noticia inserida!</font><br><br><br><br>";}else{echo"<font face=verdana size=1>$while</font>";}
fclose($arquivo);
?>
 </center> </table>
   </div>
  <div id="rodape">

   <!-- // arquivos de som
 <a onclick="Fecha()"><button type="submit" class="btn btn-primary" style=" float: right; ">Next</button></a>
  <input type="text"  id="usr" style=" float: right;"/>

   <input type="button" class="btn btn-Primary" style=" float: right; " value="Print" onclick="window.print()" />
 <!--  <a href="insert3.php"><input type="button" class="btn btn-success" style=" float: right; " value="Insert" onclick="" /> </a>  -->
</div>

 <script src="../bootstrap/js/jquery.js"></script>
 <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>
