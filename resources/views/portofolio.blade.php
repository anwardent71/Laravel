<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Bootstrap CSS Online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="home">My Profile</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portofolio">Portofolio</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container" style="text-align: center;">
            <h1 class="display-4">Portofolio</h1>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card border-primary mb-3">
                <img src="porto1.png" class="card-img-top" alt="..." width="300px" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">Aplikasi Penjualan Berbasis Dekstop</h5>
                        <p class="card-text">Aplikasi penjualan berbasis dekstop dengan menggunakan metode CRUD dan menggunakan metode Report</p>
                    </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dengan Menggunakan : </li>
                            <li class="list-group-item">1. XAMPP (sebagai Database)</li>
                            <li class="list-group-item">2. Netbeans IDE</li>
                            <li class="list-group-item">3. Bahasa Pemrogaman Java</li>
                            <li class="list-group-item">4. dan beberapa Library</li>
                        </ul>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                <img src="porto2.jpg" class="card-img-top" alt="..."  width="277px" height="277px">
                    <div class="card-body">
                        <h5 class="card-title">Aplikasi Data Siswa</h5>
                        <p class="card-text">Aplikasi Data Siswa berbasis website dengan menggunakan database dan scan qrcode(untuk melihat detail data siswa) yang dibuat bersama-sama untuk memeriahkan dalam acara Starbhak Day</p>
                    </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dengan Menggunakan : </li>
                            <li class="list-group-item">1. XAMPP (sebagai Database)</li>
                            <li class="list-group-item">2. Netbeans IDE</li>
                            <li class="list-group-item">3. Bahasa Pemrogaman Java</li>
                            <li class="list-group-item">4. dan beberapa Library</li>
                        </ul>
                </div>
            </div>
            
            </div>
        </div>
    </div>

    <footer style="text-align: center;">Copyright &copy: Muhammad Anwar</footer>
    
</body>
</html>