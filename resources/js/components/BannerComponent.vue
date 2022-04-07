<template>
    <div class="banner" id="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner banner-slider-inner">
                <div class="carousel-item banner-max-height active item-bg">
                    <img class="d-block w-100 h-100" :src="gambar1" alt="banner">
                    <div class="carousel-content banner-info-2 bi-2">
                        <h1>Selamat Datang di TAVMOBIL</h1>
                        <p>Website Jual Beli Mobil Murah dan Terpercaya</p>
                        <a href="#" class="btn-6">Cari Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item banner-max-height item-bg">
                    <img class="d-block w-100 h-100" :src="gambar2" alt="banner">
                    <div class="carousel-content banner-info-2 bi-2">
                        <h1>Temukan Mobil Impian Anda</h1>
                        <p>Menemukan Mobil Terbaik Untuk Anda adalah Tujuan Kami</p>
                        <a href="#" class="btn-6">Beli Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item banner-max-height item-bg">
                    <img class="d-block w-100 h-100" :src="gambar3" alt="banner">
                    <div class="carousel-content banner-info-2 bi-2">
                        <h1>Termpat Terbaik Untuk Jual Mobil Anda</h1>
                        <p>Menjadi Wadah Terbaik dan Terpercaya Penjualan Mobil Anda</p>
                        <a href="#" class="btn-6">Jual Sekarang</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>  
</template>
<script>
import image1 from '../../../public/style/img/banner/car1.jpg'
import image2 from '../../../public/style/img/banner/car2.jpg'
import image3 from '../../../public/style/img/banner/car3.jpg'
export default {
    data(){
        return{
            gambar1: image1,
            gambar2: image2,
            gambar3: image3
        }
    }
    
}
</script>