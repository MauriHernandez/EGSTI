// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Kinder", "Primaria", "Secundaria", "Bachillerato"],
    datasets: [{
      label: "Metodología",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [1, 2, 3, 4],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 300, // Ajusta el ancho máximo de las barras aquí
        barPercentage: 0.5 // Ajusta el porcentaje del ancho disponible para las barras
    
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 4,
          maxTicksLimit: 5,
          padding: 10,
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          // Aquí puedes definir la información que deseas mostrar
          var information = ["Singapur. Se busca desarrollar distintas habilidades intelectuales que ayuden al razonamiento, pensamiento y comprensión lectora. De igual manera, se busca la estimulación a temprana edad con distintas técnicas para el desarrollo cognitivo, social y emocional. Como punto adicional, se complementa con biblioteca, yoga y mindfulness para niños.",
           "ASOMBRO. Se busca fortalecer los procesos de enseñanza. Además de promover la literatura infantil para ayudar a desarrollar habilidades de competencias lectoras como la creatividad. Esto se complementa con talleres de artes, club de futbol, voluntariado infantil, programa de ortografía y convenio con escuelas deportivas de alto rendimiento.",
           "Activas. Se busca generar conocimiento en los estudiantes, apelando a su autonomía y trabajo colaborativo, impulsando una cultura emprendedora con programas como 'Educación Financiera'. Además, se busca fomentar la lectura digital y análoga; se dan más competencias a los estudiantes mediante talleres de arte, cocina, club de fútbol o un voluntariado juvenil.",
           "Vocacional. Se centra en la orientación vocacional de los estudiantes, apoyándolos con varias competencias y habilidades que puedan fortalecer su currículum como con la capacitación en el área de 'higiene y salud comunitaria' que brinda de los conocimientos básicos para el cuidado de la salud (primeros auxilios); capacitación en el área de 'diseño gráfico' para poder ingresarlos en esa área profesional laboralmente; o la capacitación en el área de 'mecatrónica' que busca desarrollar habilidades para el uso efectivo de software, plataformas e implementación de las TICS."
          ];
          return datasetLabel + ': ' + information[tooltipItem.index];
        }
      }
    },
  }
});
