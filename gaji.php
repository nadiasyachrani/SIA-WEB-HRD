<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji</title>
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
                DATA GAJI
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

    if (isset($_POST['no_slip']) && isset($_POST['tanggal']) && isset($_POST['nip'])) {
        $noSlip = $_POST['no_slip'];
        $tanggal = $_POST['tanggal'];
        $nip = $_POST['nip'];
    
        // Query ke tabel pegawai berdasarkan NIP
        $queryPegawai = "SELECT nama, divisi, kode_jabatan, kode_golongan, jumlah_anak FROM pegawai WHERE nip='$nip'";
        $resultPegawai = mysqli_query($conn, $queryPegawai);
    
        if ($resultPegawai && mysqli_num_rows($resultPegawai) > 0) {
            $rowPegawai = mysqli_fetch_assoc($resultPegawai);
            $nama = $rowPegawai['nama'];
            $divisi = $rowPegawai['divisi'];
            $kodeJabatan = $rowPegawai['kode_jabatan'];
            $kodeGolongan = $rowPegawai['kode_golongan'];
            $jumlahAnak = $rowPegawai['jumlah_anak'];
    
            // Query ke tabel jabatan berdasarkan kode jabatan
            $queryJabatan = "SELECT gaji_pokok, tunjangan_jabatan FROM jabatan WHERE kode_jabatan='$kodeJabatan'";
            $resultJabatan = mysqli_query($conn, $queryJabatan);
    
            if ($resultJabatan && mysqli_num_rows($resultJabatan) > 0) {
                $rowJabatan = mysqli_fetch_assoc($resultJabatan);
                $gajiPokok = $rowJabatan['gaji_pokok'];
                $tunjanganJabatan = $rowJabatan['tunjangan_jabatan'];
            }
    
            // Query ke tabel golongan berdasarkan kode golongan
            $queryGolongan = "SELECT tunjangan_anak, tunjangan_transport, uang_makan FROM golongan WHERE kode_golongan='$kodeGolongan'";
            $resultGolongan = mysqli_query($conn, $queryGolongan);
    
            if ($resultGolongan && mysqli_num_rows($resultGolongan) > 0) {
                $rowGolongan = mysqli_fetch_assoc($resultGolongan);
                $tunjanganAnak = $rowGolongan['tunjangan_anak'] * $jumlahAnak;
                $tunjanganTransport = $rowGolongan['tunjangan_transport'];
                $uangMakan = $rowGolongan['uang_makan'];
            }
    
            $pendapatan = $gajiPokok + $tunjanganJabatan + $tunjanganAnak + $tunjanganTransport + $uangMakan;
            $potongan = 0.02 * $pendapatan; // Ubah sesuai dengan logika potongan yang ada
            $gajiBersih = $pendapatan - $potongan;
    
            // Query untuk menyimpan data ke tabel gaji
            $query = "INSERT INTO gaji (no_slip, tanggal, nip, nama, divisi, gaji_pokok, tunjangan_jabatan, tunjangan_anak, tunjangan_transport, uang_makan, pendapatan, potongan, gaji_bersih) VALUES ('$noSlip', '$tanggal', '$nip', '$nama', '$divisi', $gajiPokok, $tunjanganJabatan, $tunjanganAnak, $tunjanganTransport, $uangMakan, $pendapatan, $potongan, $gajiBersih)";
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }    
    
    if (isset($_POST['edit_no_slip']) && isset($_POST['edit_tanggal']) && isset($_POST['edit_nip'])) {
        $noSlip = $_POST['edit_no_slip'];
        $tanggal = $_POST['edit_tanggal'];
        $nip = $_POST['edit_nip'];
    
        // Query ke tabel pegawai berdasarkan NIP
        $queryPegawai = "SELECT nama, divisi, kode_jabatan, kode_golongan, jumlah_anak FROM pegawai WHERE nip='$nip'";
        $resultPegawai = mysqli_query($conn, $queryPegawai);
    
        if ($resultPegawai && mysqli_num_rows($resultPegawai) > 0) {
            $rowPegawai = mysqli_fetch_assoc($resultPegawai);
            $nama = $rowPegawai['nama'];
            $divisi = $rowPegawai['divisi'];
            $kodeJabatan = $rowPegawai['kode_jabatan'];
            $kodeGolongan = $rowPegawai['kode_golongan'];
            $jumlahAnak = $rowPegawai['jumlah_anak'];
    
            // Query ke tabel jabatan berdasarkan kode jabatan
            $queryJabatan = "SELECT gaji_pokok, tunjangan_jabatan FROM jabatan WHERE kode_jabatan='$kodeJabatan'";
            $resultJabatan = mysqli_query($conn, $queryJabatan);
    
            if ($resultJabatan && mysqli_num_rows($resultJabatan) > 0) {
                $rowJabatan = mysqli_fetch_assoc($resultJabatan);
                $gajiPokok = $rowJabatan['gaji_pokok'];
                $tunjanganJabatan = $rowJabatan['tunjangan_jabatan'];
            }
    
            // Query ke tabel golongan berdasarkan kode golongan
            $queryGolongan = "SELECT tunjangan_anak, tunjangan_transport, uang_makan FROM golongan WHERE kode_golongan='$kodeGolongan'";
            $resultGolongan = mysqli_query($conn, $queryGolongan);
    
            if ($resultGolongan && mysqli_num_rows($resultGolongan) > 0) {
                $rowGolongan = mysqli_fetch_assoc($resultGolongan);
                $tunjanganAnak = $rowGolongan['tunjangan_anak'] * $jumlahAnak;
                $tunjanganTransport = $rowGolongan['tunjangan_transport'];
                $uangMakan = $rowGolongan['uang_makan'];
            }
    
            $pendapatan = $gajiPokok + $tunjanganJabatan + $tunjanganAnak + $tunjanganTransport + $uangMakan;
            $potongan = 0.02 * $pendapatan; // Ubah sesuai dengan logika potongan yang ada
            $gajiBersih = $pendapatan - $potongan;
    
            $query = "UPDATE gaji SET tanggal = '$tanggal', nip = '$nip', nama = '$nama', divisi = '$divisi', gaji_pokok = $gajiPokok, tunjangan_jabatan = $tunjanganJabatan, tunjangan_anak = $tunjanganAnak, tunjangan_transport = $tunjanganTransport, uang_makan = $uangMakan, pendapatan = $pendapatan, potongan = $potongan, gaji_bersih = $gajiBersih WHERE no_slip = '$noSlip'";
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }    

    if (isset($_GET['no_slip'])) {
        $noSlip = $_GET['no_slip'];

        $query = "DELETE FROM gaji WHERE no_slip='$noSlip'";
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
                    <th>No. Slip</th>
                    <th>Tanggal</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Divisi</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Tunjangan Anak</th>
                    <th>Tunjangan Transport</th>
                    <th>Uang Makan</th>
                    <th>Pendapatan</th>
                    <th>Potongan</th>
                    <th>Gaji Bersih</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM gaji";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['no_slip'] . "</td>";
                    echo "<td>".$data['tanggal'] . "</td>";
                    echo "<td>".$data['nip'] . "</td>";
                    echo "<td>".$data['nama'] . "</td>";
                    echo "<td>".$data['divisi'] . "</td>";
                    echo "<td>".$data['gaji_pokok'] . "</td>";
                    echo "<td>".$data['tunjangan_jabatan'] . "</td>";
                    echo "<td>".$data['tunjangan_anak'] . "</td>";
                    echo "<td>".$data['tunjangan_transport'] . "</td>";
                    echo "<td>".$data['uang_makan'] . "</td>";
                    echo "<td>".$data['pendapatan'] . "</td>";
                    echo "<td>".$data['potongan'] . "</td>";
                    echo "<td>".$data['gaji_bersih'] . "</td>";
                    echo "<td>";
                    echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['no_slip']."\", \"".$data['tanggal']."\", \"".$data['nip']."\")'>Edit</button>";
                    echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['no_slip']."\")'>Hapus</button>";
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
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Gaji</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="no_slip" class="form-label">No. Slip</label>
                            <input type="text" class="form-control" id="no_slip" name="no_slip" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
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
                    <h5 class="modal-title" id="editModalLabel">Edit Data Gaji</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_no_slip" class="form-label">No. Slip</label>
                            <input type="text" class="form-control" id="edit_no_slip" name="edit_no_slip" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="edit_tanggal" name="edit_tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="edit_nip" name="edit_nip" required>
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
        function openEditModal(noSlip, tanggal, nip) {
            document.getElementById("edit_no_slip").value = noSlip;
            document.getElementById("edit_tanggal").value = tanggal;
            document.getElementById("edit_nip").value = nip;
        }

        function deleteData(noSlip) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "?no_slip=" + noSlip;
            }
        }
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
