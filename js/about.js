const ctx = document.getElementById('myChart').getContext('2d');

// Datos de ejemplo
const data = {
  labels: ['Senior', 'Junior', 'Juvenil', 'Cadete'],
  datasets: [
    {
      label: 'Masculinos',
      data: [9, 6, 2, 2],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    },
    {
      label: 'Femeninos',
      data: [14, 8, 5, 5],
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgba(255, 99, 132, 1)',
      borderWidth: 1
    },
    {
      label: 'Mixtos',
      data: [9, 4, 0, 0],
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1
    }
  ]
};

// Configuración del gráfico
const config = {
  type: 'bar',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};

// Crear el gráfico
const myChart = new Chart(ctx, config);