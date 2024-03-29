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
                            <h5 class="text-center">Reminders</h5>
                            {{-- <ul>
                                <li>Alert</li>
                                <li>Alert</li>
                                <li>Alert</li>
                            </ul> --}}
                        </div>
                        <div class="alert-2">
                            <h5 class="text-center">To Do List</h5>
                            {{-- <ul>
                                <li>Alert</li>
                                <li>Alert</li>
                                <li>Alert</li>
                                <li>Alert</li>
                                <li>Alert</li>
                                <li>Alert</li>
                            </ul> --}}
                        </div>
                        <div class="alert-3">
                            <h5 class="text-center">Completed Tasks</h5>
                            {{-- <ul>
                                <li>Alert</li>
                                <li>Alert</li>
                                <li>Alert</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
