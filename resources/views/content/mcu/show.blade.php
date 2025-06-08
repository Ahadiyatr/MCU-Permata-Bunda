@extends('layouts/layoutMaster')

@section('title', 'Data Pribadi')

@section('vendor-style')
    @vite('resources/assets/vendor/libs/select2/select2.scss')
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/cleavejs/cleave.js', 'resources/assets/vendor/libs/cleavejs/cleave-phone.js'])
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
                        <a class="nav-link active" href="javascript:void(0);">
                            <i class="ti ti-building-store ti-sm me-1_5"></i>
                            <span class="align-middle">Data Pribadi</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/medical-records/details-riwayat') }}">
                            <i class="ti ti-credit-card ti-sm me-1_5"></i>
                            <span class="align-middle">Riwayat</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/checkout') }}">
                            <i class="ti ti-shopping-cart ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Fisik</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/shipping') }}">
                            <i class="ti ti-discount-2 ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Laboratorium</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/locations') }}">
                            <i class="ti ti-map-pin ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Radiologi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/app/ecommerce/settings/notifications') }}">
                            <i class="ti ti-bell-ringing ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Audiometri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-bell-ringing ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan Spirometri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="ti ti-bell-ringing ti-sm me-1_5"></i>
                            <span class="align-middle">Pemeriksaan EKG</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Navigation -->

        <!-- Options -->
        <div class="col-12 col-lg-9 pt-6 pt-lg-0">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body pb-50">
                            <h4>No. RMK</h4>

                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body pb-50">
                            <h4>No. Registrasi</h4>

                        </div>

                    </div>

                </div>
            </div>

            <div class="tab-content p-0">
                <!-- Store Details Tab -->
                <div class="tab-pane fade show active" id="store_details" role="tabpanel">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title m-0">Profile</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 mb-4">
                                <div class="col-md-6 mb-2">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div>
                                        <label for="defaultFormControlInput" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <small class="form-label">Jenis Kelamin</small><br>
                                    <div class="form-check form-check-inline mt-4">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1" />
                                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="basic-default-fullname">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" />
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="flatpickr-date" class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD"
                                        id="flatpickr-date" />
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="basic-default-message">Alamat</label>
                                    <textarea id="basic-default-message" class="form-control" placeholder="Masukkan alamat tempat tinggal anda saat ini"></textarea>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="basic-default-phone">Nomor Telepon</label>
                                    <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                        placeholder="658 799 8941" />
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="basic-default-phone">Nomor Telepon Kerabat</label>
                                    <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                        placeholder="658 799 8941" />
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="col-sm-auto">
                                        <div role="radiogroup" tabindex="-1"
                                            class="btn-block btn-group-toggle btn-group bv-no-focus-ring"
                                            id="__BVID__1228">
                                            <label class="btn btn-outline-primary">
                                                <input type="radio" class="" value="1"
                                                    id="__BVID__1228_BV_option_0"
                                                    name="__BVID__1228"><span>Ya</span></label>
                                            <label class="btn btn-outline-primary active">
                                                <input type="radio"class="" value="0"
                                                    id="__BVID__1228_BV_option_1" name="__BVID__1228"><span>Tidak</span>
                                            </label>
                                            <label class="btn btn-outline-primary">
                                                <input type="radio" class="" value="9"
                                                    id="__BVID__1228_BV_option_2" name="__BVID__1228"><span>Tidak
                                                    tahu</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-4">
                        <button type="reset" class="btn btn-label-secondary">Discard</button>
                        <a class="btn btn-primary" href="{{ url('/app/ecommerce/settings/payments') }}">Save Changes</a>
                    </div>

                </div>
            </div>

        </div>
        <!-- /Options-->
    </div>

@endsection
