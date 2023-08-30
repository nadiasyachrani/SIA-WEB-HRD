<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
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
                DATA PEGAWAI
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

    if (isset($_POST['nip']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['tempat_lahir']) && isset($_POST['tanggal_lahir']) && isset($_POST['kode_golongan']) && isset($_POST['kode_jabatan']) && isset($_POST['divisi']) && isset($_POST['status_nikah']) && isset($_POST['jumlah_anak'])) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $tempatLahir = $_POST['tempat_lahir'];
        $tanggalLahir = $_POST['tanggal_lahir'];
        $kodeGolongan = $_POST['kode_golongan'];
        $kodeJabatan = $_POST['kode_jabatan'];
        $divisi = $_POST['divisi'];
        $statusNikah = $_POST['status_nikah'];
        $jumlahAnak = $_POST['jumlah_anak'];

        $query = "INSERT INTO pegawai (nip, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, kode_golongan, kode_jabatan, divisi, status_nikah, jumlah_anak) VALUES ('$nip', '$nama', '$jenisKelamin', '$tempatLahir', '$tanggalLahir', '$kodeGolongan', '$kodeJabatan', '$divisi', '$statusNikah', $jumlahAnak)";
        $result = mysqli_query($conn, $query);        

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    if (isset($_POST['edit_nip']) && isset($_POST['edit_nama']) && isset($_POST['edit_jenis_kelamin']) && isset($_POST['edit_tempat_lahir']) && isset($_POST['edit_tanggal_lahir']) && isset($_POST['edit_kode_golongan']) && isset($_POST['edit_kode_jabatan']) && isset($_POST['edit_divisi']) && isset($_POST['edit_status_nikah']) && isset($_POST['edit_jumlah_anak'])) {
        $nip = $_POST['edit_nip'];
        $nama = $_POST['edit_nama'];
        $jenisKelamin = $_POST['edit_jenis_kelamin'];
        $tempatLahir = $_POST['edit_tempat_lahir'];
        $tanggalLahir = $_POST['edit_tanggal_lahir'];
        $kodeGolongan = $_POST['edit_kode_golongan'];
        $kodeJabatan = $_POST['edit_kode_jabatan'];
        $divisi = $_POST['edit_divisi'];
        $statusNikah = $_POST['edit_status_nikah'];
        $jumlahAnak = $_POST['edit_jumlah_anak'];

        $query = "UPDATE pegawai SET nama='$nama', jenis_kelamin='$jenisKelamin', tempat_lahir='$tempatLahir', tanggal_lahir='$tanggalLahir', kode_golongan='$kodeGolongan', kode_jabatan='$kodeJabatan', divisi='$divisi', status_nikah='$statusNikah', jumlah_anak=$jumlahAnak WHERE nip='$nip'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    if (isset($_GET['nip'])) {
        $nip = $_GET['nip'];

        $query = "DELETE FROM pegawai WHERE nip='$nip'";
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
                    <th>nip</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Kode Golongan</th>
                    <th>Kode Jabatan</th>
                    <th>Divisi</th>
                    <th>Status Nikah</th>
                    <th>Jumlah Anak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM pegawai";
                    $result = mysqli_query($conn, $query);

                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$data['nip']."</td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['jenis_kelamin']."</td>";
                        echo "<td>".$data['tempat_lahir']."</td>";
                        echo "<td>".$data['tanggal_lahir']."</td>";
                        echo "<td>".$data['kode_golongan']."</td>";
                        echo "<td>".$data['kode_jabatan']."</td>";
                        echo "<td>".$data['divisi']."</td>";
                        echo "<td>".$data['status_nikah']."</td>";
                        echo "<td>".$data['jumlah_anak']."</td>";
                        echo "<td>";
                        echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['nip']."\", \"".$data['nama']."\", \"".$data['jenis_kelamin']."\", \"".$data['tempat_lahir']."\", \"".$data['tanggal_lahir']."\", \"".$data['kode_golongan']."\", \"".$data['kode_jabatan']."\", \"".$data['divisi']."\", \"".$data['status_nikah']."\", \"".$data['jumlah_anak']."\")'>Edit</button>";
                        echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['nip']."\")'>Hapus</button>";
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
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="nip" class="form-label">nip:</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value=""></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_golongan" class="form-label">Kode Golongan:</label>
                            <input type="text" class="form-control" id="kode_golongan" name="kode_golongan" required>
                        </div>
                        <div class="mb-3">
                            <label for="kode_jabatan" class="form-label">Kode Jabatan:</label>
                            <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" required>
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
                        <div class="mb-3">
                            <label for="status_nikah" class="form-label">Status Nikah:</label>
                            <select class="form-select" id="status_nikah" name="status_nikah" required>
                                <option value=""></option>
                                <option value="lajang">Lajang</option>
                                <option value="menikah">Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_anak" class="form-label">Jumlah Anak:</label>
                            <select class="form-select" id="jumlah_anak" name="jumlah_anak" required>
                                <option value=""></option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
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
                    <h5 class="modal-title" id="editModalLabel">Edit Data Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_nip" class="form-label">nip:</label>
                            <input type="text" class="form-control" id="edit_nip" name="edit_nip" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="edit_nama" name="edit_nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="edit_jenis_kelamin" name="edit_jenis_kelamin" required>
                                <option value=""></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tempat_lahir" class="form-label">Tempat Lahir:</label>
                            <input type="text" class="form-control" id="edit_tempat_lahir" name="edit_tempat_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="edit_tanggal_lahir" name="edit_tanggal_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_kode_golongan" class="form-label">Kode Golongan:</label>
                            <input type="text" class="form-control" id="edit_kode_golongan" name="edit_kode_golongan" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_kode_jabatan" class="form-label">Kode Jabatan:</label>
                            <input type="text" class="form-control" id="edit_kode_jabatan" name="edit_kode_jabatan" required>
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
                        <div class="mb-3">
                            <label for="edit_status_nikah" class="form-label">Status Nikah:</label>
                            <select class="form-select" id="edit_status_nikah" name="edit_status_nikah" required>
                                <option value=""></option>
                                <option value="lajang">Lajang</option>
                                <option value="menikah">Menikah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_jumlah_anak" class="form-label">Jumlah Anak:</label>
                            <select class="form-select" id="edit_jumlah_anak" name="edit_jumlah_anak" required>
                                <option value=""></option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
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
        function openEditModal(nip, nama, jenisKelamin, tempatLahir, tanggalLahir, kodeGolongan, kodeJabatan, divisi, statusNikah, jumlahAnak) {
            document.getElementById("edit_nip").value = nip;
            document.getElementById("edit_nama").value = nama;
            document.getElementById("edit_jenis_kelamin").value = jenisKelamin;
            document.getElementById("edit_tempat_lahir").value = tempatLahir;
            document.getElementById("edit_tanggal_lahir").value = tanggalLahir;
            document.getElementById("edit_kode_golongan").value = kodeGolongan;
            document.getElementById("edit_kode_jabatan").value = kodeJabatan;
            document.getElementById("edit_divisi").value = divisi;
            document.getElementById("edit_status_nikah").value = statusNikah;
            document.getElementById("edit_jumlah_anak").value = jumlahAnak;
        }

        function deleteData(nip) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "?nip=" + nip;
            }
        }
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
