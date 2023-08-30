<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Golongan</title>
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
                DATA GOLONGAN
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

    if (isset($_POST['kode_golongan']) && isset($_POST['tunjangan_anak']) && isset($_POST['tunjangan_transport']) && isset($_POST['uang_makan'])) {
        $kodeGolongan = $_POST['kode_golongan'];
        $tunjanganAnak = $_POST['tunjangan_anak'];
        $tunjanganTransport = $_POST['tunjangan_transport'];
        $uangMakan = $_POST['uang_makan'];

        $query = "INSERT INTO golongan (kode_golongan, tunjangan_anak, tunjangan_transport, uang_makan) VALUES ('$kodeGolongan', $tunjanganAnak, $tunjanganTransport, $uangMakan)";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    if (isset($_POST['edit_kode_golongan']) && isset($_POST['edit_tunjangan_anak']) && isset($_POST['edit_tunjangan_transport']) && isset($_POST['edit_uang_makan'])) {
        $kodeGolongan = $_POST['edit_kode_golongan'];
        $tunjanganAnak = $_POST['edit_tunjangan_anak'];
        $tunjanganTransport = $_POST['edit_tunjangan_transport'];
        $uangMakan = $_POST['edit_uang_makan'];

        $query = "UPDATE golongan SET tunjangan_anak='$tunjanganAnak', tunjangan_transport=$tunjanganTransport, uang_makan=$uangMakan WHERE kode_golongan='$kodeGolongan'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    if (isset($_GET['kode_golongan'])) {
        $kodeGolongan = $_GET['kode_golongan'];

        $query = "DELETE FROM golongan WHERE kode_golongan='$kodeGolongan'";
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
                    <th>Kode Golongan</th>
                    <th>Tunjangan Anak</th>
                    <th>Tunjangan Transport</th>
                    <th>Uang Makan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM golongan";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['kode_golongan']."</td>";
                    echo "<td>".$data['tunjangan_anak']."</td>";
                    echo "<td>".$data['tunjangan_transport']."</td>";
                    echo "<td>".$data['uang_makan']."</td>";
                    echo "<td>";
                    echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['kode_golongan']."\", \"".$data['tunjangan_anak']."\", \"".$data['tunjangan_transport']."\", \"".$data['uang_makan']."\")'>Edit</button>";
                    echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['kode_golongan']."\")'>Hapus</button>";
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
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Golongan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="kode_golongan" class="form-label">Kode Golongan:</label>
                            <input type="text" class="form-control" id="kode_golongan" name="kode_golongan" required>
                        </div>
                        <div class="mb-3">
                            <label for="tunjangan_anak" class="form-label">Tunjangan Anak:</label>
                            <input type="number" class="form-control" id="tunjangan_anak" name="tunjangan_anak" required>
                        </div>
                        <div class="mb-3">
                            <label for="tunjangan_transport" class="form-label">Tunjangan Transport:</label>
                            <input type="number" class="form-control" id="tunjangan_transport" name="tunjangan_transport" required>
                        </div>
                        <div class="mb-3">
                            <label for="uang_makan" class="form-label">Uang Makan:</label>
                            <input type="number" class="form-control" id="uang_makan" name="uang_makan" required>
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
                    <h5 class="modal-title" id="editModalLabel">Edit Data Golongan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_kode_golongan" class="form-label">Kode Golongan:</label>
                            <input type="text" class="form-control" id="edit_kode_golongan" name="edit_kode_golongan" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tunjangan_anak" class="form-label">Tunjangan Anak:</label>
                            <input type="number" class="form-control" id="edit_tunjangan_anak" name="edit_tunjangan_anak" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tunjangan_transport" class="form-label">Tunjangan Transport:</label>
                            <input type="number" class="form-control" id="edit_tunjangan_transport" name="edit_tunjangan_transport" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_uang_makan" class="form-label">Uang Makan:</label>
                            <input type="number" class="form-control" id="edit_uang_makan" name="edit_uang_makan" required>
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
        function openEditModal(kodeGolongan, tunjanganAnak, tunjanganTransport, uangMakan) {
            document.getElementById("edit_kode_golongan").value = kodeGolongan;
            document.getElementById("edit_tunjangan_anak").value = tunjanganAnak;
            document.getElementById("edit_tunjangan_transport").value = tunjanganTransport;
            document.getElementById("edit_uang_makan").value = uangMakan;
        }

        function deleteData(kodeGolongan) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "?kode_golongan=" + kodeGolongan;
            }
        }
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
