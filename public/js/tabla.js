const chartData = {
    labels: ['Kinder', 'Primaria', 'Secundaria', 'Bachillerato'],
    datasets: [
      {
        label: 'Students',
        data: [12, 19, 3, 5],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
        ],
        borderWidth: 1,
      },
    ],
  };
  
  const chartConfig = {
    type: 'bar',
    data: chartData,
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
      plugins: {
        tooltip: {
          callbacks: {
            title: (context) => context[0].label,
            label: (context) => context.parsed.y,
          },
        },
      },
    },
  };
  
  const chart = new Chart(document.getElementById('chart'), chartConfig);