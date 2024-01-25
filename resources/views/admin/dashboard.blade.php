@extends('layouts.app')

@section('content')
<div id="my-home-logged" class="container-fluid">
    <h2 class="fs-4 text-white my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row">
        <div class="col-4">
            <div class="debug-don">
                @include('admin.charts.doughnut')

            </div>
            <div class="debug-lin">
                @include('admin.charts.line')
            </div>
        </div>
        <div class="col-6">
            <div class="debug-rad">
                @include('admin.charts.radar')
            </div>
        </div>
        <div class="col-2">
            <div class="alerts">
                <div class="vertical">
                    <div class="alert-1">
                        <h5 class="text-center">First alert</h5>
                        <ul>
                            <li>Alert</li>
                            <li>Alert</li>
                            <li>Alert</li>
                        </ul>
                    </div>
                    <div class="alert-2">
                        <h5 class="text-center">Second alert</h5>
                        <ul>
                            <li>Alert</li>
                            <li>Alert</li>
                            <li>Alert</li>
                            <li>Alert</li>
                            <li>Alert</li>
                            <li>Alert</li>
                        </ul>
                    </div>
                    <div class="alert-3">
                        <h5 class="text-center">Third alert</h5>
                        <ul>
                            <li>Alert</li>
                            <li>Alert</li>
                            <li>Alert</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <div class="row justify-content-center">
        <div class="col">
             <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> 
        </div>
    </div> -->
</div>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Characters', 'Items', 'Types'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3],
                borderWidth: 3
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
@endsection