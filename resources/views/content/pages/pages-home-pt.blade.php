@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard Perusahaan')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/chartjs/chartjs.js', 'resources/assets/vendor/libs/apex-charts/apexcharts.js'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/app-academy-dashboard.js'])
@endsection

@section('content')
    <div class="row g-6">

        <div class="col-lg-4 col-12 mb-6">
            <div class="card h-100"> <!-- Tambahkan h-100 di sini -->
                <h5 class="card-header">Komposisi Karyawan Berdasarkan Jenis Kelamin</h5>
                <div class="card-body" style="height: 400px;"> <!-- Fixed height -->
                    <div class="chart-container" style="position: relative; height: 250px;">
                        <canvas id="genderChart"></canvas>
                    </div>
                    <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-3">
                        <li class="ct-series-0 d-flex flex-column">
                            <h5 class="mb-0">Laki-laki</h5>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(102, 110, 232);width:35px; height:6px;"></span>
                            <div class="text-muted" id="male-percentage">90%</div>
                        </li>
                        <li class="ct-series-1 d-flex flex-column">
                            <h5 class="mb-0">Perempuan</h5>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(253, 172, 52);width:35px; height:6px;"></span>
                            <div class="text-muted" id="female-percentage">10%</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Status Kesehatan --}}
        <div class="col-lg-4 col-12 mb-6">
            <div class="card">
                <h5 class="card-header">Status Kesehatan Karyawan</h5>
                <div class="card-body">
                    <canvas id="statusChart" class="chartjs mb-6" data-height="350" style="max-height: 350px;"></canvas>
                    <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
                        <li class="ct-series-0 d-flex flex-column">
                            <h6 class="mb-0">Fit</h6>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(40, 199, 111);width:35px; height:6px;"></span>
                            <div class="text-muted">45%</div>
                        </li>
                        <li class="ct-series-1 d-flex flex-column">
                            <h6 class="mb-0">Fit w/ Note</h6>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(0, 207, 232);width:35px; height:6px;"></span>
                            <div class="text-muted">20%</div>
                        </li>
                        <li class="ct-series-2 d-flex flex-column">
                            <h6 class="mb-0">Fit w/ Follow Up</h6>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(255, 159, 67);width:35px; height:6px;"></span>
                            <div class="text-muted">15%</div>
                        </li>
                        <li class="ct-series-3 d-flex flex-column">
                            <h6 class="mb-0">Temp. Unfit</h6>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(130, 134, 139);width:35px; height:6px;"></span>
                            <div class="text-muted">12%</div>
                        </li>
                        <li class="ct-series-4 d-flex flex-column">
                            <h6 class="mb-0">Unfit</h6>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill"
                                style="background-color: rgb(234, 84, 85);width:35px; height:6px;"></span>
                            <div class="text-muted">8%</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Jabatan --}}
        <div class="col-xxl-8">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Distribusi Jabatan Karyawan</h5>
                    <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
                            id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
                            <a class="dropdown-item" href="javascript:void(0);">Lihat Detail</a>
                            <a class="dropdown-item" href="javascript:void(0);">Export Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body row g-6">
                    <div class="col-xxl-7 col-md-8">
                        <div id="jabatanBarChart"></div>
                    </div>
                    <div class="col-1 d-none d-xxl-block"></div>
                    <div class="col-md-4 d-flex justify-content-around align-items-center">
                        <div>
                            <div class="d-flex align-items-baseline">
                                <span class="text-primary me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
                                <div>
                                    <p class="mb-0">Operator</p>
                                    <h5>35%</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline my-12">
                                <span class="text-info me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
                                <div>
                                    <p class="mb-0">Tier</p>
                                    <h5>20%</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <span class="text-success me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
                                <div>
                                    <p class="mb-0">Mekanik</p>
                                    <h5>14%</h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex align-items-baseline">
                                <span class="text-secondary me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
                                <div>
                                    <p class="mb-0">Operator DT</p>
                                    <h5>12%</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline my-12">
                                <span class="text-danger me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
                                <div>
                                    <p class="mb-0">GL</p>
                                    <h5>10%</h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <span class="text-warning me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
                                <div>
                                    <p class="mb-0">Admin</p>
                                    <h5>9%</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Pastikan DOM sudah ready
        document.addEventListener('DOMContentLoaded', function() {
            // Atau gunakan jQuery ready jika menggunakan jQuery
            // $(document).ready(function() {

            const statusChart = document.getElementById('statusChart');
            if (statusChart && typeof Chart !== 'undefined') {
                const statusChartVar = new Chart(statusChart, {
                    type: 'doughnut',
                    data: {
                        labels: ['Fit', 'Fit with Note', 'Fit with Follow Up', 'Temporary Unfit', 'Unfit'],
                        datasets: [{
                            data: [45, 20, 15, 12, 8],
                            backgroundColor: [
                                'rgb(40, 199, 111)', // Hijau untuk Fit
                                'rgb(0, 207, 232)', // Biru untuk Fit with Note
                                'rgb(255, 159, 67)', // Orange untuk Fit with Follow Up
                                'rgb(130, 134, 139)', // Abu-abu untuk Temporary Unfit
                                'rgb(234, 84, 85)' // Merah untuk Unfit
                            ],
                            borderWidth: 0,
                            pointStyle: 'rectRounded'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        animation: {
                            duration: 500
                        },
                        cutout: '68%',
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.parsed;
                                        return ' ' + label + ' : ' + value + '%';
                                    }
                                },
                                // Fallback values jika variable Vuexy tidak ada
                                backgroundColor: typeof cardColor !== 'undefined' ? cardColor : '#fff',
                                titleColor: typeof headingColor !== 'undefined' ? headingColor : '#5e5873',
                                bodyColor: typeof legendColor !== 'undefined' ? legendColor : '#6e6b7b',
                                borderWidth: 1,
                                borderColor: typeof borderColor !== 'undefined' ? borderColor : '#ebe9f1'
                            }
                        }
                    }
                });
            } else {
                console.error('Chart element not found or Chart.js not loaded');
            }

            // });  // Tutup jQuery ready jika menggunakan jQuery
        });

        // Jabatan
        // Pastikan script dijalankan setelah DOM ready dan ApexCharts loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Alternatif: gunakan setTimeout untuk memastikan semua resource loaded
            setTimeout(function() {
                initJabatanChart();
            }, 100);
        });

        function initJabatanChart() {
            const jabatanBarChartEl = document.querySelector('#jabatanBarChart');

            if (!jabatanBarChartEl) {
                console.error('Element #jabatanBarChart tidak ditemukan');
                return;
            }

            if (typeof ApexCharts === 'undefined') {
                console.error('ApexCharts library tidak tersedia');
                jabatanBarChartEl.innerHTML = '<p class="text-center text-muted">Chart library tidak tersedia</p>';
                return;
            }

            try {
                const options = {
                    chart: {
                        height: 320,
                        type: 'bar',
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            barHeight: '70%',
                            distributed: true,
                            borderRadius: 7
                        }
                    },
                    grid: {
                        strokeDashArray: 10,
                        borderColor: '#ebe9f1',
                        xaxis: {
                            lines: {
                                show: true
                            }
                        },
                        yaxis: {
                            lines: {
                                show: false
                            }
                        },
                        padding: {
                            top: -35,
                            bottom: -12
                        }
                    },
                    colors: [
                        '#696cff', // Primary - Operator
                        '#03c3ec', // Info - Tier
                        '#71dd37', // Success - Mekanik
                        '#8592a3', // Secondary - Operator DT
                        '#ff3e1d', // Danger - GL
                        '#ffab00' // Warning - Admin
                    ],
                    dataLabels: {
                        enabled: true,
                        style: {
                            colors: ['#fff'],
                            fontWeight: 500,
                            fontSize: '12px'
                        }
                    },
                    series: [{
                        name: 'Persentase',
                        data: [35, 20, 14, 12, 10, 9]
                    }],
                    xaxis: {
                        categories: ['Operator', 'Tier', 'Mekanik', 'Operator DT', 'GL', 'Admin'],
                        labels: {
                            formatter: function(val) {
                                return val + '%';
                            }
                        }
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return val + '%';
                            }
                        }
                    },
                    legend: {
                        show: false
                    }
                };

                const chart = new ApexCharts(jabatanBarChartEl, options);
                chart.render();

                console.log('Jabatan chart berhasil dirender');

            } catch (error) {
                console.error('Error membuat chart:', error);
                jabatanBarChartEl.innerHTML = '<p class="text-center text-danger">Error loading chart</p>';
            }
        }

        // Fallback jika DOMContentLoaded sudah lewat
        if (document.readyState === 'loading') {
            // DOM masih loading, event listener akan berjalan
        } else {
            // DOM sudah ready, jalankan langsung
            initJabatanChart();
        }

        // gender
        if (!window.genderChartInitialized) {
            window.genderChartInitialized = true;

            document.addEventListener('DOMContentLoaded', function() {
                // Warna dan data
                const maleColor = 'rgb(102, 110, 232)';
                const femaleColor = 'rgb(253, 172, 52)';
                const genderData = {
                    male: 90,
                    female: 10
                };

                // Inisialisasi chart
                const initGenderChart = () => {
                    const ctx = document.getElementById('genderChart').getContext('2d');

                    return new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Laki-laki', 'Perempuan'],
                            datasets: [{
                                data: [genderData.male, genderData.female],
                                backgroundColor: [maleColor, femaleColor],
                                borderWidth: 0
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            animation: {
                                duration: 500
                            },
                            cutout: '70%',
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            return `${context.label}: ${context.raw}%`;
                                        }
                                    }
                                }
                            }
                        }
                    });
                };
                if (document.getElementById('genderChart')) {
                    const chart = initGenderChart();

                    const updatePercentages = () => {
                        const total = genderData.male + genderData.female;
                        document.getElementById('male-percentage').textContent =
                            Math.round((genderData.male / total) * 100) + '%';
                        document.getElementById('female-percentage').textContent =
                            Math.round((genderData.female / total) * 100) + '%';
                    };

                    updatePercentages();
                }
            });
        }
    </script>



@endsection
