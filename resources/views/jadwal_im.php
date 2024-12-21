<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jadwal Imunisasi</title>
        <link rel="icon" href="./assets/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="./style/jadwal_im.css">
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
                <!-- Informasi Tempat Check Up -->
                <div class="section">
                    <h2>Informasi Tempat Check Up</h2>
                    <p>Informasi terkait lokasi check-up anak Anda.</p>
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

                <!-- Hasil Check-Up -->
                <div class="section">
                    <h2>Hasil Check Up</h2>
                    <p>Berikut hasil dari check-up anak Anda.</p>
                    <div class="results">
                        <div class="result-item">
                            <div class="label">Berat Badan:</div>
                            <div class="value">12 kg</div>
                        </div>
                        <div class="result-item">
                            <div class="label">Tinggi Badan:</div>
                            <div class="value">90 cm</div>
                        </div>
                        <div class="result-item">
                            <div class="label">Imunisasi:</div>
                            <div class="value">DPT</div>
                        </div>
                    </div>
                </div>

                <!-- Foto atau Dokumen -->
                <div class="section">
                    <h2>Foto & Dokumen</h2>
                    <p>Dokumentasi atau foto hasil check-up anak Anda.</p>
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