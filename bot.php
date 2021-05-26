<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.php"></script>
</head>
<body>
        <table class="header">
            <th>
                <td>
                    <img src="imgs/logo.png" alt="logo" class="logo">
                </td>
                <td>
                    <h1 id="title">WhatIF</h1>
                </td>
                <td>
                    <img src="imgs/inf.png" alt="informações" class="inf">
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
                <form method="POST" action="message.php">
                    <input id="data" type="text" name="pergunta" placeholder="Pergunte algo sobre a instiruição" required>
                    <input id="send-btn" type="submit" value="Enviar" />
                </form>
            </div>
        </div>   
    </div>

</body>
</html>
