<?php

require_once 'feedback.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>WhatIF</title>
    <link rel="icon" href="imgs/icone.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.php"></script>

</head>
<body>
        <table class="header" id="redirect">
            <th>
                <td>
                    <img src="imgs/logo.png" alt="logo" class="logo">
                </td>
                <td>
                    <h1 id="title">WhatIF</h1>
                </td>
                <td>
                    <a href="#modal"> <img src="imgs/inf.png" alt="informações" class="inf"> </a>
                    
                </td>
            </th>
        </table>
    <div class="wrapper">
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="msg-header">
                    <p>Como posso ajudar?</p>
                </div>
            </div>
        </div>
        
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" name="pergunta" placeholder="Pergunte algo sobre a instituição" required>
                <input id="send-btn" type="submit" value="Enviar" />
            </div>
        </div>   
    </div>


    <div id= "modal">
        <div class = "infos">
            <h1 class="cor-titulo" id="titulo1"> Sobre o What IF <a href="#redirect"> <button class="close" id="close"> &times; </button> </a></h1>
            <div id="conteudo">
                <p> O What IF é um chatbot  - um bot que conversa com você. Seu objetivo é responder suas dúvidas iminentes e frequentes sobre nossa instituição, o IF Baiano campus Guanambi. </p> <br>
                <p> Seja você um novo aluno, professor, funcionário ou visitante, é comum que fique confuso diante do porte do IF, com suas instalações, funcionamento e demais aspectos. </p> <br>
                <p> Por isso, não se preocupe tanto! O nosso bot foi desenvolvido justamente para sanar suas dúvidas e te auxiliar na sua estadia. Experimente perguntas como “Onde fica a sala 15?”, “Como funciona o refeitório?”, “A grama é de verdade ou sintética?”, entre outras.</p>

                <div class="feedback">
                    <form method="POST" action="bot.php"> 
                        <input type="text" name="feedback" class="input" placeholder="Tem alguma dúvida ou feedback sobre o What IF? Conte-nos!" required>
                        <input id="butt" type="submit" name='envf' />
                    </fom>
                </div>
            </div>
            <div id = "rodape">
                <p> Projeto realizado com fins avaliativos para a disciplina de Projeto Integrador II, tendo como orientador o professor Eber Chagas. </p>
                <p> Responsáveis: Bruno Malheiros, Daniel Alves, Emanuelly Maurício, Jade Beatriz, Joyce Coqueiro, Lucas Inácio. </p>
                <br>
                <div id="rod1">
                    <p> Email para contato: chatbot.whatif@gmail.com </p> 
                    <p id="if-link"> Instituto Federal Baiano, Campus Guanambi - 2021 <a href="https://www.ifbaiano.edu.br/unidades/guanambi/" target="blank"> ➚ </a> </p>
                </div>
            </div> 
        </div>
    </div>
    
</body>
</html>
