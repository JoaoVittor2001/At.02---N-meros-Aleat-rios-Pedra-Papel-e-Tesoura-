<!DOCTYPE html>
 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PEDRA, PAPEL E TESOURA</title>
</head>
<body>
 
 
<?php
 
$opcao="";
if(isset($_POST['opcao'])){
    $opcao=$_POST['opcao'];
}
 
 $comp = rand(1, 3);
 $venc = "";
 $opcao = "";
 $computador = "Computador";
 $usuario = "Usuario";
 $nulo = "Dedos iguais";
 
?>
 

<legend>[Usuario]</legend>
 <p>
<form action="" method="post">
<input type="radio" name="opcao" value="1">PEDRA
<input type="radio" name="opcao" value="2">PAPEL
<input type="radio" name="opcao" value="3">TESOURA<br>
 
 
<?php
$opcao = $_POST['opcao'];
?>
 
<p>
<input type="submit" value="Enviar">
<p>
<legend>Usuário</legend>
<?php
    echo "<img src='img/$opcao.jpeg' alt=''>";
?>
<p>

<legend>Computador</legend>
<?php
   echo "<img src='img/$comp.jpeg' alt=''>";
?>

<P>

</form>
 
<p>

<legend>GANHADOR</legend>
<?php
 
if (($opcao==1)&&(($comp==2)||($comp==3))){
    $venc = $computador;
    echo $venc;    
}
if (($opcao==2)&&($comp==1)){
    $venc = $usuario;
    echo $venc;
}
if (($opcao==2)&&($comp==3)){
    $venc = $computador;
    echo $venc;
}
if (($opcao==3)&&($comp==2)){
    $venc = $usuario;
    echo $venc;
}
if (($opcao==3)&&($comp==1)){
    $venc = $computador;
    echo $venc;
}  
if ($opcao==$comp){
    $venc = $nulo;
    echo $venc;
} 
 
?>

</body>
</html>