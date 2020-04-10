/* eslint-disable no-undef */
"use strict";

window.onload = function () {
  getTweets();
};

const getTweets = async () => {
  let parameter = uri.getParameter("q");

  let input = document.getElementById("q");
  let search = document.getElementById("search");

  input.value = parameter;
  search.textContent = parameter;

  let tweets = await axios.get("/get-tweets", {
    params: {
      q: parameter,
    },
  });

  [...document.getElementsByClassName("data")].forEach((element) =>
    element.classList.remove("hidden")
  );
  [...document.getElementsByClassName("loading")].forEach((element) =>
    element.classList.add("hidden")
  );

  createChartBar(tweets.data.result, chart);
  createChartPie(tweets.data.result, chart);

  loadSummary(tweets.data.result, tweets.data.tweets);

  let trs = tweets.data.tweets.map(loadTableTweets);
  let tbody = document.querySelector("#table tbody");

  tbody.innerHTML = trs.join("");
};

const createChartBar = (result, chart) => {
  chart.generateChart({
    id: "chart",
    type: "bar",
    labels: ["Positivo", "Negativo"],
    label: "Sentimentos",
    data: [
      result.percentPositive.toFixed(2),
      result.percentNegative.toFixed(2),
    ],
    backgroundColor: ["rgba(75, 192, 192, 0.2)", "rgba(255, 99, 132, 0.2)"],
    borderColor: ["rgba(75, 192, 192, 1)", "rgba(255, 99, 132, 1)"],
    borderWidth: 1,
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
};

const createChartPie = (result, chart) => {
  chart.generateChart({
    id: "chartPie",
    type: "doughnut",
    labels: ["Positivo", "Negativo"],
    label: "Sentimentos",
    data: [
      result.percentPositive.toFixed(2),
      result.percentNegative.toFixed(2),
    ],
    backgroundColor: ["rgba(54, 162, 235, 0.2)", "rgba(255, 99, 132, 0.2)"],
    borderColor: ["rgba(54, 162, 235, 1)", "rgba(255, 99, 132, 1)"],
    borderWidth: 1,
  });
};

const loadSummary = (result, tweets) => {
  let sentimentText = document.getElementById("sentimentText");
  let sentimentNumber = document.getElementById("sentimentNumber");
  let sentimentPositive = document.getElementById("sentimentPositive");
  let sentimentNegative = document.getElementById("sentimentNegative");
  let percentPositive = document.getElementById("percentPositive");
  let percentNegative = document.getElementById("percentNegative");
  let total = document.getElementById("total");

  sentimentText.textContent = ["Negativo", "Positivo"][result.sentiment];
  sentimentNumber.textContent = result.sentiment;
  sentimentPositive.textContent = result.positive;
  sentimentNegative.textContent = result.negative;
  percentPositive.textContent = result.percentPositive.toFixed(2) + "%";
  percentNegative.textContent = result.percentNegative.toFixed(2) + "%";
  total.textContent = tweets.length;
};

const loadTableTweets = (tweet) => {
  return `
    <tr>
      <td>
        <a 
          class="btn btn-link"
          href="https://twitter.com/${tweet.userProfile}"
          target="_blank">

          <img
            class="rounded-circle" src="${tweet.profileImage}" 
            alt="img" />
        </a>
      </td>
      <td>
        <a 
          class="btn btn-link text-muted"
          href="https://twitter.com/${tweet.userProfile}"
          target="_blank">

          ${tweet.userName}
        </a>
      </td>
      <td>${tweet.text}
        <a 
          class="btn btn-link" 
          href="https://twitter.com/i/web/status/${tweet.id}" 
          target="_blank">
          
          Ver original
        </a>
      </td>
    </tr>
  `;
};
