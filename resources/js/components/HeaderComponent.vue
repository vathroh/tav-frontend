<template>
    <header class="main-header sticky-header header-with-top" id="main-header-4">
        <nav class="navbar navbar-expand-lg navbar-light" id="navBar">
            <div class="header-left">
                <router-link class="navbar-brand logos" :to="{name: 'Home'}">
                    <img :src="image" alt="logo">
                </router-link>
            </div>
            <button class="navbar-toggler" id="drawer" type="button"> 
                <span class="fa fa-bars"></span>
            </button>
            <div class="header-centar">
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false">
                                Jual Mobil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Beli Mobil
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dealer</a>
                            
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Franchise
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="shop-list.html">FAQ</a></li>
                                <li><a class="dropdown-item" href="shop-cart.html">Artikel</a></li>
                                <li><a class="dropdown-item" href="shop-checkout.html">Hubungi Kami</a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link :to="{name: 'Login'}" id="Btnlogin" class="nav-link" aria-haspopup="true" aria-expanded="false">Daftar/Masuk</router-link>
                        </li>
                </ul>
            </div>  
        </nav>
    </header>
    
</template>
<script>
import image from "../../../public/style/img/logo-tav.png"
    
    export default {
        data() {
            return {
                image: image
            }
        }
    }
</script>