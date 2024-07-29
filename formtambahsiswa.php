<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 SAMPIT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>  
    <link rel="shortcut icon" href="gambar/logo.png">   
    <link rel="stylesheet" href="css/prim.css">
</head>
<body>
<?php include 'template/header.php'; ?>

<br/>
<div class="container">
    <main>
        <h2 class="mt-4 mb-4">Tambah Data Siswa Pelanggar</h2>
        <form action="tambahsiswa.php" method="post">
            <div class="row mb-3">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nis" name="nis" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select class="form-select" id="kelas" name="kelas">
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="X (10)">X (10)</option>
                        <option value="XI (11)">XI (11)</option>
                        <option value="XII (12)">XII (12)</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-select" id="jurusan" name="jurusan">
                        <option value="" disabled selected>Pilih Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="DKV">DKV</option>
                        <option value="BR">BR</option>
                        <option value="MPLB">MPLB</option>
                        <option value="AKL">AKL</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="guru" class="col-sm-2 col-form-label">Guru Pencatat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="guru" name="guru" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenisPelanggaran" class="col-sm-2 col-form-label">Jenis Pelanggaran</label>
                <div class="col-sm-10">
                    <select class="form-select" id="jenisPelanggaran" name="jenis_pelanggaran">
                        <option value="" disabled selected>Pilih Jenis Pelanggaran</option>
                        <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * FROM tatatertib");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <option value="<?php echo $d['jenis_pelanggaran']; echo $d['poin'] ?>"><?php echo $d['jenis_pelanggaran']; echo "   -   ";echo $d['poin'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <a href="siswapelanggar.php" class="btn btn-outline-danger" role="button">Batal</a>
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
<!-- Include Bootstrap JS (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
