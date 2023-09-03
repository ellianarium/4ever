document.addEventListener('DOMContentLoaded', function () {

    const csvData = `
Year,Hole Area,Minimum Ozone
1979,0.1,225
1980,1.4,203
1981,0.6,209.5
1982,4.8,185
1983,7.9,172.9
1984,10.1,163.6
1985,14.2,146.5
1986,11.3,157.8
1987,19.3,123
1988,10,171
1989,18.7,127
1990,19.2,124.2
1991,18.8,119
1992,22.3,114.3
1993,24.2,112.6
1994,23.6,92.3
1996,22.8,108.8
1997,22.1,108.8
1998,25.9,98.8
1999,23.3,102.9
2000,24.8,98.7
2001,25,100.9
2002,12,157.4
2003,25.8,108.7
2004,19.5,123.5
2005,24.4,113.8
2006,26.6,98.4
2007,22,116.2
2008,25.2,114
2009,22,107.9
2010,19.4,128.5
2011,24.7,106.5
2012,17.8,139.3
2013,21,132.7
2014,20.9,128.6
2015,25.6,117.2
2016,20.7,123.2
2017,17.4,141.8
2018,22.9,111.8
2019,9.3,167
2020,23.5,102.6
2021,23.3,103.3

`;

    // ��������� ������ CSV �� ������ �����
    const rows = csvData.trim().split('\n');

    // ��������� ��������� (�������� ��������) �� ������ ������
    const headers = rows[0].split(',');

    // �������� ������ �������� ��� ������
    const data = [];

    // ���������� �� ������� CSV �����, ������� �� ������ ������ (������ 1)
    for (let i = 1; i < rows.length; i++) {
        const columns = rows[i].split(',');
        const item = {
            'Year': columns[0],
            'Hole Area': parseFloat(columns[1]),
            'Minimum Ozone': parseFloat(columns[2])
        };
        data.push(item);
    }

    // ��������� ������ ��� �������
    const years = data.map(item => item['Year']);
    const holeAreas = data.map(item => item['Hole Area']);
    const minOzones = data.map(item => item['Minimum Ozone']);

    // ������� ��������� � �������������� Chart.js
    const ctx = document.getElementById('myChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: years,
            datasets: [
                {
                    label: 'Hole Area',
                    data: holeAreas,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false,
                },
                {
                    label: 'Minimum Ozone',
                    data: minOzones,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    fill: false,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });


    // ��� ��� ��� �������� ������� � ������� Chart.js �����
});
/*
function getResult() {
    // �������� ��������� ����
    const selectedDate = document.getElementById("datePicker").value;

    const resultImage = "ea.jpg"; // URL �����������
    const resultText = "data: minOzones ���ff 41,42%";

    // ����� ����������

    // ���������� ��������� �� ��������
    const resultContainer = document.getElementById("result");
    const resultImageElement = document.getElementById("resultImage");
    const resultTextElement = document.getElementById("resultText");

    resultImageElement.src = resultImage;
    resultTextElement.textContent = resultText;
    resultContainer.classList.remove("hidden");
}
*/

