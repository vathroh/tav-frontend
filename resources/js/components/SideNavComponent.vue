<template>
    <nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
        <div id="dismiss">
            <i class="fa fa-close"></i>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <a class="navbar-brand logos" href="/">
                    <img :src="image" alt="logo">
                </a>
            </div>
            <div class="sidebar-navigation">
                <h3 class="heading">Menu</h3>
                <ul class="menu-list">
                    <li>
                        <router-link class="nav-link" :to="{name: 'Home'}" aria-haspopup="true" aria-expanded="false">
                                Home
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link" :to="{name: 'Jual'}" aria-haspopup="true" aria-expanded="false">
                                Jual Mobil
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link" :to="{name: 'Jual'}" aria-haspopup="true" aria-expanded="false">
                                Beli Mobil
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link" :to="{name: 'Jual'}" aria-haspopup="true" aria-expanded="false">
                                Dealer
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link" :to="{name: 'Frenchise'}" aria-haspopup="true" aria-expanded="false">
                                Franchise
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link" :to="{name: 'Tentang'}" aria-haspopup="true" aria-expanded="false">
                                Tentang Kami
                        </router-link>
                    </li>
                    <li>
                        <router-link class="nav-link" :to="{name: 'Faq'}" aria-haspopup="true" aria-expanded="false">
                                FAQ
                        </router-link>
                    </li>
                    <li class="nav-item">
                            <a data-bs-toggle="modal" data-bs-target="#LoginModal" id="login" class="nav-link" aria-haspopup="true" aria-expanded="false"> Daftar/Masuk</a>
                            <!-- <button type="submit" class="btn-5" data-toggle="modal" data-target="#contohModal">Daftar/Masuk</button> -->
                        </li>
                </ul>
            </div>
            <div class="get-in-touch">
                <h3 class="heading">Get in Touch</h3>
                <div class="get-in-touch-box d-flex">
                    <i class="flaticon-phone"></i>
                    <div class="detail">
                        <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                    </div>
                </div>
                <div class="get-in-touch-box d-flex">
                    <i class="flaticon-mail"></i>
                    <div class="detail">
                        <a href="#">info@themevessel.com</a>
                    </div>
                </div>
                <div class="get-in-touch-box d-flex mb-0">
                    <i class="flaticon-earth"></i>
                    <div class="detail">
                        <a href="#">info@themevessel.com</a>
                    </div>
                </div>
            </div>
            <div class="get-social">
                <h3 class="heading">Get Social</h3>
                <a href="#" class="facebook-bg">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter-bg">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="google-bg">
                    <i class="fa fa-google"></i>
                </a>
                <a href="#" class="linkedin-bg">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
    </nav>
</template>
<script>
import image from "../../../public/style/img/tav_logo.png"
    
    export default {
        data() {
            return {
                image: image
            }
        }
    }
    
</script>