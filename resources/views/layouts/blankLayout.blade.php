@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Laporan')

@section('content')
    <h4>Page 2</h4>
    <!-- Cards with few info -->
    <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="card-title mb-0">
                    <h5 class="mb-1 me-2">86%</h5>
                    <p class="mb-0">CPU Usage</p>
                </div>
                <div class="card-icon">
                    <span class="badge bg-label-primary rounded p-2">
                        <i class='ti ti-cpu ti-26px'></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="card-title mb-0">
                    <h5 class="mb-1 me-2">1.24gb</h5>
                    <p class="mb-0">Memory Usage</p>
                </div>
                <div class="card-icon">
                    <span class="badge bg-label-success rounded p-2">
                        <i class='ti ti-server ti-26px'></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="card-title mb-0">
                    <h5 class="mb-1 me-2">0.2%</h5>
                    <p class="mb-0">Downtime Ratio</p>
                </div>
                <div class="card-icon">
                    <span class="badge bg-label-danger rounded p-2">
                        <i class='ti ti-chart-pie-2 ti-26px'></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="card-title mb-0">
                    <h5 class="mb-1 me-2">128</h5>
                    <p class="mb-0">Issues Found</p>
                </div>
                <div class="card-icon">
                    <span class="badge bg-label-warning rounded p-2">
                        <i class='ti ti-alert-octagon ti-26px'></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--/ Cards with few info -->
@endsection
