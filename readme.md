PT HIJABLINK

SISTEM WEB HRD

terdiri dari data: golongan, jabatan, pegawai, gaji, presensi, dan penilaian kinerja

1. Buat database dengan nama "hijablink" dan lakukan import file "hijablink.sql"

2. Extract file "hrdhijab" kedalam file xampp:>>htdocs

3. Ketik pada web browser "http://localhost/hrdhijab/login.php" (menyesuaikan foldernya)
   - Untuk Log In pada akun yang tersedia:
     Email: hrd@gmail.com
     Password: hrd
   - Jika email dan password yang diinput tidak sesuai, akan muncul warning "email atau password salah"
   - Jika belum memiliki akun, pengguna dapat melakukan Sign In, dengan memasukkan email dan password
   - Jika memasukkan email yang sudah ada, akan muncul warning "email sudah terdaftar"

4. Pada data golongan, sudah bisa melakukan Tambah, Edit, dan Hapus (CRUD)
   - dengan primary key "kode_golongan"

5. Pada data jabatan, sudah bisa melakukan Tambah, Edit, dan Hapus (CRUD)
   - dengan primary key "kode_jabatan"

6. Pada data pegawai, sudah bisa melakukan Tambah, Edit, dan Hapus (CRUD)
   - dengan primary key "nip"
   - dengan foreign key "kode_golongan" dan "kode_jabatan"

7. Pada data gaji, sudah bisa melakukan Tambah, Edit, dan Hapus (CRUD)
   - dengan primary key "no_slip"
   - dengan foreign key "nip"
   - dengan kata kunci "nip" saja, gaji pokok & tunjangan jabatan akan otomatis terisi sesuai dengan "kode_jabatan" dan tunjangan anak, tunjangan transport, & uang makan akan otomatis terisi sesuai dengan "kode_golongan", hal ini karena pada data pegawai dengan primary key "nip" terdapat "kode_golongan" dan "kode_jabatan" yang merupakan foreign key yang diambil dari masing-mmasing data golongan dan jabatan

8. Pada data presensi, sudah bisa melakukan Tambah, Edit, dan Hapus (CRUD)
   - dengan primary key "id_presensi"
   - dengan foreign key "nip"
   - ketentuan jam masuk yaitu pukul 08.00, sehingga lebih dari pukul itu, bagian terlambat akan terisi otomatis, terhitung per menit
   - ketentuan jam keluar, jika jam keluar diisi kurang dari pukul 15.00 akan muncul warning "jam keluar harus di atas pukul 15:00"

9. Pada data penilaian kinerja, sudah bisa melakukan Tambah, Edit, dan Hapus (CRUD)
   - dengan primary key "kode_penilaian"
   - dengan foreign key "nip"
   - jika pada data presensi terdapat sakit dan izin terhitung point absen "1" sedangkan alfa point absen "2" sehingga pada kolom jumlah absen sudah otomatis terisi berdasarkan ketentuan tersebut diakumulasikan juga dilihat dari periode tanggalnya
   - pada kolom keterlambatan sudah otomatis terisi sesuai dengan pada data presensi kolom terlambat diakumulasikan juga dilihat dari periode tanggalnya
   - kolom total nilai merupakan penjulahan dari nilai kualitas kerja, nilai disiplin, nilai tanggung jawab, & nilai pemahaman tugas, total nilai ini sudah otomatis terakumulasikan
   - rekomendasi sudah otomatis terisi berdasarkan total nilai, dengan ketentuan:
     jika total nilai 20-25 maka pada bagian rekomendasi langsung muncul "Dapat Diperpanjang"
     jika total nilai 13-19 maka pada bagian rekomendasi langsung muncul "SP1"
     jika total nilai 6-12 maka pada bagian rekomendasi langsung muncul "SP2"
     jika total nilai 1-5  maka pada bagian rekomendasi langsung muncul "Diberhentikan"

10. Sudah terdapat fungsi Log Out, dimana jika klik "OK" akan langsung berpindah kehalaman Log In dan jika klik "Cancel" akan tetap berada dihalaman tersebut

