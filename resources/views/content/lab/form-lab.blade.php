@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Lab')

<!-- Vendor Styles -->
@section('vendor-style')
    @vite(['resources/assets/vendor/libs/dropzone/dropzone.scss', 'resources/assets/vendor/libs/quill/typography.scss', 'resources/assets/vendor/libs/quill/katex.scss', 'resources/assets/vendor/libs/quill/editor.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/dropzone/dropzone.js', 'resources/assets/vendor/libs/quill/katex.js', 'resources/assets/vendor/libs/quill/quill.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
    @vite(['resources/assets/js/forms-file-upload.js', 'resources/assets/js/forms-editors.js'])
@endsection

@section('content')
    <div class="row">
        <!-- Form Upload Hasil Pemeriksaan -->
        <div class="col-12">
            <div class="card mb-4">
                <h5 class="card-header">Upload Hasil Pemeriksaan</h5>
                <div class="card-body">
                    <form id="medicalResultsForm">
                        <div class="row g-3 mb-4">
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Hasil Laboratorium</label>
                                <div class="dropzone needsclick" id="dropzone-lab">
                                    <div class="dz-message needsclick">
                                        <i class="ti ti-upload fs-4"></i>
                                        <h5>Drop file here atau klik untuk upload</h5>
                                        <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="lab_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                    </div>
                                </div>
                            </div>
                            {{-- Saran Lab --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Saran</label>
                                <div id="full-editor">
                                    <h6>Quill Rich Text Editor</h6>
                                    <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                        cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                        I love. </p>
                                </div>
                            </div>
                            {{-- Kesimpulan Lab --}}
                            <div class="col-md-12">
                                <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="Contoh: Normal"
                                    aria-describedby="bloodPressureHelp" />
                            </div>
                            {{-- /Lab --}}



                            {{-- Spirometri --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Hasil Spirometri</label>
                                <div class="dropzone needsclick" id="dropzone-spirometri">
                                    <div class="dz-message needsclick">
                                        <i class="ti ti-upload fs-4"></i>
                                        <h5>Drop file here atau klik untuk upload</h5>
                                        <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="spirometri_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                    </div>
                                </div>
                            </div>
                            {{-- Saran Spiro --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Saran</label>
                                <div id="full-editor">
                                    <h6>Quill Rich Text Editor</h6>
                                    <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                        cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                        I love. </p>
                                </div>
                            </div>
                            {{-- Kesimpulan Spiro --}}
                            <div class="col-md-12">
                                <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="Contoh: Normal"
                                    aria-describedby="bloodPressureHelp" />
                            </div>

                            {{-- Audiometri --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Hasil Audiometri</label>
                                <div class="dropzone needsclick" id="dropzone-audiometri">
                                    <div class="dz-message needsclick">
                                        <i class="ti ti-upload fs-4"></i>
                                        <h5>Drop file here atau klik untuk upload</h5>
                                        <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="audiometri_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                    </div>
                                </div>
                            </div>
                            {{-- Saran Audio --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Saran</label>
                                <div id="full-editor">
                                    <h6>Quill Rich Text Editor</h6>
                                    <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                        cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                        I love. </p>
                                </div>
                            </div>
                            {{-- Kesimpulan Audio --}}
                            <div class="col-md-12">
                                <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="Contoh: Normal"
                                    aria-describedby="bloodPressureHelp" />
                            </div>

                            {{-- EKG --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Hasil EKG</label>
                                <div class="dropzone needsclick" id="dropzone-ekg">
                                    <div class="dz-message needsclick">
                                        <i class="ti ti-upload fs-4"></i>
                                        <h5>Drop file here atau klik untuk upload</h5>
                                        <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="ekg_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                    </div>
                                </div>
                            </div>
                            {{-- Saran EKG --}}
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Saran</label>
                                <div id="full-editor">
                                    <h6>Quill Rich Text Editor</h6>
                                    <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                        cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                        I love. </p>
                                </div>
                            </div>
                            {{-- Kesimpulan EKG --}}
                            <div class="col-md-12">
                                <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                <input type="text" class="form-control" id="bloodPressure1" placeholder="Contoh: Normal"
                                    aria-describedby="bloodPressureHelp" />
                            </div>

                            <!-- Radiologi Thorax -->
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Hasil Radiologi Thorax</label>
                                <div class="dropzone needsclick" id="dropzone-thorax">
                                    <div class="dz-message needsclick">
                                        <i class="ti ti-upload fs-4"></i>
                                        <h5>Drop file here atau klik untuk upload</h5>
                                        <span class="note needsclick">(Format: PDF/JPG/PNG, Maks: 5MB)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="thorax_file" type="file" accept=".pdf,.jpg,.jpeg,.png" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="form-label">Hasil</label>
                                <div id="full-editor">
                                    <h6>Quill Rich Text Editor</h6>
                                    <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                        cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy
                                        I love. </p>
                                </div>
                            </div>
                            {{-- Kesimpulan Thorax --}}
                            <div class="col-md-12">
                                <label for="bloodPressure1" class="form-label">Kesimpulan</label>
                                <input type="text" class="form-control" id="bloodPressure1"
                                    placeholder="Contoh: Normal" aria-describedby="bloodPressureHelp" />
                            </div>

                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary me-2">Simpan Semua Hasil</button>
                            <button type="reset" class="btn btn-label-secondary">Reset</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <!-- Script untuk inisialisasi Dropzone -->
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
    </script>
@endsection
