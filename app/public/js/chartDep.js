// import axios from "axios";

document.addEventListener("DOMContentLoaded", async () => {
  const API_URL = "https://coronavirusapifr.herokuapp.com/data/";
  const libDep = location.pathname.split("/department/")[1];
  const labels = [];
  const hospit = [];
  const rea = [];
  const loader = document.getElementsByClassName("lds-roller")[0];
  const chart = document.getElementsByClassName("chart")[0];

  const { data } = await axios.get(`${API_URL}departement/${libDep}`);
  const depForChart = data.filter((data, index) => {
    return index % 10 === 0;
  });

  // console.log(depForChart);

  depForChart.forEach((dep) => {
    labels.push(dep.date);
    hospit.push(dep.hosp);
    rea.push(dep.rea);
  });

  const dataChart = {
    labels,
    datasets: [
      {
        label: "Hospitalisés",
        borderColor: "rgb(255, 99, 132)",
        backgroundColor: "rgb(255, 99, 132)",
        data: hospit,
      },
      {
        label: "En réa ou soins intensifs",
        borderColor: "rgb(46, 41, 78)",
        backgroundColor: "rgb(46, 41, 78)",
        data: rea,
      },
    ],
  };

  const config = {
    type: "line",
    data: dataChart,
    options: {},
  };

  loader.classList.add("--hide");
  chart.classList.remove("--hide");

  new Chart(document.getElementById("myChart"), config);
});
