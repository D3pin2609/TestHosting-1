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
    <script>
        function hapus(nis) {
            var modal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
            modal.show();

            document.getElementById('deleteConfirmButton').addEventListener('click', function() {
                window.location.href = 'hapusdatasiswa.php?nis=' + nis;
            });
        }
    </script>
</head>
<body>

<?php include 'template/header.php'; ?>

<div class="container">
        <h2 class="text-center py-4">Siswa Pelanggar</h2>
    <main>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Guru Pencatat</th>
                    <th>Jenis Pelanggaran</th>
                    <th>Poin</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include 'koneksi.php';
                $i = 0;
                $data = mysqli_query($koneksi,"SELECT siswa_pelanggar.nis,siswa_pelanggar.nama,siswa_pelanggar.kelas,siswa_pelanggar.jurusan,siswa_pelanggar.guru,tatatertib.jenis_pelanggaran,tatatertib.poin 
                FROM siswa_pelanggar INNER JOIN tatatertib
                ON tatatertib.jenis_pelanggaran=siswa_pelanggar.jenis_pelanggaran;");
                while($d = mysqli_fetch_array($data))
                {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $d['nis']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['kelas']; ?></td>
                        <td><?php echo $d['jurusan']; ?></td>
                        <td><?php echo $d['guru']; ?></td>
                        <td><?php echo $d['jenis_pelanggaran']; ?></td>
                        <td><?php echo $d['poin']; ?></td>
                        <td><a href="javascript:hapus(<?php echo $d['nis'];?>)"><button class="btn btn-danger">Hapus</button></a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <button class="btn btn-primary mb-3"><a href="formtambahsiswa.php" style="color: white; text-decoration: none;">Tambah</a></button>
    </main>
</div>


<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="deleteConfirmButton" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
