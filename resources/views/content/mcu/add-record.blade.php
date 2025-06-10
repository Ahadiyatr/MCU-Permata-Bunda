@extends('layouts/layoutMaster')

@section('title', 'Record')

<!-- Vendor Styles -->
@section('vendor-style')
    @vite(['resources/assets/vendor/libs/bs-stepper/bs-stepper.scss', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss', 'resources/assets/vendor/libs/select2/select2.scss', 'resources/assets/vendor/libs/@form-validation/form-validation.scss', 'resources/assets/vendor/libs/dropzone/dropzone.scss', 'resources/assets/vendor/libs/quill/typography.scss', 'resources/assets/vendor/libs/quill/katex.scss', 'resources/assets/vendor/libs/quill/editor.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/bs-stepper/bs-stepper.js', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js', 'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js', 'resources/assets/vendor/libs/dropzone/dropzone.js', 'resources/assets/vendor/libs/quill/katex.js', 'resources/assets/vendor/libs/quill/quill.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
    @vite(['resources/assets/js/form-wizard-numbered.js', 'resources/assets/js/form-wizard-validation.js', 'resources/assets/js/forms-file-upload.js', 'resources/assets/js/forms-editors.js'])
@endsection

@section('content')
    <div class="row align-items-center">
        <div class="col-auto">
            <h4 class="content-header-title float-left pr-1 mb-0">Add Record</h4>
        </div>
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Medical Record</a></li>
                    <li class="breadcrumb-item active">Form Add Record</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Default -->
    <div class="row">

        <!-- Default Wizard -->
        <div class="col-12 mb-6">
            <div class="bs-stepper wizard-numbered mt-2">
                <div class="bs-stepper-header">
                    <div class="step" data-target="#account-details">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Assesment</span>
                                <span class="bs-stepper-subtitle">Perawat</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#personal-info">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Pemeriksaan Fisik</span>
                                <span class="bs-stepper-subtitle">Dokter</span>
                            </span>

                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">3</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Radiologi</span>
                                <span class="bs-stepper-subtitle">Radiografer</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#form-lab">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">4</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Laboratorium</span>
                                <span class="bs-stepper-subtitle">Analis</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#form-audiometri">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">5</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Audiometri</span>
                                <span class="bs-stepper-subtitle">Analis</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#form-spirometry">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">6</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Spirometri</span>
                                <span class="bs-stepper-subtitle">Analis</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#form-ekg">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">7</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">EKG</span>
                                <span class="bs-stepper-subtitle">Analis</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form onSubmit="return false">
                        <!-- Account Details -->
                        <div id="account-details" class="content">
                            <div class="content-header mb-4">
                                {{-- <h6 class="mb-0">Account Details</h6> --}}
                                {{-- <small>Enter Your Account Details.</small> --}}
                            </div>
                            {{-- Wizard 1 --}}
                            <div class="row g-6">
                                <div class="row g-3 mb-4">
                                    <h6 class="fw-bold mb-2">1. RIWAYAT PENYAKIT DAHULU</h6>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Sakit Gigi</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Demam</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Sakit Kepala</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Maag</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    {{--  --}}
                                    <h6 class="fw-bold mb-2">2. RIWAYAT GAYA HIDUP</h6>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Merokok</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Minuman Beralkohol</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Mengonsumsi Narkoba</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Olahraga</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    {{--  --}}
                                    <h6 class="fw-bold mb-2">3. RIWAYAT KONSUMSI OBAT TERATUR</h6>
                                    <div class="col-md-4 mb-4">
                                        <label for="bloodStatus" class="form-label">Obat Anti Diabetes</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="bloodStatus" class="form-label">Obat Anti Hipertensi</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="bloodStatus" class="form-label">Obat Anti Kolestrol</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    {{--  --}}
                                    <h5></h5>
                                    <h6 class="fw-bold mb-2">4. RIWAYAT VAKSINASI</h6>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Hepatitis A</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Hepatitis B</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Polio</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">BCG</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Campak</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">DPT</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Tetanus (TT)</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Covid-19</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>

                                    <h6 class="fw-bold mb-2">5. RIWAYAT BAHAYA LINGKUNGAN KERJA</h6>
                                    <div>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <h5></h5>
                                    <h6 class="fw-bold mb-2">6. RIWAYAT PENYAKIT KELUARGA</h6>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Jantung</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Darah Tinggi</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Diabetes Melitus</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Stroke</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Paru menahun/Asma/TBC</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Kanker/Tumor</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>

                                    {{--  --}}
                                    <h6 class="fw-bold mb-2">7. RIWAYAT ALERGI</h6>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Obat</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Makanan</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Tanaman</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Debu</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Lain-lain</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>

                                    {{--  --}}
                                    <h6 class="fw-bold mb-2">8. PEMERIKSAAN FISIK</h6>
                                    <div class="col-md-2">
                                        <label for="bloodPressure1" class="form-label">Tekanan Darah</label>
                                        <input type="text" class="form-control" id="bloodPressure1"
                                            placeholder="Contoh: 120/80" aria-describedby="bloodPressureHelp" />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bloodPressure2" class="form-label">Tekanan Darah</label>
                                        <input type="text" class="form-control" id="bloodPressure2"
                                            placeholder="Contoh: 120/80" aria-describedby="bloodPressureHelp" />
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="bloodStatus" class="form-label">Status Tekanan Darah</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">Normal</option>
                                            <option value="2">Abnormal</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bloodPressure1" class="form-label">Denyut Nadi</label>
                                        <input type="text" class="form-control" id="bloodPressure1"
                                            placeholder="x/menit" aria-describedby="bloodPressureHelp" />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bloodPressure1" class="form-label">Laju Pernafasan</label>
                                        <input type="text" class="form-control" id="bloodPressure1"
                                            placeholder="x/menit" aria-describedby="bloodPressureHelp" />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bloodPressure1" class="form-label">Tinggi Badan</label>
                                        <input type="text" class="form-control" id="bloodPressure1" placeholder="Cm"
                                            aria-describedby="bloodPressureHelp" />
                                    </div>
                                    <div class="col-md-2">
                                        <label for="bloodPressure2" class="form-label">Berat Badan</label>
                                        <input type="text" class="form-control" id="bloodPressure2" placeholder="Kg"
                                            aria-describedby="bloodPressureHelp" />
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <label for="exampleFormControlReadOnlyInput1" class="form-label">BMI</label>
                                        <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                            placeholder="Readonly here..." readonly />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bloodPressure1" class="form-label">Ritme Denyut Nadi</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">Normal</option>
                                            <option value="2">Abnormal</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="defaultFormControlInput" class="form-label">
                                            Pola Nafas</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="defaultFormControlInput" class="form-label">Suhu Badan</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="ºC" aria-describedby="defaultFormControlHelp" />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="defaultFormControlInput" class="form-label">SP02</label>
                                        <input type="text" class="form-control" id="defaultFormControlInput"
                                            placeholder="%" aria-describedby="defaultFormControlHelp" />
                                    </div>

                                    {{--  --}}
                                    <h6 class="fw-bold mb-2">9. PEMERIKSAAN MATA</h6>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Kornea</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Konjungtiva</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Strabismus</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Lapang Pandang</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Tekanan Bola Mata</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Lapang Pandang</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Reflex Pupil</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">YA</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="bloodStatus" class="form-label">Buta Warna</label>
                                        <select id="bloodStatus" class="form-select">
                                            <option>Pilih status</option>
                                            <option value="1">Normal</option>
                                            <option value="2">Total</option>
                                            <option value="3">Parsial</option>
                                        </select>
                                    </div>

                                    {{-- 10. Pemeriksaan Visus --}}
                                    <h6 class="fw-bold mb-2">10. PEMERIKSAAN VISUS</h6>
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
                                    <div class="col-12 d-flex justify-content-between">
                                        <button class="btn btn-label-secondary btn-prev" disabled> <i
                                                class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-primary btn-next"> <span
                                                class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                                class="ti ti-arrow-right ti-xs"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Personal Info -->
                        {{-- Wizard 2 --}}
                        <div id="personal-info" class="content">
                            <div class="content-header mb-4">
                                {{-- <h6 class="mb-0">Personal Info</h6> --}}
                                {{-- <small>Enter Your Personal Info.</small> --}}
                            </div>
                            <div class="row g-6">
                                <h6 class="fw-bold mb-2">PEMERIKSAAN KEADAAN UMUM</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Kesadaran umum</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Sikap dan Tingkah Laku</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Mata Secara Umum</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Kontak Psikis/Perhatian</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>

                                {{-- Pemeriksaan THT --}}
                                <h6 class="fw-bold mb-2">PEMERIKSAAN THT</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Meatus Acusticus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Membran Timpani</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Kesan Pendengaran</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Hidung</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Tenggorokan</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Mukosa Rongga Mulut</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Kelenjar Limfe</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Kelenjar Leher</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                {{-- Gigi Dan Mulut --}}
                                <div class="table-responsive">
                                    <h6 class="fw-bold mb-2">PEMERIKSAAN GIGI DAN MULUT</h6>
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

                                {{-- Pemeriksaan Leher --}}
                                <h6 class="fw-bold mb-2">PEMERIKSAAN LEHER</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Gerakan Leher</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Kelenjar Thyroid</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Pulsasi Carotis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Tekanan Vena Jugularis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Trachea</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>

                                {{-- Pemeriksaan THORAX --}}
                                <h6 class="fw-bold mb-2">PEMERIKSAAN THORAX</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Paru-Paru</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Jantung</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Apex Berat</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Bising Jantung</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Murmur</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Buah Dada</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Pergerakan Paru-Paru</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Suara/Bising Paru</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>

                                {{-- Pemeriksaan Abdomen --}}
                                <h6 class="fw-bold mb-2">PEMERIKSAAN ABDOMEN</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Auskultasi</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Hati</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Limpa</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Perut</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Bising Usus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Hernia</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Dubur</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Saluran Kencing</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>

                                {{-- Pemeriksaan EXTREMITAS --}}
                                <h6 class="fw-bold mb-2">PEMERIKSAAN EXTREMITAS</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Anggota Extermitas Atas</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">ROM Extermitas</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Anggota Extermitas Bawah</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">ROM Extermitas Bawah</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>

                                {{-- Pemeriksaan NEUROLOGIS --}}
                                <h6 class="fw-bold mb-2">PEMERIKSAAN NEUROLOGIS</h6>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Reflex Pathologis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Tremor</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Tonus</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Paresis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <label for="bloodStatus" class="form-label">Paralysis</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                {{-- Keseimbangan dan Kordinasi --}}
                                <h6 class="fw-bold mb-2">KESEIMBANGAN DAN KORDINASI</h6>
                                <div class="col mb-4">
                                    <label for="bloodStatus" class="form-label">Tes Romberg</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>

                                <h5>TANDA KHUSUS</h5>
                                <div class="col mb-4">
                                    <label for="bloodStatus" class="form-label">Tes Tine1</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col mb-4">
                                    <label for="bloodStatus" class="form-label">Tes Phalen</label>
                                    <select id="bloodStatus" class="form-select">
                                        <option>Pilih status</option>
                                        <option value="1">Normal</option>
                                        <option value="2">Abnormal</option>
                                    </select>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev"> <i
                                            class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                            class="ti ti-arrow-right ti-xs"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Wizard 3 -->
                        {{-- Radiologi --}}
                        <div id="social-links" class="content">
                            <div class="row g-6">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Hasil Radiologi</label>
                                    <div class="dropzone needsclick" id="dropzone-thorax">
                                        <div class="dz-message needsclick">
                                            <h5>Drop file here atau klik untuk upload</h5>
                                            <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                        </div>
                                        <div class="fallback">
                                            <input name="thorax_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="editor-container">
                                        <label class="form-label">Saran Radiologi</label>
                                        <div class="editor-label">Quill Rich Text Editor - Radiologi</div>
                                        <div id="saran-radiologi" class="quill-editor">
                                            <p>Hasil pemeriksaan radiologi menunjukkan kondisi normal. Tidak ditemukan
                                                kelainan struktural yang signifikan pada area yang diperiksa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: Normal" aria-describedby="bloodPressureHelp" />
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev"> <i
                                            class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                            class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- 4. Laboratorium --}}
                        <div id="form-lab" class="content">
                            <div class="row g-6">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Hasil Laboratorium</label>
                                    <div class="dropzone needsclick" id="dropzone-lab">
                                        <div class="dz-message needsclick">
                                            <h5>Drop file here atau klik untuk upload</h5>
                                            <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                        </div>
                                        <div class="fallback">
                                            <input name="lab_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="editor-container">
                                        <label class="form-label">Saran Laboratorium</label>
                                        <div class="editor-label">Quill Rich Text Editor - Lab</div>
                                        <div id="saran-lab" class="quill-editor">
                                            <p>Hasil pemeriksaan laboratorium dalam batas normal. Disarankan untuk melakukan
                                                kontrol rutin sesuai jadwal yang telah ditentukan.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: Normal" aria-describedby="bloodPressureHelp" />
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev"> <i
                                            class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                            class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- 5. Audiometry --}}
                        <div id="form-audiometri" class="content">
                            <div class="row g-6">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Hasil Audiometri</label>
                                    <div class="dropzone needsclick" id="dropzone-audiometri">
                                        <div class="dz-message needsclick">
                                            <h5>Drop file here atau klik untuk upload</h5>
                                            <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                        </div>
                                        <div class="fallback">
                                            <input name="audiometri_file" type="file"
                                                accept=".pdf,.jpg,.jpeg,.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="editor-container">
                                        <label class="form-label">Saran Audiometry</label>
                                        <div class="editor-label">Quill Rich Text Editor - Audiometry</div>
                                        <div id="saran-audiometry" class="quill-editor">
                                            <p>Fungsi pendengaran dalam kondisi baik. Tidak ditemukan gangguan pendengaran
                                                yang memerlukan tindakan khusus.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: Normal" aria-describedby="bloodPressureHelp" />
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev"> <i
                                            class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                            class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- 6. Spirometry --}}
                        <div id="form-spirometry" class="content">
                            <div class="row g-6">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Hasil Spirometri</label>
                                    <div class="dropzone needsclick" id="dropzone-lab">
                                        <div class="dz-message needsclick">
                                            <h5>Drop file here atau klik untuk upload</h5>
                                            <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                        </div>
                                        <div class="fallback">
                                            <input name="lab_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="editor-container">
                                        <label class="form-label">Saran Audiometry</label>
                                        <div class="editor-label">Quill Rich Text Editor - Audiometry</div>
                                        <div id="saran-spirometry" class="quill-editor">
                                            <p>Fungsi pendengaran dalam kondisi baik. Tidak ditemukan gangguan pendengaran
                                                yang memerlukan tindakan khusus.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: Normal" aria-describedby="bloodPressureHelp" />
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev"> <i
                                            class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                            class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- 6. EKG --}}
                        <div id="form-ekg" class="content">
                            <div class="row g-6">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">Hasil EKG</label>
                                    <div class="dropzone needsclick" id="dropzone-ekg">
                                        <div class="dz-message needsclick">
                                            <h5>Drop file here atau klik untuk upload</h5>
                                            <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                        </div>
                                        <div class="fallback">
                                            <input name="ekg_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="editor-container">
                                        <label class="form-label">Saran EKG</label>
                                        <div class="editor-label">Quill Rich Text Editor - Audiometry</div>
                                        <div id="saran-ekg" class="quill-editor">
                                            <p>Fungsi pendengaran dalam kondisi baik. Tidak ditemukan gangguan pendengaran
                                                yang memerlukan tindakan khusus.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                    <input type="text" class="form-control" id="bloodPressure1"
                                        placeholder="Contoh: Normal" aria-describedby="bloodPressureHelp" />
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev"> <i
                                            class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next"> <span
                                            class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                                            class="ti ti-arrow-right ti-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Default Wizard -->

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Inisialisasi semua dropzone
                const dropzones = {
                    'lab': 'Hasil Laboratorium',
                    'spirometri': 'Hasil Spirometri',
                    'audiometri': 'Hasil Audiometri',
                    'ekg': 'Hasil EKG',
                    'thorax': 'Hasil Radiologi Thorax'
                };

                Object.keys(dropzones).forEach(id => {
                    new Dropzone(`#dropzone-${id}`, {
                        url: "/upload",
                        paramName: "file",
                        maxFilesize: 5, // MB
                        acceptedFiles: ".pdf,.jpg,.jpeg,.png",
                        addRemoveLinks: true,
                        maxFiles: 1,
                        dictDefaultMessage: `<i class="ti ti-upload fs-4"></i>
                               <h5>Drop file ${dropzones[id]} here atau klik untuk upload</h5>
                               <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>`,
                        dictRemoveFile: "Hapus file",
                        dictFileTooBig: "File terlalu besar (%sMB). Maksimal: %sMB.",
                        dictInvalidFileType: "Format file tidak didukung",
                        dictMaxFilesExceeded: "Anda hanya dapat mengupload 1 file"
                    });
                });

                // Handle form submission
                document.getElementById('medicalResultsForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Tambahkan logika submit form disini
                    alert('Hasil pemeriksaan berhasil diupload!');
                });
            });

            // Editor Script

            class MultipleQuillManager {
                constructor() {
                    this.editors = {};
                    this.toolbarOptions = [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{
                            'header': 1
                        }, {
                            'header': 2
                        }],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        [{
                            'script': 'sub'
                        }, {
                            'script': 'super'
                        }],
                        [{
                            'indent': '-1'
                        }, {
                            'indent': '+1'
                        }],
                        [{
                            'size': ['small', false, 'large', 'huge']
                        }],
                        [{
                            'color': []
                        }, {
                            'background': []
                        }],
                        [{
                            'align': []
                        }],
                        ['clean']
                    ];
                    this.init();
                }

                init() {
                    // Cari semua element dengan class 'quill-editor'
                    const editorElements = document.querySelectorAll('.quill-editor');

                    editorElements.forEach((element) => {
                        const editorId = element.id;
                        if (editorId && !this.editors[editorId]) {
                            try {
                                this.editors[editorId] = new Quill(`#${editorId}`, {
                                    modules: {
                                        toolbar: this.toolbarOptions
                                    },
                                    theme: 'snow',
                                    placeholder: `Masukkan ${editorId.replace('-', ' ')}...`
                                });

                                console.log(`✅ Editor ${editorId} berhasil diinisialisasi`);
                            } catch (error) {
                                console.error(`❌ Error inisialisasi editor ${editorId}:`, error);
                            }
                        }
                    });

                    console.log(`🎉 Total ${Object.keys(this.editors).length} editor berhasil diinisialisasi`);
                }

                getEditor(id) {
                    return this.editors[id] || null;
                }

                getAllContent() {
                    const content = {};
                    Object.keys(this.editors).forEach(editorId => {
                        if (this.editors[editorId]) {
                            content[editorId] = {
                                html: this.editors[editorId].root.innerHTML,
                                text: this.editors[editorId].getText().trim(),
                                delta: this.editors[editorId].getContents()
                            };
                        }
                    });
                    return content;
                }

                setContent(id, content) {
                    if (this.editors[id]) {
                        if (typeof content === 'string') {
                            this.editors[id].root.innerHTML = content;
                        } else {
                            this.editors[id].setContents(content);
                        }
                    }
                }

                clearEditor(id) {
                    if (this.editors[id]) {
                        this.editors[id].setText('');
                    }
                }

                clearAllEditors() {
                    Object.keys(this.editors).forEach(id => {
                        this.clearEditor(id);
                    });
                }

                validateContent() {
                    const emptyEditors = [];
                    Object.keys(this.editors).forEach(id => {
                        if (this.editors[id] && this.editors[id].getText().trim() === '') {
                            emptyEditors.push(id);
                        }
                    });
                    return emptyEditors;
                }
            }

            // Inisialisasi manager ketika DOM sudah ready
            let quillManager;

            document.addEventListener('DOMContentLoaded', function() {
                // Delay sedikit untuk memastikan semua element sudah ter-render
                setTimeout(() => {
                    quillManager = new MultipleQuillManager();

                    // Set ke global scope untuk akses dari console
                    window.quillManager = quillManager;
                }, 100);
            });

            // Fungsi untuk clear semua editor
            function clearAllEditors() {
                if (quillManager) {
                    quillManager.clearAllEditors();
                    document.getElementById('contentPreview').style.display = 'none';
                    console.log('🧹 Semua editor telah dibersihkan');
                }
            }

            // Fungsi untuk menampilkan semua content
            function showAllContent() {
                if (quillManager) {
                    const allContent = quillManager.getAllContent();
                    let previewHtml = '';

                    Object.keys(allContent).forEach(editorId => {
                        const content = allContent[editorId];
                        previewHtml += `
                        <div class="mb-3">
                            <strong>${editorId.replace('-', ' ').toUpperCase()}:</strong>
                            <div class="border p-2 mt-1 rounded">
                                ${content.html || '<em>Kosong</em>'}
                            </div>
                        </div>
                    `;
                    });

                    document.getElementById('previewText').innerHTML = previewHtml;
                    document.getElementById('contentPreview').style.display = 'block';

                    console.log('📋 Content semua editor:', allContent);
                }
            }

            // Handle form submission
            document.getElementById('multipleEditorsForm').addEventListener('submit', function(e) {
                e.preventDefault();

                if (!quillManager) {
                    alert('❌ Editor belum siap!');
                    return;
                }

                // Validasi content
                const emptyEditors = quillManager.validateContent();
                if (emptyEditors.length > 0) {
                    alert(`⚠️ Editor berikut masih kosong: ${emptyEditors.join(', ')}`);
                    return;
                }

                // Ambil semua content
                const formData = quillManager.getAllContent();

                // Simulasi pengiriman data
                console.log('📤 Data yang akan dikirim:', formData);

                // Tampilkan alert sukses
                alert('✅ Data berhasil disimpan!\nCek console untuk melihat data.');

                // Optional: Kirim ke server
                // submitToServer(formData);
            });

            // Fungsi untuk mengirim data ke server (contoh)
            function submitToServer(data) {
                // Contoh implementasi AJAX
                /*
                fetch('/api/save-editor-content', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    console.log('✅ Data berhasil disimpan ke server:', result);
                })
                .catch(error => {
                    console.error('❌ Error:', error);
                });
                */
            }

            // Fungsi utility untuk debugging
            window.debugQuill = function() {
                console.log('🔍 Debug Info:');
                console.log('- Quill Manager:', quillManager);
                console.log('- Available Editors:', quillManager ? Object.keys(quillManager.editors) : 'Not initialized');
                console.log('- All Content:', quillManager ? quillManager.getAllContent() : 'Not available');
            };
        </script>
    @endsection
