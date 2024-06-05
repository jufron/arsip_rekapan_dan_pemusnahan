
function chartPieDemo (props) {
    const {
        data = [55, 30, 15],
        labels = ["Direct", "Referral", "Social"],
        backgroundColor = ['#2e59d9', '#17a67d3', '#2c9faf'],
        hoverBackgroundColor = ['#2e59d9', '#17a673', '#2c9faf'],
        options,
    } = props;

    const ctx = document.getElementById("myPieChart");
    const myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: labels,
        datasets: [{
          data: data,
          backgroundColor: backgroundColor,
        //   hoverBackgroundColor: hoverBackgroundColor,
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: false
        },
        cutoutPercentage: 80,
        ...(options && { ...options })
      },
    });
}
