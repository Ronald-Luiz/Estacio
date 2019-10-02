
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <title>prova</title>
        <style>
       h1 { background: url('https://static.wixstatic.com/media/026fcf_baa6fcf89c25492e9eeb27c06f745e86~mv2.jpg/v1/fill/w_600,h_180,al_c,q_80,usm_0.66_1.00_0.01/CADASTRO%20LOGO.webp');color : blue;
     background-size: 280px;   
  left:100px;
  top:100px;
  width:280px;
        height:84px;
      margin-left: 75px;
       }
#area #formulario
{
  position:absolute;
  display:block;   
}
fieldset
{margin-left: 20px;
  background-color:#A7C0DC;
  width:370px;
  height:100px;
  box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
}
#formulario input.campo_nome
{
  background-color:#f1ff00;
  position:absolute;
  left:100px;
  top:23px;
  width:225px;
  
}
body, html {
  font-family: Arial, Tahoma, sans-serif;
  display: table;
  width: 100%;
  height: 100vh;
  color: white;
  text-shadow: -1px 0 black, 0 2px black;
  background: url('https://image.freepik.com/fotos-gratis/mulher-alegre-com-telefone-na-mesa-do-escritorio_23-2147727706.jpg') no-repeat bottom center scroll;
  background-position: 30% 45%;
  background-size: cover;
  

}
button, #b1, #cl {
  box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
  border-radius: 7px;
}

 .form-group{padding: 10px;
 }
        #posiciona {
        position: absolute; /* posição absoluta ao elemento pai, neste caso o BODY */
        /* Posiciona no meio, tanto em relação a esquerda como ao topo */
        left: 50%;
        top: 50%;
        width: 400px; /* Largura da DIV */
        height: 350px; /* Altura da DIV */
       
        border:5px solid; 
        box-shadow: 5px 5px 10px rgba(1,0,1,1);
        /* A margem a esquerda deve ser menos a metade da largura */
        /* A margem ao topo deve ser menos a metade da altura */
        /* Fazendo isso, centralizará a DIV */
        margin-left: 170px;
        margin-top: -200px;
        color: blue;
        text-align: center; /* Centraliza o texto */
        font-size: 30px;
        z-index: 1000; /* Faz com que fique sobre todos os elementos da página */
        text-shadow: 2px 0 black, 0 3px black,
      2px 0 black, 0 2px black;
        }
        h6{font-size: 15px;margin-left: 625px;
        margin-top:200px;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<script type="text/javascript">
function id(el) {
  return document.getElementById(el);
}
function mostra(element) {
  if (element) {
    id(element.value).style.display = 'block';
  }
}
function esconde_todos($element, tagName) {
  var $elements = $element.getElementsByTagName(tagName),
      i = $elements.length;
  while(i--) {
    $elements[i].style.display = 'none';
  }
}
window.addEventListener('load', function() {
 var $Masculino = id('Sim'),
      $Feminino = id('Feminino'),
      $sexo  = id('sel-sexo');

  //mostrando no onload da página
  esconde_todos(id('palco'), 'div');
  mostra(document.querySelector('input[name="rd-sexo"]:checked'));


  //mostrando ao clicar no radio
  var $radios = document.querySelectorAll('input[name="rd-sexo"]');
  $radios = [].slice.call($radios);

  $radios.forEach(function($each) {
    $each.addEventListener('click', function() {
      esconde_todos(id('palco'), 'div');
      mostra(this);
    });
  });
});
</script>
    <body>
        <br>
        <h1></h1>
        <form action=exibir.php>
        <fieldset name="userinfo">
        Nome:
        <input type=text required name="nome1"placeholder="Nome">
        <br>
        <br>
        Idade:
        <input type=text required name="idadep" placeholder="Idade">
        <p>
        <input id = b1 type=submit value=Enviar></p>
</fieldset>

<label>
<br> Tem filhos ?<br>
  <label><input id=sel type="radio" name="rd-sexo" value="Sim" />Sim</label>
  <label><input type="radio" name="rd-sexo" value="Feminino" />Não</label>
  </div>
            <form action="exibir.php">
            <div id="formulario">

                <div class="form-group">
                <div id="palco">
                <div id="Sim">
                <fieldset>
                    <label>Nome: </label>
                    <input type="text" name="titulo[]" placeholder="Nome"><br><br>
                    <label> Idade:</label> <input type="text" name="titulo[]" placeholder="Idade">
                    <input id=cl type="reset"  value="Limpa" >
                    <button type="button" id="add-campo"> Adicionar </button></div>
                    
                </div>
            </div>
                    </div>
            <div class="form-group">  
            </div>
        </form>
        </fieldset>

        <script>
            var cont = 1;
            //https://api.jquery.com/click/
            $('#add-campo').click(function () {
                cont++;
                //https://api.jquery.com/append/
                $('#formulario').append
                ('<div class="form-group" id="campo' + cont + '"> <fieldset><label>Nome: </label><input type="text" name="titulo[]" placeholder="Nome"><br><br><label> Idade:</label> <input type="text" name="titulo[]" placeholder="idade"> <input id=cl type="reset" value="Limpa" onClick= "Limpa()"> <button type="button" id="'+ cont + '" class="btn-apagar"> Remover </button></fieldset></div>');        
            });

            $('form').on('click', '.btn-apagar', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
            });
              
        </script>
        <div id="posiciona"> 
        <br>Bem vindo!<br><br> Cadastre-se ao lado colocando seu nome e sua idade, Não se esqueça de  acrescentar se possui filhos ou não e seus respectivos nomes.
</div>
          </div>
          <h6>Copyright &copy;</h6>
    </body>
</html>