"use strict";

var chart = {
    generateChart(chart) {
        var ctx = document.getElementById(chart.id).getContext('2d');
        new Chart(ctx, {
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
}
