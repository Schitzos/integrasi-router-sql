<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index');
//Master Jabatan Dinas
Route::get('/jabatan', 'JabatanController@index');
Route::get('/jabatan/showdata/{id}', 'JabatanController@showdata');
Route::get('/jabatan/showprogram/{id}', 'JabatanController@showprogram');
Route::post('/jabatan', 'JabatanController@store');
Route::post('/jabatan/update', 'JabatanController@update');
Route::get('/jabatan/delete/{id}', 'JabatanController@destroy');
//Master Jabatan Sistem
Route::get('/jabut', 'JabatanUserController@index');
Route::get('/jabut/showdata/{id}', 'JabatanUserController@showdata');
Route::get('/jabut/showprogram/{id}', 'JabatanUserController@showprogram');
Route::post('/jabut', 'JabatanUserController@store');
Route::post('/jabut/update', 'JabatanUserController@update');
Route::get('/jabut/delete/{id}', 'JabatanUserController@destroy');
//Master Golongan
Route::get('/golongan', 'GolonganController@index');
Route::get('/golongan/showdata/{id}', 'GolonganController@showdata');
Route::get('/golongan/showprogram/{id}', 'GolonganController@showprogram');
Route::post('/golongan', 'GolonganController@store');
Route::post('/golongan/update', 'GolonganController@update');
Route::get('/golongan/delete/{id}', 'GolonganController@destroy');
//Master Bidang
Route::get('/bidang', 'BidangController@index');
Route::get('/bidang/showdata/{id}', 'BidangController@showdata');
Route::post('/bidang', 'BidangController@store');
Route::post('/bidang/update', 'BidangController@update');
Route::get('/bidang/delete/{id}', 'BidangController@destroy');
//Master Seksi
Route::get('/seksi', 'SeksiController@index');
Route::get('/seksi/showdata/{id}', 'SeksiController@showdata');
Route::post('/seksi', 'SeksiController@store');
Route::post('/seksi/update', 'SeksiController@update');
Route::get('/seksi/delete/{id}', 'SeksiController@destroy');
//Master Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/showdata/{id}', 'PegawaiController@showdata');
Route::get('/pegawai/showbidang/{id}', 'PegawaiController@showbidang');
Route::get('/pegawai/showseksi/{id}', 'PegawaiController@showseksi');
Route::post('/pegawai', 'PegawaiController@store');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/delete/{id}', 'PegawaiController@destroy');
//Master Program
Route::get('/program', 'ProgramController@index');
Route::get('/program/showdata/{id}', 'ProgramController@showdata');
Route::post('/program', 'ProgramController@store');
Route::post('/program/update', 'ProgramController@update');
Route::get('/program/delete/{id}', 'ProgramController@destroy');

//Master Kegiatan
Route::get('/kegiatan', 'KegiatanController@index');
Route::get('/kegiatan/showdata/{id}', 'KegiatanController@showdata');
Route::get('/kegiatan/showprogram/{id}', 'KegiatanController@showprogram');
Route::get('/kegiatan/showppk/{id}', 'KegiatanController@showppk');
Route::get('/kegiatan/showpptk/{id}', 'KegiatanController@showpptk');
Route::post('/kegiatan', 'KegiatanController@store');
Route::post('/kegiatan/update', 'KegiatanController@update');
Route::get('/kegiatan/delete/{id}', 'KegiatanController@destroy');
Route::get('/kegiatan/dpa/{id}', 'KegiatanController@dpa');
Route::post('/kegiatan/unggahdpa', 'KegiatanController@uploaddpa');
Route::get('/kegiatan/hapusdpa/{id}', 'KegiatanController@hapusdpa');

//Master Kecamatan
Route::get('/kecamatan', 'KecamatanController@index');
Route::get('/kecamatan/showdata/{id}', 'KecamatanController@showdata');
Route::post('/kecamatan', 'KecamatanController@store');
Route::post('/kecamatan/update', 'KecamatanController@update');
Route::get('/kecamatan/delete/{id}', 'KecamatanController@destroy');
//Master Desa
Route::get('/desa', 'DesaController@index');
Route::get('/desa/showdata/{id}', 'DesaController@showdata');
Route::post('/desa', 'DesaController@store');
Route::post('/desa/update', 'DesaController@update');
Route::get('/desa/delete/{id}', 'DesaController@destroy');
//Master Kontraktor
Route::get('/maskon', 'KontraktorController@index');
Route::get('/maskon/showdata/{id}', 'KontraktorController@showdata');
Route::post('/maskon', 'KontraktorController@store');
Route::post('/maskon/update', 'KontraktorController@update');
Route::get('/maskon/delete/{id}', 'KontraktorController@destroy');
//Master Konsultan
Route::get('/sultan', 'KonsultanController@index');
Route::get('/sultan/showdata/{id}', 'KonsultanController@showdata');
Route::post('/sultan', 'KonsultanController@store');
Route::post('/sultan/update', 'KonsultanController@update');
Route::get('/sultan/delete/{id}', 'KonsultanController@destroy');
//Paket
Route::get('/paket', 'PaketController@index');
Route::get('/paket/create', 'PaketController@create');
Route::get('/paket/showkegiatan/{id}', 'PaketController@showkegiatan');
Route::get('/paket/showpphp/{id}', 'PaketController@showpphp');
Route::get('/paket/showangpp/{id}', 'PaketController@showangpp');
Route::get('/paket/showanggota/{id}', 'PaketController@showanggota');
Route::get('/paket/showkordinator/{id}', 'PaketController@showkordinator');
Route::get('/paket/showdpa/{id}', 'PaketController@showdpa');
Route::get('/paket/showdesa/{id}', 'PaketController@showdesa');
Route::get('/paket/showgrafik/{id}', 'PaketController@showgrafik');
Route::get('/paket/showperforma/{id}', 'PaketController@showperforma');
Route::get('/paket/showmini/{id}', 'PaketController@showperforma');
Route::get('/paket/showslider/{id}', 'PaketController@showslider');
Route::post('/paket', 'PaketController@store');
Route::get('/paket/{id}/edit', 'PaketController@edit');
Route::post('/paket/update', 'PaketController@update');
Route::get('/showdata/{id}', 'PaketController@showdata');
Route::get('/paket/delete/{id}', 'PaketController@destroy');
//PSatu
Route::get('/psatu/{id}/{ik}/{is}/filter', 'PSatuController@index');
Route::get('/psatu/showkegiatan/{id}', 'PSatuController@showkegiatan');
Route::post('/psatu', 'PSatuController@store');

//Grafik
Route::get('/grafik_p4', 'PEmpatController@grafik');
Route::get('/data_grafik_r2/{id}', 'PEmpatController@datar2');
Route::get('/data_grafik_r3/{id}', 'PEmpatController@datar3');

//PEmpat
Route::get('/pempat/{id}/{ib}', 'PEmpatController@index');
//RDua
Route::get('/rdua', 'RduaController@index');
Route::post('/rdua_update', 'RduaController@update');
//RTiga
Route::get('/rtiga', 'RtigaController@index');
Route::post('/rtiga_update', 'RtigaController@update');
Route::get('/rduatiga/cetaknya', 'RtigaController@cetaknya');
//Kendali
Route::get('/kendali/{id}/{ik}/{ib}', 'KendaliController@index');
Route::post('/kendali', 'KendaliController@simpan');
Route::post('/kendali/update', 'KendaliController@setuju');
Route::get('/kendali/delete/{id}', 'KendaliController@hapus');

//kendali_b
Route::get('/kendali_bendahara/{id}/{ik}/{ib}', 'KendaliController@index_bendahara');
Route::post('/kendali', 'KendaliController@simpan_b');
Route::post('/kendali/update_b', 'KendaliController@setuju_b');
Route::get('/kendali/delete_b/{id}', 'KendaliController@hapus_b');

//Detail Status Paket
Route::get('/status/{id}', 'StatusController@index');
Route::get('/status/showadendum/{id}', 'StatusController@showadendum');
Route::post('/status', 'StatusController@simpanadendum');
Route::post('/status/buka', 'StatusController@bukakunci');
Route::get('/status/delete/{id}', 'StatusController@destroy');
//Detail Dokumentasi
Route::get('/foto/{id}', 'FotoController@index');
Route::post('/foto', 'FotoController@store');
Route::post('/foto/buka', 'FotoController@bukakunci');
Route::get('/foto/delete/{id}', 'FotoController@destroy');
Route::get('/video/{id}', 'VideoController@index');
Route::post('/video', 'VideoController@store');
Route::post('/video/buka', 'VideoController@bukakunci');
Route::get('/video/delete/{id}', 'VideoController@destroy');
Route::post('/video/kategori', 'VideoController@simpankategori');
Route::get('/kualitas/{id}', 'KualitasController@index');
Route::post('/kualitas', 'KualitasController@store');
Route::post('/kualitas/buka', 'KualitasController@bukakunci');
Route::get('/kualitas/delete/{id}', 'KualitasController@destroy');
Route::post('/kualitas/kategori', 'KualitasController@simpankategori');
Route::get('/kunjungan/{id}', 'KunjunganController@index');
Route::post('/kunjungan', 'KunjunganController@store');
Route::post('/kunjungan/buka', 'KunjunganController@bukakunci');
Route::get('/kunjungan/delete/{id}', 'KunjunganController@destroy');
Route::post('/kunjungan/kategori', 'KunjunganController@simpankategori');
//Detail RAB
Route::get('/hasillelang/{id}', 'HasilLelangController@index');
Route::post('/hasillelang/bhap', 'HasilLelangController@simpanbahp');
Route::get('/hasillelang/{id}/bahp', 'HasilLelangController@downloadbahp');
Route::get('/hasillelang/bahp/{id}', 'HasilLelangController@hapusbahp');
Route::post('/hasillelang/nego', 'HasilLelangController@simpannego');
Route::get('/hasillelang/{id}/nego', 'HasilLelangController@downloadnego');
Route::get('/hasillelang/nego/{id}', 'HasilLelangController@hapusnego');
Route::post('/hasillelang/tawar', 'HasilLelangController@simpanpenawaran');
Route::get('/hasillelang/{id}/tawar', 'HasilLelangController@downloadpenawaran');
Route::get('/hasillelang/tawar/{id}', 'HasilLelangController@hapuspenawaran');
Route::post('/hasillelang/hps', 'HasilLelangController@simpanhps');
Route::get('/hasillelang/{id}/hps', 'HasilLelangController@downloadhps');
Route::get('/hasillelang/hps/{id}', 'HasilLelangController@hapushps');

Route::get('/rab/{id}', 'RABController@index');
Route::post('/rab', 'RABController@UnggahRAB');
Route::get('/isian/{id}', 'IsianController@index');
Route::post('/isian/jenis', 'IsianController@UnggahJenis');
Route::post('/isian/rencana', 'IsianController@UnggahRencana');
Route::post('/rab/kontrak', 'RABController@UploadRAB');
Route::get('/isian/form/{id}', 'IsianController@downloadtemplate');
Route::get('/progress/{id}', 'RABProgressController@index');
Route::get('/progress/{id}/showgrafik', 'RABProgressController@showgrafik');
Route::get('/rekaprab/{id}', 'RekapProgressController@index');
Route::get('/gantchart/{id}', 'GantChartController@index');
Route::get('/gantchart/{id}/showgrafik', 'GantChartController@showgrafik');
Route::get('/gantchart/{id}/showjdawal', 'GantChartController@showjdawal');
Route::get('/mcnol/{id}', 'MCNolController@index');
//Detail RKS
//Dokimen RKS
Route::get('/dokrks/{id}', 'DokumenRKSController@index');
Route::post('/dokrks', 'DokumenRKSController@UploadPDF');
Route::get('/dokrks/downloadfile/{id}', 'DokumenRKSController@unduh');
Route::get('/dokrks/hapus/{id}', 'DokumenRKSController@hapus');
//Outline Spek
Route::get('/outline/{id}', 'OutlineController@index');
Route::get('/outline/{id}', 'OutlineController@index');
Route::get('/outline/showrab/{id}', 'OutlineController@showrab');
Route::get('/outline/showdatastruktur/{id}', 'OutlineController@showdatastruktur');
Route::get('/outline/showstruktur/{id}', 'OutlineController@showstruktur');
Route::post('/outline/simpanstruktur', 'OutlineController@simpanstruktur');
Route::post('/outline/ubahstruktur', 'OutlineController@ubahstruktur');
Route::get('/outline/showdataarsitektur/{id}', 'OutlineController@showdataarsitektur');
Route::get('/outline/showarsitektur/{id}', 'OutlineController@showarsitektur');
Route::post('/outline/simpanarsitektur', 'OutlineController@simpanarsitektur');
Route::post('/outline/ubaharsitektur', 'OutlineController@ubaharsitektur');
Route::get('/outline/showdatamekanikal/{id}', 'OutlineController@showdatamekanikal');
Route::get('/outline/showmekanikal/{id}', 'OutlineController@showmekanikal');
Route::post('/outline/simpanmekanikal', 'OutlineController@simpanmekanikal');
Route::post('/outline/ubahmekanikal', 'OutlineController@ubahmekanikal');
Route::get('/outline/showdataelektrikal/{id}', 'OutlineController@showdataelektrikal');
Route::get('/outline/showelektrikal/{id}', 'OutlineController@showelektrikal');
Route::post('/outline/simpanelektrikal', 'OutlineController@simpanelektrikal');
Route::post('/outline/ubahelektrikal', 'OutlineController@ubahelektrikal');
Route::get('/outline/showdataplumbing/{id}', 'OutlineController@showdataplumbing');
Route::get('/outline/showplumbing/{id}', 'OutlineController@showplumbing');
Route::post('/outline/simpanplumbing', 'OutlineController@simpanplumbing');
Route::post('/outline/ubahplumbing', 'OutlineController@ubahplumbing');
Route::get('/outline/showdatalain/{id}', 'OutlineController@showdatalain');
Route::get('/outline/showlain/{id}', 'OutlineController@showlain');
Route::post('/outline/simpanlain', 'OutlineController@simpanlain');
Route::post('/outline/ubahlain', 'OutlineController@ubahlain');
//Persetujuan
Route::get('/persetujuan/{id}', 'PersetujuanController@index');
Route::get('/persetujuan/showrab/{id}', 'PersetujuanController@showrab');
Route::get('/persetujuan/showdatastruktur/{id}', 'PersetujuanController@showdatastruktur');
Route::get('/persetujuan/showstruktur/{id}', 'PersetujuanController@showstruktur');
Route::post('/persetujuan/simpanstruktur', 'PersetujuanController@simpanstruktur');
Route::post('/persetujuan/ubahstruktur', 'PersetujuanController@ubahstruktur');
Route::get('/persetujuan/showdataarsitektur/{id}', 'PersetujuanController@showdataarsitektur');
Route::get('/persetujuan/showarsitektur/{id}', 'PersetujuanController@showarsitektur');
Route::post('/persetujuan/simpanarsitektur', 'PersetujuanController@simpanarsitektur');
Route::post('/persetujuan/ubaharsitektur', 'PersetujuanController@ubaharsitektur');
Route::get('/persetujuan/showdatamekanikal/{id}', 'PersetujuanController@showdatamekanikal');
Route::get('/persetujuan/showmekanikal/{id}', 'PersetujuanController@showmekanikal');
Route::post('/persetujuan/simpanmekanikal', 'PersetujuanController@simpanmekanikal');
Route::post('/persetujuan/ubahmekanikal', 'PersetujuanController@ubahmekanikal');
Route::get('/persetujuan/showdataelektrikal/{id}', 'PersetujuanController@showdataelektrikal');
Route::get('/persetujuan/showelektrikal/{id}', 'PersetujuanController@showelektrikal');
Route::post('/persetujuan/simpanelektrikal', 'PersetujuanController@simpanelektrikal');
Route::post('/persetujuan/ubahelektrikal', 'PersetujuanController@ubahelektrikal');
Route::get('/persetujuan/showdataplumbing/{id}', 'PersetujuanController@showdataplumbing');
Route::get('/persetujuan/showplumbing/{id}', 'PersetujuanController@showplumbing');
Route::post('/persetujuan/simpanplumbing', 'PersetujuanController@simpanplumbing');
Route::post('/persetujuan/ubahplumbing', 'PersetujuanController@ubahplumbing');
Route::get('/persetujuan/showdatalain/{id}', 'PersetujuanController@showdatalain');
Route::get('/persetujuan/showlain/{id}', 'PersetujuanController@showlain');
Route::post('/persetujuan/simpanlain', 'PersetujuanController@simpanlain');
Route::post('/persetujuan/ubahlain', 'PersetujuanController@ubahlain');
Route::post('/persetujuan/unggah', 'PersetujuanController@UploadPDF');
Route::get('/persetujuan/unduh/{id}', 'PersetujuanController@unduh');

Route::get('/teshasil/{id}', 'HasilTesController@index');
Route::get('/teshasil/showdatastruktur/{id}', 'HasilTesController@showdatastruktur');
Route::get('/teshasil/showstruktur/{id}', 'HasilTesController@showstruktur');
Route::post('/teshasil/simpanstruktur', 'HasilTesController@simpanstruktur');
Route::post('/teshasil/ubahstruktur', 'HasilTesController@ubahstruktur');
Route::get('/teshasil/showdataarsitektur/{id}', 'HasilTesController@showdataarsitektur');
Route::get('/teshasil/showarsitektur/{id}', 'HasilTesController@showarsitektur');
Route::post('/teshasil/simpanarsitektur', 'HasilTesController@simpanarsitektur');
Route::post('/teshasil/ubaharsitektur', 'HasilTesController@ubaharsitektur');
Route::get('/teshasil/showdatamekanikal/{id}', 'HasilTesController@showdatamekanikal');
Route::get('/teshasil/showmekanikal/{id}', 'HasilTesController@showmekanikal');
Route::post('/teshasil/simpanmekanikal', 'HasilTesController@simpanmekanikal');
Route::post('/teshasil/ubahmekanikal', 'HasilTesController@ubahmekanikal');
Route::get('/teshasil/showdataelektrikal/{id}', 'HasilTesController@showdataelektrikal');
Route::get('/teshasil/showelektrikal/{id}', 'HasilTesController@showelektrikal');
Route::post('/teshasil/simpanelektrikal', 'HasilTesController@simpanelektrikal');
Route::post('/teshasil/ubahelektrikal', 'HasilTesController@ubahelektrikal');
Route::get('/teshasil/showdataplumbing/{id}', 'HasilTesController@showdataplumbing');
Route::get('/teshasil/showplumbing/{id}', 'HasilTesController@showplumbing');
Route::post('/teshasil/simpanplumbing', 'HasilTesController@simpanplumbing');
Route::post('/teshasil/ubahplumbing', 'HasilTesController@ubahplumbing');
Route::get('/teshasil/showdatalain/{id}', 'HasilTesController@showdatalain');
Route::get('/teshasil/showlain/{id}', 'HasilTesController@showlain');
Route::post('/teshasil/simpanlain', 'HasilTesController@simpanlain');
Route::post('/teshasil/ubahlain', 'HasilTesController@ubahlain');
Route::post('/teshasil/unggah', 'HasilTesController@UploadPDF');
Route::get('/teshasil/unduh/{id}', 'HasilTesController@unduh');

Route::get('/jaminan/{id}', 'JaminanController@index');
Route::get('/jaminan/showdata/{id}', 'JaminanController@showdata');
Route::get('/jaminan/showdetail/{id}', 'JaminanController@showdetail');
Route::post('/jaminan/simpan', 'JaminanController@simpan');
Route::post('/jaminan/ubah', 'JaminanController@ubah');
Route::post('/jaminan/unggah', 'JaminanController@UploadPDF');
Route::get('/jaminan/unduh/{id}', 'JaminanController@unduh');


//Gambar
Route::get('/perencanaan/{id}', 'PerencanaanController@index');
Route::get('/perencanaan/downloadfile/{id}', 'PerencanaanController@downloadfile');
Route::get('/perencanaan/hapus/{id}', 'PerencanaanController@hapus');
Route::post('/perencanaan', 'PerencanaanController@UploadPDF');

Route::get('/shopdraw/{id}', 'ShopDrawController@index');
Route::get('/shopdraw/showdata/{id}', 'ShopDrawController@showdata');
Route::get('/shopdraw/showdetail/{id}', 'ShopDrawController@showdetail');
Route::post('/shopdraw/simpan', 'ShopDrawController@simpan');
Route::post('/shopdraw/ubah', 'ShopDrawController@ubah');
Route::post('/shopdraw/unggah', 'ShopDrawController@UploadPDF');

Route::get('/asbuilt/{id}', 'AsbuiltController@index');
Route::get('/asbuilt/showdata/{id}', 'AsbuiltController@showdata');
Route::get('/asbuilt/showdetail/{id}', 'AsbuiltController@showdetail');
Route::post('/asbuilt/simpan', 'AsbuiltController@simpan');
Route::post('/asbuilt/ubah', 'AsbuiltController@ubah');
Route::post('/asbuilt/unggah', 'AsbuiltController@UploadPDF');
Route::post('/asbuilt/uplod', 'AsbuiltController@UploadCAD');

//Pelaksanaan 
//Sop Pekerjaan
Route::get('/soppek/{id}', 'SOPPekerjaanController@index');
Route::get('/soppek/showdata/{id}', 'SOPPekerjaanController@showdata');
Route::get('/soppek/showdetail/{id}', 'SOPPekerjaanController@showdetail');
Route::post('/soppek/simpan', 'SOPPekerjaanController@simpan');
Route::post('/soppek/ubah', 'SOPPekerjaanController@ubah');
Route::post('/soppek/unggah', 'SOPPekerjaanController@UploadPDF');
Route::get('/soppek/unduh/{id}', 'SOPPekerjaanController@unduh');

//dowload from
Route::post('/soppek', 'SOPController@store');
Route::get('/form/{id}', 'DowloadFormController@index');

Route::get('/pengendalian/{id}', 'PengendalianController@index');
Route::get('/pengendalian/unduh/{id}', 'PengendalianController@unduhpengendalian');
Route::post('/pengendalian', 'PengendalianController@store');
Route::get('/lapharian/{id}', 'LapHarianController@index');
Route::get('/lapharian/unduh/{id}', 'LapHarianController@unduh');
Route::get('/lapharian/downloadfile/{id}', 'LapHarianController@downloadfile');
Route::get('/lapharian/hapus/{id}', 'LapHarianController@hapus');
Route::post('/lapharian', 'LapHarianController@UploadPDF');
Route::get('/minglap/{id}', 'LapMingguanController@index');
Route::get('/minglap/unduh/{id}/{minggu1}/{minggu2}', 'LapMingguanController@unduh');
Route::get('/bulap/{id}', 'LapBulananController@index');
Route::get('/bulap/unduh/{id}/{bulan}', 'LapBulananController@unduh');
Route::get('/jaked/{id}', 'JadwalKedatanganController@index');
Route::get('/jaked/showdata/{id}', 'JadwalKedatanganController@showdata');
Route::get('/jaked/showrab/{id}', 'JadwalKedatanganController@showrab');
Route::post('/jaked', 'JadwalKedatanganController@store');
Route::post('/jaked/ubah', 'JadwalKedatanganController@update');
Route::post('/jaked/unggah', 'JadwalKedatanganController@UploadPDF');
Route::get('/jaked/unduh/{id}', 'JadwalKedatanganController@unduh');

Route::get('/rapat/{id}', 'RapatController@index');
Route::get('/rapat/showdata/{id}', 'RapatController@showdata');
Route::get('/rapat/showdetail/{id}', 'RapatController@showdetail');
Route::post('/rapat', 'RapatController@simpan');
Route::post('/rapat/ubah', 'RapatController@ubah');
Route::post('/rapat/unggah', 'RapatController@UploadPDF');
Route::get('/rapat/unduh/{id}', 'RapatController@unduh');

//Keuangan
Route::get('/kontrak/{id}', 'UangKontrakController@index');
Route::get('/muka/{id}', 'UangMukaController@index');
Route::get('/realisasi/{id}', 'UangRealisasiController@index');
Route::get('/realisasi/{id}/edit', 'UangRealisasiController@showdata');
Route::post('/realisasi', 'UangRealisasiController@store');
Route::post('/realisasi/update', 'UangRealisasiController@update');
Route::get('/jamuang/{id}', 'UangJaminanController@index');
//Serah Terima
Route::get('/pertama/{id}', 'SerahPertamaController@index');
Route::post('/pertama', 'SerahPertamaController@filterlaporan');
Route::post('/pertama/uplod', 'SerahPertamaController@UploadPDF');
Route::get('/pertama/downloadfile/{id}', 'SerahPertamaController@downloadfile');
Route::get('/pertama/{id}/{tgl1}/{tgl2}/{tgl3}/{tgl4}/{tgl5}/{tgl6}/{nomor1}/{nomor2}/{nomor3}/{nomor4}/cetak', 'SerahPertamaController@cetak');
Route::get('/pemeliharaan/{id}', 'UangMukaController@index');
Route::get('/terakhir/{id}', 'SerahTerakhirController@index');
Route::post('/terakhir', 'SerahTerakhirController@filterlaporan');
Route::post('/terakhir/uplod', 'SerahTerakhirController@UploadPDF');
Route::get('/terakhir/downloadfile/{id}', 'SerahTerakhirController@downloadfile');
Route::get('/terakhir/{id}/{tgl1}/{tgl2}/{tgl3}/{tgl4}/{tgl5}/{tgl6}/{nomor1}/{nomor2}/{nomor3}/{nomor4}/cetak', 'SerahTerakhirController@cetak');

// pengaturan
Route::get('/kalender/{id}', 'KalenderController@index');
Route::get('/kalender/showdata/{id}', 'KalenderController@showdata');
Route::get('/kalender/showkalender/{id}', 'KalenderController@showkalender');
Route::get('/kalender/showdetail/{id}', 'KalenderController@showdetail');
Route::get('/kalender/showpaket/{id}', 'KalenderController@showpaket');
Route::post('/kalender', 'KalenderController@store');
Route::post('/kalender/update', 'KalenderController@update');
Route::get('/pesan', 'PesanController@index');
Route::post('/pesan/store', 'PesanController@store');
Route::get('/lender/{id}', 'KalenderController@master');
Route::post('/lender', 'KalenderController@store');
Route::post('/lender/update', 'KalenderController@update');
Route::get('/lender/showdata/{id}', 'KalenderController@showdata');
Route::get('/psan', 'PesanController@master');
// profil & password
// Route::get('/profil', 'ProfilController@index');

Route::get('libur', 'LiburController@index');
Route::post('libur', 'LiburController@store');
Route::post('libur/update', 'LiburController@update');
Route::get('libur/showdata/{id}', 'LiburController@showdata');
Route::get('libur/delete/{id}', 'LiburController@destroy');

//Rekening
Route::get('rekening', 'RekeningController@index');
Route::post('rekening', 'RekeningController@store');
Route::post('rekening/update', 'RekeningController@update');
Route::get('rekening/showdata/{id}', 'RekeningController@showdata');
Route::get('rekening/delete/{id}', 'RekeningController@destroy');
Route::get('rekening/getTindakan', 'RekeningController@getTindakan');

//Perjalanan Dinas//
Route::get('dalam', 'DalamController@index');
Route::get('dalam/showpengikut/{id}', 'DalamController@showpengikut');
Route::get('dalam/showdata/{id}', 'DalamController@showdata');
Route::get('dalam/showkegiatan/{id}', 'DalamController@showkegiatan');
Route::get('dalam/showdataubah/{id}/{ig}', 'DalamController@showdataubah');
Route::get('dalam/showdata/{id}', 'DalamController@showdata');
Route::get('dalam/showdataubah/{id}/{ig}', 'DalamController@showdataubah');
Route::get('dalam/create', 'DalamController@create');
Route::post('dalam', 'DalamController@store');
Route::get('dalam/{id}/edit', 'DalamController@edit');
Route::post('dalam/update', 'DalamController@update');
Route::get('dalam/{id}/cetak', 'DalamController@cetak');
Route::get('dalam/delete/{id}', 'DalamController@destroy');

Route::get('luar', 'LuarController@index');
Route::get('luar/luar/showpengikut/{id}', 'LuarController@showpengikut');
Route::get('luar/showdata/{id}', 'LuarController@showdata');
Route::get('luar/showkegiatan/{id}', 'LuarController@showkegiatan');
Route::get('luar/showdataubah/{id}/{ig}', 'LuarController@showdataubah');
Route::get('luar/luar/showdata/{id}', 'LuarController@showdata');
Route::get('luar/luar/showdataubah/{id}/{ig}', 'LuarController@showdataubah');
Route::get('luar/create', 'LuarController@create');
Route::post('luar', 'LuarController@store');
Route::get('luar/{id}/edit', 'LuarController@edit');
Route::post('luar/update', 'LuarController@update');
Route::get('luar/{id}/cetak', 'LuarController@cetak');
Route::get('luar/delete/{id}', 'LuarController@destroy');

Route::get('bawean', 'BaweanController@index');
Route::get('bawean/showpengikut/{id}', 'BaweanController@showpengikut');
Route::get('bawean/showdata/{id}', 'BaweanController@showdata');
Route::get('bawean/showkegiatan/{id}', 'BaweanController@showkegiatan');
Route::get('bawean/showdataubah/{id}/{ig}', 'BaweanController@showdataubah');
Route::get('bawean/showdata/{id}', 'BaweanController@showdata');
Route::get('bawean/showdataubah/{id}/{ig}', 'BaweanController@showdataubah');
Route::get('bawean/create', 'BaweanController@create');
Route::post('bawean', 'BaweanController@store');
Route::get('bawean/{id}/edit', 'BaweanController@edit');
Route::post('bawean/update', 'BaweanController@update');
Route::get('bawean/{id}/cetak', 'BaweanController@cetak');
Route::get('bawean/delete/{id}', 'BaweanController@destroy');

//ATK MAMIN//
Route::get('atk', 'ATKController@index');
Route::get('atk/create', 'ATKController@create');
Route::post('atk', 'ATKController@store');
Route::get('atk/{id}/cetak', 'ATKController@cetak');
Route::get('atk/showdata/{id}', 'ATKController@showdata');
Route::post('atk/update', 'ATKController@update');
Route::get('atk/delete/{id}', 'ATKController@destroy');

Route::get('mamin', 'MaminController@index');
Route::get('mamin/create', 'MaminController@create');
Route::post('mamin', 'MaminController@store');
Route::get('mamin/{id}/cetak', 'MaminController@cetak');
Route::get('mamin/showdata/{id}', 'MaminController@showdata');
Route::post('mamin/update', 'MaminController@update');
Route::get('mamin/delete/{id}', 'MaminController@destroy');

Route::get('pengadaan', 'PengadaanController@index');
Route::get('pengadaan/create', 'PengadaanController@create');
Route::post('pengadaan', 'PengadaanController@store');
Route::get('pengadaan/{id}/cetak', 'PengadaanController@cetak');
Route::get('pengadaan/showdata/{id}', 'PengadaanController@showdata');
Route::post('pengadaan/update', 'PengadaanController@update');
Route::get('pengadaan/delete/{id}', 'PengadaanController@destroy');

//Lembur
Route::get('lembur/dalam/showkegiatan/{id}', 'DalamController@showkegiatan');
Route::get('lembur/januari', 'LemburJanuariController@index');
Route::get('lembur/januari/showpegawai/{tgl1}/{tgl2}', 'LemburJanuariController@showpegawai');
Route::get('lembur/januari/lembur/januari/showpegawai/{tgl1}/{tgl2}', 'LemburJanuariController@showpegawai');
Route::get('lembur/januari/lembur/januari/showdetail/{id}', 'LemburJanuariController@showdetail');
Route::get('lembur/januari/lembur/januari/showabsensi/{id}', 'LemburJanuariController@showabsensi');
Route::get('lembur/januari/showgolongan/{id}', 'LemburJanuariController@showgolongan');
Route::get('lembur/januari/create', 'LemburJanuariController@create');
Route::post('lembur/januari', 'LemburJanuariController@store');
Route::get('lembur/januari/{id}/edit', 'LemburJanuariController@edit');
Route::post('lembur/januari/update', 'LemburJanuariController@update');
Route::get('lembur/januari/{id}/cetak', 'LemburJanuariController@cetak');
Route::get('lembur/januari/{id}/cetakmiring', 'LemburJanuariController@cetakmiring');
Route::get('lembur/januari/delete/{id}', 'LemburJanuariController@destroy');
Route::get('lembur/januari/deletepegawai/{id}/{nip}', 'LemburJanuariController@hapuspegawai');

Route::get('lembur/februari', 'LemburFebruariController@index');
Route::get('lembur/februari/showpegawai/{tgl1}/{tgl2}', 'LemburFebruariController@showpegawai');
Route::get('lembur/februari/lembur/februari/showpegawai/{tgl1}/{tgl2}', 'LemburFebruariController@showpegawai');
Route::get('lembur/februari/lembur/februari/showdetail/{id}', 'LemburFebruariController@showdetail');
Route::get('lembur/februari/lembur/februari/showabsensi/{id}', 'LemburFebruariController@showabsensi');
Route::get('lembur/februari/showgolongan/{id}', 'LemburFebruariController@showgolongan');
Route::get('lembur/februari/create', 'LemburFebruariController@create');
Route::post('lembur/februari', 'LemburFebruariController@store');
Route::get('lembur/februari/{id}/edit', 'LemburFebruariController@edit');
Route::post('lembur/februari/update', 'LemburFebruariController@update');
Route::get('lembur/februari/{id}/cetak', 'LemburFebruariController@cetak');
Route::get('lembur/februari/{id}/cetakmiring', 'LemburFebruariController@cetakmiring');
Route::get('lembur/februari/delete/{id}', 'LemburFebruariController@destroy');
Route::get('lembur/februari/deletepegawai/{id}/{nip}', 'LemburFebruariController@hapuspegawai');

Route::get('lembur/maret', 'LemburMaretController@index');
Route::get('lembur/maret/showpegawai/{tgl1}/{tgl2}', 'LemburMaretController@showpegawai');
Route::get('lembur/maret/lembur/maret/showpegawai/{tgl1}/{tgl2}', 'LemburMaretController@showpegawai');
Route::get('lembur/maret/lembur/maret/showdetail/{id}', 'LemburMaretController@showdetail');
Route::get('lembur/maret/lembur/maret/showabsensi/{id}', 'LemburMaretController@showabsensi');
Route::get('lembur/maret/showgolongan/{id}', 'LemburMaretController@showgolongan');
Route::get('lembur/maret/create', 'LemburMaretController@create');
Route::post('lembur/maret', 'LemburMaretController@store');
Route::get('lembur/maret/{id}/edit', 'LemburMaretController@edit');
Route::post('lembur/maret/update', 'LemburMaretController@update');
Route::get('lembur/maret/{id}/cetak', 'LemburMaretController@cetak');
Route::get('lembur/maret/{id}/cetakmiring', 'LemburMaretController@cetakmiring');
Route::get('lembur/maret/delete/{id}', 'LemburMaretController@destroy');
Route::get('lembur/maret/deletepegawai/{id}/{nip}', 'LemburMaretController@hapuspegawai');

Route::get('lembur/april', 'LemburAprilController@index');
Route::get('lembur/april/showpegawai/{tgl1}/{tgl2}', 'LemburAprilController@showpegawai');
Route::get('lembur/april/lembur/april/showpegawai/{tgl1}/{tgl2}', 'LemburAprilController@showpegawai');
Route::get('lembur/april/lembur/april/showdetail/{id}', 'LemburAprilController@showdetail');
Route::get('lembur/april/lembur/april/showabsensi/{id}', 'LemburAprilController@showabsensi');
Route::get('lembur/april/showgolongan/{id}', 'LemburAprilController@showgolongan');
Route::get('lembur/april/create', 'LemburAprilController@create');
Route::post('lembur/april', 'LemburAprilController@store');
Route::get('lembur/april/{id}/edit', 'LemburAprilController@edit');
Route::post('lembur/april/update', 'LemburAprilController@update');
Route::get('lembur/april/{id}/cetak', 'LemburAprilController@cetak');
Route::get('lembur/april/{id}/cetakmiring', 'LemburAprilController@cetakmiring');
Route::get('lembur/april/delete/{id}', 'LemburAprilController@destroy');
Route::get('lembur/april/deletepegawai/{id}/{nip}', 'LemburAprilController@hapuspegawai');

Route::get('lembur/mei', 'LemburMeiController@index');
Route::get('lembur/mei/showpegawai/{tgl1}/{tgl2}', 'LemburMeiController@showpegawai');
Route::get('lembur/mei/lembur/mei/showpegawai/{tgl1}/{tgl2}', 'LemburMeiController@showpegawai');
Route::get('lembur/mei/lembur/mei/showdetail/{id}', 'LemburMeiController@showdetail');
Route::get('lembur/mei/lembur/mei/showabsensi/{id}', 'LemburMeiController@showabsensi');
Route::get('lembur/mei/showgolongan/{id}', 'LemburMeiController@showgolongan');
Route::get('lembur/mei/create', 'LemburMeiController@create');
Route::post('lembur/mei', 'LemburMeiController@store');
Route::get('lembur/mei/{id}/edit', 'LemburMeiController@edit');
Route::post('lembur/mei/update', 'LemburMeiController@update');
Route::get('lembur/mei/{id}/cetak', 'LemburMeiController@cetak');
Route::get('lembur/mei/{id}/cetakmiring', 'LemburMeiController@cetakmiring');
Route::get('lembur/mei/delete/{id}', 'LemburMeiController@destroy');
Route::get('lembur/mei/deletepegawai/{id}/{nip}', 'LemburMeiController@hapuspegawai');

Route::get('lembur/juni', 'LemburJuniController@index');
Route::get('lembur/juni/showpegawai/{tgl1}/{tgl2}', 'LemburJuniController@showpegawai');
Route::get('lembur/juni/lembur/juni/showpegawai/{tgl1}/{tgl2}', 'LemburJuniController@showpegawai');
Route::get('lembur/juni/lembur/juni/showdetail/{id}', 'LemburJuniController@showdetail');
Route::get('lembur/juni/lembur/juni/showabsensi/{id}', 'LemburJuniController@showabsensi');
Route::get('lembur/juni/showgolongan/{id}', 'LemburJuniController@showgolongan');
Route::get('lembur/juni/create', 'LemburJuniController@create');
Route::post('lembur/juni', 'LemburJuniController@store');
Route::get('lembur/juni/{id}/edit', 'LemburJuniController@edit');
Route::post('lembur/juni/update', 'LemburJuniController@update');
Route::get('lembur/juni/{id}/cetak', 'LemburJuniController@cetak');
Route::get('lembur/juni/{id}/cetakmiring', 'LemburJuniController@cetakmiring');
Route::get('lembur/juni/delete/{id}', 'LemburJuniController@destroy');
Route::get('lembur/juni/deletepegawai/{id}/{nip}', 'LemburJuniController@hapuspegawai');

Route::get('lembur/juli', 'LemburJuliController@index');
Route::get('lembur/juli/showpegawai/{tgl1}/{tgl2}', 'LemburJuliController@showpegawai');
Route::get('lembur/juli/lembur/juli/showpegawai/{tgl1}/{tgl2}', 'LemburJuliController@showpegawai');
Route::get('lembur/juli/lembur/juli/showdetail/{id}', 'LemburJuliController@showdetail');
Route::get('lembur/juli/lembur/juli/showabsensi/{id}', 'LemburJuliController@showabsensi');
Route::get('lembur/juli/showgolongan/{id}', 'LemburJuliController@showgolongan');
Route::get('lembur/juli/create', 'LemburJuliController@create');
Route::post('lembur/juli', 'LemburJuliController@store');
Route::get('lembur/juli/{id}/edit', 'LemburJuliController@edit');
Route::post('lembur/juli/update', 'LemburJuliController@update');
Route::get('lembur/juli/{id}/cetak', 'LemburJuliController@cetak');
Route::get('lembur/juli/{id}/cetakmiring', 'LemburJuliController@cetakmiring');
Route::get('lembur/juli/delete/{id}', 'LemburJuliController@destroy');
Route::get('lembur/juli/deletepegawai/{id}/{nip}', 'LemburJuliController@hapuspegawai');

Route::get('lembur/agustus', 'LemburAgustusController@index');
Route::get('lembur/agustus/showpegawai/{tgl1}/{tgl2}', 'LemburAgustusController@showpegawai');
Route::get('lembur/agustus/lembur/agustus/showpegawai/{tgl1}/{tgl2}', 'LemburAgustusController@showpegawai');
Route::get('lembur/agustus/lembur/agustus/showdetail/{id}', 'LemburAgustusController@showdetail');
Route::get('lembur/agustus/lembur/agustus/showabsensi/{id}', 'LemburAgustusController@showabsensi');
Route::get('lembur/agustus/showgolongan/{id}', 'LemburAgustusController@showgolongan');
Route::get('lembur/agustus/create', 'LemburAgustusController@create');
Route::post('lembur/agustus', 'LemburAgustusController@store');
Route::get('lembur/agustus/{id}/edit', 'LemburAgustusController@edit');
Route::post('lembur/agustus/update', 'LemburAgustusController@update');
Route::get('lembur/agustus/{id}/cetak', 'LemburAgustusController@cetak');
Route::get('lembur/agustus/{id}/cetakmiring', 'LemburAgustusController@cetakmiring');
Route::get('lembur/agustus/delete/{id}', 'LemburAgustusController@destroy');
Route::get('lembur/agustus/deletepegawai/{id}/{nip}', 'LemburAgustusController@hapuspegawai');

Route::get('lembur/september', 'LemburSeptemberController@index');
Route::get('lembur/september/showpegawai/{tgl1}/{tgl2}', 'LemburSeptemberController@showpegawai');
Route::get('lembur/september/lembur/september/showpegawai/{tgl1}/{tgl2}', 'LemburSeptemberController@showpegawai');
Route::get('lembur/september/lembur/september/showdetail/{id}', 'LemburSeptemberController@showdetail');
Route::get('lembur/september/lembur/september/showabsensi/{id}', 'LemburSeptemberController@showabsensi');
Route::get('lembur/september/showgolongan/{id}', 'LemburSeptemberController@showgolongan');
Route::get('lembur/september/create', 'LemburSeptemberController@create');
Route::post('lembur/september', 'LemburSeptemberController@store');
Route::get('lembur/september/{id}/edit', 'LemburSeptemberController@edit');
Route::post('lembur/september/update', 'LemburSeptemberController@update');
Route::get('lembur/september/{id}/cetak', 'LemburSeptemberController@cetak');
Route::get('lembur/september/{id}/cetakmiring', 'LemburSeptemberController@cetakmiring');
Route::get('lembur/september/delete/{id}', 'LemburSeptemberController@destroy');
Route::get('lembur/september/deletepegawai/{id}/{nip}', 'LemburSeptemberController@hapuspegawai');

Route::get('lembur/oktober', 'LemburOktoberController@index');
Route::get('lembur/oktober/showpegawai/{tgl1}/{tgl2}', 'LemburOktoberController@showpegawai');
Route::get('lembur/oktober/lembur/oktober/showpegawai/{tgl1}/{tgl2}', 'LemburOktoberController@showpegawai');
Route::get('lembur/oktober/lembur/oktober/showdetail/{id}', 'LemburOktoberController@showdetail');
Route::get('lembur/oktober/lembur/oktober/showabsensi/{id}', 'LemburOktoberController@showabsensi');
Route::get('lembur/oktober/showgolongan/{id}', 'LemburOktoberController@showgolongan');
Route::get('lembur/oktober/create', 'LemburOktoberController@create');
Route::post('lembur/oktober', 'LemburOktoberController@store');
Route::get('lembur/oktober/{id}/edit', 'LemburOktoberController@edit');
Route::post('lembur/oktober/update', 'LemburOktoberController@update');
Route::get('lembur/oktober/{id}/cetak', 'LemburOktoberController@cetak');
Route::get('lembur/oktober/{id}/cetakmiring', 'LemburOktoberController@cetakmiring');
Route::get('lembur/oktober/delete/{id}', 'LemburOktoberController@destroy');
Route::get('lembur/oktober/deletepegawai/{id}/{nip}', 'LemburOktoberController@hapuspegawai');

Route::get('lembur/november', 'LemburNovemberController@index');
Route::get('lembur/november/showpegawai/{tgl1}/{tgl2}', 'LemburNovemberController@showpegawai');
Route::get('lembur/november/lembur/november/showpegawai/{tgl1}/{tgl2}', 'LemburNovemberController@showpegawai');
Route::get('lembur/november/lembur/november/showdetail/{id}', 'LemburNovemberController@showdetail');
Route::get('lembur/november/lembur/november/showabsensi/{id}', 'LemburNovemberController@showabsensi');
Route::get('lembur/november/showgolongan/{id}', 'LemburNovemberController@showgolongan');
Route::get('lembur/november/create', 'LemburNovemberController@create');
Route::post('lembur/november', 'LemburNovemberController@store');
Route::get('lembur/november/{id}/edit', 'LemburNovemberController@edit');
Route::post('lembur/november/update', 'LemburNovemberController@update');
Route::get('lembur/november/{id}/cetak', 'LemburNovemberController@cetak');
Route::get('lembur/november/{id}/cetakmiring', 'LemburNovemberController@cetakmiring');
Route::get('lembur/november/delete/{id}', 'LemburNovemberController@destroy');
Route::get('lembur/november/deletepegawai/{id}/{nip}', 'LemburNovemberController@hapuspegawai');

Route::get('lembur/desember', 'LemburDesemberController@index');
Route::get('lembur/desember/showpegawai/{tgl1}/{tgl2}', 'LemburDesemberController@showpegawai');
Route::get('lembur/desember/lembur/desember/showpegawai/{tgl1}/{tgl2}', 'LemburDesemberController@showpegawai');
Route::get('lembur/desember/lembur/desember/showdetail/{id}', 'LemburDesemberController@showdetail');
Route::get('lembur/desember/lembur/desember/showabsensi/{id}', 'LemburDesemberController@showabsensi');
Route::get('lembur/desember/showgolongan/{id}', 'LemburDesemberController@showgolongan');
Route::get('lembur/desember/create', 'LemburDesemberController@create');
Route::post('lembur/desember', 'LemburDesemberController@store');
Route::get('lembur/desember/{id}/edit', 'LemburDesemberController@edit');
Route::post('lembur/desember/update', 'LemburDesemberController@update');
Route::get('lembur/desember/{id}/cetak', 'LemburDesemberController@cetak');
Route::get('lembur/desember/{id}/cetakmiring', 'LemburDesemberController@cetakmiring');
Route::get('lembur/desember/delete/{id}', 'LemburDesemberController@destroy');
Route::get('lembur/desember/deletepegawai/{id}/{nip}', 'LemburDesemberController@hapuspegawai');

Route::get('teknis', 'TeknisController@index');
Route::get('teknis/showpegawai/{id}', 'TeknisController@showpegawai');
Route::get('teknis/showdetail/{id}', 'TeknisController@showdetail');
Route::get('teknis/create', 'TeknisController@create');
Route::post('teknis', 'TeknisController@store');
Route::get('teknis/{id}/edit', 'TeknisController@edit');
Route::post('teknis/update', 'TeknisController@update');
Route::get('teknis/{id}/cetak', 'TeknisController@cetak');
Route::get('teknis/delete/{id}', 'TeknisController@destroy');
Route::get('teknis/deletepegawai/{id}/{nip}', 'TeknisController@hapuspegawai');

Route::get('pns', 'PNSController@index');
Route::get('pns/showpegawai/{id}', 'PNSController@showpegawai');
Route::get('pns/showdetail/{id}', 'PNSController@showdetail');
Route::get('pns/create', 'PNSController@create');
Route::post('pns', 'PNSController@store');
Route::get('pns/{id}/edit', 'PNSController@edit');
Route::post('pns/update', 'PNSController@update');
Route::get('pns/{id}/cetak', 'PNSController@cetak');
Route::get('pns/delete/{id}', 'PNSController@destroy');
Route::get('pns/deletepegawai/{id}/{nip}', 'PNSController@hapuspegawai');

Route::get('rapat', 'RapatController@index');
Route::get('rapat/showpegawai/{id}', 'RapatController@showpegawai');
Route::get('rapat/showdetail/{id}', 'RapatController@showdetail');
Route::get('rapat/create', 'RapatController@create');
Route::post('rapat', 'RapatController@store');
Route::get('rapat/{id}/edit', 'RapatController@edit');
Route::post('rapat/update', 'RapatController@update');
Route::get('rapat/{id}/cetak', 'RapatController@cetak');
Route::get('rapat/delete/{id}', 'RapatController@destroy');
Route::get('rapat/deletepegawai/{id}/{nip}', 'RapatController@hapuspegawai');

//HonorRapat
Route::get('/honorrapat', 'HonorRapatController@index');
Route::get('/listrapat/{id}', 'HonorRapatController@list');
Route::post('honorrapat/add_hr/', 'HonorRapatController@store');
Route::post('honorrapat/list/list_simpan/', 'HonorRapatController@list_simpan');
Route::get('/edit_h_rapat/{id}', 'HonorRapatController@edit');
Route::post('honorrapat/update_hr/', 'HonorRapatController@update');
Route::get('/honorrapat/delete/{id}', 'HonorRapatController@delete');
Route::get('/honorrapat/cetak_list1/{id}/{keg}', 'HonorRapatController@cetak1');
Route::get('/honorrapat/cetak_list2/{id}/{keg}', 'HonorRapatController@cetak2');

//HonorPPHP
Route::get('/honor/pphp', 'HonorController@index_pphp');
Route::post('/honor/pphp/add_h_pphp/', 'HonorController@add_pphp');
Route::get('/honor/pphp/edit_h_pphp/{id}', 'HonorController@edit_pphp');
Route::post('/honor/pphp/update_h_pphp/', 'HonorController@update_pphp');
Route::get('/honor/pphp/delete/{id}', 'HonorController@delete_pphp');
Route::get('/honor/pphp/list/{id}', 'HonorController@list_h_pphp');
Route::post('/honor/pphp/list/add_list_pphp/', 'HonorController@add_list_h_pphp');
Route::get('/edit_hnr_PPHP/{id}', 'HonorController@edit_hnr_pphp');
Route::post('/honor/pphp/list/update_list_pphp/', 'HonorController@update_list_h_pphp');
Route::post('/honor/pphp/cetak_h_pphp/', 'HonorController@cetak_h_pphp');
Route::get('/honor/pphp/list/delete/{id}/{idpphp}', 'HonorController@delete_l_pphp');
//HonorPPB
Route::get('/honor/ppb/', 'HonorController@index_ppb');
Route::post('/honor/ppb/add_h_ppb/', 'HonorController@add_ppb');
Route::get('/honor/ppb/edit_h_ppb/{id}', 'HonorController@edit_ppb');
Route::post('/honor/ppb/update_h_ppb/', 'HonorController@update_ppb');
Route::get('/honor/ppb/delete/{id}', 'HonorController@delete_ppb');
Route::get('/honor/ppb/list/{id}', 'HonorController@list_h_ppb');
Route::post('/honor/ppb/list/add_list_ppb/', 'HonorController@add_list_h_ppb');
Route::get('/edit_hnr_PPB/{id}', 'HonorController@edit_hnr_ppb');
Route::post('/honor/ppb/list/update_list_ppb/', 'HonorController@update_list_h_ppb');
Route::post('/honor/ppb/cetak_h_ppb/', 'HonorController@cetak_h_ppb');
Route::get('/honor/ppb/list/delete/{id}/{idppb}', 'HonorController@delete_l_ppb');
//HonorBULANAN
Route::get('/honor/bulanan/', 'HonorController@index_bulanan');
Route::post('/honor/bulanan/add_h_bulanan/', 'HonorController@add_bulanan');
Route::get('/honor/bulanan/edit_h_bulanan/{id}', 'HonorController@edit_bulanan');
Route::post('/honor/bulanan/update_h_bulanan/', 'HonorController@update_bulanan');
Route::get('/honor/bulanan/delete/{id}', 'HonorController@delete_bulanan');
Route::get('/honor/bulanan/list/{id}', 'HonorController@list_h_bulanan');
Route::post('/honor/bulanan/list/add_list_bulanan/', 'HonorController@add_list_h_bulanan');
Route::get('/edit_hnr_BULANAN/{id}', 'HonorController@edit_hnr_bulanan');
Route::post('/honor/bulanan/list/update_list_bulanan/', 'HonorController@update_list_h_bulanan');
Route::post('/honor/bulanan/cetak_h_bulanan/', 'HonorController@cetak_h_bulanan');
Route::get('/honor/bulanan/list/delete/{id}/{idbulanan}', 'HonorController@delete_l_bulanan');
//HonorTIMTEKNIS
Route::get('/honor/timteknis/', 'HonorController@index_timteknis');
Route::post('/honor/timteknis/add_h_timteknis/', 'HonorController@add_timteknis');
Route::get('/honor/timteknis/edit_h_timteknis/{id}', 'HonorController@edit_timteknis');
Route::post('/honor/timteknis/update_h_timteknis/', 'HonorController@update_timteknis');
Route::get('/honor/timteknis/delete/{id}', 'HonorController@delete_timteknis');
Route::get('/honor/timteknis/list/{id}', 'HonorController@list_h_timteknis');
Route::post('/honor/timteknis/list/add_list_timteknis/', 'HonorController@add_list_h_timteknis');
Route::get('/edit_hnr_TIMTEKNIS/{id}', 'HonorController@edit_hnr_timteknis');
Route::post('/honor/timteknis/list/update_list_timteknis/', 'HonorController@update_list_h_timteknis');
Route::post('/honor/timteknis/cetak_h_timteknis/', 'HonorController@cetak_h_timteknis');
Route::get('/honor/timteknis/list/delete/{id}/{idtimteknis}', 'HonorController@delete_l_timteknis');