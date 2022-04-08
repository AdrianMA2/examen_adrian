<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comparativo ventas 2020-2021') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <canvas id="my-chart"></canvas>
                </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    const ctx = document.getElementById('my-chart');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($meses1);?>,
            datasets: [{
                label: '2020',
                data: <?php echo json_encode($ventas1);?>,
                backgroundColor: [
                'rgba(255, 26, 104, 0.2)'
                ],
                borderColor: [
                'rgba(255, 26, 104, 1)'
                ],
                borderWidth: 1
            },
            {
                label: '2021',
                data: <?php echo json_encode($ventas2);?>,
                backgroundColor: [
                'rgba(0, 0, 0, 0.2)'
                ],
                borderColor: [
                'rgba(0, 0, 0, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Ventas'
                    }
                }
            }
        }
    });
</script>
</x-app-layout>
