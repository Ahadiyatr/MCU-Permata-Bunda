@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="card mb-4" style="background: linear-gradient(to right, #00b894, #00cec9); color: white;">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle me-3"
                        width="60" />
                    <div>
                        <h5 class="mb-0">Detail Hasil Medical Check-Up | Karyawan</h5>
                        <small>Tanggal diperbaharui: 02 Jun 2025</small>
                        <div><strong>Bayu Saputra</strong> &nbsp;
                            <a href="#" class="text-white">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalDetailData">
                                    Detail data
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-outline-light">Unduh</a>
            </div>
        </div>

        <!-- Tabel Pemeriksaan -->
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Hasil Pemeriksaan</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama Pemeriksaan</th>
                            <th>Hasil</th>
                            <th>Nilai Normal</th>
                            <th>Satuan</th>
                            <th>Rekomendasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh data Gigi -->
                        <tr>
                            <td colspan="5"><strong>Riwayat Kesehatan</strong></td>
                        </tr>
                        <tr>
                            <td>Gigi Karies</td>
                            <td class="text-danger">Ya (Gigi berlubang)</td>
                            <td>Tidak</td>
                            <td></td>
                            <td>Ikuti pemeriksaan lanjutan di Puskesmas dan batasi makanan serta minuman manis</td>
                        </tr>
                        <tr>
                            <td>Gigi hilang/dicabut</td>
                            <td class="text-danger">Ya (Ada gigi hilang/dicabut)</td>
                            <td>Tidak</td>
                            <td></td>
                            <td>Ikuti perawatan lanjutan di Puskesmas atau RS rujukan</td>
                        </tr>

                        <!-- Jaringan Periodontal -->
                        <tr>
                            <td colspan="5"><strong>Jaringan Periodontal</strong></td>
                        </tr>
                        <tr>
                            <td>Pocket Periodontal</td>
                            <td class="text-danger">Ya (Ada pocket gusi)</td>
                            <td>Tidak</td>
                            <td></td>
                            <td>Ikuti perawatan lanjutan di Puskesmas atau RS rujukan</td>
                        </tr>
                        <tr>
                            <td>Gigi Goyang</td>
                            <td class="text-success">Tidak (Tidak ada gigi goyang)</td>
                            <td>Tidak</td>
                            <td></td>
                            <td>Sikat gigi dua kali sehari, setelah makan pagi dan sebelum tidur malam</td>
                        </tr>

                        <!-- Gizi -->
                        <tr>
                            <td colspan="5"><strong>Gizi (IMT)</strong></td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>62.4</td>
                            <td></td>
                            <td>kg</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>155</td>
                            <td></td>
                            <td>cm</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Index Massa Tubuh (IMT)</td>
                            <td class="text-success">25.97 (Normal)</td>
                            <td>18.5 – 25.0</td>
                            <td></td>
                            <td>Pertahankan berat badan dan lakukan aktivitas fisik minimal 30 menit setiap hari</td>
                        </tr>
                        <tr>
                            <td>Lingkar Perut</td>
                            <td class="text-danger">84 (Obesitas Sentral)</td>
                            <td>
                                < 80</td>
                            <td>cm</td>
                            <td>Seimbangkan diet dan konsultasi gizi ke Puskesmas</td>
                        </tr>

                        <!-- Aktivitas Fisik -->
                        <tr>
                            <td colspan="5"><strong>Aktivitas Fisik</strong></td>
                        </tr>
                        <tr>
                            <td>Tingkat Aktivitas Fisik</td>
                            <td class="text-danger">1 (Aktivitas Fisik Kurang)</td>
                            <td>>= 150</td>
                            <td></td>
                            <td>Pilih aktivitas fisik yang disukai dan lakukan bertahap hingga 30 menit setiap hari</td>
                        </tr>

                        <!-- Telinga dan Mata -->
                        <tr>
                            <td colspan="5"><strong>Telinga dan Mata</strong></td>
                        </tr>
                        <tr>
                            <td>Tajam pendengaran</td>
                            <td class="text-success">Normal</td>
                            <td>Normal</td>
                            <td></td>
                            <td>Batasi penggunaan earphone dan volume besar dalam waktu lama</td>
                        </tr>
                        <tr>
                            <td>Snellen Chart</td>
                            <td class="text-success">Visus 6/6 – 6/12</td>
                            <td>Normal (6/6 – 6/12)</td>
                            <td></td>
                            <td>Batasi aktivitas melihat dekat, jaga jarak saat menggunakan gadget</td>
                        </tr>

                        <!-- Dan seterusnya... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <!-- Modal Detail Data -->
    <div class="modal fade" id="modalDetailData" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-2">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title fw-bold" id="modalDetailLabel">Detail data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>NIK</strong><br> 6474035705940003</p>
                            <p class="mb-1"><strong>Jenis Kelamin</strong><br> PEREMPUAN</p>
                            <p class="mb-1"><strong>Tanggal Pemeriksaan</strong><br> 02 Jun 2025</p>
                            <p class="mb-1"><strong>Alamat Pemeriksaan</strong><br> Sebamban,
                                Kec. Sungai Loban</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Tanggal Lahir/Usia</strong><br> 17 May 1994</p>
                            <p class="mb-1"><strong>No HP</strong><br> 6282251621973</p>
                            <p class="mb-1"><strong>Lokasi Pemeriksaan</strong><br> Sebamban,
                                Kec. Sungai Loban</p>
                            <p class="mb-1"><strong>Paket Pemeriksaan</strong><br> Perempuan 30-39 thn (Dewasa)</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-success w-100" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection
