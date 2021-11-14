<?php
include('koneksi.php');
?>

<style>
    * {
        font-family: "Trebuchet MS";
      }
      header{
          background-color: indigo;
          background-size: 100%;
          width: 100%;
          background-position: center;
      }
      h2 {
        text-transform: uppercase;
        color: white;
      }
    .thumbnails {
  width: 30%;
  float: left;
  margin: 10px;
  background: rgb(75,0,130);
  padding: 20px;
  box-sizing: border-box;
  position: relative;
  overflow: hidden;
}
.thumbnails-f {
  color: white;
}

.location-image img {
  filter: blur(0px);
  width: 100%;
  height: 360px;
}

.location-listing:hover .location-image img {
  filter: blur(1px);
}
.content {
  width: 1000px;
  margin: 0 auto;
}
.btn {
    background-color: indigo;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    font-size: 12px;
}
</style>

<div class="content">
    <center>
        <header>
            <h2>Home</h2>
        </header>
    <td>
        <a class="btn" href="home.php">Home</a>
        <a class="btn" href="index.php">Daftar</a>
    </td>
    </center>
</div>
&nbsp;
<?php
// jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
$query = "SELECT * FROM book ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);
//mengecek apakah ada error ketika menjalankan query
if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
}

//buat perulangan untuk element tabel dari data mahasiswa
$no = 1; //variabel untuk membuat nomor urut
// hasil query akan disimpan dalam variabel $data dalam bentuk array
// kemudian dicetak dengan perulangan while
while ($row = mysqli_fetch_assoc($result)) {


?>

    <div class="content">
        <div class="thumbnails">
            <article class="location-listing">
                <a class="location-title" href="#"></a>
                <div class="location-image">
                    <a href="">
                        <img src="gambar/<?php echo $row['gambar']; ?>">
                        <b class="thumbnails-f">
                            <?php echo $row['judul']; ?>
                        </b>
                    </a>
                </div>
            </article>
        </div>

    </div>

<?php
    $no++; //untuk nomor urut terus bertambah 1
}
?>