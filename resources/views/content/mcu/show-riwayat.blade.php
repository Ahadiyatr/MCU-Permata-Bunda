@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Riwayat')

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
                        <a class="nav-link active" href="javascript:void(0);">
                            <i class="ti ti-report-medical ti-sm me-1_5"></i>
                            <span class="align-middle">Riwayat</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/medical-records/details-fisik') }}">
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
                            <h5 class="card-title m-0">Riwayat Penyakit Dahulu</h5>
                        </div>
                        <div class="card-body">

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label class="form-label mb-1" for="business-name">Sakit Gigi</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-1" for="business-name">Demam</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Sakit Kepala</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Maag(Gastritis)</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Riwayat Gaya Hidup</h5>
                        </div>
                        <div class="card-body">

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label class="form-label mb-1" for="business-name">Merokok</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-1" for="business-name">Minum Minuman Beralkohol</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Mengonsumsi Narkoba</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Olahraga</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Riwayat Konsumsi Obat Teratur</h5>
                        </div>
                        <div class="card-body">

                            <div class="row g-6">
                                <div class="col-md-6">
                                    <label class="form-label mb-1" for="business-name">Obat Anti Diabtes</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label mb-1" for="business-name">Obat Anti Hipertensi</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Mengonsumsi Narkoba</label>
                                    <input type="text" id="business-name" class="form-control" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label mb-1" for="business-name">Olahraga</label>
                                    <input type="text" id="business-name" class="form-control" />
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

@endsection
