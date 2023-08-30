-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 09.39
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hijablink`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `pass`) VALUES
(441200, 'hrd', 'hrd@gmail.com', 'hrd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_siap_kirim`
--

CREATE TABLE `barang_siap_kirim` (
  `no_order` varchar(10) NOT NULL,
  `kode_produk` varchar(4) DEFAULT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_jadi`
--

CREATE TABLE `data_barang_jadi` (
  `kode_produk` varchar(4) NOT NULL,
  `Nama_produk` varchar(20) DEFAULT NULL,
  `Stock` int(4) DEFAULT NULL,
  `Harga_jual` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_mentah`
--

CREATE TABLE `data_barang_mentah` (
  `Kode_BahanBaku` varchar(4) NOT NULL,
  `Nama_BahanBaku` varchar(20) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `stock` int(4) DEFAULT NULL,
  `harga_beli` int(20) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang_setengah_jadi`
--

CREATE TABLE `data_barang_setengah_jadi` (
  `kode_produk_setjadi` varchar(4) NOT NULL,
  `nama_produk_setjadi` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_customer`
--

CREATE TABLE `data_customer` (
  `id_customer` varchar(6) NOT NULL,
  `nama_customer` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `no_tlp` int(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hutang`
--

CREATE TABLE `data_hutang` (
  `Kode_Hutang` varchar(10) NOT NULL,
  `TanggaL_Hutang` date DEFAULT NULL,
  `Tanggal_JatuhTempo` date DEFAULT NULL,
  `No_Transaksi_Pemb` varchar(50) DEFAULT NULL,
  `Kode_Supplier` varchar(10) DEFAULT NULL,
  `Nama_Supplier` varchar(20) DEFAULT NULL,
  `Total_Harga` decimal(50,0) DEFAULT NULL,
  `Bayar` decimal(30,0) DEFAULT NULL,
  `Hutang` decimal(30,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order_penjualan`
--

CREATE TABLE `data_order_penjualan` (
  `no_order` varchar(10) NOT NULL,
  `id_customer` varchar(6) DEFAULT NULL,
  `nama_customer` varchar(20) DEFAULT NULL,
  `kode_produk` varchar(4) DEFAULT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_permintaan_pembelian`
--

CREATE TABLE `data_permintaan_pembelian` (
  `kode_supplier` varchar(4) NOT NULL,
  `nama_supplier` varchar(20) DEFAULT NULL,
  `kode_produk` varchar(4) DEFAULT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_piutang`
--

CREATE TABLE `data_piutang` (
  `id_piutang` varchar(6) NOT NULL,
  `nama_customer` varchar(20) DEFAULT NULL,
  `no_faktur` varchar(6) DEFAULT NULL,
  `jumlah_piutang` decimal(10,2) DEFAULT NULL,
  `jml_bayar_piutang` decimal(10,2) DEFAULT NULL,
  `sisa_piutang` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produk`
--

CREATE TABLE `data_produk` (
  `kode_produk` varchar(4) NOT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `bahan` varchar(50) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_supplier`
--

CREATE TABLE `data_supplier` (
  `Kode_Supplier` varchar(10) NOT NULL,
  `Nama_Supplier` varchar(100) DEFAULT NULL,
  `Kontak` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Kota` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_trans_penjualan`
--

CREATE TABLE `data_trans_penjualan` (
  `no_faktur` varchar(6) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_customer` varchar(6) DEFAULT NULL,
  `nama_customer` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_tlp` int(15) DEFAULT NULL,
  `kode_produk` varchar(4) DEFAULT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `total_bayar` decimal(10,2) DEFAULT NULL,
  `dibayar` decimal(10,2) DEFAULT NULL,
  `diskon` decimal(10,2) DEFAULT NULL,
  `kembalian` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_trans_retur_pembelian`
--

CREATE TABLE `data_trans_retur_pembelian` (
  `No_Transaksi_Retur` varchar(50) NOT NULL,
  `No_Transaksi_Pemb` varchar(50) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Kode_Supplier` varchar(10) DEFAULT NULL,
  `Nama_Supplier` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Kontak` varchar(50) DEFAULT NULL,
  `Kode_BahanBaku` varchar(4) DEFAULT NULL,
  `Nama_BahanBaku` varchar(100) DEFAULT NULL,
  `Harga_Per_Satuan` decimal(10,0) DEFAULT NULL,
  `Jumlah_Retur` decimal(50,0) DEFAULT NULL,
  `Total_Harga_Retur` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `no_slip` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `divisi` varchar(20) DEFAULT NULL,
  `gaji_pokok` int(10) DEFAULT NULL,
  `tunjangan_jabatan` int(10) DEFAULT NULL,
  `tunjangan_anak` int(10) DEFAULT NULL,
  `tunjangan_transport` int(10) DEFAULT NULL,
  `uang_makan` int(10) DEFAULT NULL,
  `pendapatan` int(10) DEFAULT NULL,
  `potongan` int(10) DEFAULT NULL,
  `gaji_bersih` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`no_slip`, `tanggal`, `nip`, `nama`, `divisi`, `gaji_pokok`, `tunjangan_jabatan`, `tunjangan_anak`, `tunjangan_transport`, `uang_makan`, `pendapatan`, `potongan`, `gaji_bersih`) VALUES
('G2001', '2023-07-06', 'MB2001', 'Fahrul', 'pembelian', 11000000, 550000, 150000, 1200000, 1800000, 14700000, 294000, 14406000),
('G2101', '2023-07-06', 'SB2101', 'Yuni', 'pembelian', 8500000, 425000, 0, 900000, 1500000, 11325000, 226500, 11098500),
('G3001', '2023-07-06', 'MJ3001', 'Aldo', 'penjualan', 12000000, 600000, 150000, 1200000, 1800000, 15750000, 315000, 15435000),
('G5001', '2023-07-05', 'MH5001', 'Verro', 'hrd', 13000000, 9500000, 450000, 1200000, 1800000, 25950000, 519000, 25431000),
('G5101', '2023-07-05', 'SH5101', 'Nadia', 'hrd', 9500000, 475000, 150000, 1200000, 1800000, 13125000, 262500, 12862500),
('G5102', '2023-07-05', 'SH5102', 'Aida', 'hrd', 9500000, 475000, 0, 900000, 1500000, 12375000, 247500, 12127500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `kode_golongan` varchar(10) NOT NULL,
  `tunjangan_anak` int(10) DEFAULT NULL,
  `tunjangan_transport` int(10) DEFAULT NULL,
  `uang_makan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`kode_golongan`, `tunjangan_anak`, `tunjangan_transport`, `uang_makan`) VALUES
('A', 150000, 1200000, 1800000),
('B', 120000, 900000, 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(20) DEFAULT NULL,
  `gaji_pokok` int(10) DEFAULT NULL,
  `tunjangan_jabatan` int(10) DEFAULT NULL,
  `divisi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `nama_jabatan`, `gaji_pokok`, `tunjangan_jabatan`, `divisi`) VALUES
('A1', 'Direktur', 17000000, 850000, 'penjualan'),
('A2', 'Sekretaris', 15000000, 750000, 'penjualan'),
('D1', 'Manager', 10000000, 500000, 'persediaan'),
('D2', 'Karyawan', 8000000, 400000, 'persediaan'),
('H1', 'Manager', 13000000, 9500000, 'hrd'),
('H2', 'Karyawan', 9500000, 475000, 'hrd'),
('J1', 'Manager', 12000000, 600000, 'penjualan'),
('J2', 'Karyawan', 9000000, 450000, 'penjualan'),
('K1', 'Manager', 14000000, 700000, 'keuangan'),
('K2', 'Karyawan', 10000000, 500000, 'keuangan'),
('P1', 'Manager', 11000000, 550000, 'pembelian'),
('P2', 'Karyawan', 8500000, 425000, 'pembelian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kode_golongan` varchar(10) DEFAULT NULL,
  `kode_jabatan` varchar(10) DEFAULT NULL,
  `divisi` varchar(20) DEFAULT NULL,
  `status_nikah` varchar(15) DEFAULT NULL,
  `jumlah_anak` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kode_golongan`, `kode_jabatan`, `divisi`, `status_nikah`, `jumlah_anak`) VALUES
('DR0001', 'Imam', 'L', 'Rembang', '1970-01-11', 'A', 'A1', 'pimpinan', 'menikah', 3),
('MB2001', 'Fahrul', 'L', 'Jakarta', '1991-07-18', 'A', 'P1', 'pembelian', 'menikah', 1),
('MH5001', 'Verro', 'L', 'Semarang', '2002-06-17', 'A', 'H1', 'hrd', 'menikah', 3),
('MJ3001', 'Aldo', 'L', 'Jakarta', '1985-06-08', 'A', 'J1', 'penjualan', 'menikah', 1),
('SB2101', 'Yuni', 'P', 'Cimahi', '1998-06-06', 'B', 'P2', 'pembelian', 'lajang', 0),
('SB2102', 'Ika', 'P', 'Palu', '1988-03-06', 'B', 'P2', 'pembelian', 'menikah', 2),
('SB2103', 'Fitria', 'P', 'Semarang', '1998-08-06', 'B', 'P2', 'pembelian', 'lajang', 0),
('SH5101', 'Nadia', 'P', 'Cirebon', '2002-05-28', 'A', 'H2', 'hrd', 'menikah', 1),
('SH5102', 'Aida', 'P', 'Kendal', '2002-09-08', 'B', 'H2', 'hrd', 'lajang', 0),
('SR1001', 'Hervina', 'P', 'China', '1987-12-12', 'A', 'A2', 'pimpinan', 'menikah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `no_transaksi` int(11) NOT NULL,
  `kode_kas` varchar(10) DEFAULT NULL,
  `tgl_pemasukan` date DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_sumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `no_transaksi` int(11) NOT NULL,
  `kode_kas` varchar(10) DEFAULT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_sumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_kinerja`
--

CREATE TABLE `penilaian_kinerja` (
  `kode_penilaian` varchar(20) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `divisi` varchar(20) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `jumlah_absen` int(5) DEFAULT NULL,
  `keterlambatan` int(5) DEFAULT NULL,
  `nilai_kualitas_kerja` int(5) DEFAULT NULL,
  `nilai_disiplin` int(5) DEFAULT NULL,
  `nilai_tanggungjawab` int(5) DEFAULT NULL,
  `nilai_kerjasama` int(5) DEFAULT NULL,
  `nilai_pemahaman_tugas` int(5) DEFAULT NULL,
  `total_nilai` int(5) DEFAULT NULL,
  `rekomendasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian_kinerja`
--

INSERT INTO `penilaian_kinerja` (`kode_penilaian`, `nip`, `nama`, `divisi`, `tgl_mulai`, `tgl_akhir`, `jumlah_absen`, `keterlambatan`, `nilai_kualitas_kerja`, `nilai_disiplin`, `nilai_tanggungjawab`, `nilai_kerjasama`, `nilai_pemahaman_tugas`, `total_nilai`, `rekomendasi`) VALUES
('N0001', 'DR0001', 'Imam', 'pimpinan', '2023-07-06', '2023-07-06', 0, 60, 2, 2, 2, 3, 2, 11, 'SP2'),
('N3001', 'MJ3001', 'Aldo', 'penjualan', '2023-07-06', '2023-07-06', 2, 0, 1, 1, 1, 1, 1, 5, 'Diberhentikan'),
('N5101', 'SH5101', 'Nadia', 'hrd', '2023-07-05', '2023-07-06', 1, 10, 4, 4, 3, 4, 4, 19, 'SP1'),
('N5102', 'SH5102', 'Aida', 'hrd', '2023-07-01', '2023-07-05', 0, 1, 5, 5, 5, 5, 5, 25, 'Dapat Diperpanjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `no_id` int(11) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pw` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`no_id`, `user_email`, `user_pw`) VALUES
(1, 'hrd@gmail.com', 'hrd123'),
(2, 'test@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` varchar(15) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `divisi` varchar(20) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `kehadiran` varchar(40) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `terlambat` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `nip`, `nama`, `divisi`, `tgl`, `jam_masuk`, `jam_keluar`, `kehadiran`, `keterangan`, `terlambat`) VALUES
('PR0001', 'DR0001', 'Imam', 'pimpinan', '2023-07-06', '09:00:00', '17:00:00', 'Hadir', 'Hadir', 60),
('PR2101', 'SB2101', 'Yuni', 'pembelian', '2023-07-06', '07:00:00', '12:00:00', 'Tidak', 'Izin', 0),
('PR3001', 'MJ3001', 'Aldo', 'penjualan', '2023-07-06', '00:00:00', '12:00:00', 'Tidak', 'Alfa', 0),
('PR5001', 'MH5001', 'Verro', 'hrd', '2023-07-05', '08:01:00', '14:50:00', 'Hadir', 'Hadir', 1),
('PR5101', 'SH5101', 'Nadia', 'hrd', '2023-07-05', '08:10:00', '12:50:00', 'Hadir', 'Hadir', 10),
('PR5102', 'SH5101', 'Nadia', 'hrd', '2023-07-06', '00:00:00', '00:00:00', 'Tidak', 'Sakit', 0),
('PR5103', 'SH5102', 'Aida', 'hrd', '2023-07-05', '08:01:00', '14:30:00', 'Hadir', 'Hadir', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_penjualan`
--

CREATE TABLE `retur_penjualan` (
  `no_trans_retur` varchar(10) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id_customer` varchar(6) DEFAULT NULL,
  `nama_customer` varchar(20) DEFAULT NULL,
  `no_faktur` varchar(6) DEFAULT NULL,
  `kode_produk` varchar(4) DEFAULT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `total_retur` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_pembelian`
--

CREATE TABLE `trans_pembelian` (
  `No_Transaksi_Pemb` varchar(50) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Kode_Supplier` varchar(10) DEFAULT NULL,
  `Nama_Supplier` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Kontak` varchar(50) DEFAULT NULL,
  `Kode_BahanBaku` varchar(4) DEFAULT NULL,
  `Nama_BahanBaku` varchar(100) DEFAULT NULL,
  `Harga_Per_Satuan` decimal(10,0) DEFAULT NULL,
  `Jumlah` decimal(50,0) DEFAULT NULL,
  `Total_Harga` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang_siap_kirim`
--
ALTER TABLE `barang_siap_kirim`
  ADD PRIMARY KEY (`no_order`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `data_barang_jadi`
--
ALTER TABLE `data_barang_jadi`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `data_barang_mentah`
--
ALTER TABLE `data_barang_mentah`
  ADD PRIMARY KEY (`Kode_BahanBaku`);

--
-- Indeks untuk tabel `data_barang_setengah_jadi`
--
ALTER TABLE `data_barang_setengah_jadi`
  ADD PRIMARY KEY (`kode_produk_setjadi`);

--
-- Indeks untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `data_hutang`
--
ALTER TABLE `data_hutang`
  ADD PRIMARY KEY (`Kode_Hutang`),
  ADD KEY `Kode_Supplier` (`Kode_Supplier`),
  ADD KEY `No_Transaksi_Pemb` (`No_Transaksi_Pemb`);

--
-- Indeks untuk tabel `data_order_penjualan`
--
ALTER TABLE `data_order_penjualan`
  ADD PRIMARY KEY (`no_order`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `data_permintaan_pembelian`
--
ALTER TABLE `data_permintaan_pembelian`
  ADD PRIMARY KEY (`kode_supplier`),
  ADD KEY `kode_barang_jadi` (`kode_produk`);

--
-- Indeks untuk tabel `data_piutang`
--
ALTER TABLE `data_piutang`
  ADD PRIMARY KEY (`id_piutang`),
  ADD KEY `no_faktur` (`no_faktur`);

--
-- Indeks untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`Kode_Supplier`);

--
-- Indeks untuk tabel `data_trans_penjualan`
--
ALTER TABLE `data_trans_penjualan`
  ADD PRIMARY KEY (`no_faktur`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `data_trans_retur_pembelian`
--
ALTER TABLE `data_trans_retur_pembelian`
  ADD PRIMARY KEY (`No_Transaksi_Retur`),
  ADD KEY `Kode_Supplier` (`Kode_Supplier`),
  ADD KEY `No_Transaksi_Pemb` (`No_Transaksi_Pemb`),
  ADD KEY `Kode_BahanBaku` (`Kode_BahanBaku`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`no_slip`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`kode_golongan`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kode_golongan` (`kode_golongan`),
  ADD KEY `kode_jabatan` (`kode_jabatan`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indeks untuk tabel `penilaian_kinerja`
--
ALTER TABLE `penilaian_kinerja`
  ADD PRIMARY KEY (`kode_penilaian`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `retur_penjualan`
--
ALTER TABLE `retur_penjualan`
  ADD PRIMARY KEY (`no_trans_retur`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `kode_produk` (`kode_produk`),
  ADD KEY `no_faktur` (`no_faktur`);

--
-- Indeks untuk tabel `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indeks untuk tabel `trans_pembelian`
--
ALTER TABLE `trans_pembelian`
  ADD PRIMARY KEY (`No_Transaksi_Pemb`),
  ADD KEY `Kode_Supplier` (`Kode_Supplier`),
  ADD KEY `Kode_BahanBaku` (`Kode_BahanBaku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441201;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_siap_kirim`
--
ALTER TABLE `barang_siap_kirim`
  ADD CONSTRAINT `barang_siap_kirim_ibfk_1` FOREIGN KEY (`kode_produk`) REFERENCES `data_barang_jadi` (`kode_produk`);

--
-- Ketidakleluasaan untuk tabel `data_hutang`
--
ALTER TABLE `data_hutang`
  ADD CONSTRAINT `data_hutang_ibfk_1` FOREIGN KEY (`Kode_Supplier`) REFERENCES `data_supplier` (`Kode_Supplier`),
  ADD CONSTRAINT `data_hutang_ibfk_2` FOREIGN KEY (`No_Transaksi_Pemb`) REFERENCES `trans_pembelian` (`No_Transaksi_Pemb`);

--
-- Ketidakleluasaan untuk tabel `data_order_penjualan`
--
ALTER TABLE `data_order_penjualan`
  ADD CONSTRAINT `data_order_penjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`),
  ADD CONSTRAINT `data_order_penjualan_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `data_produk` (`kode_produk`);

--
-- Ketidakleluasaan untuk tabel `data_permintaan_pembelian`
--
ALTER TABLE `data_permintaan_pembelian`
  ADD CONSTRAINT `data_permintaan_pembelian_ibfk_1` FOREIGN KEY (`kode_produk`) REFERENCES `data_barang_jadi` (`kode_produk`);

--
-- Ketidakleluasaan untuk tabel `data_piutang`
--
ALTER TABLE `data_piutang`
  ADD CONSTRAINT `data_piutang_ibfk_1` FOREIGN KEY (`no_faktur`) REFERENCES `data_trans_penjualan` (`no_faktur`);

--
-- Ketidakleluasaan untuk tabel `data_trans_penjualan`
--
ALTER TABLE `data_trans_penjualan`
  ADD CONSTRAINT `data_trans_penjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`),
  ADD CONSTRAINT `data_trans_penjualan_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `data_produk` (`kode_produk`);

--
-- Ketidakleluasaan untuk tabel `data_trans_retur_pembelian`
--
ALTER TABLE `data_trans_retur_pembelian`
  ADD CONSTRAINT `data_trans_retur_pembelian_ibfk_1` FOREIGN KEY (`Kode_Supplier`) REFERENCES `data_supplier` (`Kode_Supplier`),
  ADD CONSTRAINT `data_trans_retur_pembelian_ibfk_2` FOREIGN KEY (`No_Transaksi_Pemb`) REFERENCES `trans_pembelian` (`No_Transaksi_Pemb`),
  ADD CONSTRAINT `data_trans_retur_pembelian_ibfk_3` FOREIGN KEY (`Kode_BahanBaku`) REFERENCES `data_barang_mentah` (`Kode_BahanBaku`);

--
-- Ketidakleluasaan untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`kode_golongan`) REFERENCES `golongan` (`kode_golongan`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`);

--
-- Ketidakleluasaan untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_sumber`) REFERENCES `sumber` (`id_sumber`);

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id_sumber`) REFERENCES `sumber` (`id_sumber`);

--
-- Ketidakleluasaan untuk tabel `penilaian_kinerja`
--
ALTER TABLE `penilaian_kinerja`
  ADD CONSTRAINT `penilaian_kinerja_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `retur_penjualan`
--
ALTER TABLE `retur_penjualan`
  ADD CONSTRAINT `retur_penjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`),
  ADD CONSTRAINT `retur_penjualan_ibfk_2` FOREIGN KEY (`kode_produk`) REFERENCES `data_produk` (`kode_produk`),
  ADD CONSTRAINT `retur_penjualan_ibfk_3` FOREIGN KEY (`no_faktur`) REFERENCES `data_trans_penjualan` (`no_faktur`);

--
-- Ketidakleluasaan untuk tabel `trans_pembelian`
--
ALTER TABLE `trans_pembelian`
  ADD CONSTRAINT `trans_pembelian_ibfk_1` FOREIGN KEY (`Kode_Supplier`) REFERENCES `data_supplier` (`Kode_Supplier`),
  ADD CONSTRAINT `trans_pembelian_ibfk_2` FOREIGN KEY (`Kode_BahanBaku`) REFERENCES `data_barang_mentah` (`Kode_BahanBaku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
