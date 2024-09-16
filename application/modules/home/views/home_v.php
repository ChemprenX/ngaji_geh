<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NgajiGeh - Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<style type="text/css">
		.content {
			display: none;
			padding: 15px;
		}

		.content.active {
			display: block;
		}
        .card-header {
            background-color: #09AD74;
            color: white;
        }

        .header {
            background-color: #09AD74;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        /* Style untuk preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #09AD74;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            font-family: Arial, sans-serif;
            color: white;
        }

        /* Style untuk konten utama */
        #content-wrapper, #nav-bottom-wrapper {
            display: none;
        }
	</style>
</head>

<body class="bg-light">
	<div id="preloader">
		<div class="text-center">
			<img class="animate__animated animate__bounceIn" src="<?= base_url();?>assets/images/robinsar-fajar.png" alt="" height="100px">
			<p class="mb-0">
				<div class="spinner-border spinner-border-sm text-light" role="status">
	              <span class="visually-hidden">Loading...</span>
	            </div>
	        	Memuat...
	        </p>
		</div>
	</div>
	<div class="content-wrapper" id="content-wrapper">
		<div class="contents">
			<div class="hero bg-success p-3 overflow-hidden">
				<a class="notify" href="#">
					<i class="bi bi-bell-fill fs-4"></i>
					<!-- kalo ada notif fetch datanya dari sini ya, bukan dari dalem elemen span nya -->
					<span class="notify-number" id="notify-number">9+</span>
					<!-- sampe sini -->
				</a>
				<center>
					<img src="<?= base_url(); ?>assets/images/logo.png" alt="" height="50px">
					<p class="fw-bold text-white text-uppercase">Ngaji Geh</p>
				</center>
				<div class="d-flex align-items-center animate__animated animate__fadeInUp animate__faster">
					<div class="flex-shrink-0">
						<img class="rounded-circle shadow" src="<?= base_url(); ?>assets/images/gambar1.jpg" width="100px" height="100px">
					</div>
					<div class="flex-grow-1 ms-2 p-2 bg-white rounded-4 shadow text-success">
						<center><strong>Muhammad Bani Husni</strong></center>
						<span><i class="fas fa-id-badge fa-fw"></i> Santri</span><br>
						<span><i class="fas fa-book-open fa-fw"></i> Juz 1</span><br>
						<span><i class="fas fa-bookmark fa-fw"></i> Al-Baqoroh : 31</span>
					</div>
				</div>
			</div>
			<div class="position-relative">
				<div id="beranda" class="content active animate__animated animate__fadeInUp animate__faster">
					<div class="card shadow bg-white rounded-4 border-success">
						<div class="card-body">
							<div class="row g-3">
								<div class="col-4 text-center">
									<a href="<?= base_url('cari_ustadz'); ?>" class="feature-menu">
										<div class="icon-wrapper mx-auto">
											<i class="fas fa-street-view"></i>
										</div>
										Cari Ustadz
									</a>
								</div>
								<div class="col-4 text-center">
									<a href="#" class="feature-menu">
										<div class="icon-wrapper mx-auto">
											<i class="fas fa-mosque"></i>
										</div>
										Masjid
									</a>
								</div>
								<div class="col-4 text-center">
									<a href="#" class="feature-menu">
										<div class="icon-wrapper mx-auto">
											<i class="bi bi-book"></i>
										</div>
										Mengaji
									</a>
								</div>
								<div class="col-4 text-center">
									<a href="#" class="feature-menu">
										<div class="icon-wrapper mx-auto">
											<i class="bi bi-calendar-week"></i>
										</div>
										Jadwal
									</a>
								</div>
								<div class="col-4 text-center">
									<a href="#" class="feature-menu">
										<div class="icon-wrapper mx-auto">
											<i class="bi bi-list"></i>
										</div>
										Lainnya
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="artikel" class="content animate__animated animate__fadeInUp animate__faster">
					<h1>Artikel</h1>
					<p>Ini adalah halaman Artikel.</p>
				</div>
				<div id="riwayat" class="content animate__animated animate__fadeInUp animate__faster">
					<h2 class="text-center mb-4">Riwayat Hari Ini</h2>
                    <div class="card shadow mb-2">
                        <div class="card-header">
                            Ngaji bersama Ust. Abdul Somad Al-Riawi
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">Surat: Al-Baqoroh</p>
                            <p class="card-text mb-0">Ayat: 1-31</p>
                            <p class="card-text mb-0">Jam Mengaji: 08:00 - 08:30</p>
                            <p class="card-text mb-0">Tanggal Mengaji: 13 September 2024</p>
                        </div>
                    </div>
				</div>
				<div id="profile" class="content animate__animated animate__fadeInUp animate__faster">
					<div class="form-floating mb-2">
						<input type="text" class="form-control shadow border-success" id="nama_lengkap" value="Muhammad Bani Husni" placeholder="Nama Lengkap" readonly>
						<label for="nama_lengkap">Nama Lengkap</label>
					</div>
					<div class="form-floating mb-2">
						<input type="text" class="form-control shadow border-success" id="tgl" value="20 Juli 1993" placeholder="Tanggal Lahir" readonly>
						<label for="tgl">Tanggal Lahir</label>
					</div>
					<div class="form-floating mb-2">
						<input type="text" class="form-control shadow border-success" id="jk" value="Laki-laki" placeholder="Jenis Kelamin" readonly>
						<label for="jk">Jenis Kelamin</label>
					</div>
					<div class="form-floating mb-2">
						<input type="text" class="form-control shadow border-success" id="no_hp" value="087775587778" placeholder="Nomor HP" readonly>
						<label for="no_hp">Nomor HP</label>
					</div>
					<div class="form-floating mb-2">
						<textarea class="form-control shadow border-success" placeholder="Alamat" id="alamat" readonly style="height: 100px">
BCS Logistics Center
Jl. Raya Merak KM. 115, Cilegon
Banten, Indonesia - 42436
                        </textarea>
						<label for="alamat">Alamat</label>
					</div>
					<div class="d-grid mb-2">
						<button type="button" class="btn btn-outline-success">Edit</button>
					</div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-danger">Logout</button>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-bottom-wrapper shadow-lg" id="nav-bottom-wrapper">
		<div class="container-fluid px-0">
			<div class="row g-0 text-center p-1 menu animate__animated animate__slideInUp animate__faster">
				<a href="#" id="beranda-tab" class="col menu-item active" onclick="showContent('beranda')"><i class="bi bi-house fs-4"></i><br>Beranda</a>
				<a href="#" id="artikel-tab" class="col menu-item" onclick="showContent('artikel')"><i class="bi bi-calendar-event fs-4"></i><br>Artikel</a>
				<a href="#" id="riwayat-tab" class="col menu-item" onclick="showContent('riwayat')"><i class="bi bi-clock-history fs-4"></i><br>Riwayat</a>
				<a href="#" id="profile-tab" class="col menu-item" onclick="showContent('profile')"><i class="bi bi-person fs-4"></i><br>Profil</a>
			</div>
		</div>
	</div>
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/wow.min.js');?>"></script>
	<script>
		window.addEventListener('load', function() {
            setTimeout(function() {
                $('#preloader').fadeOut('fast');
                document.getElementById('content-wrapper').style.display = 'block';
                document.getElementById('nav-bottom-wrapper').style.display = 'block';
            }, 1500);
        });
        if ($('#notify-number').text()!=='') {
        	$('a.notify > i').addClass('animate__animated animate__tada animate__infinite');
        }
		function showContent(tab) {
			document.querySelector('.content.active').classList.remove('active');
			document.getElementById(tab).classList.add('active');
			document.querySelector('.nav-bottom-wrapper .menu a.active').classList.remove('active');
			document.getElementById(tab + '-tab').classList.add('active');
		}
	</script>
</body>

</html>
