<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Pelanggaran Siswa</title>
    <!-- Include Bootstrap CSS (you can use a CDN or download the files) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/seco.css"> <!-- Your custom CSS file -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/> 
    <link rel="shortcut icon" href="gambar/logo.png">    
    <link rel="stylesheet" href="css/prim.css">
</head>
<body>

<?php include 'template/header.php'; ?>

<br/>
<div class="container">
    <main>
        <h2 class="mt-4 mb-4">Tambah Data Tata Tertib</h2>
        <form action="tambahtater.php" method="post">
            <div class="form-group row">
                <label for="jenisPelanggaran" class="col-sm-2 col-form-label">Jenis Pelanggaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenisPelanggaran" name="jenis_pelanggaran" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="poin" class="col-sm-2 col-form-label">Poin</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="poin" name="poin" min="5" max="600" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                <a href="tambahtater.php" class="btn btn-outline-danger" role="button">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </main>
</div>

<br/>
<?php include 'template/footer.php'; ?>

<!-- Include Bootstrap JS (optional, for certain features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
