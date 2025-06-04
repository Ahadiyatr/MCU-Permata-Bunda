@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Form Dokter')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/quill/typography.scss', 'resources/assets/vendor/libs/quill/katex.scss', 'resources/assets/vendor/libs/quill/editor.scss', 'resources/assets/vendor/libs/dropzone/dropzone.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/dropzone/dropzone.js', 'resources/assets/vendor/libs/quill/katex.js', 'resources/assets/vendor/libs/quill/quill.js'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/forms-file-upload.js', 'resources/assets/js/form-basic-inputs.js', 'resources/assets/js/forms-editors.js'])
@endsection

@section('content')
    <h4>Page Dokter</h4>
    <div class="row">
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <from>
                        <div class="row g-3 mb-4">

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
                            <h5>PEMERIKSAAN THORAX</h5>
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
                            <h5>PEMERIKSAAN ABDOMEN</h5>
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
                            <h5>PEMERIKSAAN EXTREMITAS</h5>
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
                            <h5>PEMERIKSAAN NEUROLOGIS</h5>
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

                            <h5>KESEIMBANGAN DAN KORDINASI</h5>
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


                        </div>
                        <!-- Baris dengan gutter (jarak) -->
                        <div class="row g-3 mb-4">
                            <h5 class="card-header">Treadmill</h5>
                            <div class="card-body">
                                <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are
                                            <span class="fw-medium">not</span> actually uploaded.)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Full Editor -->
                        <h5 class="card-header">Kesimpulan</h5>
                        <div class="card-body">
                            <div id="full-editor">
                                <h6>Quill Rich Text Editor</h6>
                                <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                    cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                    I love. </p>
                            </div>
                        </div>
                        <!-- /Full Editor -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </from>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}

    {{-- row --}}
@endsection
