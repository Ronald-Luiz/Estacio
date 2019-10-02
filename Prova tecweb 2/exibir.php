<style>body, html {
  font-family: Arial, Tahoma, sans-serif;
  display: table;
  width: 100%;
  height: 100vh;
  color: white;
  font-size: 30;
  text-shadow: -1px 0 black, 0 1px black,1px 0 black, 0 -1px black;
  background: url('https://image.freepik.com/fotos-gratis/mulher-alegre-com-telefone-na-mesa-do-escritorio_23-2147727706.jpg') no-repeat bottom center scroll;
  background-position: 30% 45%;
  background-size: cover;
  color :Blue;
}
  fieldset{
  width:600px;
  height:700px;
  box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
}
h2{ color: red;
    font-family: Arial, Tahoma, sans-serif; font-size: 30; text-shadow: 0 0 0.1em white;text-indent: 50px;}
h2.a {text-shadow: 0 0 0.1em white, 0 0 0.1em white}
h2.b {text-shadow: 0 0 0.1em white, 0 0 0.1em white,0 0 0.1em white}
h4{color: green;
    text-shadow: -1px 0 black, 0 2px black;}
    hr{border-top: 2px solid;
        border-radius: 2px;
    color: black;
    }
    </style>

<h2>Enviado seu cadastro!</h2>

<fieldset>
    <h4>Nome e Idade:</h4>
    <hr>
<?php

//var_dump ($var);
$titulo = $_GET;/*
foreach($formulario as $key=>$value ) {
echo implode ( "<p> chave[$key] / valor ==$value </p> ");
}*/
echo ("<p> Nome: ");

foreach ($titulo as $arr){
   $result= print_r($arr);
    print '<br>';
    print '<hr>';
   
    //echo ("Nome:" );
   print '<br>';
   echo("Idade e Filhos: ");
}
?>
</fieldset>