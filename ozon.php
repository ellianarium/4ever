<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="script.js"></script>

    <script src="script2.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf8" />

    <link rel="stylesheet" href="css.css" />
    <title>Ozon hole</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</head>
<body>

<div class="wrapper">
    <header class="header">
        <img src="logo.gif" alt="logo" id="mainlogo" />
        <nav class="links">
            <a href="index.html" class="link">Главная</a>
            <a href="https://ozonewatch.gsfc.nasa.gov/monthly/SH.html.html" class="link">NASA</a>
            <a href="index.html#datePicker" class="link">Бот</a>
        </nav>
        <div class="header__end">
            <a href="index.html#fo" class="link-button">Контакты</a>
        </div>
    </header>
    <section class="creatback">
        <div class="creat">
            <h1>OZON HOLES | ОЗОНОВЫЕ ДЫРЫ</h1>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </section>
    <main class="main">
        <div class="container">
            <center>
                <div class="mainn">
                    <div class="main_text_title">
                        <b>   Что такое озоновые дыры?</b><br /><br />
                    </div>
                    <div class="main_text">
                        &emsp;Озоновая дыра — это область земной атмосферы, где происходит аномальное сокращение содержания озона. Это ежегодное явление, наблюдаемое весной в полярных регионах, за которым обычно следует восстановление летом. В ходе измерений, проведенных в последнее время, были обнаружены значительные снижения концентрации озона в слое, особенно в районе Антарктиды.
                        <br /> <br /> <br />

                    </div>

                    <img src="video.gif" alt="video" style="width: 50%; text-align: center;" /><br />
                    <i style="color: #22356f;">
                        Изменение площади озоновый дыры c 1979 г. по 2023 г. с помощью спутника <a href="https://www.nasa.gov/mission_pages/NPP/main/index.html"> Suomi NPP</a>
                    </i>
                </div>
<br>
                <div class="text">
                    Озон в стратосфере играет важную роль в защите Земли от ультрафиолетовых (УФ) лучей солнца, которые могут быть вредными для жизни на Земле. Вот некоторые из возможных вредных последствий озоновой дыры:
                    <br><br>
                    <b>Увеличение ультрафиолетового излучения (УФ-излучения):</b> Озоновая дыра позволяет большему количеству ультрафиолетовых лучей проникать в нижние слои атмосферы. УФ-излучение может наносить вред коже человека, вызывая солнечные ожоги, раздражение кожи, преждевременное старение и увеличивая риск развития рака кожи.
                <br><br>
                    <b>Воздействие на экосистемы:</b> УФ-излучение может быть вредным для морских и наземных экосистем, так как оно может повредить фитопланктон в океанах и растения на суше, что, в свою очередь, может повлиять на пищевые цепи и биоразнообразие.
                <br><br>
                    <b>Здоровье человека:</b> УФ-излучение также может оказать негативное воздействие на здоровье человека, увеличивая риск развития катаракты, ухудшая зрение и повышая вероятность развития рака кожи.
                <br><br>
                    <b>Угроза для животных:</b> УФ-излучение может быть вредным для животных, особенно для тех, которые проводят большую часть времени на открытом воздухе, таких как рыбы, амфибии и некоторые виды птиц.
                <br><br></div>
                <hr />

                <div class="main_text_title">
                    Диаграмма
                </div>

                <div class="main_text" id="edit" style="text-align: center;">

                    Набор данных содержит информацию о годе, площади дыры и минимальном озоне. Средний размер озоновой дыры за 7 сентября – 13 октября и минимум среднего озона в Южном полушарии за 21 сентября – 16 октября каждого года.


                    <canvas id="myChart"></canvas>

                    <i><a href="https://www.kaggle.com/datasets/varunsaikanuri/ozone-hole-data">Ozone Hole Dataset</a></i>

                </div>
                <hr />


                <div class="main_text_title">
                    База данных (WebSQL)
                </div>
                <div class="main_text" style="text-align: center">
                    основанная на изображениях со спутника на 2021-2022 гг.
                </div>

                <div>
                    <?php

                    // Подключение к базе данных
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "4Ever";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Проверка соединения
                    if ($conn->connect_error) {
                        die("Ошибка подключения к базе данных: " . $conn->connect_error);
                    }

                    // SQL-запрос для извлечения данных
                    $sql = "SELECT * FROM ozon_hole2021";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table>
                            ";
                        echo "
                            <tr><th>id</th><th>Date</th><th>Percentage(blue)</th><th>Percentage(purple)</th><th>Average temperature of month</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr><td>" . $row["id"] . "</td><td>" . $row["date"] . "</td><td>" . $row["percentage"] . "</td><td>" . $row["percentage_dangerous"] . "</td><td>" . $row["average_temperature"] . "</td></tr>";
                        }
                        echo "
                        </table>";
                    } else {
                        echo "Нет данных для отображения.";
                    }

                    $conn->close();
                    ?>
                </div>

                <div class="main_text" style="text-align: center">
                    процентное соотношение ослабление озонового слоя северного полушария
                </div>


                <canvas id="myChart2"></canvas>

                <div class="main_text_title" style="text-transform: none; font-size: 20px; width: 80%;">
                    Выберите дату, чтобы посмотреть какой была стратосфера в эту дату и проанализировать озоновую дыру
                </div>

                <input type="date" id="datePicker"><br />
                <button onclick="getResult()">Проанализировать данные</button>

                <div id="result" class="hidden">
                    <h2>Результат:</h2><br /><br />
                    <div id="eng">
                        <img id="resultImage" src="" alt="">
                        <p id="resultText"></p>
                    </div>
                </div>

            </center>


    </main>

    <footer class="footer" id="fo">
        <div class="footer__main">
            <div class="container">
                <div class="footer__section">
                    <div class="footer__block">
                        <div class="footer__text">4Ever, Almaty 2023</div>

                        <div class="footer__text">All Rights Reserved</div>
                    </div>
                    <div class="footer__block">
                        <div class="footer__socials">

                            <p>Our social networks</p>
                            <div class="footer__icons">
                                <a href="https://www.instagram.com/ellianarium/" class="footer__icon">
                                    <i class="fa fa-instagram" aria-hidden="true">Instagram</i>

                                </a>
                                <a href="https://www.facebook.com/" class="footer__icon">
                                    <i class="fa fa-facebook-official" aria-hidden="true">Facebook</i>
                                </a>
                                <a href="https://t.me/NScsfulTrader" class="footer__icon">
                                    <i class="fa fa-telegram" aria-hidden="true">Telegram</i>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script>
    function getResult() {
        // Получаем выбранную дату
        const selectedDate = document.getElementById("datePicker").value;

        const resultImage = "ea.jpg"; // URL изображения
        const resultText = "Концентрация озона: 265-290 е.Д.\n(среднее значение около 280 е.Д.)\n\nПоражение озонового слоя: 41,42%";

        // Текст результата

        // Отображаем результат на странице
        const resultContainer = document.getElementById("result");
        const resultImageElement = document.getElementById("resultImage");
        const resultTextElement = document.getElementById("resultText");

        resultImageElement.src = resultImage;
        resultTextElement.textContent = resultText;
        resultContainer.classList.remove("hidden");
    }
</script>




</body>
</html>