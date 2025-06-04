@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Form Perawat')

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
                            <h5>RIWAYAT PENYAKIT DAHULU</h5>
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
                                <label for="bloodStatus" class="form-label">Demam</label>
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

                            <h5>RIWAYAT GAYA HIDUP</h5>
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

                            <h5>RIWAYAT KONSUMSI OBAT TERATUR</h5>
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

                            <h5>RIWAYAT VAKSINASI</h5>
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

                            <h5>RIWAYAT BAHAYA LINGKUNGAN KERJA</h5>
                            <div>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <h5>RIWAYAT PENYAKIT KELUARGA</h5>
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

                            <h5>RIWAYAT ALERGI</h5>
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

                            <h5>PEMERIKSAAN FISIK</h5>
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
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                    aria-describedby="bloodPressureHelp" />
                            </div>
                            <div class="col-md-3">
                                <label for="bloodPressure1" class="form-label">Laju Pernafasan</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="x/menit"
                                    aria-describedby="bloodPressureHelp" />
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
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="ºC"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>
                            <div class="col-md-3">
                                <label for="defaultFormControlInput" class="form-label">SP02</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" placeholder="%"
                                    aria-describedby="defaultFormControlHelp" />
                            </div>

                            <h5>PEMERIKSAAN MATA</h5>
                            <div class="flex-grow-1 col-md-3">
                                <small class="fw-semibold d-block mb-2">Buta Warna</small>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="buta_warna"
                                            id="buta_warna_tidak" value="tidak">
                                        <label class="form-check-label" for="buta_warna_tidak">Normal</label>
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

                            {{-- 10. Pemeriksaan Visus --}}
                            <h5>PEMERIKSAAN VISUS</h5>
                            <div class="col-md-2">
                                <label for="bloodPressure1" class="form-label">Tanpa Kacamata</label>
                                <input type="text" class="form-control" id="bloodPressure1"
                                    placeholder="Contoh: 120/80" aria-describedby="bloodPressureHelp" />
                            </div>
                            <div class="col-md-2">
                                <label for="bloodPressure1" class="form-label">Dengan Kacamata</label>
                                <input type="text" class="form-control" id="bloodPressure1"
                                    placeholder="Contoh: 120/80" aria-describedby="bloodPressureHelp" />
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </from>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}

    {{-- row --}}
@endsection
