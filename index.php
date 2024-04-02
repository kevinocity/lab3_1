<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 15</title>
    <style>
        .square {
            width: 100px;
            height: 100px;
            background-color: red;
            display: none;
        }
    </style>
</head>

<body>

    <div class="square"></div>
    <button id="toggleSquare">Показать квадрат</button>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const square = document.querySelector(".square");
            const toggleButton = document.getElementById("toggleSquare");

            toggleButton.addEventListener("click", function() {
                if (square.style.display === "none") {
                    square.style.display = "block";
                    toggleButton.textContent = "Скрыть квадрат";
                } else {
                    square.style.display = "none";
                    toggleButton.textContent = "Показать квадрат";
                }
            });
        });
    </script>

</body>

</html>
