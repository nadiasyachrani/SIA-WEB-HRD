<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penilaian Kinerja</title>
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
                DATA PENILAIAN KINERJA
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

    if (isset($_POST['kode_penilaian']) && isset($_POST['nip']) && isset($_POST['tgl_mulai']) && isset($_POST['tgl_akhir']) && isset($_POST['nilai_kualitas_kerja']) && isset($_POST['nilai_disiplin']) && isset($_POST['nilai_tanggungjawab']) && isset($_POST['nilai_kerjasama']) && isset($_POST['nilai_pemahaman_tugas'])) {
        $kodePenilaian = $_POST['kode_penilaian'];
        $nip = $_POST['nip'];
        $tglMulai = $_POST['tgl_mulai'];
        $tglAkhir = $_POST['tgl_akhir'];
        $nilaiKualitasKerja = $_POST['nilai_kualitas_kerja'];
        $nilaiDisiplin = $_POST['nilai_disiplin'];
        $nilaiTanggungJawab = $_POST['nilai_tanggungjawab'];
        $nilaiKerjasama = $_POST['nilai_kerjasama'];
        $nilaiPemahamanTugas = $_POST['nilai_pemahaman_tugas'];
    
        // Query ke tabel pegawai berdasarkan NIP
        $queryPegawai = "SELECT nama, divisi FROM pegawai WHERE nip='$nip'";
        $resultPegawai = mysqli_query($conn, $queryPegawai);
    
        if ($resultPegawai && mysqli_num_rows($resultPegawai) > 0) {
            $rowPegawai = mysqli_fetch_assoc($resultPegawai);
            $nama = $rowPegawai['nama'];
            $divisi = $rowPegawai['divisi'];
    
            // Query untuk menghitung jumlah absensi sesuai dengan periode penilaian
            $queryAbsensi = "SELECT COUNT(*) AS jumlah_absen FROM presensi WHERE nip='$nip' AND tgl >= '$tglMulai' AND tgl <= '$tglAkhir' AND (kehadiran='tidak' AND (keterangan='sakit' OR keterangan='izin'))";
            $resultAbsensi = mysqli_query($conn, $queryAbsensi);
    
            if ($resultAbsensi && mysqli_num_rows($resultAbsensi) > 0) {
                $rowAbsensi = mysqli_fetch_assoc($resultAbsensi);
                $jumlahAbsen = $rowAbsensi['jumlah_absen'];
    
                // Jumlahkan absensi "alfa" (terhitung 2)
                $queryAbsensiAlfa = "SELECT COUNT(*) AS jumlah_absen_alfa FROM presensi WHERE nip='$nip' AND tgl >= '$tglMulai' AND tgl <= '$tglAkhir' AND (kehadiran='tidak' AND keterangan='alfa')";
                $resultAbsensiAlfa = mysqli_query($conn, $queryAbsensiAlfa);
    
                if ($resultAbsensiAlfa && mysqli_num_rows($resultAbsensiAlfa) > 0) {
                    $rowAbsensiAlfa = mysqli_fetch_assoc($resultAbsensiAlfa);
                    $jumlahAbsenAlfa = $rowAbsensiAlfa['jumlah_absen_alfa'];
                    $jumlahAbsen += $jumlahAbsenAlfa * 2;
                }
            } else {
                $jumlahAbsen = 0; // Jika tidak ada entri presensi, jumlah absen dianggap 0
            }
    
            // Query untuk menghitung keterlambatan dari tabel presensi
            $queryPresensi = "SELECT SUM(terlambat) AS total_keterlambatan FROM presensi WHERE nip='$nip' AND tgl >= '$tglMulai' AND tgl <= '$tglAkhir'";
            $resultPresensi = mysqli_query($conn, $queryPresensi);
    
            if ($resultPresensi && mysqli_num_rows($resultPresensi) > 0) {
                $rowPresensi = mysqli_fetch_assoc($resultPresensi);
                $keterlambatan = $rowPresensi['total_keterlambatan'];
            } else {
                $keterlambatan = 0; // Jika tidak ada entri presensi, keterlambatan dianggap 0
            }
    
            $totalNilai = $nilaiKualitasKerja + $nilaiDisiplin + $nilaiTanggungJawab + $nilaiKerjasama + $nilaiPemahamanTugas;
    
            // Menentukan rekomendasi berdasarkan total nilai
            if ($totalNilai >= 20 && $totalNilai <= 25) {
                $rekomendasi = "Dapat Diperpanjang";
            } elseif ($totalNilai >= 13 && $totalNilai <= 19) {
                $rekomendasi = "SP1";
            } elseif ($totalNilai >= 6 && $totalNilai <= 12) {
                $rekomendasi = "SP2";
            } elseif ($totalNilai >= 1 && $totalNilai <= 5) {
                $rekomendasi = "Diberhentikan";
            }
    
            $query = "INSERT INTO penilaian_kinerja (kode_penilaian, nip, nama, divisi, tgl_mulai, tgl_akhir, jumlah_absen, keterlambatan, nilai_kualitas_kerja, nilai_disiplin, nilai_tanggungjawab, nilai_kerjasama, nilai_pemahaman_tugas, total_nilai, rekomendasi) VALUES ('$kodePenilaian', '$nip', '$nama', '$divisi', '$tglMulai', '$tglAkhir', $jumlahAbsen, $keterlambatan, $nilaiKualitasKerja, $nilaiDisiplin, $nilaiTanggungJawab, $nilaiKerjasama, $nilaiPemahamanTugas, $totalNilai, '$rekomendasi')";
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error: NIP tidak ditemukan dalam tabel pegawai.";
        }
    }    
    
    if (isset($_POST['edit_kode_penilaian']) && isset($_POST['edit_nip']) && isset($_POST['edit_tgl_mulai']) && isset($_POST['edit_tgl_akhir']) && isset($_POST['edit_nilai_kualitas_kerja']) && isset($_POST['edit_nilai_disiplin']) && isset($_POST['edit_nilai_tanggungjawab']) && isset($_POST['edit_nilai_kerjasama']) && isset($_POST['edit_nilai_pemahaman_tugas'])) {
        $kodePenilaian = $_POST['edit_kode_penilaian'];
        $nip = $_POST['edit_nip'];
        $tglMulai = $_POST['edit_tgl_mulai'];
        $tglAkhir = $_POST['edit_tgl_akhir'];
        $nilaiKualitasKerja = $_POST['edit_nilai_kualitas_kerja'];
        $nilaiDisiplin = $_POST['edit_nilai_disiplin'];
        $nilaiTanggungJawab = $_POST['edit_nilai_tanggungjawab'];
        $nilaiKerjasama = $_POST['edit_nilai_kerjasama'];
        $nilaiPemahamanTugas = $_POST['edit_nilai_pemahaman_tugas'];
    
        // Query ke tabel pegawai berdasarkan NIP
        $queryPegawai = "SELECT nama, divisi FROM pegawai WHERE nip='$nip'";
        $resultPegawai = mysqli_query($conn, $queryPegawai);
    
        if ($resultPegawai && mysqli_num_rows($resultPegawai) > 0) {
            $rowPegawai = mysqli_fetch_assoc($resultPegawai);
            $nama = $rowPegawai['nama'];
            $divisi = $rowPegawai['divisi'];
    
            // Query untuk menghitung jumlah absensi sesuai dengan periode penilaian
            $queryAbsensi = "SELECT COUNT(*) AS jumlah_absen FROM presensi WHERE nip='$nip' AND tgl >= '$tglMulai' AND tgl <= '$tglAkhir' AND (kehadiran='tidak' AND (keterangan='sakit' OR keterangan='izin'))";
            $resultAbsensi = mysqli_query($conn, $queryAbsensi);
    
            if ($resultAbsensi && mysqli_num_rows($resultAbsensi) > 0) {
                $rowAbsensi = mysqli_fetch_assoc($resultAbsensi);
                $jumlahAbsen = $rowAbsensi['jumlah_absen'];
    
                // Jumlahkan absensi "alfa" (terhitung 2)
                $queryAbsensiAlfa = "SELECT COUNT(*) AS jumlah_absen_alfa FROM presensi WHERE nip='$nip' AND tgl >= '$tglMulai' AND tgl <= '$tglAkhir' AND (kehadiran='tidak' AND keterangan='alfa')";
                $resultAbsensiAlfa = mysqli_query($conn, $queryAbsensiAlfa);
    
                if ($resultAbsensiAlfa && mysqli_num_rows($resultAbsensiAlfa) > 0) {
                    $rowAbsensiAlfa = mysqli_fetch_assoc($resultAbsensiAlfa);
                    $jumlahAbsenAlfa = $rowAbsensiAlfa['jumlah_absen_alfa'];
                    $jumlahAbsen += $jumlahAbsenAlfa * 2;
                }
            } else {
                $jumlahAbsen = 0; // Jika tidak ada entri presensi, jumlah absen dianggap 0
            }
    
            // Query untuk menghitung keterlambatan dari tabel presensi
            $queryPresensi = "SELECT SUM(terlambat) AS total_keterlambatan FROM presensi WHERE nip='$nip' AND tgl >= '$tglMulai' AND tgl <= '$tglAkhir'";
            $resultPresensi = mysqli_query($conn, $queryPresensi);
    
            if ($resultPresensi && mysqli_num_rows($resultPresensi) > 0) {
                $rowPresensi = mysqli_fetch_assoc($resultPresensi);
                $keterlambatan = $rowPresensi['total_keterlambatan'];
            } else {
                $keterlambatan = 0; // Jika tidak ada entri presensi, keterlambatan dianggap 0
            }
    
            $totalNilai = $nilaiKualitasKerja + $nilaiDisiplin + $nilaiTanggungJawab + $nilaiKerjasama + $nilaiPemahamanTugas;
    
            // Menentukan rekomendasi berdasarkan total nilai
            if ($totalNilai >= 20 && $totalNilai <= 25) {
                $rekomendasi = "Dapat Diperpanjang";
            } elseif ($totalNilai >= 13 && $totalNilai <= 19) {
                $rekomendasi = "SP1";
            } elseif ($totalNilai >= 6 && $totalNilai <= 12) {
                $rekomendasi = "SP2";
            } elseif ($totalNilai >= 1 && $totalNilai <= 5) {
                $rekomendasi = "Diberhentikan";
            }
    
            $query = "UPDATE penilaian_kinerja SET nip='$nip', nama='$nama', divisi='$divisi', tgl_mulai='$tglMulai', tgl_akhir='$tglAkhir', jumlah_absen=$jumlahAbsen, keterlambatan=$keterlambatan, nilai_kualitas_kerja=$nilaiKualitasKerja, nilai_disiplin=$nilaiDisiplin, nilai_tanggungjawab=$nilaiTanggungJawab, nilai_kerjasama=$nilaiKerjasama, nilai_pemahaman_tugas=$nilaiPemahamanTugas, total_nilai=$totalNilai, rekomendasi='$rekomendasi' WHERE kode_penilaian='$kodePenilaian'";
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error: NIP tidak ditemukan dalam tabel pegawai.";
        }
    }
    
    
    if (isset($_GET['kode_penilaian'])) {
        $kodePenilaian = $_GET['kode_penilaian'];

        $query = "DELETE FROM penilaian_kinerja WHERE kode_penilaian='$kodePenilaian'";
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
                    <th>Kode Penilaian</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Divisi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th>Jumlah Absen</th>
                    <th>Keterlambatan (menit)</th>
                    <th>Nilai Kualitas Kerja</th>
                    <th>Nilai Disiplin</th>
                    <th>Nilai Tanggung Jawab</th>
                    <th>Nilai Kerjasama</th>
                    <th>Nilai Pemahaman Tugas</th>
                    <th>Total Nilai</th>
                    <th>Rekomendasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM penilaian_kinerja";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['kode_penilaian']."</td>";
                    echo "<td>".$data['nip']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['divisi']."</td>";
                    echo "<td>".$data['tgl_mulai']."</td>";
                    echo "<td>".$data['tgl_akhir']."</td>";
                    echo "<td>".$data['jumlah_absen']."</td>";
                    echo "<td>".$data['keterlambatan']."</td>";
                    echo "<td>".$data['nilai_kualitas_kerja']."</td>";
                    echo "<td>".$data['nilai_disiplin']."</td>";
                    echo "<td>".$data['nilai_tanggungjawab']."</td>";
                    echo "<td>".$data['nilai_kerjasama']."</td>";
                    echo "<td>".$data['nilai_pemahaman_tugas']."</td>";
                    echo "<td>".$data['total_nilai']."</td>";    
                    echo "<td>".$data['rekomendasi']."</td>";                    
                    echo "<td>";                    
                    echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['kode_penilaian']."\", \"".$data['nip']."\", \"".$data['tgl_mulai']."\", \"".$data['tgl_akhir']."\", \"".$data['nilai_kualitas_kerja']."\", \"".$data['nilai_disiplin']."\", \"".$data['nilai_tanggungjawab']."\", \"".$data['nilai_kerjasama']."\", \"".$data['nilai_pemahaman_tugas']."\")'>Edit</button>";
                    echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['kode_penilaian']."\")'>Hapus</button>";
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
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Penilaian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="kode_penilaian" class="form-label">Kode Penilaian:</label>
                            <input type="text" class="form-control" id="kode_penilaian" name="kode_penilaian" required>
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP:</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_mulai" class="form-label">Tanggal Mulai:</label>
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_akhir" class="form-label">Tanggal Akhir:</label>
                            <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" required>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_kualitas_kerja" class="form-label">Nilai Kualitas Kerja:</label>
                            <select class="form-select" id="nilai_kualitas_kerja" name="nilai_kualitas_kerja" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_disiplin" class="form-label">Nilai Disiplin:</label>
                            <select class="form-select" id="nilai_disiplin" name="nilai_disiplin" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_tanggungjawab" class="form-label">Nilai Tanggung Jawab:</label>
                            <select class="form-select" id="nilai_tanggungjawab" name="nilai_tanggungjawab" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_kerjasama" class="form-label">Nilai Kerjasama:</label>
                            <select class="form-select" id="nilai_kerjasama" name="nilai_kerjasama" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nilai_pemahaman_tugas" class="form-label">Nilai Pemahaman Tugas:</label>
                            <select class="form-select" id="nilai_pemahaman_tugas" name="nilai_pemahaman_tugas" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
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
                    <h5 class="modal-title" id="editModalLabel">Edit Data Penilaian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_kode_penilaian" class="form-label">Kode Penilaian:</label>
                            <input type="text" class="form-control" id="edit_kode_penilaian" name="edit_kode_penilaian" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nip" class="form-label">NIP:</label>
                            <input type="text" class="form-control" id="edit_nip" name="edit_nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tgl_mulai" class="form-label">Tanggal Mulai:</label>
                            <input type="date" class="form-control" id="edit_tgl_mulai" name="edit_tgl_mulai" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tgl_akhir" class="form-label">Tanggal Akhir:</label>
                            <input type="date" class="form-control" id="edit_tgl_akhir" name="edit_tgl_akhir" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nilai_kualitas_kerja" class="form-label">Nilai Kualitas Kerja:</label>
                            <select class="form-select" id="edit_nilai_kualitas_kerja" name="edit_nilai_kualitas_kerja" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nilai_disiplin" class="form-label">Nilai Disiplin:</label>
                            <select class="form-select" id="edit_nilai_disiplin" name="edit_nilai_disiplin" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nilai_tanggungjawab" class="form-label">Nilai Tanggung Jawab:</label>
                            <select class="form-select" id="edit_nilai_tanggungjawab" name="edit_nilai_tanggungjawab" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nilai_kerjasama" class="form-label">Nilai Kerjasama:</label>
                            <select class="form-select" id="edit_nilai_kerjasama" name="edit_nilai_kerjasama" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nilai_pemahaman_tugas" class="form-label">Nilai Pemahaman Tugas:</label>
                            <select class="form-select" id="edit_nilai_pemahaman_tugas" name="edit_nilai_pemahaman_tugas" required>
                                <option value=""></option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
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
        function openEditModal(kodePenilaian, nip, tglMulai, tglAkhir, keterlambatan, nilaiKualitasKerja, nilaiDisiplin, nilaiTanggungJawab, nilaiKerjasama, nilaiPemahamanTugas) {
            document.getElementById("edit_kode_penilaian").value = kodePenilaian;
            document.getElementById("edit_nip").value = nip;
            document.getElementById("edit_tgl_mulai").value = tglMulai;
            document.getElementById("edit_tgl_akhir").value = tglAkhir;
            document.getElementById("edit_nilai_kualitas_kerja").value = nilaiKualitasKerja;
            document.getElementById("edit_nilai_disiplin").value = nilaiDisiplin;
            document.getElementById("edit_nilai_tanggungjawab").value = nilaiTanggungJawab;
            document.getElementById("edit_nilai_kerjasama").value = nilaiKerjasama;
            document.getElementById("edit_nilai_pemahaman_tugas").value = nilaiPemahamanTugas
        }

        function deleteData(kodePenilaian) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "?kode_penilaian=" + kodePenilaian;
            }
        }
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
