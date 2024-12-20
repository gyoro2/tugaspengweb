
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Vendor</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<header>
<!-- Sidebar -->
<?php include 'sidebar.php'?>
</header>

<body>
<!-- Header Section -->
<div class="navbar">
    <div class="menu">
        <ul>
            <li><a href="#">Admin</a><img src="bp.png" alt=""></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<!-- Main Content Section -->
<div class="content">
    <!-- Title and Back Button -->
    
    <h2>Hasil Questioner</h2>
    <button class="back-tombol" onclick="window.location.href='daftarquestioner.php'">Kembali</button>
    <!-- Table for displaying questions and answers -->
   
    <div class="table-content">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Daftar Pertanyaan</th>
                <th>Jawaban</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Apakah bisnis utama anda yang sudah berjalan berkaitan dengan barang / jasa yang anda pasok?</td>
                <td>Menjalankan bisnis utama dengan pengalaman > 5 tahun</td>
                
            </tr>
            <tr>
                <td>2.</td>
                <td>Apakah perusahaan anda merupakan distributor resmi dari barang / jasa yang anda pasok?</td>
                <td>Ya</td>
                
            </tr>
            <tr>
                <td>3.</td>
                <td>Jelaskan rangkaian bisnis anda saampai ke PT PGP </td>
                <td>Langsung dari Sumber/Pabrik</td>
                
            </tr>
            <tr>
                <td>4.</td>
                <td>Apa spesifikasi produk/jasa anda ? (jelaskan)</td>
                <td>Produk A memiliki kualitas tinggi dengan spesifikasi X,Y,Z</td>
                
            </tr>
            <tr>
                <td>5.</td>
                <td>Apakah perusahaan anda dapat memberikan harga dan kualitas yang terbai dari barang/jasa yang anda pasok</td>
                <td>Ya</td>
              
            </tr>
            <tr>
                <td>6.</td>
                <td>Apakah perusahaan anda memiliki jaminan klaim terhadap barang yang anda pasok?</td>
                <td>Ya</td>
               
            </tr>
            <tr>
                <td>7.</td>
                <td>Apakah perusahaan anda dapat memberikan ketepatan waktu dalam pengiriman dari barang/jasa yang kami pesan?</td>
                <td>Ya</td>
                
            </tr>
            <tr>
                <td>8.</td>
                <td>Apakah ada peristiwa penting menyangkut sertifikasi produk/jasa atau sistem manajemen, penghargaan, kerjasama, dan lain-lain yang diterima oleh perusahaan anda?</td>
                <td>Ada: Sertifikasi ISO 9001 </td>
                
            </tr>
            <tr>
                <td>9.</td>
                <td>Apakah ada penjualan/pekerjaan ekspor produk/jasa anda?</td>
                <td>Ada</td>
               
            </tr>
            <tr>
                <td>10.</td>
                <td>Berapa persen pelanggan anda yang mempunyai kontrak jangka panjang? (sebutkan)</td>
                <td>1. 40%, 2. 30%
                    3. 20%, 4. 10%
                </td>
                
            </tr>
            <tr>
                <td>11.</td>
                <td>Siapa saja pelanggan potensial dan utama anda?</td>
                <td>1. Perusahaan X, 2. Perushaan Y, 3. Perusahaan Z</td>
            </tr>
            <tr>
                <td>12.</td>
                <td>Apakah anda memiliki fasilitas transportasi sendiri?</td>
                <td>Ya:Truk</td>
                
            </tr>
            <tr>
                <td>13.</td>
                <td>Apakah perusahaan anda memiliki gudang penyimpanan barang/pool kendaraan sendiri?</td>
                <td>Ada</td>
                
            </tr>
            <tr>
                <td>14.</td>
                <td>Apakah ada rencana pengembangan usaha?</td>
                <td>Ada, Kapan : Tahun Depan</td>
                
            </tr>
            <!-- Add more rows as necessary -->
        </tbody>
    </table>
    </div>
</div>

</body>
</html>
