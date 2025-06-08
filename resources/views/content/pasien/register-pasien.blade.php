@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register Basic - Pages')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('page-style')
    @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/pages-auth.js'])
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">

                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-6">
                            <a href="{{ url('/') }}" class="app-brand-link">
                                <span class="app-brand-logo demo">@include('_partials.macros', ['height' => 20, 'withbg' => 'fill: #fff;'])</span>
                                <span
                                    class="app-brand-text demo text-heading fw-bold">{{ config('variables.templateName') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1">Adventure starts here 🚀</h4>
                        <p class="mb-6">Make your app management easy and fun!</p>

                        <form id="formAuthentication" class="mb-6" action="{{ url('/') }}" method="GET">
                            <div class="mb-6">
                                <label for="username" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter your username" autofocus>
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

                            <div class="my-8">
                                <div class="form-check mb-0 ms-2">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">
                                Registrasi
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Pasien Lama</span>
                            <a href="{{ url('auth/login-basic') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>

                        <div class="divider my-6">
                            <div class="divider-text">or</div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-facebook me-1_5">
                                <i class="tf-icons ti ti-brand-facebook-filled"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-twitter me-1_5">
                                <i class="tf-icons ti ti-brand-twitter-filled"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-github me-1_5">
                                <i class="tf-icons ti ti-brand-github-filled"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-google-plus">
                                <i class="tf-icons ti ti-brand-google-filled"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>
@endsection
