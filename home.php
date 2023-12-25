<?php include "header.html" ?>
<div class="background">

    <div class='container'>
        <h1>Ответ на ваше обращение</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fio = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $topic = $_POST["type"];
            $source = $_POST["source"];
            $consent = isset($_POST["consent"]) ? "Да" : "Нет";

            echo "<p class='response-item'><span class='response-label'>ФИО:</span> $fio</p>";
            echo "<p class='response-item'><span class='response-label'>Ваш е-мейл:</span> $email</p>";
            echo "<p class='response-item'><span class='response-label'>Даю согласие на обработку данных:</span> $consent</p>";
            echo "<p class='response-item'><span class='response-label'>Откуда узнали о нас:</span> $source</p>";

            if ($topic == "Жалоба") {
                echo "<p class='response-item'><span class='response-label'>Мы примем во внимание вашу жалобу</span></p>";
                echo "<p class='response-item'>{$message}</p>";
            } else {
                echo "<p class='response-item'><span class='response-label'>Мы обязательно рассмотрим ваше предложение</span></p>";
                echo "<p class='response-item'>{$message}</p>";
            }
        }
        echo '<a class="btn" href="index.php">Заполнить снова</a>';
        ?>
    </div>
</div>