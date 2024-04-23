<?php 

$thisPage = "index";

?>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="./" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
     <img src="img/logo.png" width="200px" class="mb-2">
     <div>
     </div>
 </a>
 <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
        
        <a href="./" class="nav-item nav-link">Home</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                <a href="visimisi.php" class="dropdown-item">Visi & Misi</a>
                <a href="program.php" class="dropdown-item">Program Menara Pest</a>
                <a href="sistemkerja.php" class="dropdown-item">Sistem Kerja</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk Jasa Menara Pest</a>
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                <?php foreach ($jasa as $key => $value): ?>

                    <a href="jasapest.php?id=<?= $value['id_jasa'] ?>" class="dropdown-item"><?= $value['judul'] ?></a>

                <?php endforeach ?>
            </div>
        </div>
                <!-- <a href="about.html" class="nav-item nav-link">Servicez</a>
                    <a href="service.html" class="nav-item nav-link">Service</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Standar Teknis</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                            <a href="bahankimia.php" class="dropdown-item">Bahan Kimia</a>
                            <a href="peralatan.php" class="dropdown-item">Peralatan Pest & Rodent Control</a>
                            <a href="uniform.php" class="dropdown-item">Uniform Teknisi Menara Pest</a>
                        </div>
                    </div>
                    <a href="galery.php" class="nav-item nav-link">Galery</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>