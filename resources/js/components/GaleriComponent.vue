<template>
    <div class="featured-car content-area bg-grea-2 mt-50">
    <div class="container">
        <!-- Main title -->
        <div class="main-title-4">
            <h1>Galeri TAV Mobil</h1>
            
            <!-- <div class="list-inline-listing">
                <ul class="filters filteriz-navigation clearfix">
                    <li class="active btn filtr-button filtr" data-filter="all">All</li>
                    <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
                    <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
                    <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
                </ul>
            </div> -->
        </div>
        <!-- <div class="slick-slider-area clearfix">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="car-box">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img class="d-block w-100" :src="gambar1" alt="car">
                                <a href="car-details.html">
                                </a>
                            </div>
                            <div class="tag">Featured</div>
                        </div>
                        <div class="detail">
                            <div class="top">
                                <h1>
                                    <a href="car-details.html">Hyundai Santa</a><span>$850.00</span>
                                </h1>
                                <p>Build year: <span>2021</span></p>
                            </div>
                            <div class="footer">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> 4,000 km
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> Manual
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="car-box">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img class="d-block w-100" :src="gambar2" alt="car">
                                <a href="car-details.html">
                                   
                                </a>
                            </div>
                            <div class="tag">Featured</div>
                        </div>
                        <div class="detail">
                            <div class="top">
                                <h1>
                                    <a href="car-details.html">Hyundai Santa</a><span>$850.00</span>
                                </h1>
                                <p>Build year: <span>2021</span></p>
                            </div>
                            <div class="footer">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> 4,000 km
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> Manual
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                   <div class="car-box">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img class="d-block w-100" :src="gambar3" alt="car">
                                <a href="car-details.html">
                                    
                                </a>
                            </div>
                            <div class="tag">Featured</div>
                        </div>
                        <div class="detail">
                            <div class="top">
                                <h1>
                                    <a href="car-details.html">Hyundai Santa</a><span>$850.00</span>
                                </h1>
                                <p>Build year: <span>2021</span></p>
                            </div>
                            <div class="footer">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> 4,000 km
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> Manual
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="car-box">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img class="d-block w-100" :src="gambar1" alt="car">
                                <a href="car-details.html">
                                    
                                </a>
                            </div>
                            <div class="tag">Featured</div>
                        </div>
                        <div class="detail">
                            <div class="top">
                                <h1>
                                    <a href="car-details.html">Hyundai Santa</a><span>$850.00</span>
                                </h1>
                                <p>Build year: <span>2021</span></p>
                            </div>
                            <div class="footer">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> 4,000 km
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> Manual
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> 2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div> -->

        

        
         <VueSlickCarousel v-bind="settings">
            <div class="car-box" v-for="item in items">
                <div class="tag">Diskon -5,5jt</div>
                    <div class="photo-thumbnail">
                    <div class="photo">                  
                        <div :id="item.id" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="car-details.html">
                                        <img class="d-block w-100" :src="item.gambar" alt="car">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" :src="item.gambar" alt="car">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" :src="item.gambar" alt="car">
                                </div>
                            </div>
                                <button class="carousel-control-prev" type="button" :data-bs-target="item.target" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" :data-bs-target="item.target" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                        </div>
                    </div>  
                    
                    </div>
                        <div class="detail">
                            <div class="top">
                                <div class="row">
                                    <div class="col-8">
                                        <h1>{{item.brand}}</h1>
                                        <h1>{{item.nama}}</h1>
                                    </div>
                                    <div class="col-4">
                                        <div class="sertif">
                                            TAV Certified
                                        </div>                                     
                                    </div>
                                </div>
                                <div class="row">                                    
                                    <div class="col">
                                        <h2>{{item.harga}}</h2>
                                    </div>
                                    <div class="col">
                                        <h3>{{item.cash}} (cash)</h3>
                                        
                                    </div>
                                </div>
                                <h4>Cicilan Rp. 3 jt/bln</h4>
                            </div>
                            <div class="footer">
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-way"></i> 4,000 km
                                    </li>
                                    <li>
                                        <i class="flaticon-manual-transmission"></i> Manual
                                    </li>
                                    <li>
                                        <i class="flaticon-calendar-1"></i> 2021
                                    </li>
                                    <li>
                                        <i class="lnr lnr-map-marker"></i> Yogyakarta
                                    </li>
                                    <li>
                                         <button @click="change" id="btnLike" ref="btnLike" class="btn-like">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
            </div>                   
        </VueSlickCarousel>

        <div class="main-title-2">
                <div class="row">
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Harga Terbaik</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Inpeksi 180 Titik</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Garansi Mesin & Transmisi 1 Tahun</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Bebas Manipulasi Jarak Tempuh</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Jaminan 3 Hari Uang Kembali</h5>
                    </div>
                    <div class="col-lg-4">
                        <img :src="checked" alt="" width="25px">
                        <h5 class="mb-10">Test Drive Mobil Gratis</h5>
                    </div>
                </div>
            </div>
    </div>
</div>
   
</template>
<script>
import image from '../../../public/style/img/car/hyundai1.jpg';
import image2 from '../../../public/style/img/car/toyota-prius.jpg';
import image3 from '../../../public/style/img/car/gr-yaris.jpg';
import checked from '../../../public/style/img/icon/checked.png';

import VueSlickCarousel from 'vue-slick-carousel';
import 'vue-slick-carousel/dist/vue-slick-carousel.css';
  // optional style for arrows & dots
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css';


export default {
    
    data(){
        return{
            gambar1: image,
            gambar2: image2,
            gambar3: image3,
            checked: checked,
            settings: {
                "dots": true,
                "infinite": false,
                "speed": 500,
                "slidesToShow": 3,
                "slidesToScroll": 3,
                "initialSlide": 0,
                "responsive": [
                    {
                    "breakpoint": 1024,
                    "settings": {
                        "slidesToShow": 3,
                        "slidesToScroll": 3,
                        "infinite": true,
                        "dots": true
                    }
                    },
                    {
                    "breakpoint": 600,
                    "settings": {
                        "slidesToShow": 2,
                        "slidesToScroll": 2,
                        "initialSlide": 2
                    }
                    },
                    {
                    "breakpoint": 480,
                    "settings": {
                        "slidesToShow": 1,
                        "slidesToScroll": 1.
                    }
                    }
                ]
                },
                items: [
                {
                    id: 'carousel1',
                    target: '#carousel1',
                    btnId: 'btn1',
                    gambar: image,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL 1.5',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'

                },
                {
                    id: 'carousel2',
                    target: '#carousel2',
                     btnId: 'btn2',
                    gambar: image2,
                    brand: 'Honda',
                    nama: 'JAZZ',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                },
                {
                    id: 'carousel3',
                    target: '#carousel3',
                     btnId: 'btn3',
                    gambar: image3,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                },
                {
                    id: 'carousel4',
                    target: '#carousel4',
                     btnId: 'btn4',
                    gambar: image3,
                    brand: 'Honda',
                    nama: 'ACCORD TC EL',
                    harga: 'Rp. 250.000.000',
                    cash: 'Rp. 260.000.000'
                    
                }
            ]
        }
    },
    name: 'MyComponent',
    components: { VueSlickCarousel },

    methods:{
        change(){
             var btnVar = document.getElementById('btnLike');
             console.log(btnVar);
            if(btnVar.style.color == "red"){
                btnVar.style.color = "grey";
            }else{
                btnVar.style.color = "red";
            }
        }
       
    }

}




</script>
<style>
    /* the slides */
    .slick-slide {
        padding: 6px;
    }
    /* the parent */
    .slick-list {
        margin: 0 auto;
    }
</style>