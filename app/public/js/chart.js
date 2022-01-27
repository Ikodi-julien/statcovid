// import axios from "axios";

document.addEventListener("DOMContentLoaded", async () => {
  const API_URL = "https://coronavirusapifr.herokuapp.com/data/";
  const libDep = location.pathname.split("/department/")[1];
  const labels = [];
  const hospit = [];
  const rea = [];
  const hospitSpan = document.getElementById("hospit");
  const reaSpan = document.getElementById("rea");
  const dcSpan = document.getElementById("dc");
  const loader = document.getElementsByClassName("lds-roller")[0];
  const chart = document.getElementsByClassName("chart")[0];

  const depToday = await axios.get(`${API_URL}live/departement/${libDep}`);
  console.log(depToday.data[0]);
  hospitSpan.innerText = depToday.data[0].hosp;
  reaSpan.innerText = depToday.data[0].rea;
  dcSpan.innerText = depToday.data[0].dchosp;

  const depAll = await axios.get(`${API_URL}departement/${libDep}`);
  const depForChart = depAll.data.slice(-100);

  depForChart.forEach((dep) => {
    labels.push(dep.date);
    hospit.push(dep.hosp);
    rea.push(dep.rea);
  });

  const data = {
    labels,
    datasets: [
      {
        label: "Nouvelles Hospitalisations",
        borderColor: "rgb(255, 99, 132)",
        backgroundColor: "rgb(255, 99, 132)",
        data: hospit,
      },
      {
        label: "Nouvelles entrées en Réa",
        borderColor: "rgb(46, 41, 78)",
        backgroundColor: "rgb(46, 41, 78)",
        data: rea,
      },
    ],
  };

  const config = {
    type: "line",
    data: data,
    options: {},
  };

  loader.classList.add("--hide");
  chart.classList.remove("--hide");

  const myChart = new Chart(document.getElementById("myChart"), config);
});
