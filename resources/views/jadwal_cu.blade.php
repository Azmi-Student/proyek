<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jadwal Check-Up</title>
        <link rel="icon" href="./assets/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="./style/jadwal_cu.css">
    </head>
    <body>
        <div class="container">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="logo">
                    <img src="./assets/logo2.png" alt="MamaCare+ Logo">
                </div>
                <div class="menu">
                    <div class="menu-item">Senin, 26 Oktober 2024</div>
                    <div class="menu-item">Selasa, 27 Oktober 2024</div>
                    <div class="menu-item">Rabu, 28 Oktober 2024</div>
                    <div class="menu-item">Kamis, 29 Oktober 2024</div>
                    <div class="menu-item">Jumat, 30 Oktober 2024</div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content">
                <!-- Informasi Tempat Check-Up -->
                <div class="section">
                    <h2 class="section-title">Informasi Tempat Check-Up</h2>
                    <p class="section-description">Informasi mengenai lokasi check-up ibu:</p>
                    <div class="row">
                        <div class="info-box">
                            <h3>Klinik A</h3>
                            <p>Alamat: Jl. Mawar No. 1</p>
                        </div>
                        <div class="info-box">
                            <h3>Klinik B</h3>
                            <p>Alamat: Jl. Melati No. 2</p>
                        </div>
                    </div>
                </div>

                <!-- Jadwal Check-Up -->
                <div class="section">
                    <h2 class="section-title">Jadwal Check-Up</h2>
                    <p class="section-description">Berikut adalah jadwal check-up yang telah dijadwalkan:</p>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>26 Oktober 2024</td>
                                <td>08:00</td>
                                <td>Klinik A</td>
                                <td class="status confirmed">Terkonfirmasi</td>
                            </tr>
                            <tr>
                                <td>02 November 2024</td>
                                <td>10:00</td>
                                <td>Klinik B</td>
                                <td class="status pending">Menunggu</td>
                            </tr>
                            <tr>
                                <td>09 November 2024</td>
                                <td>09:00</td>
                                <td>Klinik A</td>
                                <td class="status confirmed">Terkonfirmasi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Foto atau Dokumen -->
                <div class="section">
                    <h2 class="section-title">Foto & Dokumen</h2>
                    <p class="section-description">Dokumentasi atau file terkait check-up ibu:</p>
                    <div class="row">
                        <div class="placeholder-box">Foto 1</div>
                        <div class="placeholder-box">Foto 2</div>
                        <div class="placeholder-box">Foto 3</div>
                    </div>
                </div>

                <!-- Tombol Kembali -->
                <div class="section">
                    <button type="button" class="back-button" onclick="window.history.back()">Kembali</button>
                </div>
            </div>
        </div>
    </body>
</html>