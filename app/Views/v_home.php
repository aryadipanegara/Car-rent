<?= $this->extend('layout/main')  ?>

<?= $this->section('content')  ?>

<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Car Rent</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Kami dengan bangga mempersembahkan tempat rental mobil yang luar biasa. Kami memiliki
                        koleksi mobil sport berkualitas tinggi yang sangat mengesankan. Jangan ragu untuk segera
                        mengambil tindakan dan melakukan pemesanan. Selain itu, kami juga menawarkan paket-paket yang
                        sangat menarik yang akan memenuhi kebutuhan dan keinginan Anda.
                    </p>
                </div>
                <div class="col-md-12">
                    <div class="hero-image">
                        <img class="img-fluid" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-section text-center" id="services">
    <!-- Services section (small) with icons -->
    <div class="container">
        <div class="row  justify-content-md-center">
            <div class="col-md-8">
                <div class="services-content">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">POPULAR CARS FOR RENT</h1>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="services-icon">
                                <img src="<?= base_url() ?>/assets/logos/audilogo.png" height="60" width="60"
                                    alt="Service">
                            </div>
                            <div class="services-description">
                                <h1>Audi</h1>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="services-icon">
                                <img class="icon-2" src="<?= base_url() ?>/assets/logos/porsche.png" height="70"
                                    width="60" alt="Service">
                            </div>
                            <div class="services-description">
                                <h1>Porsche</h1>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="services-icon">
                                <img class="icon-3" src="<?= base_url() ?>/assets/logos/bugatti.png" height="60"
                                    width="60" alt="Service">
                            </div>
                            <div class="services-description">
                                <h1>Bugatti</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex-features" id="features">
    <div class="container">
        <div class="flex-split">
            <div class="f-left wow fadeInUp" data-wow-delay="0s">
                <div class="left-content">
                    <img class="img-fluid" src="<?= base_url() ?>/assets/images/taycan.png" alt="">
                </div>
            </div>
            <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
                <div class="right-content">
                    <h2>Taycan</h2>
                    <p>
                        Taycan adalah mobil yang sangat fleksibel untuk pengembangan seluruh proyek Anda. Anda dapat
                        dengan mudah memelihara semua modul/komponennya.
                    </p>
                    <ul>
                        <li><i class="ion-android-checkbox-outline"></i> 2× AC synchronous electric motors</li>
                        <li><i class="ion-android-checkbox-outline"></i>79.2 kWh (71.0 kWh dapat digunakan)</li>
                        <li><i class="ion-android-checkbox-outline"></i>206,9 hingga 287,7 mi (333 hingga 463 km)</li>
                    </ul>
                    <!-- <button class="btn btn-primary btn-action btn-fill">Learn More</button> -->
                </div>
            </div>
        </div>
        <div class="flex-split">
            <div class="f-right">
                <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Bugatti</h2>
                    <p>
                        Mobil Ettore Bugatti adalah mobil Prancis produsen dari mobil kinerja tinggi, yang didirikan
                        pada tahun 1909 . Mobil Bugatti yang dikenal karena keindahan desain mereka (Ettore Bugatti
                        adalah dari keluarga seniman dan menganggap dirinya untuk menjadi seorang seniman dan
                        konstruktor) dan untuk banyak kemenangan ras mereka.
                    </p>
                    <ul>
                        <li><i class="ion-android-checkbox-outline"></i> Sports car (S)</li>
                        <li><i class="ion-android-checkbox-outline"></i> 8.0 L (488 cu in) quad-turbocharged WR16</li>
                        <li><i class="ion-android-checkbox-outline"></i>1,103 kW (1,479 hp; 1,500 PS) (Chiron, Chiron
                            Sport, Chiron Pur Sport, Chiron Noire)</li>
                    </ul>
                    <!-- <button class="btn btn-primary btn-action btn-fill">Learn More</button> -->
                </div>
            </div>
            <div class="f-left">
                <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="<?= base_url() ?>/assets/images/bugatticar.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Section -->
<div class="pricing-section no-color text-center" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="pricing-intro">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Order Sekarang</h1>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="60px" width="60px" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z">
                                    </path>
                                </svg>
                            </div>
                            <div class="pricing-details">
                                <h2>Paket Biasa</h2>
                                <span>Rp. 3.000.000</span>
                                <p>
                                    Berikut adalah detail paket lengkap yang kami tawarkan:
                                </p>
                                <ul>
                                    <li>Self-Drive</li>
                                    <li>Asuransi Dasar</li>
                                    <li>24Jam</li>
                                    <li>Audi, Porsche, Nissan GTR </li>
                                    <li>-</li>
                                    <li>-</li>

                                </ul>
                                <button class="btn btn-primary btn-action btn-fill disabled">Buy Now</button>
                                <style>
                                button.disabled {
                                    text-decoration: line-through;
                                    opacity: 0.5;
                                    cursor: not-allowed;
                                }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                    height="60px" width="60px" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z">
                                    </path>
                                </svg>
                            </div>
                            <div class="pricing-details">
                                <h2>Paket Super</h2>
                                <span>Rp.3.500.000</span>
                                <p>
                                    Berikut adalah detail paket lengkap yang kami tawarkan:
                                </p>
                                <ul>
                                    <li>Self-Drive atau Supir</li>
                                    <li>Asuransi lengkap</li>
                                    <li>3 Days</li>
                                    <li>Layanan Antar-Jemput Mobil</li>
                                    <li>Ferrari 488 GTB, Lamborghini Huracan</li>
                                    <li>Porsche Taycan, Bugatti, Mercedes-AMG GT</li>
                                </ul>
                                <button class="btn btn-primary btn-action btn-fill disabled">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('loginSuccess')): ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
Swal.fire({
    position: 'top-center',
    icon: 'success',
    title: 'Log-in Success',
    showConfirmButton: false,
    timer: 1500
});
</script>
<?php endif; ?>

<?= $this->endSection('')  ?>