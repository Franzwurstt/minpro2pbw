# minpro2pbw
Nama: Prakasa Wira Mukti  
NIM: 2409116054

## Tampilan Setiap Section
### 1. Navigation Bar (Sticky Header)
- `Logo Brand`: "OhMyPorto" dengan gaya bold di sisi kiri.

- `Navigation Links`: Menu Home, About, dan Certificates dengan efek hover.

- `Sticky & Shadow`: Navbar tetap berada di atas saat di-scroll (fixed-top) dengan bayangan halus untuk memberi kesan kedalaman.

- `Responsive Toggle`: Menu otomatis muncul saat dibuka melalui perangkat mobile (Bootstrap Collapse).
<img width="943" height="49" alt="image" src="https://github.com/user-attachments/assets/88a611f4-1bb8-48d4-aa5d-88ddd136b7ed" />


### 2. Home (Hero Section)
- `Split Layout`: Pembagian sisi kiri untuk teks perkenalan dan sisi kanan untuk visual profil.

- `Gradient Background`: Latar belakang menggunakan gradasi linear dari Navy ke Deep Blue yang elegan.

- `Dynamic Greeting`: Menampilkan nama dan deskripsi diri langsung dari database MySQL.

- `Action Buttons`: Tombol Instagram (Solid white) dan LinkedIn (Outline white) dengan ikon FontAwesome.

- `Circular Profile Image`: Foto profil berbentuk lingkaran dengan border transparan dan efek bayangan (box-shadow) yang kuat agar terlihat melayang.
<img width="937" height="418" alt="image" src="https://github.com/user-attachments/assets/e554ce6f-a640-4f29-81c4-ab10bb03ffc3" />  

### 3. About Me (Personal Information Section)
- `Triple Card Layout`: Informasi dibagi menjadi tiga kolom kartu (Description, Experience, Skills) untuk keterbacaan yang maksimal.

- `Section Description`: Penjelasan naratif mengenai latar belakang pendidikan dan minat teknis.

- `Experience Timeline`: Daftar pengalaman yang disusun secara vertikal dengan indikator tahun menggunakan badge Navy dan garis aksen di sisi kiri.

- `Interactive Skills`: Visualisasi keahlian menggunakan Progress Bar dinamis yang menampilkan persentase kemampuan (diambil dari database).

- `Hover Animation`: Seluruh kartu pada section ini akan sedikit terangkat (translate-Y) dan bayangannya menebal saat disentuh kursor.
<img width="942" height="416" alt="image" src="https://github.com/user-attachments/assets/68732876-ac00-441e-be46-4f7b60dba703" />  

### 4. Certificates (Portfolio Showcase)
- `Grid System`: Menampilkan sertifikat dalam susunan 3 kolom yang responsif.

- `Full Image Container`: Frame khusus sertifikat yang memastikan gambar tampil utuh (contain) tanpa terpotong, menjaga keaslian dokumen.

- `Image Zoom Effect`: Gambar sertifikat akan sedikit membesar (scale) saat di-hover untuk memberikan kesan interaktif.

- `Identity Label`: Setiap kartu mencantumkan judul sertifikat dan instansi penyelenggara di bagian bawah gambar.
<img width="939" height="416" alt="image" src="https://github.com/user-attachments/assets/79d52425-f149-46d4-bb40-2609ae1f2735" />

### 5. Footer (Copyright Section)
- `Dynamic Year`: Menampilkan tahun saat ini secara otomatis menggunakan fungsi PHP date("Y").

- `Brand Identity`: Mencantumkan kembali nama pemilik portfolio sebagai identitas hak cipta.
<img width="941" height="58" alt="image" src="https://github.com/user-attachments/assets/53e73a90-41b2-4f9d-a5f1-a9d79e8ff5f1" />

## Penjelasan Kode Setiap Section  
### 1. Navbar (index.php)
- `Sticky Navigation`: Menggunakan kelas .fixed-top dari Bootstrap agar navigasi tetap terlihat saat user menelusuri halaman.

- `Brand Identity`: Menampilkan teks "OhMyPorto" dengan gaya font-bold sebagai identitas utama di pojok kiri.

- `Dynamic Menu Links`: Menyediakan anchor link (#home, #about, #certificates) yang secara otomatis mengarahkan pengguna ke section terkait di halaman yang sama.

- `Responsive Design`: Dilengkapi dengan navbar-toggler (hamburger menu) yang otomatis muncul pada layar ponsel untuk menjaga kerapian tata letak.

- `Visual Consistency`: Menggunakan background .bg-navy yang selaras dengan tema besar portfolio untuk menjaga estetika profesional.

### 2. Hero Section (index.php)
- `Full Screen Layout`: Didesain dengan min-height: 100vh menggunakan sistem flexbox (d-flex align-items-center) agar konten selalu berada di tengah layar secara vertikal.

- `Database Driven Content`: Menampilkan Nama, Deskripsi, dan Foto Profil yang ditarik secara dinamis dari tabel profile di database melalui PHP.

- `Action Buttons`: Menyertakan tombol interaktif untuk Instagram dan LinkedIn dengan gaya desain solid dan outline yang kontras.

- `Profile Frame`: Foto profil berbentuk lingkaran sempurna (border-radius: 50%) dengan aksen border transparan dan efek glow dari box-shadow.

### 3. About Me Section (index.php)
- `Categorized Card System`: Memisahkan informasi menjadi tiga kartu independen: Description, Experience, dan Skills untuk memudahkan pemindaian informasi oleh perekrut.

- `Experience Timeline`: Menggunakan aksen border-start berwarna biru dan badge tahun untuk memvisualisasikan riwayat kegiatan secara kronologis.

- `Dynamic Skills Tracker`: Menampilkan tingkat keahlian menggunakan Progress Bar Bootstrap yang lebar bar-nya (width) diatur secara otomatis sesuai nilai persentase di database.

- `Interactive Hover`: Setiap kartu memiliki efek transition yang akan terangkat sedikit ke atas (translateY(-10px)) dan bayangannya menebal saat disentuh kursor.

### 4. Certificates Section (index.php)
- `Grid Portfolio`: Menggunakan sistem grid 3 kolom (col-md-4) yang otomatis menyesuaikan susunannya pada perangkat mobile.

- `Smart Image Scaling`: Menggunakan properti object-fit: contain di dalam container khusus agar gambar sertifikat terlihat utuh secara horizontal maupun vertikal tanpa terpotong.

- `Shadowed Cards`: Setiap sertifikat dibungkus dalam kartu dengan bayangan halus (shadow-sm) untuk memberikan efek kedalaman dan kesan premium.

- `Information Label`: Menampilkan judul sertifikat dan nama instansi (seperti Dicoding) secara terpusat di bawah gambar.

### 5. Backend & Footer (PHP & koneksi.php)
- `Centralized Database`: File koneksi.php mengatur parameter akses (localhost, root, portofolio_db) untuk seluruh halaman.

- `Real-time Query`: Menggunakan mysqli_query untuk memastikan data yang tampil selalu sinkron dengan perubahan terbaru di database.

- `Automatic Footer`: Menampilkan hak cipta dengan tahun otomatis (date("Y")) sehingga tidak memerlukan pembaruan manual setiap pergantian tahun.

## Penjelasan CSS  
### 1. Global & Typography Settings
- `Font Family`: Menggunakan font 'Segoe UI' dengan fallback sans-serif untuk memberikan kesan bersih, modern, dan mudah dibaca di semua perangkat.

- `Global Background`: body memiliki warna dasar abu-abu sangat muda (#f8f9fa) untuk memberikan kontras yang nyaman terhadap kartu-kartu putih di atasnya.

### 2. Branding & Color Identity
- `Navy Theme`: Penggunaan warna #0a1f44 secara konsisten pada .bg-navy untuk memperkuat identitas visual yang profesional dan "tech-savvy".

- `Gradient Accents`: Pada Hero Section, diterapkan linear-gradient(to right, #0a1f44, #132f63) untuk menciptakan kedalaman visual dan efek modern.

### 3. Hero & Profile Styling
- `Dynamic Layout`: .hero memiliki min-height: 100vh untuk memastikan section pembuka selalu memenuhi layar pengguna, dikombinasikan dengan flexbox untuk memposisikan konten di tengah secara vertikal.

- `Circular Profile`: .profile-img menggunakan border-radius: 50% dan object-fit: cover untuk menjaga foto tetap proporsional dalam bentuk lingkaran.

- `Shadow & Border`: Dilengkapi dengan border transparan dan box-shadow yang tebal (rgba(0, 0, 0, 0.5)) untuk memberikan efek foto yang menonjol keluar dari latar belakang.

### 4. Card & Box Components
- `Unified Card Design`: Elemen .card diatur tanpa border asli (border: none) dan menggunakan border-radius: 15px untuk tampilan sudut yang halus.

- `Interactive Hover`: Menggunakan transition: transform 0.3s ease yang memungkinkan kartu terangkat ke atas (translateY(-10px)) saat kursor diarahkan, memberikan feedback visual yang interaktif kepada pengguna.

- `About Box`: Memiliki aksen khusus border-left: 5px solid #0a1f44 untuk membedakan secara visual antara teks naratif dengan elemen lainnya.

### 5. Image & Progress Gallery
- `Certificate Display`: .card-img-top diatur dengan object-fit: contain dan tinggi tetap 200px agar gambar sertifikat terlihat utuh tanpa terpotong, berapa pun rasio aslinya.

- `Skill Bars`: Styling pada .progress memberikan tampilan bar yang modern dengan sudut membulat, selaras dengan elemen kartu lainnya.

### 6. Responsive Breakpoints
- `Mobile Adjustment`: Menggunakan @media (max-width: 768px) untuk mengubah tata letak Hero Section menjadi rata tengah (text-align: center) dan menyesuaikan ukuran foto profil agar pas di layar kecil.

- `Stacking Behavior`: Memastikan .about-box dan kartu lainnya memiliki margin bawah yang cukup saat bertumpuk secara vertikal di perangkat mobile.
## Teknologi yang digunakan
- `PHP` — server-side rendering, konfigurasi koneksi database, dan eksekusi query untuk menarik data secara dinamis.

- `MySQL` — sistem penyimpanan data relasional untuk tabel profile, skills, pengalaman, dan certificates.

- `Bootstrap 5.3` — layouting halaman utama menggunakan grid system, serta komponen UI bawaan seperti Navbar fixed-top, Cards, Badges, dan Progress bar.

- `CSS` — pewarnaan navy theme, linear gradient pada Hero section, efek transisi hover pada kartu, object-fit untuk proporsi gambar, dan responsive design via media query.

- `FontAwesome 6.5` — icon set berbasis vektor untuk tombol media sosial (Instagram, LinkedIn) dan dekorasi penanda judul section (User, Briefcase, Code).
