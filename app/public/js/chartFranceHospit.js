// import axios from "axios";

document.addEventListener("DOMContentLoaded", async () => {
  const API_URL = "https://coronavirusapifr.herokuapp.com/data/france-by-date/";
  // const libDep = location.pathname.split("/department/")[1];
  const franceDatas = [];
  const labels = [];
  const hospit = [];
  const rea = [];
  const reaTO = [];

  const loader1 = document.getElementById("reaLoader");
  const loader2 = document.getElementById("toLoader");
  const reaChartContainer = document.getElementById("reaChartContainer");
  const reaTOContainer = document.getElementById("reaTOContainer");
  // GET france data each last 15 days
  const today = new Date();
  let increment = 1000 * 60 * 60 * 24; // one day

  for (let index = 0; index <= 24; index++) {
    const date = new Date(today - increment);

    const dateString = `${
      date.getDate() < 10 ? `0${date.getDate()}` : `${date.getDate()}`
    }-${
      date.getMonth() < 10
        ? `0${date.getMonth() + 1}`
        : `${date.getMonth() + 1}`
    }-${`${date.getFullYear()}`}`;

    const { data } = await axios.get(`${API_URL}${dateString}`);

    // console.log(data);
    labels.unshift(data[0].date);
    hospit.unshift(data[0].hosp);
    rea.unshift(data[0].rea);
    reaTO.unshift(data[0].TO ? data[0].TO * 100 : null);

    increment += 1000 * 60 * 60 * 24 * 30; // 30 days

    // Handling charts
    if ((index % 12 === 0) & (index > 10)) {
      document
        .getElementById("reaChartContainer")
        .removeChild(document.getElementById("reaChart"));

      document
        .getElementById("reaTOContainer")
        .removeChild(document.getElementById("toChart"));

      const dataChart1 = {
        labels,
        datasets: [
          {
            label: "Hospitalisés",
            borderColor: "rgb(255, 99, 132)",
            backgroundColor: "rgb(255, 99, 132)",
            data: hospit,
          },
          {
            label: "En Réa ou Soins Intensifs",
            borderColor: "rgb(46, 41, 78)",
            backgroundColor: "rgb(46, 41, 78)",
            data: rea,
          },
        ],
      };

      const dataChart2 = {
        labels,
        datasets: [
          {
            label: "Taux occupation lits de réa par patients Covid en %",
            borderColor: "rgba(5,66,96,1)",
            backgroundColor: "rgba(0,124,186,1)",
            data: reaTO,
          },
        ],
      };

      const config1 = {
        type: "line",
        data: dataChart1,
        options: {
          animation: {
            duration: 500,
            easing: "linear",
          },
        },
      };

      const config2 = {
        type: "line",
        data: dataChart2,
        options: {
          animation: {
            duration: 500,
            easing: "linear",
          },
        },
      };

      const reaChart = document.createElement("canvas");
      reaChart.setAttribute("id", "reaChart");

      const reaTOChart = document.createElement("canvas");
      reaTOChart.setAttribute("id", "toChart");

      loader1.classList.add("--hide");
      loader2.classList.add("--hide");
      reaChartContainer.classList.remove("--hide");
      reaTOContainer.classList.remove("--hide");
      reaChartContainer.appendChild(reaChart);
      reaTOContainer.appendChild(reaTOChart);

      new Chart(reaChart, config1);
      new Chart(reaTOChart, config2);
    }
  }
});
