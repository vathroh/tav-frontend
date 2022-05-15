<template>
    <section class="home-page_header">
        <div class="banner" id="banner">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner banner-slider-inner">
                    <div class="carousel-item  active item-bg">
                        <router-link :to="{name: 'Home'}">
                            <img class="d-block w-100 h-100" :src="gambar1" alt="banner">
                        </router-link>
                    </div>
                    <div class="carousel-item banner-max-height item-bg">
                        <img class="d-block w-100 h-100" :src="gambar2" alt="banner">
                    </div>
                    <div class="carousel-item banner-max-height item-bg">
                        <img class="d-block w-100 h-100" :src="gambar3" alt="banner">
                    </div>
                </div>
                
            </div>
        </div>  
    </section>
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