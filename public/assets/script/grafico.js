const config = {
  type: "bar",
  data: {
    labels: [],
    datasets: [
      {
        label: "Rentabilidade",
        data: [],
        backgroundColor: "rgba(75, 192, 192, 0.5)",
        borderColor: "rgba(75, 192, 192, 1)",
        borderWidth: 1,
      },
      {
        label: "Despesas",
        data: [],
        backgroundColor: "rgba(255, 99, 132, 0.5)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        beginAtZero: true,
        ticks: {
          callback: function (value, index, values) {
            if (value >= 1000) {
              return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            } else {
              return value;
            }
          },
        },
      },
    },
  },
};

function updateChartData(data) {
  config.data.labels = data.months;
  config.data.datasets[0].data = data.rentabilidade;
  config.data.datasets[1].data = data.despesas;

  chart.update();
}

const ctx = document.getElementById("chart").getContext("2d");
const chart = new Chart(ctx, config);

function fetchChartData() {
  fetch("/api/chartdata")
    .then((response) => response.json())
    .then((data) => {
      updateChartData(data);
    })
    .catch((error) => {
      console.log("Ocorreu um erro ao buscar os dados do gráfico:", error);
    });
}

fetchChartData();
