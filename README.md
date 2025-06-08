# 🩺 Medical Check-Up System — Progress Log

Catatan perkembangan sistem analisis hasil Medical Check-Up karyawan menggunakan Laravel + Template Vuexy.

---

## ✅ To Do List

| No  | Fitur                                             | Status      | Keterangan                                                               |
| --- | ------------------------------------------------- | ----------- | ------------------------------------------------------------------------ |
| 1.  | Hasil Barcode Detail MCU Karyawan (View)          | Progress,   | view masih belum di sesuaikan dengan point-point yang ada                |
| 2.  | Tampilan Perusahaan                               | x           |                                                                          |
| 3.  | Unduh Hasil MCU (Perusahaan)                      | x           | Fitur untuk mengunduh hasil MCU seluruh karyawan dalam satu file.        |
| 4.  | Upload Logo Klinik, Sidebar Logo, Nama & Favicons | ✅ Selesai  | Logo klinik tampil di header, sidebar (text png), dan favicon browser.   |
| 5.  | Riwayat Pengisian Pasien                          | On Progress | Menampilkan riwayat pengisian form MCU oleh pasien maupun petugas medis. |

---

## Route

- Hasil Barcode Detail MCI Karyawan (View) : '/medical-records/details-mcu'

## 🛠️ Teknologi

- Framework: **Laravel**
- Template: **Vuexy Admin Template**
- Export: **PDF via DOMPDF**
- Komponen Blade Dinamis + Kondisional Layout
