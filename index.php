<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Панель Фотографий</title>
</head>
<body>
    <div id="warning-modal" class="modal">
        <div class="modal-content">
            <h2>Предупреждение</h2>
            <p>Данный контент предназначен для лиц старше 18 лет.</p>
            <button id="continue-button">Продолжить</button>
            <button id="exit-button">Выход</button>
        </div>
    </div>

    <div id="gallery" class="gallery"></div>

    <script src="script.js"></script>
    <script>
        const images = <?php
            $images = glob("images_lmao/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            echo json_encode($images);
        ?>;
    </script>
</body>
</html>