<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil Mama</title>
        <link rel="icon" href="img/Logo.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4C+2Xva9jUqZFE5QpKdJQ1zyUv0qWY+pG9VkrQT84SCbJfViNzvoBbn1kz5Zud5OBj9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../style/navbar.css">
        <link rel="stylesheet" href="../style/body.css">

        <style>
            .home:hover {
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!-- NAVBAR -->
            <div class="navbar">
                <!-- Logo -->
                <a href="#" class="logo"><img src="img/Logo.png" alt="MamaCare+ Logo">MamaCare+</a>

                <!-- Menu Items -->
                <div class="menu">
                    <a href="{{ route('dashboard') }}"><img src="img/Icon Home.png" alt="Home"> HOME</a>
                    <a href="/bantuan.html"><img src="img/Icon Bantuan.png" alt="Bantuan"> BANTUAN</a>
                <a href="#" class="notif">
                    <img src="img/Icon Notif.png" alt="Notifikasi"> NOTIF
                    <span class="badge">1</span>
                </a>
            </div>
            </div>

            <!-- HERO -->
            <section class="hero"></section>

            <!-- ISI -->
            <div class="profile-section" id="profile-section-1s">
                <nav class="sidebar">
                    <!-- <button class="active" id="btn-data-diri">Data Diri</button>
                    <button id="btn-ubah-password">Ubah Password</button> -->
                    <ul>
                        <li><a href="" class="active">Data Diri</a></li>
                        <li><a href="">Ubah Password</a></li>
                    </ul>
                </nav>
                <main class="profile-content">
                    <h2>Data Diri Profil</h2>
                    <div class="profile-form">
                        <div class="profile-photo">
                            <div class="photo-wrapper">
                                    <img id="profile-preview" src="img/Avatar.png" alt="Foto Profil" />
                                <div class="hover-overlay">
                                    <img src="img/Camera.png" alt="Camera">
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('user.update', ['id' => Auth::id()]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Input Username -->
                            <label for="username">Username</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/User.png" alt="Unim">
                                </div>
                                <input type="text" id="username" name="username" placeholder="Username" value="{{ Auth::user()->username }}" />
                            </div>

                            <!-- Input Nama Lengkap -->
                            <label for="fullname">Nama Lengkap</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/Nama.png" alt="Nama">
                                </div>
                                <input type="text" id="fullname" name="fullname" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}" />
                            </div>

                            <!-- Input TTL -->
                            <label for="ttl">TTL</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/TTLpng.png" alt="send">
                                </div>
                                <input 
                                type="date" id="ttl" name="ttl" placeholder="Tanggal Lahir" value="{{ old('ttl', Auth::user()->ttl ? Auth::user()->ttl->format('Y-m-d') : '') }}" />
                            </div>

                            <!-- Input Gol. Darah -->
                            <label for="blood">Gol. Darah</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/Darah.png" alt="send">
                                </div>
                                <input type="text" id="gol_darah" name="gol_darah" placeholder="Gol. Darah" value="{{ Auth::user()->gol_darah }}" />
                            </div>

                            <!-- Input Email -->
                            <label for="email">Email</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/Mail.png" alt="send">
                                </div>
                                <input type="email" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" />
                            </div>

                            <!-- Input No. Telp -->
                            <label for="phone">No. Telp</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/Telp.png" alt="send">
                                </div>
                                <input type="text" id="no_telp" name="no_telp" placeholder="No. Telp" value="{{ Auth::user()->no_telp }}" />
                            </div>

                            <!-- Input NIK -->
                            <label for="nik">NIK</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/NIK.png" alt="send">
                                </div>
                                <input type="text" id="nik" name="nik" placeholder="NIK" value="{{ Auth::user()->nik }}" />
                            </div>

                            <!-- Input Alamat -->
                            <label for="alamat">Alamat</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/map pin.png" alt="send">
                                </div>
                                <input type="text" id="alamat" name="alamat" placeholder="Alamat" value="{{ Auth::user()->alamat }}" />
                            </div>

                            <div class="buttons">
                                <button type="button" class="cancel-btn">Batal</button>
                                <button type="submit" class="save-btn">Simpan</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </main>

            </div>

            <!-- ISI -->
            <div class="profile-section">
                <nav class="sidebar">
                    <ul>
                        <li><a href="">Data Diri</a></li>
                        <li><a href="" class="active">Ubah Password</a></li>
                    </ul>
                </nav>
                <main class="profile-content">
                    <h2>Ubah Password</h2>
                    <div class="profile-form">
                        <form action="{{ route('user.update', ['id' => Auth::id()]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Input Password Lama -->
                            <label for="password">Password Lama</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/PW.png" alt="Unim">
                                </div>
                                <input type="password" id="password" name="password" placeholder="Masukkan Password Lama" value="{{ ('password')}}"/>
                            </div>

                            <!-- Input Password Baru -->
                            <label for="pwbaru">Password Baru</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/PW.png" alt="Nama">
                                </div>
                                <input type="password" id="pwbaru" placeholder="Masukkan Password Baru" />
                            </div>

                            <!-- Input Konfirmasi Password Baru -->
                            <label for="konpw">Konfirmasi Password Baru</label>
                            <div class="input">
                                <div class="icon-label">
                                    <img src="img/PW.png" alt="send">
                                </div>
                                <input type="password" id="konpw" placeholder="Konfirmasi Password Baru" />
                            </div>

                            <div class="buttons">
                                <button type="button" class="cancel-btn">Batal</button>
                                <button type="submit" class="save-btn">Ubah</button>
                            </div>
                        </form>
                    </div>
                </main>
            </div>

        </div>

        
        <script src="/js/edit_profil.js"></script>
        <script src="script.js"></script>
    </body>
</html>