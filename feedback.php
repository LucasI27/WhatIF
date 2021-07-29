<?php

$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

if (isset($_POST['envf']) && !empty($_POST['envf'])) {

    $feedb = mysqli_real_escape_string($conn, $_POST['feedback']);
    $sql = "INSERT INTO feedback (avaliacao) VALUES ('$feedb') ;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if (!$conn->prepare($sql)) {
        echo 'cu';
        echo mysqli_error($conn);
    }
}

?>