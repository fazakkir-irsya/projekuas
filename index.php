<?php
include "navbar.php";
include "koneksi.php";
?>
<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src=" image/BALAP.png" alt="Berisi keterangan gambar">
            <div class="carousel-caption"></div>
            </div>
        
        <div class="item">
            <img src="image/keong.png" alt="Berisi keterangan gambar">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="image/cbr.png" alt="Berisi keterangan gambar">
            <div class="carousel-caption"></div>
        </div>
    </div>

    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Awal Page -->
<div class="container">
		<!-- Awal Panel -->
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> KEUNGGULAN SEPEDA MOTOR </h2>
				
        
				
				<div class="row">
					<div class="col-md-3">
					<h3>MOTOR VARIO</h3>
						<img src="image/vario.png" class="img-thumbnail img-responsive">
						<p>Bahan bakar lebih irit lebih ramah lingkungan , body lebih besar lebih nyaman .<br/><a class="btn btn-danger btn-xs" href="ruang-kelas.html"role="button">Selengkapnya</a></p>
					</div>
					<div class="col-md-3">
					<h3>honda supra 125 cc </h3>
						<img src="image/supra.png" class="img-thumbnail img-responsive">
						<p>lebih bertenaga lebih irit bahan bakar.<br/><a class="btn btn-info btn-xs" href="perpustakaan.php"role="button">Selengkapnya</a></p>
					</div>
					<div class="col-md-3">
					<h3>Honda vario150 cc</h3>
						<img src="image/vario150.png" class="img-thumbnail img-responsive">
						<p>Lebih nyaman ketika di bawa bersama keluarga.<br/><a class="btn btn-success btn-xs" href="laboratorium.php"role="button">Selengkapnya</a></p>
					</div>
					<div class="col-md-3">
					<h3>MOTOR SPORT ZX 250R</h3>
						<img src="image/zx10r.png" class="img-thumbnail img-responsive">
						<p>lebih irit lebih bertenaga, lebih kencang dengan empat slinder .<br/><a class="btn btn-warning btn-xs" href="internet_cafe.php"role="button">Selengkapnya</a></p>
					</div>
				</div>
			
				</div>



<!-- pelayanan -->
<div class="container">
    <h2 class="text-center">Pelayanan dari Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="service-box">
                <h3>Servis Berkala</h3>
                <p>Kami menyediakan layanan servis berkala untuk memastikan motor Anda selalu dalam kondisi yang .</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-box">
                <h3>Test Drive</h3>
                <p>Rasakan pengalaman memakai motor impian Anda dengan tes drive kami.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-box">
                <h3>Konsultasi Pembelian</h3>
                <p>Kariyawan kami siap melayani anda dengan baik dalam memilih motor yang anda inginkan .</p>
            </div>
        </div>
    </div>
</div>
<!-- pelayanan end -->
<?php include "koneksi.php"; ?>

<?php
$result = $koneksi->query("SELECT * FROM produk ORDER BY RAND() LIMIT 3");
?>

<div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <img src="image/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>">
                <div class="title"><?php echo $row['nama']; ?></div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>


		
		
  
<!-- testimoni -->
<div class="container-fluid testimonial-section">
    <div class="container">
        <h2 class="text-center mb-5">Apa Kata Pelanggan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/vario150.png" alt="Customer 1">
                    </div>
                    <div class="testimonial-content">
                        <p>"Pelayanan sangat baik dan cepat."</p>
                        <h5>ADI PUTRO</h5>
                        <span>Pengusaha</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/supra.png" alt="Customer 2">
                    </div>
                    <div class="testimonial-content">
                        <p>"kualitas motor sangat baik dan harga sangat murah."</p>
                        <h5>fatimah</h5>
                        <span>mahasiswa</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/nmax.png" alt="Customer 3">
                    </div>
                    <div class="testimonial-content">
                        <p>"After servis sangat baik."</p>
                        <h5>wijaya</h5>
                        <span>Wiraswasta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimoni end -->


<?php include "footer.php"; ?>
