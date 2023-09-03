document.addEventListener('DOMContentLoaded', function () {

const csvData2 = `
date,percentage,percentage_dangerous
2021-08-30,43.03,0.25
2021-09-30,46.57,9.77
2021-10-30,38.15,6.9
2021-11-30,33.12,0.25
2021-12-31,38.82,0.26
2022-01-30,52.29,0.25
2022-02-28,56.15,0.25
2022-03-31,56.13,0.26
2022-04-30,55.61,0.25
2022-05-30,48.55,0.26
2022-06-30,41.85,0.26
2022-07-26,38.93,0.25
2022-08-31,38.57,0.64
2022-09-30,37.41,6.2
2022-10-31,34.65,3.81
2022-11-30,28.95,2.8
2022-12-30,16.24,3.49
2023-01-30,22.79,4.02
2023-02-28,25.25,4.3
2023-03-30,28.11,2.31
2023-04-30,26.65,0.67
2023-05-30,23.26,1.51
2023-06-30,17.03,0.63
2023-07-31,17.47,2.65
2023-08-31,35.61,3.25

`;


// Разделите строки CSV на массив строк
const rows2 = csvData2.trim().split('\n');

// Извлеките заголовки (названия столбцов) из первой строки
const headers2 = rows2[0].split(',');

// Создайте массив объектов для данных
const data2 = [];

// Пройдитесь по строкам CSV файла, начиная со второй строки (индекс 1)
for (let i = 1; i < rows2.length; i++) {
    const columns2 = rows2[i].split(',');
    const item2 = {
        'date': columns2[0],
        'percentage': parseInt(columns2[1]),
        'percentage_dangerous': parseInt(columns2[2])
    };
    data2.push(item2);
}

// Извлекаем данные для графика
const dates = data2.map(item => item['date']);
const percentages = data2.map(item => item['percentage']);
const percentagesDangerous = data2.map(item => item['percentage_dangerous']);


// Создаем диаграмму с использованием Chart.js
    // Создаем столбчатую диаграмму с использованием Chart.js
    const ctx2 = document.getElementById('myChart2').getContext('2d');
    new Chart(ctx2, {
        type: 'bar', // Изменили тип на 'bar' для столбчатой диаграммы
        data: {
            labels: dates,
            datasets: [
                {
                    label: 'Percentage',
                    data: percentages,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                },
                {
                    label: 'Percentage Dangerous',
                    data: percentagesDangerous,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                },
            },
            animation: {
                duration: 1000, // Продолжительность анимации в миллисекундах
                easing: 'easeInOutQuart', // Функция анимации (продвинутая анимация)
            },
        },
    });


    // Ваш код для создания графика с помощью Chart.js здесь
});
