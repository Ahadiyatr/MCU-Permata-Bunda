@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
    <h4>Data Pasien</h4>
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

    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 mb-4">
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="defaultFormControlInput"
                                    placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div>
                                <label for="defaultFormControlInput" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="defaultFormControlInput"
                                    placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
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

                        <div class="col-md-6 mb-4">
                            <label class="form-label" for="basic-default-fullname">Tempat Lahir</label>
                            <input type="text" class="form-control" id="basic-default-fullname" />
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="flatpickr-date" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label" for="basic-default-message">Alamat</label>
                            <textarea id="basic-default-message" class="form-control" placeholder="Masukkan alamat tempat tinggal anda saat ini"></textarea>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label" for="basic-default-phone">Nomor Telepon</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" />
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label" for="basic-default-phone">Nomor Telepon Kerabat</label>
                            <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" />
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
