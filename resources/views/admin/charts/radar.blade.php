<canvas id="myChart-3"></canvas>

<script>
    const ctx3 = document.getElementById('myChart-3');

    new Chart(ctx3, {
        type: 'radar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Subscriptions',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 2.5,
                fill: true,
                color: 'white',
                pointBackgroundColor: '#fff',
                pointBorderColor: 'rgb(255, 99, 132)'
            }]
        },
        options: {
            elements: {
                line: {
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                }
            },
            scales: {
                r: {
                    ticks: {
                        backgroundColor: 'transparent',
                    },
                    angleLines: {
                        color: 'white'
                    },
                    grid: {
                        color: 'white'
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        tickColor: 'white'
                    }
                }
            }
        }
    });
</script>
