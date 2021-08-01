<?php

header("content-type: text/html;charset=utf-8");

$conn = mysqli_connect("localhost", "root", "", "bot1") or die("Database Error");
mysqli_set_charset($conn, 'utf8');

$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

if(mysqli_num_rows($run_query) > 0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;

}else{
    echo "Desculpa, não consigo entender, tente fazer uma pergunta mais simples.";
}

$conn->query("SET NAMES 'utf8'");
$conn->query("SET character_set_conection=utf8");
$conn->query("SET character_set_queries=utf8");
$conn->query("SET character_set_replies=utf8");

?>
