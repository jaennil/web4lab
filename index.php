<?php
include 'header.html';
?>

<div class="background">
    <div class="form-container">
        <h2>Обратная связь</h2>
        <form action="home.php" method="post" class="form">
            <div class="field">
                <label for="name">ФИО:</label>
                <input type="text" id="name" name="name" required />
            </div>

            <div class="field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="example@example.com" />
            </div>

            <div class="field">
                <label>Откуда узнали о нас:</label>
            </div>

            <div class="field">
                <label for="radio-online">Реклама из интернета
                    <input type="radio" id="radio-online" name="source" value="Онлайн" />
                </label>
            </div>
            <div class="field">
                <label for="radio-radio">Рассказали друзья
                    <input type="radio" id="radio-radio" name="source" value="Друзья" />
                </label>
            </div>

            <div class="field">
                <label for="type">Тип обращения:</label>
                <select id="type" name="type">
                    <option value="Жалоба">Жалоба</option>
                    <option value="Предложение">Предложение</option>
                </select>
            </div>


            <div class="field">
                <label for="message">Текст сообщения:</label>
                <textarea id="message" name="message" rows="1" required></textarea>
            </div>

            <label for="consent">Согласие на обработку персональных данных:
                <input type="checkbox" id="consent" name="consent" required />
            </label>

            <button type="submit">Отправить</button>
        </form>
    </div>
</div>