<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jabatan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #D7DBE4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding-top: 0px;
            padding-left: 0px;
        }

        .container {
            margin-top: 10px;
            margin-left: 0px;
        }

        .card-header {
            background-color: #4A6284;
            color: #D7DBE4;
            font-weight: bold;
            border: none;
        }

        .navbar {
            background-color: #0B1B34;
        }

        .navbar-brand {
            color: #D7DBE4;
            font-size: 24px;
            font-weight: bold;
            margin-left: 0px; /* Menghilangkan margin kiri pada navbar-brand */
        }

        .navbar-nav .nav-link {
            color: #7E8E9E;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #0B1B34;
        }

        .navbar-nav .nav-link.active {
            color: #0B1B34;
        }

        .navbar-nav .nav-link i {
            margin-right: 5px;
        }

        .navbar-nav .nav-link.active i {
            color: #0B1B34;
        }

        .navbar-nav .nav-link:focus {
            outline: none;
        }

        .navbar-nav .nav-link:focus i {
            color: #0B1B34;
        }

        h2 {
            color: #0B1B34;
            margin-left: 0px; /* Menghilangkan margin kiri pada h2 */
        }

        th {
            background-color: #7E8E9E;
            color: #0B1B34;
            font-size: 14px; /* Ukuran tulisan diperkecil */
            text-align: left; /* Teks rata kiri */
            padding-left: 0px; /* Jarak kiri pada sel header */
        }

        td {
            background-color: #D7DBE4;
            color: #0B1B34;
            font-size: 14px; /* Ukuran tulisan diperkecil */
            text-align: left; /* Teks rata kiri */
            padding-left: 0px; /* Jarak kiri pada sel data */
        }

        .btn-primary {
            background-color: #4A6284;
            border-color: #7E8E9E;
        }

        .btn-primary:hover {
            background-color: #0B1B34;
            border-color: #7E8E9E;
        }

        .btn-danger {
            background-color: #4A6284;
            border-color: #7E8E9E;
        }

        .btn-danger:hover {
            background-color: #0B1B34;
            border-color: #7E8E9E;
        }

        .modal-content {
            background-color: #0B1B34;
        }

        .modal-title {
            color: #D7DBE4;
        }

        .modal-body {
            background-color: #ffffff;
            color: #0B1B34;
        }

        .modal-body-mb-3 {
            background-color: #ffffff;
            color: #0B1B34;
        }

        .modal-body-secondary {
            background-color: #7E8E9E;
            border-color: #7E8E9E;
        }

        .btn-secondary {
            background-color: #7E8E9E;
            border-color: #7E8E9E;
        }

        .btn-secondary:hover {
            background-color: #7E8E9E;
            border-color: #7E8E9E;
        }

        .btn-primary,
        .btn-secondary {
            color: #D7DBE4;
        }

        .form-control {
            background-color: #ffffff;
            color: #0B1B34; /* Warna tulisan pada kotak edit */
        }

        .text-left {
            text-align: left; /* Rata kiri untuk teks PT HIJABLINK dan DATA PENILAIAN KINERJA */
        }

        .table {
            margin-left: 0px; /* Menghilangkan margin kiri pada tabel */
        }
    </style>
    <script>
        function confirmLogout(event) {
          event.preventDefault(); // Mencegah tindakan default dari tautan
      
          var confirmation = confirm("Yakin anda akan logout?");
          if (confirmation) {
            window.location.href = event.currentTarget.getAttribute("href");
          }
        }
    </script>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark color=#4A6284">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="display-4">PT HIJABLINK</span>
                <br>
                DATA JABATAN
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>
            </a>
            <div class="navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
                            <i class="fas fa-home" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="golongan.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Golongan">
                            <i class="fas fa-users" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="jabatan.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jabatan">
                            <i class="fas fa-briefcase" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pegawai.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pegawai">
                            <i class="fas fa-user" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gaji.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Gaji">
                            <i class="fas fa-money-bill-wave" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="presensi.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Presensi">
                            <i class="far fa-calendar-check" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penilaian_kinerja.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Penilaian Kinerja">
                            <i class="fas fa-chart-line" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php?logout=true" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log Out" onclick="confirmLogout(event)">
                            <i class="fas fa-sign-out-alt" style="color: #7E8E9E;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hijablink";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    if (isset($_POST['kode_jabatan']) && isset($_POST['nama_jabatan']) && isset($_POST['gaji_pokok']) && isset($_POST['tunjangan_jabatan']) && isset($_POST['divisi'])) {
        $kodeJabatan = $_POST['kode_jabatan'];
        $namaJabatan = $_POST['nama_jabatan'];
        $gajiPokok = $_POST['gaji_pokok'];
        $tunjanganJabatan = $_POST['tunjangan_jabatan'];
        $divisi = $_POST['divisi'];

        $query = "INSERT INTO jabatan (kode_jabatan, nama_jabatan, gaji_pokok, tunjangan_jabatan, divisi) VALUES ('$kodeJabatan', '$namaJabatan', $gajiPokok, $tunjanganJabatan, '$divisi')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    if (isset($_POST['edit_kode_jabatan']) && isset($_POST['edit_nama_jabatan']) && isset($_POST['edit_gaji_pokok']) && isset($_POST['edit_tunjangan_jabatan']) && isset($_POST['edit_divisi'])) {
        $kodeJabatan = $_POST['edit_kode_jabatan'];
        $namaJabatan = $_POST['edit_nama_jabatan'];
        $gajiPokok = $_POST['edit_gaji_pokok'];
        $tunjanganJabatan = $_POST['edit_tunjangan_jabatan'];
        $divisi = $_POST['edit_divisi'];

        $query = "UPDATE jabatan SET nama_jabatan='$namaJabatan', gaji_pokok=$gajiPokok, tunjangan_jabatan=$tunjanganJabatan, divisi='$divisi' WHERE kode_jabatan='$kodeJabatan'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    if (isset($_GET['kode_jabatan'])) {
        $kodeJabatan = $_GET['kode_jabatan'];

        $query = "DELETE FROM jabatan WHERE kode_jabatan='$kodeJabatan'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    ?>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Divisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM jabatan";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['kode_jabatan']."</td>";
                    echo "<td>".$data['nama_jabatan']."</td>";
                    echo "<td>".$data['gaji_pokok']."</td>";
                    echo "<td>".$data['tunjangan_jabatan']."</td>";
                    echo "<td>".$data['divisi'] . "</td>";
                    echo "<td>";
                    echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['kode_jabatan']."\", \"".$data['nama_jabatan']."\", \"".$data['gaji_pokok']."\", \"".$data['tunjangan_jabatan']."\", \"".$data['divisi']."\")'>Edit</button>";
                    echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['kode_jabatan']."\")'>Hapus</button>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="kode_jabatan" class="form-label">Kode Jabatan:</label>
                            <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_jabatan" class="form-label">Nama Jabatan:</label>
                            <select class="form-select" id="nama_jabatan" name="nama_jabatan" required>
                                <option value=""></option>
                                <option value="Direktur">Direktur</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Manager">Manager</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gaji_pokok" class="form-label">Gaji Pokok:</label>
                            <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" required>
                        </div>
                        <div class="mb-3">
                            <label for="tunjangan_jabatan" class="form-label">Tunjangan Jabatan:</label>
                            <input type="number" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi:</label>
                            <select class="form-select" id="divisi" name="divisi" required>
                                <option value=""></option>
                                <option value="pimpinan">Pimpinan</option>
                                <option value="penjualan">Penjualan</option>
                                <option value="pembelian">Pembelian</option>
                                <option value="persediaan">Persediaan</option>
                                <option value="hrd">HRD</option>
                                <option value="keuangan">Keuangan</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_kode_jabatan" class="form-label">Kode Jabatan:</label>
                            <input type="text" class="form-control" id="edit_kode_jabatan" name="edit_kode_jabatan" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nama_jabatan" class="form-label">Nama Jabatan:</label>
                            <select class="form-select" id="edit_nama_jabatan" name="edit_nama_jabatan" required>
                                <option value=""></option>
                                <option value="Direktur">Direktur</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Manager">Manager</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_gaji_pokok" class="form-label">Gaji Pokok:</label>
                            <input type="number" class="form-control" id="edit_gaji_pokok" name="edit_gaji_pokok" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tunjangan_jabatan" class="form-label">Tunjangan Jabatan:</label>
                            <input type="number" class="form-control" id="edit_tunjangan_jabatan" name="edit_tunjangan_jabatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_divisi" class="form-label">Divisi:</label>
                            <select class="form-select" id="edit_divisi" name="edit_divisi" required>
                                <option value=""></option>
                                <option value="pimpinan">Pimpinan</option>
                                <option value="penjualan">Penjualan</option>
                                <option value="pembelian">Pembelian</option>
                                <option value="persediaan">Persediaan</option>
                                <option value="hrd">HRD</option>
                                <option value="keuangan">Keuangan</option>
                            </select>
                        </div>
                        <div class="modal-footer">     
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function openEditModal(kodeJabatan, namaJabatan, gajiPokok, tunjanganJabatan, divisi) {
            document.getElementById("edit_kode_jabatan").value = kodeJabatan;
            document.getElementById("edit_nama_jabatan").value = namaJabatan;
            document.getElementById("edit_gaji_pokok").value = gajiPokok;
            document.getElementById("edit_tunjangan_jabatan").value = tunjanganJabatan;
            document.getElementById("edit_divisi").value = divisi;
        }

        function deleteData(kodeJabatan) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "?kode_jabatan=" + kodeJabatan;
            }
        }
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
