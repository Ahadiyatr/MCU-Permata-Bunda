@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Form Pasien')

<!-- Vendor Styles -->
@section('vendor-style')
    @vite(['resources/assets/vendor/libs/flatpickr/flatpickr.scss', 'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.scss', 'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.scss', 'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.scss', 'resources/assets/vendor/libs/pickr/pickr-themes.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
    @vite(['resources/assets/vendor/libs/moment/moment.js', 'resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js', 'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js', 'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js', 'resources/assets/vendor/libs/pickr/pickr.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
    @vite(['resources/assets/js/forms-pickers.js'])
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3 mb-md-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Formulir Registrasi Pasien</h5> <small class="text-muted float-end">

                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                            <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                        </div>
                        <div class="mb-6">
                            <small class="form-label">Jenis Kelamin</small><br>
                            <div class="form-check form-check-inline mt-4">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                                <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">NO ID/ NIK</label>
                            <input type="text" class="form-control" id="basic-default-fullname"
                                placeholder="6310102030434" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-fullname">Tempat Lahir</label>
                            <input type="text" class="form-control" id="basic-default-fullname" />
                        </div>
                        <div class="mb-6">
                            <label for="flatpickr-date" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
                        </div>
                        {{-- Umur di ambil dari tanggal lahir --}}
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-message">Alamat</label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Masukkan alamat tempat tinggal anda saat ini"></textarea>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-phone">Nomor Telepon</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="basic-default-phone">Nomor Telepon Kerabat</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" />
                        </div>

                        <button type="submit" class="btn btn-primary">Next > > ></button>

                    </form>
                    {{-- Modal --}}
                    <div class="card-body">
                        <div class="row gy-3">
                            <!-- Fullscreen Modal -->
                            <div class="col-lg-4 col-md-6">
                                <div class="mt-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#fullscreenModal">
                                        PERJANJIAN
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalFullTitle">PERJANJIAN KERAHASIAN DAN
                                                        PEMBUKAAN RAHASIA
                                                        KEDOKTERAN
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="text-align: justify;">
                                                        BAHWA, ________________ menyetujui menyerahkan kepada dr. Fatimah
                                                        Irmayanti dan dr. Al. Furqonatta Mubarta serta TIM Klinik Permata
                                                        Bunda, informasi rahasia tertentu menyangkut pemeriksaan kesehatan,
                                                        uji laboratorium, rekam medis, pengobatan dan bahan lain terkait
                                                        medis.
                                                        .</p>
                                                    <p style="text-align: justify;">
                                                        BAHWA, dr. Fatimah Irmayanti dan dr. Al. Furqonatta Mubarta serta
                                                        TIM
                                                        Klinik Permata Bunda menyetujui untuk meninjau ulang, memeriksa,
                                                        melihat atau mendapatkan informasi rahasia itu hanya berdasarkan
                                                        persyaratan perjanjian ini.</p>
                                                    <p style="text-align: justify;">
                                                        PERLU DIKETAHUI, bahwa __________________memberikan atau akan
                                                        memberikan hak kepada dr. Fatimah Irmayanti dan dr. Al. Furqonatta
                                                        Mubarta serta TIM Klinik Permata Bunda, informasi rahasia tertentu
                                                        dan mengijinkan dr. Fatimah Irmayanti dan dr. Al. Furqonatta Mubarta
                                                        serta TIM Klinik Permata Bunda untuk mendiskusikan dan mewawancarai
                                                        perwakilan ___________________berdasarkan persyaratan berikut ini:
                                                    </p>
                                                    <p style="text-align: justify;">
                                                        1. dr. Fatimah Irmayanti dan dr. Al. Furqonatta Mubarta serta TIM
                                                        Klinik
                                                        Permata Bunda menyetujui untuk menyimpan rahasia atau hak informasi
                                                        medik secara terpercaya dan meyakinkan dan menyetujui bahwa semua
                                                        itu hanya akan dipergunakan untuk keperluan yang terkait, tidak akan
                                                        digunakan untuk kepentingan lainnya atau ditutup untuk semua pihak
                                                        ketiga;
                                                    </p>
                                                    <p style="text-align: justify;">
                                                        2. Tidak satu copypun akan dibuat atau disimpan dalam bentuk
                                                        informasi
                                                        tertulis atau dalam bentuk lainnya tanpa ijin dari ______________
                                                    </p>
                                                    <p style="text-align: justify;">
                                                        3. Pada kesimpulan setiap diskusi atau atas
                                                        permintaan____________________, semua informasi rahasia, termasuk
                                                        catatan tulis tangan, foto, bagan, model, memorandum dan catatan
                                                        lain harus diserahkan kepada ______________________
                                                    </p>
                                                    <p style="text-align: justify;">
                                                        4. Informasi rahasia tidak akan dibuka kepada karyawan manapun juga,
                                                        atau pihak ketiga lainnya kecuali mereka menyetujui untuk
                                                        melaksanakan hal itu dan bisa dilihat pada persyaratan perjanjian
                                                        ini dan harus disetujui oleh _______________________
                                                    </p>
                                                    <p style="text-align: justify;">
                                                        5. Saya memahami bahwa segala informasi mengenai hasil pemeriksaan
                                                        medical chek up saya, akan menjamin kerahasiaan oleh dr. Fatimah
                                                        Irmayanti dan dr. Al Furqonnata Mubarta serta TIM Klinik Permata
                                                        Bunda KECUALI bila diperlukan untuk klime asuransi kesehatan dan
                                                        kepentingan perusahaan yang bersangkutan .
                                                    </p>
                                                    <p style="text-align: justify;">
                                                        6. Perjanjian ini dibuat secara benar, jika terjadi sengketa akan
                                                        ditunjuk Pengadilan Jakarta Selatan untuk menanganinya.
                                                    </p>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input ms-1" type="checkbox"
                                                        id="agreementCheckbox" required>
                                                    <label class="form-check-label" for="agreementCheckbox">
                                                        Saya telah membaca dan menyetujui perjanjian ini
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        Anda harus menyetujui perjanjian sebelum melanjutkan
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-label-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
