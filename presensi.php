<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Presensi</title>
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
                DATA PRESENSI
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

    if (isset($_POST['id_presensi']) && isset($_POST['nip']) && isset($_POST['tgl']) && isset($_POST['kehadiran']) && isset($_POST['keterangan']) && isset($_POST['jam_masuk']) && isset($_POST['jam_keluar'])) {
        $idPresensi = $_POST['id_presensi'];
        $nip = $_POST['nip'];
        $tgl = $_POST['tgl'];
        $kehadiran = $_POST['kehadiran'];
        $keterangan = $_POST['keterangan'];
        $jamMasuk = $_POST['jam_masuk'];
        $jamKeluar = $_POST['jam_keluar'];
    
        // Query ke tabel pegawai berdasarkan NIP
        $queryPegawai = "SELECT nama, divisi FROM pegawai WHERE nip='$nip'";
        $resultPegawai = mysqli_query($conn, $queryPegawai);
    
        if ($resultPegawai && mysqli_num_rows($resultPegawai) > 0) {
            $rowPegawai = mysqli_fetch_assoc($resultPegawai);
            $nama = $rowPegawai['nama'];
            $divisi = $rowPegawai['divisi'];
    
            // Menghitung keterlambatan
            $terlambat = 0;
            if ($jamMasuk > '08:00') {
                $terlambat = strtotime($jamMasuk) - strtotime('08:00');
                $terlambat = ceil($terlambat / 60); // Mengubah selisih waktu dalam menit
            }
    
            // Mengatur terlambat menjadi 0 jika jam masuk sebelum atau sama dengan 08:00
            if ($jamMasuk <= '08:00') {
                $terlambat = 0;
            }
    
            $query = "INSERT INTO presensi (id_presensi, nip, nama, divisi, tgl, kehadiran, keterangan, jam_masuk, jam_keluar, terlambat) VALUES ('$idPresensi', '$nip', '$nama', '$divisi', '$tgl', '$kehadiran', '$keterangan', '$jamMasuk', '$jamKeluar', $terlambat)";
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }
    
    if (isset($_POST['edit_id_presensi']) && isset($_POST['edit_nip']) && isset($_POST['edit_tgl']) && isset($_POST['edit_kehadiran']) && isset($_POST['edit_keterangan']) && isset($_POST['edit_jam_masuk']) && isset($_POST['edit_jam_keluar'])) {
        $idPresensi = $_POST['edit_id_presensi'];
        $nip = $_POST['edit_nip'];
        $tgl = $_POST['edit_tgl'];
        $kehadiran = $_POST['edit_kehadiran'];
        $keterangan = $_POST['edit_keterangan'];
        $jamMasuk = $_POST['edit_jam_masuk'];
        $jamKeluar = $_POST['edit_jam_keluar'];
    
        // Query ke tabel pegawai berdasarkan NIP
        $queryPegawai = "SELECT nama, divisi FROM pegawai WHERE nip='$nip'";
        $resultPegawai = mysqli_query($conn, $queryPegawai);
    
        if ($resultPegawai && mysqli_num_rows($resultPegawai) > 0) {
            $rowPegawai = mysqli_fetch_assoc($resultPegawai);
            $nama = $rowPegawai['nama'];
            $divisi = $rowPegawai['divisi'];
    
            // Menghitung keterlambatan
            $terlambat = 0;
            if ($jamMasuk > '08:00') {
                $terlambat = strtotime($jamMasuk) - strtotime('08:00');
                $terlambat = ceil($terlambat / 60); // Mengubah selisih waktu dalam menit
            }
    
            // Mengatur terlambat menjadi 0 jika jam masuk sebelum atau sama dengan 08:00
            if ($jamMasuk <= '08:00') {
                $terlambat = 0;
            }
    
            $query = "UPDATE presensi SET nip='$nip', nama='$nama', divisi='$divisi', tgl='$tgl', kehadiran='$kehadiran', keterangan='$keterangan', jam_masuk='$jamMasuk', jam_keluar='$jamKeluar', terlambat=$terlambat WHERE id_presensi='$idPresensi'";
            $result = mysqli_query($conn, $query);
    
            if (!$result) {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }       

    if (isset($_GET['id_presensi'])) {
        $idPresensi = $_GET['id_presensi'];

        $query = "DELETE FROM presensi WHERE id_presensi='$idPresensi'";
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
                <th>ID Presensi</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Tanggal</th>
                <th>Kehadiran</th>
                <th>Keterangan</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Terlambat (menit)</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM presensi";
                $result = mysqli_query($conn, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$data['id_presensi']."</td>";
                    echo "<td>".$data['nip']."</td>";
                    echo "<td>".$data['nama']."</td>";
                    echo "<td>".$data['divisi']."</td>";
                    echo "<td>".$data['tgl']."</td>";
                    echo "<td>".$data['kehadiran']."</td>";
                    echo "<td>".$data['keterangan']."</td>";
                    echo "<td>".$data['jam_masuk']."</td>";
                    echo "<td>".$data['jam_keluar']."</td>";
                    echo "<td>".$data['terlambat']."</td>";
                    echo "<td>";echo "<button type='button' class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#editModal' onclick='openEditModal(\"".$data['id_presensi']."\", \"".$data['nip']."\", \"".$data['tgl']."\", \"".$data['kehadiran']."\", \"".$data['keterangan']."\", \"".$data['jam_masuk']."\", \"".$data['jam_keluar']."\", \"".$data['terlambat']."\")'>Edit</button>";
                    echo "<button type='button' class='btn btn-danger btn-sm' onclick='deleteData(\"".$data['id_presensi']."\")'>Hapus</button>";
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
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Presensi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="id_presensi" class="form-label">ID Presensi:</label>
                            <input type="text" class="form-control" id="id_presensi" name="id_presensi" required>
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP:</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl" class="form-label">Tanggal:</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" required>
                        </div>
                        <div class="mb-3">
                            <label for="kehadiran" class="form-label">Kehadiran:</label>
                            <select class="form-select" id="kehadiran" name="kehadiran" required>
                                <option value=""></option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <select class="form-select" id="keterangan" name="keterangan" required>
                                <option value=""></option>
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                                <option value="Alfa">Alfa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jam_masuk" class="form-label">Jam Masuk:</label>
                            <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" required>
                        </div>
                        <div class="mb-3">
                            <label for="jam_keluar" class="form-label">Jam Keluar:</label>
                            <input type="time" class="form-control" id="jam_keluar" name="jam_keluar" required>
                            <p class="error-message" style="color: red;"></p>
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

    <script>
        const jamKeluarInput = document.getElementById("jam_keluar");

        function validateForm() {
            const jamKeluar = jamKeluarInput.value;

            if (jamKeluar <= "15:00") {
                const errorMessage = jamKeluarInput.parentElement.querySelector(".error-message");
                errorMessage.textContent = "Jam keluar harus di atas pukul 15:00";
            } else {
                const errorMessage = jamKeluarInput.parentElement.querySelector(".error-message");
                errorMessage.textContent = ""; // Menghapus pesan error jika validasi berhasil
            }
        }

        jamKeluarInput.addEventListener("blur", validateForm);
    </script>

    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Presensi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="edit_id_presensi" class="form-label">ID Presensi:</label>
                            <input type="text" class="form-control" id="edit_id_presensi" name="edit_id_presensi" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_nip" class="form-label">NIP:</label>
                            <input type="text" class="form-control" id="edit_nip" name="edit_nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_tgl" class="form-label">Tanggal:</label>
                            <input type="date" class="form-control" id="edit_tgl" name="edit_tgl" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_kehadiran" class="form-label">Kehadiran:</label>
                            <select class="form-select" id="edit_kehadiran" name="edit_kehadiran" required>
                                <option value=""></option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_keterangan" class="form-label">Keterangan:</label>
                            <select class="form-select" id="edit_keterangan" name="edit_keterangan" required>
                                <option value=""></option>
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                                <option value="Alfa">Alfa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_jam_masuk" class="form-label">Jam Masuk:</label>
                            <input type="time" class="form-control" id="edit_jam_masuk" name="edit_jam_masuk" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_jam_keluar" class="form-label">Jam Keluar:</label>
                            <input type="time" class="form-control" id="edit_jam_keluar" name="edit_jam_keluar" required>
                            <p class="error-message" style="color: red;"></p>
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

    <script>
        const jamKeluarInput = document.getElementById("edit_jam_keluar");

        function validateForm() {
            let jamKeluar = jamKeluarInput.value;

            if (jamKeluar <= "15:00") {
                const errorMessage = jamKeluarInput.parentElement.querySelector(".error-message");
                errorMessage.textContent = "Jam keluar harus di atas pukul 15:00";
                jamKeluarInput.value = "15:00"; // Mengisi nilai dengan 15:00 jika di bawah 15:00
            } else {
                const errorMessage = jamKeluarInput.parentElement.querySelector(".error-message");
                errorMessage.textContent = ""; // Menghapus pesan error jika validasi berhasil
            }
        }

        jamKeluarInput.addEventListener("blur", validateForm);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function openEditModal(idPresensi, nip, tgl, kehadiran, keterangan, jamMasuk, jamKeluar, terlambat) {
            document.getElementById("edit_id_presensi").value = idPresensi;
            document.getElementById("edit_nip").value = nip;
            document.getElementById("edit_tgl").value = tgl;
            document.getElementById("edit_kehadiran").value = kehadiran;
            document.getElementById("edit_keterangan").value = keterangan;
            document.getElementById("edit_jam_masuk").value = jamMasuk;
            document.getElementById("edit_jam_keluar").value = jamKeluar;
            document.getElementById("edit_terlambat").value = terlambat;
        }

        function deleteData(idPresensi) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "?id_presensi=" + idPresensi;
            }
        }
    </script>
</body>
</html>

<?php
mysqli_close($conn);
?>
