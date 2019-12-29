"use strict";

window.onload = function () {
    genarateChart({
        id: "chart",
        type: "bar",
        labels: ["Positivo", "Negativo"],
        label: "Sentimentos",
        data: [25, 75],
        backgroundColor: [
            "rgba(75, 192, 192, 0.2)",
            "rgba(255, 99, 132, 0.2)"
        ],
        borderColor: [
            "rgba(75, 192, 192, 1)",
            "rgba(255, 99, 132, 1)"
        ],
        borderWidth: 1,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    genarateChart({
        id: 'chartPie',
        type: 'doughnut',
        labels: ["Positivo", "Negativo"],
        label: 'Sentimentos',
        data: [25, 75],
        backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
    })
};

function genarateChart(chart) {
    var ctx = document.getElementById(chart.id).getContext('2d');
    var myChart = new Chart(ctx, {
        type: chart.type,
        data: {
            labels: chart.labels,
            datasets: [{
                label: chart.label,
                data: chart.data,
                backgroundColor: chart.backgroundColor,
                borderColor: chart.borderColor,
                borderWidth: chart.borderWidth
            }]
        },
        options: chart.options
    });
}
