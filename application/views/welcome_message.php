<!DOCTYPE html>
<html lang="en">

<head>
    <title>Survey | Pejabat Daerah dan Tanah Alor Gajah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Pejabat Daerah dan Tanah Alor Gajah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                </ul>
            </div> -->
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <div class="text-center mt-5">
            <h1><?= $item->tajuk?></h1>
			<?= $item->keterangan?>
        </div>

        <div class="row" id="seksyen1">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-bg-primary fs-3">
                        SEKSYEN 1 - BIODATA
                    </div>
                    <div class="card-body">
                        <form id="frmBiodata">
                            <div class="mb-3">
                                <label for="txtNama" class="form-label">Nama <span class="text-danger">*</span> </label>
                                <div class="">
                                    (Seperti di dalam Kad Pengenalan)
                                </div>
                                <br>
                                <input type="text" class="form-control" id="txtNama">
                            </div>
                            <div class="mb-3">
                                <label for="txtUmur" class="form-label ">Umur <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtUmur">
                            </div>
                            <div class="mb-3">
                                <label for="comJawatan" class="form-label ">Jawatan <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comJawatan">
                                    <option value="0" selected>Pilihan Jawatan</option>
									<?php foreach($jawatan as $item){?>
										<option value="<?=$item->id ?>"><?=$item->nama?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comGred" class="form-label">Gred <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comGred">
                                    <option value="0" selected>Pilihan Gred</option>
                                    <?php foreach($gred as $item){?>
										<option value="<?=$item->id ?>"><?=$item->nama?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Tempoh Perkhidmatan di dalam Skim Perkhidmatan Semasa <span class="text-danger">*</span> </label>
                                <div class="row">
                                    <div class="col-1">
                                        <label for="txtTempohTahun" class="form-label ">Tahun <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohTahun">
                                    </div>
                                    <div class="col-1">
                                        <label for="txtTempohBulan" class="form-label ">Bulan <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohBulan">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label ">Tempoh Perkhidmatan di dalam Pejabat Daerah Dan Tanah Alor Gajah
                                    <span class="text-danger">*</span> </label>
                                <div class="row">
                                    <div class="col-1">
                                        <label for="txtTempohPDTAGTahun" class="form-label ">Tahun <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohPDTAGTahun">
                                    </div>
                                    <div class="col-1">
                                        <label for="txtTempohPDTAGBulan" class="form-label ">Bulan <span class="text-danger">*</span> </label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="txtTempohPDTAGBulan">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
                                    </li>
                                </ul>
                                <button id="btnNextBio" type="button" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>

        <!-- Seksyen 2 -->
        <div class="row" id="seksyen2" style="display: none;">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-bg-primary fs-3">
                        SEKSYEN 2 - PENEMPATAN DI PDTAG
                    </div>
                    <div class="card-body">
                        <form id="frmPenempatan1">
                            <p class="lead">Tuan/Puan dikehendaki mengisi sejarah penempatan tuan/puan semasa di PDTAG.</p>
                            <div class="mb-3">
                                <label for="comPenempatan1" class="form-label ">Penempatan Kali Pertama <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan1">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula1">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat1">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Senarai Tugas Penempatan Kali Pertama <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas1" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan1" id="chkYa1" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan1" id="chkTidak1" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak
                                    </label>
                                </div>
                            </div>

                        </form>

                        <form id="frmPenempatan2" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan2" class="form-label ">Penempatan Kali Kedua <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan2">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula2">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat1" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat2">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas1" class="form-label ">Senarai Tugas Penempatan Kali Kedua <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas2" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan2" id="chkYa2" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan2" id="chkTidak2" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak
                                    </label>
                                </div>
                            </div>

                        </form>

                        <!-- Penempatan Ke 3 -->
                        <form id="frmPenempatan3" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan3" class="form-label ">Penempatan Kali Ketiga <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan3">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat3" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula3">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat3" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat3">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas3" class="form-label ">Senarai Tugas Penempatan Kali Ketiga <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas3" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan3" id="chkYa3" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan3" id="chkTidak3" value="0" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 4 -->
                        <form id="frmPenempatan4" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan4" class="form-label ">Penempatan Kali Keempat <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan4">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat4" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula4">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat4" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat4">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas4" class="form-label ">Senarai Tugas Penempatan Kali Keempat <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas4" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan4" id="chkYa4" value="1">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan4" id="chkTidak4" value="0" checked>
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 5 -->
                        <form id="frmPenempatan5" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan5" class="form-label ">Penempatan Kali Kelima <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan5">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat5" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula5">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat5" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat5">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas5" class="form-label ">Senarai Tugas Penempatan Kali Kelima <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas5" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan5" id="chkYa5" value="1">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan5" id="chkTidak5" value="0" checked>
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 6 -->
                        <form id="frmPenempatan6" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan6" class="form-label ">Penempatan Kali Keenam <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan6">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat6" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula6">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat6" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat6">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas6" class="form-label ">Senarai Tugas Penempatan Kali Keenam <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas6" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label ">Jika pernah ditempatkan diunit lain, sila tekan "Ya". Jika Tiada, sila tekan "Tidak" <span class="text-danger">*</span> </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan6" id="chkYa6" value="1">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="chkPenempatan6" id="chkTidak6" value="0" checked>
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Penempatan Ke 7 -->
                        <form id="frmPenempatan7" style="display: none;">
                            <hr>
                            <div class="mb-3">
                                <label for="comPenempatan7" class="form-label ">Penempatan Kali Ketujuh <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPenempatan7">
                                    <option value="0" selected>Pilihan Jawatan</option>
                                    <option value="1">BKP</option>
                                    <option value="2">Masyarakat</option>
                                    <option value="4">Fizikal</option>
                                    <option value="5">Pembangunan & Pelupusan Tanah</option>
                                    <option value="6">Penguatkuasa/Teknikal & Hasil</option>
                                    <option value="7">Pendaftaran</option>
                                    <option value="8">Pejabat Penolong Pegawai Undang-Undang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat7" class="form-label ">Tarikh Mula <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhMula7">
                            </div>
                            <div class="mb-3">
                                <label for="txtTarikhTamat7" class="form-label ">Tarikh Tamat <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtTarikhTamat7">
                            </div>
                            <div class="mb-3">
                                <label for="txtTugas7" class="form-label ">Senarai Tugas Penempatan Kali Ketujuh <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtTugas7" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <button id="btnPrevSek1" type="button" class="btn btn-primary">Sebelum</button>
                                    </li>
                                </ul>
                                <button id="btnNextSek2" type="button" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>


        <!-- Seksyen 3 -->
        <div class="row" id="seksyen3" style="display:none;">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header text-bg-primary fs-3">
                        SEKSYEN 3 - PERMOHONAN PENEMPATAN
                    </div>
                    <div class="card-body">
                        <form id="frmPilih1">
                            <p class="lead">Penafian: Permohonan penempatan yang dipilih oleh tuan/puan bukanlah sesuatu perkara yang muktamad. Ianya tertakluk kepada kputusan akhir di peringkat tertinggi, jabatan mengambilkira kekosongan sesuatu jawatan di unit berkenaan serta kesesuaian pegawai tersebut. Tuan/Puan dikehendaki untuk menyatakan hasrat penepatan tuan/puan berdasarkan tinjauan di bawah.</p>
                            <div class="mb-3">
                                <label for="comPilih1" class="form-label ">Pilihan Pertama <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPilih1">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtSebab1" class="form-label ">Justifikasi/Sebab kenapa memilih bahagian/unit berkenaan.<span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtSebab1" rows="5"></textarea>
                            </div>
                        </form>

                        <form id="frmPilih2">
                            <div class="mb-3">
                                <label for="comPilih2" class="form-label ">Pilihan Kedua <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPilih2">

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtSebab2" class="form-label ">Justifikasi/Sebab kenapa memilih bahagian/unit berkenaan.<span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtSebab2" rows="5"></textarea>
                            </div>
                        </form>

                        <form id="frmPilih3">
                            <div class="mb-3">
                                <label for="comPilih3" class="form-label ">Pilihan Kedua <span class="text-danger">*</span> </label>
                                <select class="form-select" id="comPilih3">

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="txtSebab3" class="form-label ">Justifikasi/Sebab kenapa memilih bahagian/unit berkenaan.<span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="txtSebab3" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="row mt-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <button id="btnPrevSek2" type="button" class="btn btn-primary">Sebelum</button>
                                    </li>
                                </ul>
                                <button id="btnNextSek3" type="button" class="btn btn-primary">Hantar</button>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>

    </div>
    <!-- Footer-->
    <footer class="mt-5 py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            var seksyen1 = {
                "nama": "",
                "umur": "",
                "jawatan": "",
                "gred": "",
                "tp_all_tahun": "",
                "tp_all_bulan": "",
                "tp_pdtag_tahun": "",
                "tp_pdtag_bulan": "",
            };

            var seksyen2 = {
                "tempat1": "",
                "tempat1_tkh_mula": "",
                "tempat1_tkh_tamat": "",
                "tempat1_tugas": "",
                "tempat2": "",
                "tempat2_tkh_mula": "",
                "tempat2_tkh_tamat": "",
                "tempat2_tugas": "",
                "tempat3": "",
                "tempat3_tkh_mula": "",
                "tempat3_tkh_tamat": "",
                "tempat3_tugas": "",
                "tempat4": "",
                "tempat4_tkh_mula": "",
                "tempat4_tkh_tamat": "",
                "tempat4_tugas": "",
                "tempat5": "",
                "tempat5_tkh_mula": "",
                "tempat5_tkh_tamat": "",
                "tempat5_tugas": "",
                "tempat6": "",
                "tempat6_tkh_mula": "",
                "tempat6_tkh_tamat": "",
                "tempat6_tugas": "",
                "tempat7": "",
                "tempat7_tkh_mula": "",
                "tempat7_tkh_tamat": "",
                "tempat7_tugas": "",
            };

            var seksyen3 = {
                "tempat1": "",
                "tempat1_justifikasi": "",
                "tempat2": "",
                "tempat2_justifikasi": "",
                "tempat3": "",
                "tempat3_justifikasi": "",
            };

            $('#txtTarikhMula1').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat1').val();
                }
            });
            $('#txtTarikhTamat1').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula1').val();
                }
            });

            $('#txtTarikhMula2').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat2').val();
                }
            });
            $('#txtTarikhTamat2').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula2').val();
                }
            });

            $('#txtTarikhMula3').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat3').val();
                }
            });
            $('#txtTarikhTamat3').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula3').val();
                }
            });

            $('#txtTarikhMula4').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat4').val();
                }
            });
            $('#txtTarikhTamat4').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula4').val();
                }
            });

            $('#txtTarikhMula5').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat5').val();
                }
            });
            $('#txtTarikhTamat5').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula5').val();
                }
            });

            $('#txtTarikhMula6').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat6').val();
                }
            });
            $('#txtTarikhTamat6').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula6').val();
                }
            });

            $('#txtTarikhMula7').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                maxDate: function() {
                    return $('#txtTarikhTamat7').val();
                }
            });
            $('#txtTarikhTamat7').datepicker({
                uiLibrary: 'bootstrap5',
                header: true,
                modal: true,
                format: 'dd/mm/yyyy',
                minDate: function() {
                    return $('#txtTarikhMula7').val();
                }
            });

            $("#btnNextBio").on("click", function() {
                if (validate_seksyen1()) {
                    $("#seksyen1").hide();
                    $("#seksyen2").show();

                    return;
                }

                return alert("sila penuhkan tempat yang bertanda (*)");

            })

            $("#btnNextSek2").on("click", function() {
                if (validate_seksyen2()) {
                    $("#seksyen2").hide();
                    $("#seksyen3").show();

                    return;
                }

                return alert("sila penuhkan tempat yang bertanda (*)");
            })

            $("#btnNextSek3").on("click", function() {
                if (validate_seksyen3()) {
					$.ajax({
						"url": '<?=site_url('survey/store')?>',
						"type": "POST",
						"success":function(result){
							console.log(result);
							window.location.replace('<?=site_url('survey/terima_kasih')?>');
						},
						"data": {
							"sek1": seksyen1,
							"sek2": seksyen2,
							"sek3": seksyen3
						}
					});

					return;
                }

                return alert("sila penuhkan tempat yang bertanda (*)");
            })

            $("#btnPrevSek1").on("click", function() {
                $("#seksyen1").show();
                $("#seksyen2").hide();
            })

            $("#btnPrevSek2").on("click", function() {
                $("#seksyen2").show();
                $("#seksyen3").hide();
            })



            $.each($("input[name='sport']:checked"), function() {
                favorite.push($(this).val());
            });

            function validate_seksyen1() {
                var isValid = true;

                var namaVal = $("#txtNama").val().trim();
                seksyen1.nama = namaVal;
                if (namaVal.length == 0) {
                    isValid = false;
                }

                var umurVal = $("#txtUmur").val().trim();
                seksyen1.umur = umurVal;
                if (umurVal.length == 0 || !isInt(umurVal)) {
                    isValid = false;
                }

                var jawatanVal = $("#comJawatan").val().trim();
                seksyen1.jawatan = jawatanVal;
                if (jawatanVal == 0) {
                    isValid = false;
                }

                var gredVal = $("#comGred").val().trim();
                seksyen1.gred = gredVal;
                if (gredVal == 0) {
                    isValid = false;
                }

                var tempohTahunVal = $("#txtTempohTahun").val().trim();
                seksyen1.tp_all_tahun = tempohTahunVal;
                if (tempohTahunVal.length == 0 || !isInt(tempohTahunVal)) {
                    isValid = false;
                }

                var tempohBulanVal = $("#txtTempohBulan").val().trim();
                seksyen1.tp_all_bulan = tempohBulanVal;
                if (tempohBulanVal.length == 0 || !isInt(tempohBulanVal) || tempohBulanVal > 12) {
                    isValid = false;
                }

                var tempohPDTAGTahunVal = $("#txtTempohPDTAGTahun").val().trim();
                seksyen1.tp_pdtag_tahun = tempohPDTAGTahunVal;
                if (tempohPDTAGTahunVal.length == 0 || !isInt(tempohPDTAGTahunVal)) {
                    isValid = false;
                }

                var tempohPDTAGBulanVal = $("#txtTempohPDTAGBulan").val().trim();
                seksyen1.tp_pdtag_bulan = tempohPDTAGBulanVal;
                if (tempohPDTAGBulanVal.length == 0 || !isInt(tempohPDTAGBulanVal) || tempohPDTAGBulanVal > 12) {
                    isValid = false;
                }

                return isValid;
            }

            function validate_seksyen2() {
                var isValid = true;

                var tempat1 = $("#comPenempatan1").val().trim();
                seksyen2.tempat1 = tempat1;
                if (tempat1 == 0) {
                    isValid = false;
                }

                var tempat1_tkh_mula = $("#txtTarikhMula1").val().trim();
                seksyen2.tempat1_tkh_mula = tempat1_tkh_mula;
                if (tempat1_tkh_mula.length == 0) {
                    isValid = false;
                }

                var tempat1_tkh_tamat = $("#txtTarikhTamat1").val().trim();
                seksyen2.tempat1_tkh_tamat = tempat1_tkh_tamat;
                if (tempat1_tkh_tamat.length == 0) {
                    isValid = false;
                }

                var tempat1_tugas = $("#txtTugas1").val().trim();
                seksyen2.tempat1_tugas = tempat1_tugas;
                if (tempat1_tugas.length == 0) {
                    isValid = false;
                }

                if (validateChkPenempatan("chkPenempatan1")) {
                    var tempat2 = $("#comPenempatan2").val().trim();
                    seksyen2.tempat2 = tempat2;
                    if (tempat2 == 0) {
                        isValid = false;
                    }

                    var tempat2_tkh_mula = $("#txtTarikhMula2").val().trim();
                    seksyen2.tempat2_tkh_mula = tempat2_tkh_mula;
                    if (tempat2_tkh_mula.length == 0) {
                        isValid = false;
                    }

                    var tempat2_tkh_tamat = $("#txtTarikhTamat2").val().trim();
                    seksyen2.tempat2_tkh_tamat = tempat2_tkh_tamat;
                    if (tempat2_tkh_tamat.length == 0) {
                        isValid = false;
                    }

                    var tempat2_tugas = $("#txtTugas2").val().trim();
                    seksyen2.tempat2_tugas = tempat2_tugas;
                    if (tempat2_tugas.length == 0) {
                        isValid = false;
                    }
                }

                if (validateChkPenempatan("chkPenempatan2")) {
                    var tempat3 = $("#comPenempatan3").val().trim();
                    seksyen2.tempat3 = tempat3;
                    if (tempat3 == 0) {
                        isValid = false;
                    }

                    var tempat3_tkh_mula = $("#txtTarikhMula3").val().trim();
                    seksyen2.tempat3_tkh_mula = tempat3_tkh_mula;
                    if (tempat3_tkh_mula.length == 0) {
                        isValid = false;
                    }

                    var tempat3_tkh_tamat = $("#txtTarikhTamat3").val().trim();
                    seksyen2.tempat3_tkh_tamat = tempat3_tkh_tamat;
                    if (tempat3_tkh_tamat.length == 0) {
                        isValid = false;
                    }

                    var tempat3_tugas = $("#txtTugas3").val().trim();
                    seksyen2.tempat3_tugas = tempat3_tugas;
                    if (tempat3_tugas.length == 0) {
                        isValid = false;
                    }
                }

                if (validateChkPenempatan("chkPenempatan3")) {
                    var tempat4 = $("#comPenempatan4").val().trim();
                    seksyen2.tempat4 = tempat4;
                    if (tempat4 == 0) {
                        isValid = false;
                    }

                    var tempat4_tkh_mula = $("#txtTarikhMula4").val().trim();
                    seksyen2.tempat4_tkh_mula = tempat4_tkh_mula;
                    if (tempat4_tkh_mula.length == 0) {
                        isValid = false;
                    }

                    var tempat4_tkh_tamat = $("#txtTarikhTamat4").val().trim();
                    seksyen2.tempat4_tkh_tamat = tempat4_tkh_tamat;
                    if (tempat4_tkh_tamat.length == 0) {
                        isValid = false;
                    }

                    var tempat4_tugas = $("#txtTugas4").val().trim();
                    seksyen2.tempat4_tugas = tempat4_tugas;
                    if (tempat4_tugas.length == 0) {
                        isValid = false;
                    }
                }

                if (validateChkPenempatan("chkPenempatan4")) {
                    var tempat5 = $("#comPenempatan5").val().trim();
                    seksyen2.tempat5 = tempat5;
                    if (tempat5 == 0) {
                        isValid = false;
                    }

                    var tempat5_tkh_mula = $("#txtTarikhMula5").val().trim();
                    seksyen2.tempat5_tkh_mula = tempat5_tkh_mula;
                    if (tempat5_tkh_mula.length == 0) {
                        isValid = false;
                    }

                    var tempat5_tkh_tamat = $("#txtTarikhTamat5").val().trim();
                    seksyen2.tempat5_tkh_tamat = tempat5_tkh_tamat;
                    if (tempat5_tkh_tamat.length == 0) {
                        isValid = false;
                    }

                    var tempat5_tugas = $("#txtTugas5").val().trim();
                    seksyen2.tempat5_tugas = tempat5_tugas;
                    if (tempat5_tugas.length == 0) {
                        isValid = false;
                    }
                }

                if (validateChkPenempatan("chkPenempatan5")) {
                    var tempat6 = $("#comPenempatan6").val().trim();
                    seksyen2.tempat6 = tempat6;
                    if (tempat6 == 0) {
                        isValid = false;
                    }

                    var tempat6_tkh_mula = $("#txtTarikhMula6").val().trim();
                    seksyen2.tempat6_tkh_mula = tempat6_tkh_mula;
                    if (tempat6_tkh_mula.length == 0) {
                        isValid = false;
                    }

                    var tempat6_tkh_tamat = $("#txtTarikhTamat6").val().trim();
                    seksyen2.tempat6_tkh_tamat = tempat6_tkh_tamat;
                    if (tempat6_tkh_tamat.length == 0) {
                        isValid = false;
                    }

                    var tempat6_tugas = $("#txtTugas6").val().trim();
                    seksyen2.tempat6_tugas = tempat6_tugas;
                    if (tempat6_tugas.length == 0) {
                        isValid = false;
                    }
                }

                if (validateChkPenempatan("chkPenempatan6")) {
                    var tempat7 = $("#comPenempatan7").val().trim();
                    seksyen2.tempat7 = tempat7;
                    if (tempat7 == 0) {
                        isValid = false;
                    }

                    var tempat7_tkh_mula = $("#txtTarikhMula7").val().trim();
                    seksyen2.tempat7_tkh_mula = tempat7_tkh_mula;
                    if (tempat7_tkh_mula.length == 0) {
                        isValid = false;
                    }

                    var tempat7_tkh_tamat = $("#txtTarikhTamat7").val().trim();
                    seksyen2.tempat7_tkh_tamat = tempat7_tkh_tamat;
                    if (tempat7_tkh_tamat.length == 0) {
                        isValid = false;
                    }

                    var tempat7_tugas = $("#txtTugas6").val().trim();
                    seksyen2.tempat7_tugas = tempat7_tugas;
                    if (tempat7_tugas.length == 0) {
                        isValid = false;
                    }
                }

                return isValid;
            }

            function validate_seksyen3() {
                var isValid = true;

                seksyen3.tempat1 = $("#comPilih1").val();
                if (!seksyen3.tempat1 || seksyen3.tempat1.length == 0) {
                    isValid = false;
                }

                seksyen3.tempat1_justifikasi = $("#txtSebab1").val().trim();
                if (!seksyen3.tempat1_justifikasi || seksyen3.tempat1_justifikasi.length == 0) {
                    isValid = false;
                }

                seksyen3.tempat2 = $("#comPilih2").val();
                if (!seksyen3.tempat2 || seksyen3.tempat2.length == 0) {
                    isValid = false;
                }

                seksyen3.tempat2_justifikasi = $("#txtSebab2").val().trim();
                if (!seksyen3.tempat2_justifikasi || seksyen3.tempat2_justifikasi.length == 0) {
                    isValid = false;
                }

                seksyen3.tempat3 = $("#comPilih3").val();
                if (!seksyen3.tempat3 || seksyen3.tempat3.length == 0) {
                    isValid = false;
                }

                seksyen3.tempat3_justifikasi = $("#txtSebab3").val().trim();
                if (!seksyen3.tempat3_justifikasi || seksyen3.tempat3_justifikasi.length == 0) {
                    isValid = false;
                }

                return isValid;
            }

            function isInt(value) {
                var x;
                if (isNaN(value)) {
                    return false;
                }
                x = parseFloat(value);
                return (x | 0) === x;
            }

            $('#chkYa1').on('click', function() {
                getChkPenempatan("chkPenempatan1", "#frmPenempatan2");
            });

            $('#chkTidak1').on('click', function() {
                getChkPenempatan("chkPenempatan1", "#frmPenempatan2");
            });

            $('#chkYa2').on('click', function() {
                getChkPenempatan("chkPenempatan2", "#frmPenempatan3");
            });

            $('#chkTidak2').on('click', function() {
                getChkPenempatan("chkPenempatan2", "#frmPenempatan3");
            });

            $('#chkYa3').on('click', function() {
                getChkPenempatan("chkPenempatan3", "#frmPenempatan4");
            });

            $('#chkTidak3').on('click', function() {
                getChkPenempatan("chkPenempatan3", "#frmPenempatan4");
            });

            $('#chkYa4').on('click', function() {
                getChkPenempatan("chkPenempatan4", "#frmPenempatan5");
            });

            $('#chkTidak4').on('click', function() {
                getChkPenempatan("chkPenempatan4", "#frmPenempatan5");
            });

            $('#chkYa5').on('click', function() {
                getChkPenempatan("chkPenempatan5", "#frmPenempatan6");
            });

            $('#chkTidak5').on('click', function() {
                getChkPenempatan("chkPenempatan5", "#frmPenempatan6");
            });

            $('#chkYa6').on('click', function() {
                getChkPenempatan("chkPenempatan6", "#frmPenempatan7");
            });

            $('#chkTidak6').on('click', function() {
                getChkPenempatan("chkPenempatan6", "#frmPenempatan7");
            });

            function getChkPenempatan(input, nextForm) {
                $.each($("input[name='" + input + "']:checked"), function() {
                    console.log($(this).val());

                    if ($(this).val() == 1) {
                        $(nextForm).show();
                    } else {
                        $(nextForm).hide();
                    }
                });
            }

            function validateChkPenempatan(input) {
                var status = true;
                $.each($("input[name='" + input + "']:checked"), function() {
                    console.log($(this).val());

                    if ($(this).val() != 1) {
                        status = false;
                    }
                });

                return status;
            }

            var bahagian = [{
                id: 0,
                name: "Pilihan Jawatan"
            }, {
                id: 1,
                name: "BKP"
            }, {
                id: 2,
                name: "Masyarakat"
            }, {
                id: 3,
                name: "Fizikal"
            }, {
                id: 4,
                name: "Pembangunan & Pelupusan Tanah"
            }, {
                id: 5,
                name: "Penguatkuasa/Teknikal & Hasil"
            }, {
                id: 6,
                name: "Pendaftaran"
            }, {
                id: 7,
                name: "Pejabat Penolong Pegawai Undang-Undang"
            }, ];


            var dropdown1 = $("#comPilih1");
            var dropdown2 = $("#comPilih2");
            var dropdown3 = $("#comPilih3");

            $.each(bahagian, function(index, item) {
                dropdown1.append($("<option />").val(item.id).text(item.name));
                dropdown2.append($("<option />").val(item.id).text(item.name));
                dropdown3.append($("<option />").val(item.id).text(item.name));
            });

            dropdown1.on('change', function() {
                pilih.val1 = dropdown1.val();

                dropdown2.empty();
                dropdown3.empty();

                $.each(bahagian.filter(function(item) {
                        return item.id == 0 || item.id != pilih.val1 || item.id == pilih.val2 || item.id == pilih.val3;
                    }),
                    function(index, item) {
                        if (item.id == pilih.val2) {
                            dropdown2.append($("<option />").val(item.id).text(item.name).attr("selected", "selected"));
                        } else {
                            if (pilih.val3 != item.id || pilih.val3 == 0) {
                                dropdown2.append($("<option />").val(item.id).text(item.name));
                            }
                        }

                        if (item.id == pilih.val3) {
                            dropdown3.append($("<option />").val(item.id).text(item.name).attr("selected", "selected"));
                        } else {
                            if (pilih.val2 != item.id || pilih.val2 == 0) {
                                dropdown3.append($("<option />").val(item.id).text(item.name));
                            }
                        }
                    });
            });

            dropdown2.on('change', function() {
                pilih.val2 = dropdown2.val();
                dropdown1.empty();
                dropdown3.empty();

                $.each(bahagian.filter(function(item) {
                    return item.id == '0' || item.id != pilih.val2 || item.id == pilih.val1 || item.id == pilih.val3;
                }), function(index, item) {
                    if (pilih.val1 == item.id) {
                        dropdown1.append($("<option />").val(item.id).text(item.name).attr("selected", "selected"));
                    } else {
                        if (pilih.val3 != item.id || pilih.val3 == 0) {
                            dropdown1.append($("<option />").val(item.id).text(item.name));
                        }
                    }

                    if (pilih.val3 == item.id) {
                        dropdown3.append($("<option />").val(item.id).text(item.name).attr("selected", "selected"));
                    } else {
                        if (pilih.val1 != item.id || pilih.val1 == 0) {
                            dropdown3.append($("<option />").val(item.id).text(item.name));
                        }
                    }
                });
            })

            dropdown3.on('change', function() {
                pilih.val3 = dropdown3.val();
                dropdown1.empty();
                dropdown2.empty();

                $.each(bahagian.filter(function(item) {
                    return item.id == '0' || item.id != pilih.val3 || item.id == pilih.val1 || item.id == pilih.val2;
                }), function(index, item) {
                    if (pilih.val1 == item.id) {
                        dropdown1.append($("<option />").val(item.id).text(item.name).attr("selected", "selected"));
                    } else {
                        if (pilih.val2 != item.id || pilih.val2 == 0) {
                            dropdown1.append($("<option />").val(item.id).text(item.name));
                        }
                    }

                    if (pilih.val2 == item.id) {
                        dropdown2.append($("<option />").val(item.id).text(item.name).attr("selected", "selected"));
                    } else {
                        if (pilih.val1 != item.id || pilih.val1 == 0) {
                            dropdown2.append($("<option />").val(item.id).text(item.name));
                        }
                    }
                });
            });

            var pilih = {
                "val1": dropdown1.val(),
                "val2": dropdown2.val(),
                "val3": dropdown3.val()
            }
        });
    </script>

</body>

</html>
