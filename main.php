<?php

$email = $_POST["email"];
$tel= $_POST["tel"];
$monitorType = $_POST["monitorType"];
$resolution = $_POST["resolution"];
$numberColor = $_POST["numberColor"];

$emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
$telPattern = "/^[0-9]{10}$|^\+[0-9]{12}/";

if (preg_match($emailPattern, $email)) {
    echo "Перевірка пошти пройдена успішно! <br>";
} else {
    echo "Перевірка пошти не пройдена! <br>";
}

if (preg_match($telPattern, $tel)) {
    echo "Перевірка телефону пройдена успішно! <br>";
} else {
    echo "Перевірка телефону не пройдена! <br>";
}

if (preg_match("/(VGA)/", $monitorType))
{
    echo "Тип монітору VGA. <br>";
}
else
{
    echo "Тип монітору не VGA. <br>";
}

?>