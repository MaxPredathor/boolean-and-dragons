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
                borderWidth: 2.5
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>