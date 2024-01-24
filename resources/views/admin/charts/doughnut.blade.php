<canvas id="myChart"></canvas>


<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Characters', 'Items', 'Types'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3],
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