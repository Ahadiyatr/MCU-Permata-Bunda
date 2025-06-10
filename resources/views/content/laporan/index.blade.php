@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
    <div class="row g-6">
        <!-- Cards with few info -->
        <div class="col-lg-3 col-sm-6">
            <div class="card h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-1 me-2">86%</h5>
                        <p class="mb-0">FIT TO WORK</p>
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
                        <p class="mb-0">FIT WITH NOTE</p>
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
                        <p class="mb-0">FIT WITH RESTRICTION</p>
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
                        <p class="mb-0">TEMPORARY UNFIT</p>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-warning rounded p-2">
                            <i class='ti ti-alert-octagon ti-26px'></i>
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
                        <p class="mb-0">UNFIT</p>
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
    </div>
    {{-- row --}}

    <div class="text-center mb-6">
        <h1 class="text-xl font-bold uppercase">Laporan Hasil Medical Check-Up Bulanan</h1>
        <p class="text-lg">Klinik Permata Bunda</p>
        <p>Periode: Mei 2025</p>
    </div>
    <div class="card mt-6">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr class="font-bold bg-gray-100">
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Perusahaan</th>
                        <th class="text-center">Total Karyawan</th>
                        <th class="text-center">Selesai Diperiksa</th>
                        <th class="text-center">Fit</th>
                        <th class="text-center">Fit With Note</th>
                        <th class="text-center">Fit With Restriction</th>
                        <th class="text-center">Tempory Unfit</th>
                        <th class="text-center">Unfit</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">PT. XYZ</td>
                        <td class="text-center">45</td>
                        <td class="text-center">35</td>
                        <td class="text-center">39</td>
                        <td class="text-center">2</td>
                        <td class="text-center">2</td>
                        <td class="text-center">1</td>
                        <td class="text-center">1</td>

                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">PT. Maju Jaya</td>
                        <td class="text-center">120</td>
                        <td class="text-center">115</td>
                        <td class="text-center">111</td>
                        <td class="text-center">3</td>
                        <td class="text-center">2</td>
                        <td class="text-center">2</td>
                        <td class="text-center">1</td>

                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="text-center">PT. XYZ</td>
                        <td class="text-center">60</td>
                        <td class="text-center">35</td>
                        <td class="text-center">39</td>
                        <td class="text-center">2</td>
                        <td class="text-center">2</td>
                        <td class="text-center">1</td>
                        <td class="text-center">1</td>

                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-bold bg-gray-100">
                        <th colspan="2" class="text-center">Total</th>
                        <th class="text-center">260</th>
                        <th class="text-center">253</th>
                        <th class="text-center">195</th>
                        <th class="text-center">44</th>
                        <th class="text-center">14</th>
                        <th class="text-center">2</th>
                        <th class="text-center">3</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="row mt-6">
        <!-- Monthly Campaign State -->
        <div class="col-md-6 col-xxl-4 mb-6">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-1">Top 10 Diagnosa</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
                            id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Emails</h6>
                                <div class="d-flex">
                                    <p class="mb-0">12,346</p>
                                    <p class="ms-4 text-success mb-0">0.3%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Opened</h6>
                                <div class="d-flex">
                                    <p class="mb-0">8,734</p>
                                    <p class="ms-4 text-success mb-0">2.1%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Clicked</h6>
                                <div class="d-flex">
                                    <p class="mb-0">967</p>
                                    <p class="ms-4 text-danger mb-0">1.4%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Subscribe</h6>
                                <div class="d-flex">
                                    <p class="mb-0">345</p>
                                    <p class="ms-4 text-success mb-0">8.5%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-secondary rounded p-1_5"><i class="ti ti-alert-triangle ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Complaints</h6>
                                <div class="d-flex">
                                    <p class="mb-0">10</p>
                                    <p class="ms-4 text-danger mb-0">1.5%</p>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Unsubscribe</h6>
                                <div class="d-flex">
                                    <p class="mb-0">86</p>
                                    <p class="ms-4 text-success mb-0">0.8%</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Monthly Campaign State -->
        <!-- Monthly Campaign State -->
        <div class="col-md-6 col-xxl-4 mb-6">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-1">Laporan Pemeriksaan Laboratorium</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
                            id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Emails</h6>
                                <div class="d-flex">
                                    <p class="mb-0">12,346</p>
                                    <p class="ms-4 text-success mb-0">0.3%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Opened</h6>
                                <div class="d-flex">
                                    <p class="mb-0">8,734</p>
                                    <p class="ms-4 text-success mb-0">2.1%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Clicked</h6>
                                <div class="d-flex">
                                    <p class="mb-0">967</p>
                                    <p class="ms-4 text-danger mb-0">1.4%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Subscribe</h6>
                                <div class="d-flex">
                                    <p class="mb-0">345</p>
                                    <p class="ms-4 text-success mb-0">8.5%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-secondary rounded p-1_5"><i class="ti ti-alert-triangle ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Complaints</h6>
                                <div class="d-flex">
                                    <p class="mb-0">10</p>
                                    <p class="ms-4 text-danger mb-0">1.5%</p>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Unsubscribe</h6>
                                <div class="d-flex">
                                    <p class="mb-0">86</p>
                                    <p class="ms-4 text-success mb-0">0.8%</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Monthly Campaign State -->
        <!-- Monthly Campaign State -->
        <div class="col-md-6 col-xxl-4 mb-6">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-1">Laporan Kinerja Petugas MCU</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
                            id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Emails</h6>
                                <div class="d-flex">
                                    <p class="mb-0">12,346</p>
                                    <p class="ms-4 text-success mb-0">0.3%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Opened</h6>
                                <div class="d-flex">
                                    <p class="mb-0">8,734</p>
                                    <p class="ms-4 text-success mb-0">2.1%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Clicked</h6>
                                <div class="d-flex">
                                    <p class="mb-0">967</p>
                                    <p class="ms-4 text-danger mb-0">1.4%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Subscribe</h6>
                                <div class="d-flex">
                                    <p class="mb-0">345</p>
                                    <p class="ms-4 text-success mb-0">8.5%</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-secondary rounded p-1_5"><i class="ti ti-alert-triangle ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Complaints</h6>
                                <div class="d-flex">
                                    <p class="mb-0">10</p>
                                    <p class="ms-4 text-danger mb-0">1.5%</p>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <h6 class="mb-0 ms-4">Unsubscribe</h6>
                                <div class="d-flex">
                                    <p class="mb-0">86</p>
                                    <p class="ms-4 text-success mb-0">0.8%</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Monthly Campaign State -->
    </div>

@endsection
