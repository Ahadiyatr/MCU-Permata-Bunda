@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Fisik')

@section('page-style')
    @vite('resources/assets/vendor/scss/pages/app-ecommerce.scss')
@endsection

@section('page-script')
    @vite('resources/assets/js/app-ecommerce-settings.js')
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <div class="form-row align-items-center">
                <div class="col-md-auto">
                    <label for="file-input" class="mb-0 cursor-pointer"></label>
                    <div class="b-overlay-wrap position-relative">
                        <span class="b-avatar avatar-border-2 badge-seconadry rounded-circle border-succes">

                        </span>

                    </div>

                </div>

            </div>
            <h2>Muhammad (20th)</h2>
        </div>
    </div>
    <div class="row g-6">

        <!-- Navigation -->
        <div class="col-12 col-lg-3">
            <div class="d-flex justify-content-between flex-column mb-4 mb-md-0">
                <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/medical-records/details') }}">
                            <i class="ti ti-id ti-sm me-1_5"></i>
                            <span class="align-middle">Data Pribadi</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/medical-records/details-riwayat') }}">
                            <i class="ti ti-report-medical ti-sm me-1_5"></i>
                            <span class="align-middle">Riwayat</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link active" href="javascript:void(0);">
                            <i class="ti ti-report-medical ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Fisik</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/shipping') }}">
                            <i class="ti ti-heart-rate-monitor ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Laboratorium</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/locations') }}">
                            <i class="ti ti-heart-rate-monitor ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Radiologi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/notifications') }}">
                            <i class="ti ti-heart-rate-monitor ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Audiometri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-heart-rate-monitor ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Spirometri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-heart-rate-monitor ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan EKG</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Navigation -->
        <!-- Options -->
        <div class="col-12 col-lg-9 pt-6 pt-lg-0">
            <div class="tab-content p-0">

                <div class="tab-pane fade show active" id="payments" role="tabpanel">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Fisik</h5>
                        </div>
                        <div class="card-body">

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label for="bloodPressure1" class="form-label">Tekanan Darah</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: 120/80" aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-md-6">
                                    <label for="bloodPressure2" class="form-label">Tekanan Darah</label>
                                    <input type="text" class="form-control" id="bloodPressure2"
                                        placeholder="Contoh: 120/80" aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Status Tekanan Darah</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodPressure1" class="form-label">Denyut Nadi</label>
                                    <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                        aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodPressure1" class="form-label">Laju Pernafasan</label>
                                    <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                        aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodPressure1" class="form-label">Tinggi Badan</label>
                                    <input type="text" class="form-control" id="bloodPressure1" placeholder="Cm"
                                        aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodPressure2" class="form-label">Berat Badan</label>
                                    <input type="text" class="form-control" id="bloodPressure2" placeholder="Kg"
                                        aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="exampleFormControlReadOnlyInput1" class="form-label">BMI</label>
                                    <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                        placeholder="Readonly here..." readonly />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodPressure1" class="form-label">Ritme Denyut Nadi</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="defaultFormControlInput" class="form-label">
                                        Pola Nafas</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput"
                                        aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="defaultFormControlInput" class="form-label">Suhu Badan</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput"
                                        placeholder="ºC" aria-describedby="defaultFormControlHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="defaultFormControlInput" class="form-label">SP02</label>
                                    <input type="text" class="form-control" id="defaultFormControlInput"
                                        placeholder="%" aria-describedby="defaultFormControlHelp" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Mata</h5>
                        </div>
                        <div class="card-body">

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label for="bloodStatus" class="form-label">Kornea</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">YA</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="bloodStatus" class="form-label">Konjungtiva</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">YA</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="bloodStatus" class="form-label">Strabismus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">YA</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Reflex Pupil</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">YA</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Lapang Pandang</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">YA</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tekanan Bola Mata</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">YA</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Visus</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label for="bloodPressure1" class="form-label">Tanpa Kacamata</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: OD : 6/6" aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-md-6">
                                    <label for="bloodPressure1" class="form-label">Dengan Kacamata</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: DS : 6/6" aria-describedby="bloodPressureHelp" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Mengonsumsi Narkoba</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Olahraga</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Penglihatan Malam</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Penglihatan Karena Silau</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kedalaman Penglihatan</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Keadaan Umum</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kesadaran Umum</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Sikap dan Tingkah Laku</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Mata Secara Umum</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kontak Psikis/Perhatian</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                    {{-- THT --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan THT</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Meatus Acusticus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Membran Timpani</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kesan Pendengaran</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Hidung</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tenggorokan</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Mukosa Rongga Mulut</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kelenjar Limfe</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kelenjar Leher</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Gigi</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm text-center mb-">
                                        <thead>
                                            <tr class="bg-light-primary">
                                                <th rowspan="2" class="align-middle py-1">Posisi</th>
                                                <th colspan="8" class="py-1">Kiri</th>
                                                <th colspan="8" class="py-1">Kanan</th>
                                            </tr>
                                            <tr class="bg-light-primary">
                                                <th class="py-1">8</th>
                                                <th class="py-1">7</th>
                                                <th class="py-1">6</th>
                                                <th class="py-1">5</th>
                                                <th class="py-1">4</th>
                                                <th class="py-1">3</th>
                                                <th class="py-1">2</th>
                                                <th class="py-1">1</th>
                                                <th class="py-1">1</th>
                                                <th class="py-1">2</th>
                                                <th class="py-1">3</th>
                                                <th class="py-1">4</th>
                                                <th class="py-1">5</th>
                                                <th class="py-1">6</th>
                                                <th class="py-1">7</th>
                                                <th class="py-1">8</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle py-1 bg-light-secondary">Atas</td>
                                                <!-- Gigi Atas Kiri -->
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>

                                                <!-- Gigi Atas Kanan -->
                                                <td class="p-0"><select name="atas_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="atas_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <!-- [Ulangi untuk gigi 2-8 kanan] -->
                                            </tr>
                                            <tr>
                                                <td class="align-middle py-1 bg-light-secondary">Bawah</td>
                                                <!-- Gigi Bawah Kiri -->
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_8kiri"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <!-- [Ulangi untuk gigi 7-1 kiri] -->
                                                <!-- Gigi Bawah Kanan -->
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <td class="p-0"><select name="bawah_1kanan"
                                                        class="form-control form-control-sm border-primary text-center px-0">
                                                        <option value="">-</option>
                                                        <option value="X" class="text-danger fw-bolder">X</option>
                                                        <option value="O" class="text-primary fw-bolder">O</option>
                                                        <option value="A" class="text-success fw-bolder">A</option>
                                                        <option value="C" class="text-warning fw-bolder">C</option>
                                                    </select>
                                                </td>
                                                <!-- [Ulangi untuk gigi 2-8 kanan] -->
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex flex-wrap justify-content-start gap-2 mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-dot bg-danger me-1"></div>
                                            <span>X = Berlubang</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-dot bg-primary me-1"></div>
                                            <span>O = Tanggal</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-dot bg-success me-1"></div>
                                            <span>A = Palsu</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="badge badge-dot bg-warning me-1"></div>
                                            <span>C = Tambalan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Pemeriksaan Leher --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Leher</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Gerakan Leher</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Kelenjar Thyroid</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Pulsasi Carotis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tekanan Vena Jugularis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Trachea</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Pemeriksaan Thorax --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Thorax</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Bentuk Dada</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Paru-Paru</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Jantung</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Apex Beat</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Bising Jantung</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Murmur</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Buah Dada</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Pergerakan Paru</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Suara/Bising Paru</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Pemeriksaan Abdomen --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Abdomen</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Auskultasi</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Hati</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Limpa</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Perut</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Bising Usus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Hernia</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Dubur</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Saluran Kencing</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Pemeriksaan Extremitas --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Pemeriksaan Extremitas</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Anggota Extremitas Atas</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">ROM Extremitas</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Anggota Extremitas Atas</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">ROM Extremitas Bawah</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Neurologis --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Neurologis</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Reflex Pathologis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Postif</option>
                                        <option value="2">Negatif</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tremor</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tonus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Paresis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Paralysis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Keseimbangan dan Kordinasi --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Keseimbangan dan Kordinasi</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-12">
                                    <label for="bloodStatus" class="form-label">Tes Romberg</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Positif</option>
                                        <option value="2">Negatif</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Tanda Khusus --}}
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Tanda Khusus</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tes Tine1</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Negatif</option>
                                        <option value="2">Positif</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="bloodStatus" class="form-label">Tes Phalen</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Negatif</option>
                                        <option value="2">Positif</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-4">
                        <button type="reset" class="btn btn-label-secondary">Discard</button>
                        <a class="btn btn-primary" href="{{ url('/app/ecommerce/settings/checkout') }}">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Options-->
    </div>

    <script>
        // gigi dan mulut
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', function() {
                // Reset semua kelas warna
                this.className = 'form-control form-control-sm border-primary text-center px-0';

                // Tambahkan kelas warna berdasarkan nilai
                if (this.value === 'X') this.classList.add('text-danger');
                if (this.value === 'O') this.classList.add('text-primary');
                if (this.value === 'A') this.classList.add('text-success');
                if (this.value === 'C') this.classList.add('text-warning');
            });
        });
    </script>
@endsection
