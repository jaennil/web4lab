<?php include "header.html" ?>
<div class="background">

    <div class='container'>
        <?php
        if (isset($_POST["name"])) {
            $fio = $_POST["name"];
            $message = $_POST["message"];
            $email = $_POST["email"];
            $source = $_POST["source"];
            $type = $_POST["type"];

            echo '<p> Здравствуйте, '.$fio.'</p>';
            if ($type == 'propose') {
                echo '<p>Спасибо за ваше предложение:</p>';
                echo "<textarea>$message</textarea>";
            } else {
                echo '<p>Мы рассмотрим вашу жалобу:</p>';
                echo "<textarea>$message</textarea>";
            }
            if (isset($_POST["attachment"]) & $_POST["attachment"] != "") {
                echo "<p class='response-item'><span class='response-label'>Вы приложили следующий файл:</span>".$_POST["attachment"]."</p>";
            }
			echo '<div><a class="btn" href="index.php?name='.$fio.'&email='.$email.'&source='.$source.'">Заполнить снова</a></div>';
        }
?>
    </div>
</div>
