// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Inglés", "Informática", "Inteligencia Emocional", "Convenios"],
        datasets: [{
            data: [25, 25, 25, 25],
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#36b8e4'],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#2c9a5e'],
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
            display: true, // Cambiado a true para mostrar las leyendas
            position: 'bottom', // Puedes ajustar la posición de la leyenda (top, left, bottom, right)
            labels: {
                fontColor: '#858796', // Color de texto de las leyendas
                usePointStyle: true, // Para usar un estilo de punto en lugar de una caja
            }
        },
        cutoutPercentage: 80,
    },
});
