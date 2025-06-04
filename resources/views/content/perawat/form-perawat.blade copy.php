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
    <div class="row">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <from>
                        <!-- Baris dengan gutter (jarak) -->
                        <div class="row g-3 mb-4">
                            <h5>I. KELUHAN KARYAWAN / PASIEN</h5>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Keluhan Pasien</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <h5>III. TANDA TANDA VITAL</h5>
                            <div class="col-md-2">
                                <label for="bloodPressure1" class="form-label">Tekanan Darah</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="Contoh: 120/80"
                                    aria-describedby="bloodPressureHelp" />
                            </div>
                            <div class="col-md-2">
                                <label for="bloodPressure2" class="form-label">Tekanan Darah</label>
                                <input type="text" class="form-control" id="bloodPressure2" placeholder="Contoh: 120/80"
                                    aria-describedby="bloodPressureHelp" />
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
                                <label for="bloodPressure1" class="form-label">Nadi</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                    aria-describedby="bloodPressureHelp" />
                            </div>
                            <div class="col-md-3 mb-4">
                                <label for="bloodStatus" class="form-label">Status Nadi</label>
                                <select id="bloodStatus" class="form-select">
                                    <option>Pilih status</option>
                                    <option value="1">Normal</option>
                                    <option value="2">Abnormal</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="bloodPressure1" class="form-label">Laju Pernafasan</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                    aria-describedby="bloodPressureHelp" />
                            </div>
                            <div class="col-md-3 mb-4">
                                <label for="bloodStatus" class="form-label">Status Nadi</label>
                                <select id="bloodStatus" class="form-select">
                                    <option>Pilih status</option>
                                    <option value="1">Normal</option>
                                    <option value="2">Abnormal</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="defaultFormControlInput" class="form-label">Suhu Badan</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="ºC"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="col-md-3">
                                <label for="defaultFormControlInput" class="form-label">SP02</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="%"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="col-md-3">
                                <label for="defaultFormControlInput" class="form-label">Irama Nadi</label>
                                <input type="text" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="col-md-3">
                                <label for="defaultFormControlInput" class="form-label">
                                    Pola Nafas</label>
                                <input type="text" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp" />
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
                            <h5>III. PEMERIKSAAN FISIK</h5>
                            <div class="col-md-6 mb-4">
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

                            <div class="d-flex flex-wrap gap-4 align-items-end mb-4 p-3 border rounded col-md-6">
                                <!-- Strabismus -->
                                <div class="flex-grow-1 col-md-3">
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
                                <div class="flex-grow-1 col-md-3">
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

                            <div class="row g-3 align-items-end mb-4">
                                <!-- Kepala Section -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label fw-medium">Kepala</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="headCondition"
                                                    id="headNormal" value="normal">
                                                <label class="form-check-label" for="headNormal">Normal</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="headCondition"
                                                    id="headAbnormal" value="abnormal">
                                                <label class="form-check-label" for="headAbnormal">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="headDescription" class="form-label">Jika Tidak Normal</label>
                                        <input type="text" class="form-control" id="headDescription"
                                            placeholder="Deskripsi kondisi...">
                                    </div>
                                </div>

                                <!-- Mata Section -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label fw-medium">Mata</label>
                                        <div class="d-flex gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eyeCondition"
                                                    id="eyeNormal" value="normal">
                                                <label class="form-check-label" for="eyeNormal">Normal</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="eyeCondition"
                                                    id="eyeAbnormal" value="abnormal">
                                                <label class="form-check-label" for="eyeAbnormal">Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="eyeDescription" class="form-label">Jika Tidak Normal</label>
                                        <input type="text" class="form-control" id="eyeDescription"
                                            placeholder="Deskripsi kondisi...">
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
                            <div class="col-md-12">
                                <div class="p-4 h-100 rounded">
                                    <h6 class="fw-bold mb-4">4. Pemeriksaan THT</h6>

                                    <div class="row g-3">
                                        <!-- Telinga Section -->
                                        <div class="col-md-4">
                                            <div class="border p-3 rounded h-100">
                                                <small class="fw-semibold d-block mb-2">A. Telinga</small>
                                                <div class="row g-2">
                                                    <!-- Telinga Kanan -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Kanan:</label>
                                                        <div class="d-flex flex-column gap-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="telinga_kanan" id="telinga_kanan_normal"
                                                                    value="normal">
                                                                <label class="form-check-label"
                                                                    for="telinga_kanan_normal">Normal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="telinga_kanan" id="telinga_kanan_tidak"
                                                                    value="tidak">
                                                                <label class="form-check-label"
                                                                    for="telinga_kanan_tidak">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Telinga Kiri -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Kiri:</label>
                                                        <div class="d-flex flex-column gap-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="telinga_kiri" id="telinga_kiri_normal"
                                                                    value="normal">
                                                                <label class="form-check-label"
                                                                    for="telinga_kiri_normal">Normal</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="telinga_kiri" id="telinga_kiri_tidak"
                                                                    value="tidak">
                                                                <label class="form-check-label"
                                                                    for="telinga_kiri_tidak">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Hidung Section -->
                                        <div class="col-md-4">
                                            <div class="border p-3 rounded h-100">
                                                <small class="fw-semibold d-block mb-2">B. Hidung</small>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="hidung"
                                                            id="hidung_normal" value="normal">
                                                        <label class="form-check-label" for="hidung_normal">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="hidung"
                                                            id="hidung_tidak" value="tidak">
                                                        <label class="form-check-label" for="hidung_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tenggorokan Section -->
                                        <div class="col-md-4">
                                            <div class="border p-3 rounded h-100">
                                                <small class="fw-semibold d-block mb-2">C. Tenggorokan</small>
                                                <div class="d-flex flex-column gap-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tenggorokan"
                                                            id="tenggorokan_normal" value="normal">
                                                        <label class="form-check-label"
                                                            for="tenggorokan_normal">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tenggorokan"
                                                            id="tenggorokan_tidak" value="tidak">
                                                        <label class="form-check-label"
                                                            for="tenggorokan_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- gigi dan mulut --}}
                            <div class="table-responsive">
                                <h6 class="fw-bold mb-4">5. Pemeriksaan Gigi dan Mulut</h6>
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="align-middle">Posisi</th>
                                            <th colspan="8">Kiri</th>
                                            <th colspan="8">Kanan</th>
                                        </tr>
                                        <tr>
                                            <th>8</th>
                                            <th>7</th>
                                            <th>6</th>
                                            <th>5</th>
                                            <th>4</th>
                                            <th>3</th>
                                            <th>2</th>
                                            <th>1</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Atas</td>
                                            <!-- 16 input gigi atas -->
                                            <td><input name="atas_8kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_7kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_6kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_5kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_4kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_3kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_2kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_1kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_1kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_2kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_3kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_4kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_5kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_6kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_7kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="atas_8kanan" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                        </tr>
                                        <tr>
                                            <td>Bawah</td>
                                            <!-- 16 input gigi bawah -->
                                            <td><input name="bawah_8kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_7kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_6kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_5kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_4kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_3kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_2kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_1kiri" class="form-control form-control-sm text-center"
                                                    maxlength="1"></td>
                                            <td><input name="bawah_1kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_2kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_3kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_4kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_5kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_6kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_7kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                            <td><input name="bawah_8kanan"
                                                    class="form-control form-control-sm text-center" maxlength="1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-1">
                                <p class="mb-0"><strong>Keterangan:</strong></p>
                                <ul class="mb-0">
                                    <li>X = Berlubang</li>
                                    <li>O = Tanggal</li>
                                    <li>A = Palsu</li>
                                    <li>C = Tambalan</li>
                                </ul>
                            </div>
                            {{-- Leher --}}
                            <div class="col-md-6">
                                <div class="p-4 h-100 border rounded">
                                    <h6 class="fw-bold mb-4">6. Leher</h6>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <!-- Radio Group -->
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-1">a. Kelenjar Tiroid</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                            </div>
                            {{-- Chest --}}
                            <div class="col-md-6">
                                <div class="p-4 h-100 border rounded">
                                    <h6 class="fw-bold mb-4">7. Chest / Dada</h6>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <!-- Radio Group -->
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-1">a. Jantung</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                            </div>
                            {{-- Abdomen --}}
                            <div class="col-md-6">
                                <div class="p-4 h-100 border rounded">
                                    <h6 class="fw-bold mb-4">8. Abdomen</h6>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <!-- Radio Group -->
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-1">a. Liver</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                            </div>
                            {{-- Ekstremitas --}}
                            <div class="col-md-6">
                                <div class="p-4 h-100 border rounded">
                                    <h6 class="fw-bold mb-4">9. Ekstremitas</h6>
                                    <div class="mb-4">
                                        <small class="fw-semibold d-block mb-2">a. Tangan</small>

                                        <div class="row">
                                            <!-- Telinga Kanan -->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Kanan:</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kanan" id="telinga_kanan_normal"
                                                            value="normal">
                                                        <label class="form-check-label"
                                                            for="telinga_kanan_normal">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kanan" id="telinga_kanan_tidak" value="tidak">
                                                        <label class="form-check-label"
                                                            for="telinga_kanan_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Telinga Kiri -->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Kiri:</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kiri" id="telinga_kiri_normal" value="normal">
                                                        <label class="form-check-label"
                                                            for="telinga_kiri_normal">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kiri" id="telinga_kiri_tidak" value="tidak">
                                                        <label class="form-check-label"
                                                            for="telinga_kiri_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Kanan:</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kanan" id="telinga_kanan_normal"
                                                            value="normal">
                                                        <label class="form-check-label"
                                                            for="telinga_kanan_normal">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kanan" id="telinga_kanan_tidak" value="tidak">
                                                        <label class="form-check-label"
                                                            for="telinga_kanan_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Telinga Kiri -->
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Kiri:</label>
                                                <div class="d-flex gap-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kiri" id="telinga_kiri_normal" value="normal">
                                                        <label class="form-check-label"
                                                            for="telinga_kiri_normal">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="telinga_kiri" id="telinga_kiri_tidak" value="tidak">
                                                        <label class="form-check-label"
                                                            for="telinga_kiri_tidak">Tidak</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Kulit Kelamin --}}
                            <div class="col-md-6">
                                <div class="p-4 h-100 border rounded">
                                    <h6 class="fw-bold mb-4">9. Kulit & Kelamin</h6>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <!-- Radio Group -->
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-1">a. Kulit</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                                    {{-- Saluran Kencing --}}
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <!-- Radio Group -->
                                        <div class="flex-grow-1">
                                            <label class="form-label mb-1">b. Saluran Kencing</label>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="saluran"
                                                        id="saluranNormal" value="normal">
                                                    <label class="form-check-label" for="saluranNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="saluran"
                                                        id="saluranTidak" value="tidak">
                                                    <label class="form-check-label" for="saluranTidak">Tidak
                                                        Normal</label>
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
                                </div>
                            </div>
                            {{--  --}}
                            <div class="col-md-6">
                                <div class="p-4 h-100 border rounded">
                                    <h6 class="fw-bold mb-4">10. Neurologis</h6>
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <!-- Radio Group -->
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidNormal" value="normal">
                                                    <label class="form-check-label" for="tiroidNormal">Normal</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tiroid"
                                                        id="tiroidTidak" value="tidak">
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
                                </div>
                            </div>


                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </from>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}

    {{-- row --}}
@endsection
