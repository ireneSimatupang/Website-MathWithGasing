// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["PENJUMLAHAN", "PENGURANGAN", "PERKALIAN", "PEMBAGIAN"],
    datasets: [
      {
        label: "PRE-TEST",
        lineTension: 0.3,
        backgroundColor: "rgba(255, 99, 132, 0.2)", // Adjust color as needed
        borderColor: "rgba(255, 99, 132, 1)", // Adjust color as needed
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 99, 132, 1)", // Adjust color as needed
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(255, 99, 132, 1)", // Adjust color as needed
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [40, 60, 75, 65] // Replace with your pretest data
      },
      {
        label: "POST-TEST",
        lineTension: 0.3,
        backgroundColor: "rgba(54, 162, 235, 0.2)", // Adjust color as needed
        borderColor: "rgba(54, 162, 235, 1)", // Adjust color as needed
        pointRadius: 5,
        pointBackgroundColor: "rgba(54, 162, 235, 1)", // Adjust color as needed
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(54, 162, 235, 1)", // Adjust color as needed
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: [90, 80, 100, 80] // Replace with your postest data
      }
    ],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
