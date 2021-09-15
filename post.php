<?php

echo "<pre>"; print_r($_POST); echo "<?pre>";
$txt_nome=$_POST["txt_nome"];
$txt_idade=$_POST["txt_idade"];
$txt_estado=$_POST["txt_estado"];
$txt_cidade=$_POST["txt_cidade"];
$txt_email=$_POST["txt_email"];
 
echo "Nome ".$txt_nome."<br>";
echo "Idade ".$txt_idade."<br>";
echo "Estado ".$txt_estado."<br>";
echo "Cidade ".$txt_cidade."<br>";
echo "Email".$txt_email."<br>";
echo "Aguarde nosso retorno"
?>