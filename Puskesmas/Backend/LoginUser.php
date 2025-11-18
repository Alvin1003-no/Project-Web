<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <!-- Link Css -->
    <link rel="stylesheet" href="../Style/Hover/HoverHalamanUtama.css" />
    <link rel="stylesheet" href="../Style/HalamanUtama.css" />
    <link rel="stylesheet" href="../style/LoginUser.css" />
</head>
<body>
    <div class="login-wrapper">

    <img src="../Assets/BatikLogin.png" class="BannerGambar">

    <div class="login-card">
        <div class="left-box">
            <h2>LOGIN</h2>
            <form action="CreateLogin.php" method="POST">
                <label>Username :</label>
                <input type="text" name="username">

                <label>Password:</label>
                <input type="password" name="password">

                <button type="submit"class="login-btn">Login</button>
            </form>
            
        </div>

        <div class="right-box">
            <h2>Halo!</h2>
            <p>Belum Memiliki Akun Puskesemas Gambirsari ?</p>
            <button class="register-btn">Buat Akun</button>
        </div>
    </div>

    </div>

    <div class="bawah">
        <img src="../Assets/pemerintah.png" class="logo" />
        <div class="kirifooter">
            <label>Puskesmas Kartasura</label>
            <p>
                Jl. Jenderal Sudirman, Dusun III, Pucangan, Kec. Kartasura, Kabupaten
                Sukoharjo, Jawa Tengah 57168
            </p>
            <p>puskemas.kartasura@sukoharjokab.go.id</p>
        </div>

        <div class="kananfooter">
            <label>Sosial Media</label>
            <ul class="ul">
                <li>
                    <a href="https://www.facebook.com/pkm.kartasura"> <i class="fab fa-facebook-f icon"></i> </a>
                </li>
                <li>
                    <a
                        href="https://www.instagram.com/puskesmas_kartasura?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                            class="fab fa-instagram icon"></i></i></a>
                </li>
                <li>
                    <a
                        href="https://api.whatsapp.com/send?phone=6285876475201&text=___________________________%0A%20%20%20%20%F0%9D%91%BA%F0%9D%92%86%F0%9D%92%8D%F0%9D%92%82%F0%9D%92%8E%F0%9D%92%82%F0%9D%92%95%20%F0%9D%92%85%F0%9D%92%82%F0%9D%92%95%F0%9D%92%82%F0%9D%92%8F%F0%9D%92%88%20%F0%9D%92%85%F0%9D%92%8A%20%F0%9D%91%AF%F0%9D%92%90%F0%9D%92%95%F0%9D%92%8D%F0%9D%92%8A%F0%9D%92%8F%F0%9D%92%86%0A%20%E2%84%99%F0%9D%95%8C%F0%9D%95%8A%F0%9D%95%82%F0%9D%94%BC%F0%9D%95%8A%F0%9D%95%84%F0%9D%94%B8%F0%9D%95%8A%20%F0%9D%95%82%F0%9D%94%B8%E2%84%9D%F0%9D%95%8B%F0%9D%94%B8%F0%9D%95%8A%F0%9D%95%8C%E2%84%9D%F0%9D%94%B8%0A___________________________%0A%0A"><i
                            class="fab fa-whatsapp icon"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@Puskesmas_Kartasura"><i class="fab fa-youtube icon"></i></a>
                </li>
            </ul>
        </div>

        <div class="garis">
            <hr />
        </div>

        <div class="pojokbawah">
            <label>2025 © ProjectPraktikumWeb</label>
        </div>
    </div>

    <div class="location">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-geo-alt"
            viewBox="0 0 16 16">
            <path
                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
        </svg>
    </div>

    <div class="email">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope"
            viewBox="0 0 16 16">
            <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
        </svg>
    </div>
</body>
</html>