@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('page-style')
    <style>
        /* Custom untuk select */
        .form-control-sm {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.35rem;
            min-width: 2rem;
        }

        select.form-control-sm {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%236e6b7b' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.35rem center;
            background-size: 12px 12px;
        }
    </style>
@endsection

@section('content')
    <h4>Page 2</h4>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">III. RIWAYAT GAYA HIDUP / KEBIASAAN</h4>
            <p class="card-text">Lengkapi riwayat gaya hidup / kebiasaan dibawah ini!</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <h6 class="fw-bold mb-2">5. Pemeriksaan Gigi dan Mulut</h6>
                <table class="table table-bordered table-sm text-center mb-1">
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
                                </select></td>
                            <!-- [Ulangi untuk gigi 7-1 kiri] -->
                            <!-- Gigi Atas Kanan -->
                            <td class="p-0"><select name="atas_1kanan"
                                    class="form-control form-control-sm border-primary text-center px-0">
                                    <option value="">-</option>
                                    <option value="X" class="text-danger fw-bolder">X</option>
                                    <option value="O" class="text-primary fw-bolder">O</option>
                                    <option value="A" class="text-success fw-bolder">A</option>
                                    <option value="C" class="text-warning fw-bolder">C</option>
                                </select></td>
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
                                </select></td>
                            <!-- [Ulangi untuk gigi 7-1 kiri] -->
                            <!-- Gigi Bawah Kanan -->
                            <td class="p-0"><select name="bawah_1kanan"
                                    class="form-control form-control-sm border-primary text-center px-0">
                                    <option value="">-</option>
                                    <option value="X" class="text-danger fw-bolder">X</option>
                                    <option value="O" class="text-primary fw-bolder">O</option>
                                    <option value="A" class="text-success fw-bolder">A</option>
                                    <option value="C" class="text-warning fw-bolder">C</option>
                                </select></td>
                            <!-- [Ulangi untuk gigi 2-8 kanan] -->
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex flex-wrap justify-content-start gap-2 mt-1">
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
            <!-- 1. Olahraga -->
            <div class="row mb-2">
                <div class="col-md-12 d-flex align-items-center">
                    <label class="form-label me-3 mb-0" style="min-width: 120px;">1. Olahraga</label>
                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="olahraga" id="olahraga_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="olahraga_tidak">Tidak</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input me-2" type="radio" name="olahraga" id="olahraga_ya"
                                value="ya">
                            <label class="form-check-label me-2" for="olahraga_ya">Ya,</label>
                            <input type="text" class="form-control form-control-sm" style="width: 80px;"
                                id="frekuensi_olahraga" placeholder="Kali/minggu" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Merokok -->
            <div class="row mb-2">
                <div class="col-md-12 d-flex align-items-center">
                    <label class="form-label me-3 mb-0" style="min-width: 120px;">2. Merokok</label>
                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="merokok" id="merokok_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="merokok_tidak">Tidak</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input me-2" type="radio" name="merokok" id="merokok_ya"
                                value="ya">
                            <label class="form-check-label me-2" for="merokok_ya">Ya,</label>
                            <input type="text" class="form-control form-control-sm me-2" style="width: 80px;"
                                id="jumlah_rokok" placeholder="Batang/hari" disabled>
                            <span class="me-2">lama merokok</span>
                            <input type="text" class="form-control form-control-sm" style="width: 80px;"
                                id="lama_merokok" placeholder="Tahun" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Alkohol -->
            <div class="row mb-2">
                <div class="col-md-12 d-flex align-items-center">
                    <label class="form-label me-3 mb-0" style="min-width: 120px;">3. Alkohol</label>
                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="alkohol" id="alkohol_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="alkohol_tidak">Tidak</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input me-2" type="radio" name="alkohol" id="alkohol_ya"
                                value="ya">
                            <label class="form-check-label me-2" for="alkohol_ya">Ya,</label>
                            <input type="text" class="form-control form-control-sm" style="width: 80px;"
                                id="frekuensi_alkohol" placeholder="Kali/minggu" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Narkoba -->
            <div class="row">
                <div class="col-md-12 d-flex align-items-center">
                    <label class="form-label me-3 mb-0" style="min-width: 120px;">4. Narkoba</label>
                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="narkoba" id="narkoba_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="narkoba_tidak">Tidak</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input me-2" type="radio" name="narkoba" id="narkoba_ya"
                                value="ya">
                            <label class="form-check-label me-2" for="narkoba_ya">Ya, Jenisnya</label>
                            <input type="text" class="form-control form-control-sm" style="width: 150px;"
                                id="jenis_narkoba" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">VII. RIWAYAT KESEHATAN KELUARGA</h4>
            <p class="card-text">Berikan tanda centang pada daftar riwayat kesehatan keluarga dibawah ini!</p>
        </div>
        <div class="card-body">
            <!-- 1. Darah Tinggi -->
            <div class="row align-items-center mb-3">
                <div class="col-md-12 d-flex flex-wrap align-items-center">
                    <label class="form-label me-3 mb-2 mb-md-0" style="min-width: 200px;">1. Darah tinggi</label>

                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="darah_tinggi" id="darah_tinggi_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="darah_tinggi_tidak">Tidak</label>
                        </div>
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="darah_tinggi" id="darah_tinggi_ya"
                                value="ya">
                            <label class="form-check-label" for="darah_tinggi_ya">Ya, sebutkan</label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center conditional-group" style="display: none!important;">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="darah_tinggi_ayah"
                                id="darah_tinggi_ayah">
                            <label class="form-check-label" for="darah_tinggi_ayah">Ayah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="darah_tinggi_ibu"
                                id="darah_tinggi_ibu">
                            <label class="form-check-label" for="darah_tinggi_ibu">Ibu</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Diabetes -->
            <div class="row align-items-center mb-3">
                <div class="col-md-12 d-flex flex-wrap align-items-center">
                    <label class="form-label me-3 mb-2 mb-md-0" style="min-width: 200px;">2. Diabetes/kencing
                        manis</label>

                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="diabetes" id="diabetes_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="diabetes_tidak">Tidak</label>
                        </div>
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="diabetes" id="diabetes_ya"
                                value="ya">
                            <label class="form-check-label" for="diabetes_ya">Ya, sebutkan</label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center conditional-group" style="display: none!important;">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="diabetes_ayah" id="diabetes_ayah">
                            <label class="form-check-label" for="diabetes_ayah">Ayah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="diabetes_ibu" id="diabetes_ibu">
                            <label class="form-check-label" for="diabetes_ibu">Ibu</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Penyakit Jantung -->
            <div class="row align-items-center mb-3">
                <div class="col-md-12 d-flex flex-wrap align-items-center">
                    <label class="form-label me-3 mb-2 mb-md-0" style="min-width: 200px;">3. Penyakit jantung</label>

                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="jantung" id="jantung_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="jantung_tidak">Tidak</label>
                        </div>
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="jantung" id="jantung_ya"
                                value="ya">
                            <label class="form-check-label" for="jantung_ya">Ya, sebutkan</label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center conditional-group" style="display: none!important;">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="jantung_ayah" id="jantung_ayah">
                            <label class="form-check-label" for="jantung_ayah">Ayah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="jantung_ibu" id="jantung_ibu">
                            <label class="form-check-label" for="jantung_ibu">Ibu</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Stroke -->
            <div class="row align-items-center mb-3">
                <div class="col-md-12 d-flex flex-wrap align-items-center">
                    <label class="form-label me-3 mb-2 mb-md-0" style="min-width: 200px;">4. Stroke</label>

                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="stroke" id="stroke_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="stroke_tidak">Tidak</label>
                        </div>
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="stroke" id="stroke_ya"
                                value="ya">
                            <label class="form-check-label" for="stroke_ya">Ya, sebutkan</label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center conditional-group" style="display: none!important;">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="stroke_ayah" id="stroke_ayah">
                            <label class="form-check-label" for="stroke_ayah">Ayah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="stroke_ibu" id="stroke_ibu">
                            <label class="form-check-label" for="stroke_ibu">Ibu</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. TBC -->
            <div class="row align-items-center mb-3">
                <div class="col-md-12 d-flex flex-wrap align-items-center">
                    <label class="form-label me-3 mb-2 mb-md-0" style="min-width: 200px;">5. TBC</label>

                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="tbc" id="tbc_tidak" value="tidak"
                                checked>
                            <label class="form-check-label" for="tbc_tidak">Tidak</label>
                        </div>
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="tbc" id="tbc_ya"
                                value="ya">
                            <label class="form-check-label" for="tbc_ya">Ya, sebutkan</label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center conditional-group" style="display: none!important;">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="tbc_ayah" id="tbc_ayah">
                            <label class="form-check-label" for="tbc_ayah">Ayah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tbc_ibu" id="tbc_ibu">
                            <label class="form-check-label" for="tbc_ibu">Ibu</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Asthma -->
            <div class="row align-items-center">
                <div class="col-md-12 d-flex flex-wrap align-items-center">
                    <label class="form-label me-3 mb-2 mb-md-0" style="min-width: 200px;">6. Asthma</label>

                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="asthma" id="asthma_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="asthma_tidak">Tidak</label>
                        </div>
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="asthma" id="asthma_ya"
                                value="ya">
                            <label class="form-check-label" for="asthma_ya">Ya, sebutkan</label>
                        </div>
                    </div>

                    <div class="d-flex align-items-center conditional-group" style="display: none!important;">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="checkbox" name="asthma_ayah" id="asthma_ayah">
                            <label class="form-check-label" for="asthma_ayah">Ayah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="asthma_ibu" id="asthma_ibu">
                            <label class="form-check-label" for="asthma_ibu">Ibu</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">IX. RIWAYAT PEKERJAAN SEBELUMNYA</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 5%">No</th>
                                <th style="width: 30%">Nama Perusahaan</th>
                                <th style="width: 25%">Jabatan/Posisi</th>
                                <th style="width: 20%">Masa Kerja</th>
                                <th style="width: 20%">Jenis paparan yang diterima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td>1</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Nama perusahaan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jabatan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Masa kerja">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Jenis paparan">
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr>
                                <td>2</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Nama perusahaan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jabatan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Masa kerja">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Jenis paparan">
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr>
                                <td>3</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Nama perusahaan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jabatan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Masa kerja">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Jenis paparan">
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr>
                                <td>4</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Nama perusahaan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Jabatan">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" placeholder="Masa kerja">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Jenis paparan">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-plus me-1"></i> Tambah Baris
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to toggle parent selection
        document.querySelectorAll('input[type="radio"][value="ya"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const conditionalGroup = this.closest('.row').querySelector('.conditional-group');
                if (this.checked) {
                    conditionalGroup.style.display = 'flex';
                }
            });
        });

        document.querySelectorAll('input[type="radio"][value="tidak"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const conditionalGroup = this.closest('.row').querySelector('.conditional-group');
                conditionalGroup.style.display = 'none';
                // Uncheck all checkboxes in the group
                conditionalGroup.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                    checkbox.checked = false;
                });
            });
        });
    </script>

    <script>
        // Aktifkan input ketika memilih "Ya"
        document.querySelectorAll('input[type="radio"][value="ya"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const inputs = this.closest('.form-check').querySelectorAll('input[type="text"]');
                inputs.forEach(input => {
                    input.disabled = !this.checked;
                    if (this.checked) input.focus();
                });
            });
        });

        // Nonaktifkan input ketika memilih "Tidak"
        document.querySelectorAll('input[type="radio"][value="tidak"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const formGroup = this.closest('.d-flex.align-items-center.me-4');
                const inputs = formGroup.querySelectorAll('input[type="text"]');
                inputs.forEach(input => {
                    input.disabled = true;
                    input.value = '';
                });
            });
        });

        document.querySelector('.btn-outline-primary').addEventListener('click', function() {
            const tbody = document.querySelector('tbody');
            const newRow = document.createElement('tr');
            const rowCount = tbody.children.length + 1;

            newRow.innerHTML = `
    <td>${rowCount}</td>
    <td><input type="text" class="form-control form-control-sm" placeholder="Nama perusahaan"></td>
    <td><input type="text" class="form-control form-control-sm" placeholder="Jabatan"></td>
    <td><input type="text" class="form-control form-control-sm" placeholder="Masa kerja"></td>
    <td><input type="text" class="form-control form-control-sm" placeholder="Jenis paparan"></td>
  `;

            tbody.appendChild(newRow);
        });
    </script>
@endsection
