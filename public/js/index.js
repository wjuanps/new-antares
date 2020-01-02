/* eslint-disable no-undef */
"use strict";

window.onload = function () {

    getTweets();

    chart.generateChart({
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

    chart.generateChart({
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

const getTweets = async () => {

    let parameter = uri.getParameter('q');

    let input  = document.getElementById('q');
    let search = document.getElementById('search');
    input.value = parameter;
    search.textContent = parameter;

    let tweets = 
        await axios.get('/get-tweets', {
            params: {
                q: parameter
            } 
        });

    let trs   = tweets.data.tweets.statuses.map(loadTableTweets);
    let tbody = document.querySelector('#table tbody');

    tbody.innerHTML = trs.join('');
}

const loadTableTweets = (tweet) => {
    return `
        <tr>
            <td><img class="rounded-circle" src="${ tweet.user.profile_image_url_https }" alt="img"></td>
            <td>${ tweet.user.name }</td>
            <td>${ tweet.text }</td>
        </tr>
    `;
};
