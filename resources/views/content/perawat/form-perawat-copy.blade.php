@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('page-script')
    @vite('resources/assets/js/form-basic-inputs.js')
@endsection

@section('content')
    <h4>Page Perawat</h4>
    <!-- Kolom Kiri -->
    <div class="col-md-6">
        <div class="p-4 h-100 border rounded">
            <h6 class="section-title mb-3">11. Kiri</h6>
            <!-- Konten kiri di sini -->
        </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="col-md-6">
        <div class="p-4 h-100 border rounded">
            <h6 class="section-title mb-3">11. Kanan</h6>
            <!-- Konten kanan di sini -->
        </div>
    </div>
    <div class="row g-6">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">I. KELUHAN KARYAWAN / PASIEN</h5>
                <div class="card-body">
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Keluhan Pasien</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <h5>II. TANDA TANDA VITAL</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="bloodPressure1" class="form-label">Tekanan Darah</label>
                            <input type="text" class="form-control" id="bloodPressure1" placeholder="Contoh: 120/80"
                                aria-describedby="bloodPressureHelp" />
                        </div>
                        <div class="col-md-4">
                            <label for="bloodPressure2" class="form-label">Tekanan Darah</label>
                            <input type="text" class="form-control" id="bloodPressure2" placeholder="Contoh: 120/80"
                                aria-describedby="bloodPressureHelp" />
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="bloodStatus" class="form-label">Status Tekanan Darah</label>
                            <select id="bloodStatus" class="form-select">
                                <option>Pilih status</option>
                                <option value="1">Normal</option>
                                <option value="2">Abnormal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="bloodPressure1" class="form-label">Nadi</label>
                            <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                aria-describedby="bloodPressureHelp" />
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="bloodStatus" class="form-label">Status Nadi</label>
                            <select id="bloodStatus" class="form-select">
                                <option>Pilih status</option>
                                <option value="1">Normal</option>
                                <option value="2">Abnormal</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="bloodPressure1" class="form-label">Laju Pernafasan</label>
                            <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                aria-describedby="bloodPressureHelp" />
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="bloodStatus" class="form-label">Status Nadi</label>
                            <select id="bloodStatus" class="form-select">
                                <option>Pilih status</option>
                                <option value="1">Normal</option>
                                <option value="2">Abnormal</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="defaultFormControlInput" class="form-label">Suhu Badan</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="ºC"
                            aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="mb-4">
                        <label for="defaultFormControlInput" class="form-label">SP02</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="%"
                            aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="mb-4">
                        <label for="defaultFormControlInput" class="form-label">Irama Nadi</label>
                        <input type="text" class="form-control" id="defaultFormControlInput"
                            aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="mb-4">
                        <label for="defaultFormControlInput" class="form-label">
                            Pola Nafas</label>
                        <input type="text" class="form-control" id="defaultFormControlInput"
                            aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="bloodPressure1" class="form-label">Tinggi Badan</label>
                            <input type="text" class="form-control" id="bloodPressure1" placeholder="Cm"
                                aria-describedby="bloodPressureHelp" />
                        </div>
                        <div class="col-md-4">
                            <label for="bloodPressure2" class="form-label">Berat Badan</label>
                            <input type="text" class="form-control" id="bloodPressure2" placeholder="Kg"
                                aria-describedby="bloodPressureHelp" />
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="exampleFormControlReadOnlyInput1" class="form-label">BMI</label>
                            <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1"
                                placeholder="Readonly here..." readonly />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">III. PEMERIKSAAN FISIK</h5>
                <div class="card-body">
                    <div class="mb-4">
                        <label for="defaultSelect" class="form-label">Kesadaran</label>
                        <select id="defaultSelect" class="form-select">
                            <option>Pilih Kesadaran</option>
                            <option value="1">Compos Mentis</option>
                            <option value="2">Apatis</option>
                            <option value="3">Somnolen</option>
                            <option value="4">Delirium</option>
                            <option value="5">Stupor</option>
                            <option value="6">Coma</option>
                        </select>
                    </div>
                    <div class="row align-items-center">
                        <!-- Kolom Radio Button -->
                        <div class="col-md-6 p-3">
                            <small class="text-light fw-medium d-block">Kepala</small>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1" />
                                <label class="form-check-label" for="inlineRadio1">Normal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                        </div>
                        <!-- Kolom Input Text -->
                        <div class="col-md-6 p-3">
                            <label for="abnormalCondition" class="form-label">Jika Tidak Normal</label>
                            <input type="text" class="form-control" id="abnormalCondition"
                                placeholder="Deskripsi kondisi..." aria-describedby="abnormalConditionHelp" />
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <!-- Kolom Radio Button -->
                        <div class="col-md-6 p-3">
                            <small class="text-light fw-medium d-block">Mata</small>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="option1" />
                                <label class="form-check-label" for="inlineRadio1">Normal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2" />
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                        </div>
                        <!-- Kolom Input Text -->
                        <div class="col-md-6 p-3">
                            <label for="abnormalCondition" class="form-label">Jika Tidak Normal</label>
                            <input type="text" class="form-control" id="abnormalCondition"
                                placeholder="Deskripsi kondisi..." aria-describedby="abnormalConditionHelp" />
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-4 align-items-end mb-4 p-3 border rounded">
                        <!-- Strabismus -->
                        <div class="flex-grow-1">
                            <small class="fw-semibold d-block mb-2">Strabismus</small>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="strabismus"
                                        id="strabismus_normal" value="normal">
                                    <label class="form-check-label" for="strabismus_normal">Normal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="strabismus"
                                        id="strabismus_tidak" value="tidak">
                                    <label class="form-check-label" for="strabismus_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <!-- Buta Warna -->
                        <div class="flex-grow-1">
                            <small class="fw-semibold d-block mb-2">Buta Warna</small>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="buta_warna"
                                        id="buta_warna_tidak" value="tidak">
                                    <label class="form-check-label" for="buta_warna_tidak">Tidak</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="buta_warna"
                                        id="buta_warna_total" value="total">
                                    <label class="form-check-label" for="buta_warna_total">Total</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="buta_warna"
                                        id="buta_warna_parsial" value="parsial">
                                    <label class="form-check-label" for="buta_warna_parsial">Parsial</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th rowspan="2">Ketajaman Visus</th>
                                    <th colspan="2" class="text-center">Tanpa Kacamata</th>
                                    <th colspan="2" class="text-center">Dengan Kacamata</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Jauh</th>
                                    <th class="text-center">Dekat</th>
                                    <th class="text-center">Jauh</th>
                                    <th class="text-center">Dekat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Kanan</strong></td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Kiri</strong></td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Snellen/Jaeger">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3 mb-4">
                        <label class="form-label">Keterangan Tambahan:</label>
                        <textarea class="form-control" rows="2" placeholder="Catatan tambahan tentang pemeriksaan visus..."></textarea>
                    </div>
                    {{-- THT --}}
                    <div class="col-md p-4 mb-4 border rounded">
                        <h5 class="fw-bold mb-4">4. Pemeriksaan THT</h5>

                        <!-- Bagian Telinga -->
                        <div class="mb-4">
                            <small class="fw-semibold d-block mb-2">A. Telinga</small>

                            <div class="row">
                                <!-- Telinga Kanan -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kanan:</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kanan"
                                                id="telinga_kanan_normal" value="normal">
                                            <label class="form-check-label" for="telinga_kanan_normal">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kanan"
                                                id="telinga_kanan_tidak" value="tidak">
                                            <label class="form-check-label" for="telinga_kanan_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Telinga Kiri -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kiri:</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kiri"
                                                id="telinga_kiri_normal" value="normal">
                                            <label class="form-check-label" for="telinga_kiri_normal">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kiri"
                                                id="telinga_kiri_tidak" value="tidak">
                                            <label class="form-check-label" for="telinga_kiri_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian Hidung -->
                        <div class="mb-4">
                            <small class="fw-semibold d-block mb-2">B. Hidung</small>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hidung" id="hidung_normal"
                                        value="normal">
                                    <label class="form-check-label" for="hidung_normal">Normal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="hidung" id="hidung_tidak"
                                        value="tidak">
                                    <label class="form-check-label" for="hidung_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian Tenggorokan -->
                        <div class="mb-4">
                            <small class="fw-semibold d-block mb-2">C. Tenggorokan</small>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tenggorokan"
                                        id="tenggorokan_normal" value="normal">
                                    <label class="form-check-label" for="tenggorokan_normal">Normal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tenggorokan"
                                        id="tenggorokan_tidak" value="tidak">
                                    <label class="form-check-label" for="tenggorokan_tidak">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Leher --}}
                    <div class="col-md p-4 mb-4 -ml-4 border rounded d-flex flex-column">
                        <h6 class="section-title mb-3">6. Leher</h6>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <!-- Radio Group -->
                            <div class="flex-grow-1">
                                <label class="form-label mb-1">a. Kelenjar Tiroid</label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidNormal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="tiroidNormal">Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="tiroidTidak">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Conditional Input -->
                            <div id="tiroidConditionContainer" class="conditional-input flex-grow-1"
                                style="min-width: 200px;">
                                <label for="tiroidCondition" class="form-label mb-1">Keterangan</label>
                                <input type="text" class="form-control" id="tiroidCondition"
                                    placeholder="Deskripsi kondisi...">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <!-- Radio Group -->
                            <div class="flex-grow-1">
                                <label class="form-label mb-1">b. Kelenjar Getah Bening</label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidNormal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="tiroidNormal">Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="tiroidTidak">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Conditional Input -->
                            <div id="tiroidConditionContainer" class="conditional-input flex-grow-1"
                                style="min-width: 200px;">
                                <label for="tiroidCondition" class="form-label mb-1">Keterangan</label>
                                <input type="text" class="form-control" id="tiroidCondition"
                                    placeholder="Deskripsi kondisi...">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="leherLainnya" class="form-label">c. Lainnya</label>
                            <input type="text" class="form-control" id="leherLainnya"
                                placeholder="Keterangan lainnya...">
                        </div>
                    </div>

                    {{-- Chest/Dada --}}
                    <div class="col-md p-4 mb-4 border rounded d-flex flex-column">
                        <h6 class="section-title mb-3">7. Chest / Dada</h6>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <!-- Radio Group -->
                            <div class="flex-grow-1">
                                <label class="form-label mb-1">a. Jantung</label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidNormal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="tiroidNormal">Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="tiroidTidak">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Conditional Input -->
                            <div id="tiroidConditionContainer" class="conditional-input flex-grow-1"
                                style="min-width: 200px;">
                                <label for="tiroidCondition" class="form-label mb-1">Keterangan</label>
                                <input type="text" class="form-control" id="tiroidCondition"
                                    placeholder="Deskripsi kondisi...">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <!-- Radio Group -->
                            <div class="flex-grow-1">
                                <label class="form-label mb-1">b. Paru paru</label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidNormal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="tiroidNormal">Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="tiroidTidak">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Conditional Input -->
                            <div id="tiroidConditionContainer" class="conditional-input flex-grow-1"
                                style="min-width: 200px;">
                                <label for="tiroidCondition" class="form-label mb-1">Keterangan</label>
                                <input type="text" class="form-control" id="tiroidCondition"
                                    placeholder="Deskripsi kondisi...">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="leherLainnya" class="form-label">c. Lainnya</label>
                            <input type="text" class="form-control" id="leherLainnya"
                                placeholder="Keterangan lainnya...">
                        </div>
                    </div>
                    {{-- Abdomen --}}
                    <div class="col-md p-4 mb-4 border rounded d-flex flex-column">
                        <h6 class="section-title mb-3">8. Abdomen</h6>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <!-- Radio Group -->
                            <div class="flex-grow-1">
                                <label class="form-label mb-1">a. Liver</label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidNormal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="tiroidNormal">Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="tiroidTidak">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Conditional Input -->
                            <div id="tiroidConditionContainer" class="conditional-input flex-grow-1"
                                style="min-width: 200px;">
                                <label for="tiroidCondition" class="form-label mb-1">Keterangan</label>
                                <input type="text" class="form-control" id="tiroidCondition"
                                    placeholder="Deskripsi kondisi...">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3">
                            <!-- Radio Group -->
                            <div class="flex-grow-1">
                                <label class="form-label mb-1">b. Limpa</label>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidNormal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="tiroidNormal">Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tiroid" id="tiroidTidak"
                                            value="tidak">
                                        <label class="form-check-label" for="tiroidTidak">Tidak Normal</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Conditional Input -->
                            <div id="tiroidConditionContainer" class="conditional-input flex-grow-1"
                                style="min-width: 200px;">
                                <label for="tiroidCondition" class="form-label mb-1">Keterangan</label>
                                <input type="text" class="form-control" id="tiroidCondition"
                                    placeholder="Deskripsi kondisi...">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="leherLainnya" class="form-label">c. Lainnya</label>
                            <input type="text" class="form-control" id="leherLainnya"
                                placeholder="Keterangan lainnya...">
                        </div>
                    </div>

                    {{-- 9. --}}
                    <div class="col-md p-4 mb-4 border rounded">
                        <h6 class="section-title mb-3">9. Ekstremitas</h6>
                        <div class="mb-4">
                            <small class="fw-semibold d-block mb-2">a. Tangan</small>

                            <div class="row">
                                <!-- Telinga Kanan -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kanan:</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kanan"
                                                id="telinga_kanan_normal" value="normal">
                                            <label class="form-check-label" for="telinga_kanan_normal">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kanan"
                                                id="telinga_kanan_tidak" value="tidak">
                                            <label class="form-check-label" for="telinga_kanan_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Telinga Kiri -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kiri:</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kiri"
                                                id="telinga_kiri_normal" value="normal">
                                            <label class="form-check-label" for="telinga_kiri_normal">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kiri"
                                                id="telinga_kiri_tidak" value="tidak">
                                            <label class="form-check-label" for="telinga_kiri_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kanan:</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kanan"
                                                id="telinga_kanan_normal" value="normal">
                                            <label class="form-check-label" for="telinga_kanan_normal">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kanan"
                                                id="telinga_kanan_tidak" value="tidak">
                                            <label class="form-check-label" for="telinga_kanan_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Telinga Kiri -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kiri:</label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kiri"
                                                id="telinga_kiri_normal" value="normal">
                                            <label class="form-check-label" for="telinga_kiri_normal">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="telinga_kiri"
                                                id="telinga_kiri_tidak" value="tidak">
                                            <label class="form-check-label" for="telinga_kiri_tidak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 10 --}}
                    <div class="col-md p-4 mb-4 border rounded">
                        <h6 class="section-title mb-3">9. Ekstremitas</h6>

                    </div>
                    <div class="col-md p-4 mb-4 border rounded">
                        <h6 class="section-title mb-3">10. Kulit Kelamin</h6>

                    </div>

                    <div class="col-md p-4 mb-4 border rounded">
                        <h6 class="section-title mb-3">11. Neurologis</h6>

                    </div>

                </div>
            </div>
            {{-- card --}}
        </div>
        {{-- col md --}}
    </div>

    {{-- row --}}
@endsection
