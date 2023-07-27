<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Layouting</title>
</head>

<body>
    <div class="navbar">
      <div class="navbar-icon">
        <i class="fa-solid fa-circle-user fa-2x1"></i>
    </div>
        <div class="navbar-page">
            <ul type='none'>
                <li href="#">Home</li>
                <li href="#">About US</li>
                <li href="#">Portofolio</li>
                <li href="#">Contact</li>
            </ul>
        </div>
    
        <div class="navbar-sosmed">
            <ul type='none'>
                <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
                <li><i class="fa-brands fa-instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
            </ul>
        </div>
    </div>
        <div class="banner">
            <span class="name">
                Muhammad Faiq Azhillani
            </span> <br>
            <span class="description">
                Mahasiswa lulusan teknik informatika jurusan teknik
                informatika angkatan 2021
            </span>
        </div>
    <?= $this->renderSection('content') ?>


</body>

</html>