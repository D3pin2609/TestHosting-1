<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 SAMPIT</title>
    <link rel="stylesheet" href="css/prim.css">
    <script>
        function hapus(jenis_pelanggaran) {
            var modal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
            modal.show();

            document.getElementById('deleteConfirmButton').addEventListener('click', function() {
                window.location.href = 'hapusdatatater.php?jenis_pelanggaran=' + jenis_pelanggaran;
            });
        }
    </script>
</head>
<body>
<?php include 'template/header.php'; ?>
    <div class="container">
    <h2 class="text-center py-4">Tata Tertib Berat</h2>
        <main>
        <div class="table-responsive">
        <table class="table table-bordered table-striped text-center align-middle">
                <tr>
                    <th>No.</th>
                    <th>Jenis Pelanggaran</th>
                    <th>Poin</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include 'koneksi.php';
                $i = 0;
                $data = mysqli_query($koneksi,"SELECT * FROM tatatertib WHERE poin > '200'");
                while($d = mysqli_fetch_array($data))
                {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $d['jenis_pelanggaran']; ?></td>
                    <td><?php echo $d['poin']; ?></td>
                    <td><a href="javascript:hapus('<?php echo $d['jenis_pelanggaran'];?>')"><button class="btn btn-danger">Hapus</button></a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            <button class="btn btn-primary mb-3"><a href="formtambahtater.php" style="color: white; text-decoration: none;">Tambah</a></button>
        </main>
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
    </div>
        <?php include 'template/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>