<canvas id="myChart-2"></canvas>

<script>
    const ctx2 = document.getElementById('myChart-2');

    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Subscriptions',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 2.5
            }]
        },
        options: {
            color: 'white',
            scales: {
                x: {
                    grid: {
                        color: 'white'
                    }
                },
                y: {
                    grid: {
                        color: 'white'
                    },
                    beginAtZero: true
                }
            }
        }
    });
</script>
