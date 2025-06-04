@php
    $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">II. RIWAYAT KESEHATAN</h5>
            <p class="card-text">Berikan tanda centang pada daftar riwayat kesehatan di bawah ini yang pernah/sedang saudara
                alami!</p>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                    <div class="demo-inline-spacing">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ambeien" name="riwayat_kesehatan[]"
                                value="Ambeien/Wasir/Haemorrhoid">
                            <label class="form-check-label" for="ambeien">Ambeien/Wasir/Haemorrhoid</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="diabetes" name="riwayat_kesehatan[]"
                                value="Diabetes (Kencing Manis)">
                            <label class="form-check-label" for="diabetes">Diabetes (Kencing Manis)</label>
                        </div>

                        <!-- Tambahkan checkbox lainnya untuk kolom pertama -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="diare" name="riwayat_kesehatan[]"
                                value="Diare kronis">
                            <label class="form-check-label" for="diare">Diare kronis (berulang-ulang/Lama)</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="berat_badan" name="riwayat_kesehatan[]"
                                value="Penurunan berat badan">
                            <label class="form-check-label" for="berat_badan">Penurunan berat badan > 5 Kg/bulan</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="pendengaran" name="riwayat_kesehatan[]"
                                value="Gangguan pendengaran">
                            <label class="form-check-label" for="pendengaran">Gangguan pendengaran</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="penglihatan" name="riwayat_kesehatan[]"
                                value="Gangguan penglihatan">
                            <label class="form-check-label" for="penglihatan">Gangguan penglihatan</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="mental" name="riwayat_kesehatan[]"
                                value="Mental bermasalah">
                            <label class="form-check-label" for="mental">Mental/Kejiwaan bermasalah</label>
                        </div>



                    </div>
                </div>

                <!-- Kolom Kedua -->
                <div class="col-md-4">
                    <div class="demo-inline-spacing">

                        <!-- Tambahkan checkbox lainnya untuk kolom kedua -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cidera_kepala" name="riwayat_kesehatan[]"
                                value="Cidera kepala">
                            <label class="form-check-label" for="cidera_kepala">Cidera kepala</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="asma" name="riwayat_kesehatan[]"
                                value="Asma bronchial">
                            <label class="form-check-label" for="asma">Asma bronchial</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="batuk" name="riwayat_kesehatan[]"
                                value="Batuk kronis">
                            <label class="form-check-label" for="batuk">Batuk > 1 bulan</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="demam_thyroid" name="riwayat_kesehatan[]"
                                value="Demam Thyroid">
                            <label class="form-check-label" for="demam_thyroid">Demam Thyroid</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="maag" name="riwayat_kesehatan[]"
                                value="Maag">
                            <label class="form-check-label" for="maag">Maag (Gastritis)</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="jantung" name="riwayat_kesehatan[]"
                                value="Penyakit Jantung">
                            <label class="form-check-label" for="jantung">Penyakit Jantung</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="epilepsi" name="riwayat_kesehatan[]"
                                value="Epilepsi">
                            <label class="form-check-label" for="epilepsi">Ayan/Epilepsi</label>
                        </div>


                    </div>
                </div>

                {{-- Kolom Ketiga --}}
                <div class="col-md-4">
                    <div class="demo-inline-spacing">

                        <!-- Tambahkan checkbox lainnya untuk kolom kedua -->

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="vertigo" name="riwayat_kesehatan[]"
                                value="Vertigo">
                            <label class="form-check-label" for="vertigo">Pusing berputar (Vertigo)</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hipertensi" name="riwayat_kesehatan[]"
                                value="Hipertensi">
                            <label class="form-check-label" for="hipertensi">Tekanan darah tinggi</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hipotensi" name="riwayat_kesehatan[]"
                                value="Hipotensi">
                            <label class="form-check-label" for="hipotensi">Tekanan darah rendah</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="tbc" name="riwayat_kesehatan[]"
                                value="TBC">
                            <label class="form-check-label" for="tbc">Tuberkulosis (TBC)</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hepatitis" name="riwayat_kesehatan[]"
                                value="Hepatitis">
                            <label class="form-check-label" for="hepatitis">Hepatitis</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Input Tambahan -->
            <div class="row mt-2 mb-4">
                <div class=" col-md-6 form-group d-flex align-items-center">
                    <label class="form-label" for="lainnya" style="min-width: 100px;">Riwayat Operasi</label>
                    <input type="text" class="form-control form-control-sm flex-grow-1" id="lainnya"
                        placeholder="........">
                </div>

                <div class=" col-md-6 form-group d-flex align-items-center">
                    <label class="form-label" for="lainnya" style="min-width: 100px;">Lainnya</label>
                    <input type="text" class="form-control form-control-sm flex-grow-1" id="lainnya"
                        placeholder="........">
                </div>
            </div>

            {{-- Riwayat gaya hidup --}}
            <h5 class="card-title">III. RIWAYAT GAYA HIDUP / KEBIASAAN</h5>
            <p class="card-text">Lengkapi riwayat gaya hidup / kebiasaan dibawah ini!</p>
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

            {{-- Riwayat Obat --}}
            <h5 class="card-title">IV. RIWAYAT KONSUMSI OBAT TERATUR</h5>
            <P>Sebutkan jenis obat-obatan yang rutin saudara konsumsi beserta dosisnya !</P>
            {{-- Obat Hipertensi --}}
            <div class="row mb-2">
                <div class="col-md-12 d-flex align-items-center">
                    <label class="form-label me-3 mb-0" style="min-width: 120px;">1. Obat Hipertensi</label>
                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="olahraga" id="olahraga_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="olahraga_tidak">Tidak</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input me-2" type="radio" name="olahraga" id="olahraga_ya"
                                value="ya">
                            <label class="form-check-label me-2" for="olahraga_ya">Ya, Sebutkan</label>
                            <input type="text" class="form-control form-control-sm" style="width: 200px;"
                                id="frekuensi_olahraga" placeholder="Kali/minggu" disabled>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Obat Diabetes --}}
            <div class="row mb-2">
                <div class="col-md-12 d-flex align-items-center">
                    <label class="form-label me-3 mb-0" style="min-width: 120px;">2. Obat Diabetes/Kencing Manis</label>
                    <div class="d-flex align-items-center me-4">
                        <div class="form-check me-2">
                            <input class="form-check-input" type="radio" name="olahraga" id="olahraga_tidak"
                                value="tidak" checked>
                            <label class="form-check-label" for="olahraga_tidak">Tidak</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input me-2" type="radio" name="olahraga" id="olahraga_ya"
                                value="ya">
                            <label class="form-check-label me-2" for="olahraga_ya">Ya, Sebutkan</label>
                            <input type="text" class="form-control form-control-sm" style="width: 200px;"
                                id="frekuensi_olahraga" placeholder="Kali/minggu" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-6 d-flex align-items-center mb-4">
                <label class="form-label mb-0 me-2" for="lainnya" style="min-width: 100px;">3. Lainnya</label>
                <input type="text" class="form-control form-control-sm flex-grow-1" id="lainnya"
                    placeholder="........">
            </div>
            {{-- Riwayat Keluarga --}}
            <h5 class="card-title">VII. RIWAYAT KESEHATAN KELUARGA</h5>
            <p class="card-text">Berikan tanda centang pada daftar riwayat kesehatan keluarga dibawah ini!</p>
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

            {{-- Riwayat Linkgungan Keluarga --}}
            <div class="row">
                <!-- Kolom Pertama -->
                <div class="col-md-4">
                    <div class="demo-inline-spacing">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ambeien" name="riwayat_kesehatan[]"
                                value="Ambeien/Wasir/Haemorrhoid">
                            <label class="form-check-label" for="ambeien">Terpapar Asap</label>
                        </div>



                    </div>
                </div>

                <!-- Kolom Kedua -->
                <div class="col-md-4">
                    <div class="demo-inline-spacing">

                        <!-- Tambahkan checkbox lainnya untuk kolom kedua -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cidera_kepala"
                                name="riwayat_kesehatan[]" value="Cidera kepala">
                            <label class="form-check-label" for="cidera_kepala">Cidera kepala</label>
                        </div>



                    </div>
                </div>


            </div>





        </div>
    </div>

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
    </script>

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
@endsection
