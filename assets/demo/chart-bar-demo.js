// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#212b2d';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Fulfillment", "Assembly", "SMT", "Werehouse", "Administrative", "IQC", "Mezzanine", "Aisle", "Packing"],
    datasets: [{
      label: "Computers",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [30, 160, 100, 10, 5, 3, 6, 7, 8],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'area'
        },
        gridLines: {
          display: true
        },
        ticks: {
          maxTicksLimit: 9
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 300,
          maxTicksLimit: 9
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});
