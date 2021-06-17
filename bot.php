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
        <div id = "creditos">
            <h1 class="cor-titulo" id="titulo1"> Créditos: <a href="#redirect"> <button class="close" id="close"> &times; </button> </a></h1>
            <div id = "conteudo-left">     
                <dl>
                    <dd> Bruno Malheiros </dd>
                    <dd> Daniel Alves </dd>
                    <dd> Emanuelly Maurício </dd>
                    <dd> Jade Beatriz </dd>
                    <dd> Joyce Coqueiro </dd>
                    <dd> Lucas Inácio </dd>
                </dl>
            </div>
        <div id="conteudo-right">
            <p> Projeto realizado com </br> fins avaliativos para a </br> disciplina de Projeto Integrador II, tendo </br> como orientador o professor Eber Chagas. </p>
        </div>
        <div id="conteudo-bottom">
                <h4 class="cor-titulo"> Deixe seu FeedBack! </h4> </br> 
                <p> Estamos abertos para sugestões: </p> </br>
                <p> chatbot.whatif@gmail.com </p> 
                <a href="https://www.ifbaiano.edu.br/unidades/guanambi/" target="_blank"><img id="imgif" src="imgs/ife.jpg"/></a>
            </div> 
        </div>
    </div>
    
</body>
</html>
