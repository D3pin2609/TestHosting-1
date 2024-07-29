<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 SAMPIT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>  
    <link rel="shortcut icon" href="gambar/logo.png">   
    <link rel="stylesheet" href="css/prim.css">
    <style>
        .card {
            margin: 20px; /* Atur margin antar kartu */
        }
    </style>
</head>
<body>

<?php include 'template/header.php'; ?>

    <br/>
<main>
    <h2 style="text-align: center;">People Who Made This Website</h2>
    <div class="row row-cols-1 row-cols-md-3 mb-3 g-0">
        <div class="col">
            <div class="card h-100">
                <img src="rasya.jpg" class="card-img-top" alt="Profile Image">
                <div class="card-body">
                    <h5 class="card-title">M. Rasya Maulana Saputra</h5>
                    <p class="card-text">A student at SMK NEGERI 1 Sampit, born on April 3, 2007, in Sampit, Majoring in Software Engineering. Enjoys playing games and reading comics.
</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="devin.jpg" class="card-img-top" alt="Profile Image">
                <div class="card-body">
                    <h5 class="card-title">Devin Valentino</h5>
                    <p class="card-text">A student at SMK NEGERI 1 Sampit, born on September 26, 2007, in Sampit, majoring in Software Engineering. Has a hobby of coding. Achieved 3rd place in the STMIK Software Engineering Competition, creating a library application for desktop.
</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="raihan.jpg" class="card-img-top" alt="Profile Image">
                <div class="card-body">
                    <h5 class="card-title">M. Raihan Tri Wardhana</h5>
                    <p class="card-text">A student at SMK NEGERI 1 Sampit, born on September 24, 2007, in Sampit, majoring in Software Engineering. Enjoys reading, writing, and composing songs.</p>
                </div>
            </div>
        </div>
    </div>
</main>
        <br/>
      <?php include 'template/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>