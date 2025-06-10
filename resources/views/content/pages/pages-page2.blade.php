@extends('layouts/layoutMaster')

@section('title', 'Page-2')

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/chartjs/chartjs.js'])
@endsection

@section('content')
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

@section('page-script')
    <script>
        // Pastikan hanya dijalankan sekali
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

                // Jalankan sekali saja
                if (document.getElementById('genderChart')) {
                    const chart = initGenderChart();

                    // Update persentase
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
@endsection
