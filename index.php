<?php

include 'header.html';

if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $source = $_GET['source'];
}
?>

<div class="background">
    <div class="form-container">
        <h2>Обратная связь</h2>
        <form action="home.php" method="post" class="form">
            <div class="field">
                <label for="name">ФИО:</label>
				<input type="text" id="name" name="name" value="<?php echo $name ?>" required />
            </div>

            <div class="field">
                <label for="email">Email:</label>
				<input type="email" id="email" name="email" value="<?php echo $email ?>" required placeholder="example@example.com" />
            </div>

            <div class="field">
                <label>Откуда узнали о нас:</label>
            </div>

            <div class="field">
                <label for="radio-online">Реклама из интернета
				<input type="radio" id="radio-online" name="source" value="ads" <?php if ($source == 'ads') echo 'checked'; ?>/>
                </label>
            </div>
            <div class="field">
                <label for="radio-radio">Рассказали друзья
                    <input type="radio" id="radio-radio" name="source" value="friends" <?php if ($source == 'friends') echo 'checked'; ?>/>
                </label>
            </div>

            <div class="field">
                <label for="type">Тип обращения:</label>
                <select id="type" name="type">
                    <option value="complaint">Жалоба</option>
                    <option value="propose">Предложение</option>
                </select>
            </div>


            <div class="field">
                <label for="message">Текст сообщения:</label>
                <textarea id="message" name="message" rows="1" required></textarea>
            </div>

			<input type="file" name="attachment"/>
			<div>
				<label for="consent">Согласие на обработку персональных данных:</label>
				<input type="checkbox" id="consent" name="consent" required />
			</div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</div>

