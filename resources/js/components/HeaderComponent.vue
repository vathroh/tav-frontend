<template>
     <header class="main-header sticky-header" id="main-header-4">
        <nav class="navbar navbar-expand-lg navbar-light" >
                <div class="header-left">
                    <a class="navbar-brand logos" href="/">
                        <img :src="image" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" id="drawer" type="button"> 
                    <span class="fa fa-bars"></span>
                </button>
                <div class="header-centar">
                    <div class="navbar-collapse collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <router-link class="nav-link"  :to="{name: 'Home'}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link " :to="{name: 'Jual'}" aria-haspopup="true" aria-expanded="false">
                                    Jual Mobil
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Beli Mobil
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dealer
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><router-link class="dropdown-item" :to="{name: 'Tentang'}">Login sebagai Dealer</router-link></li>
                                    <li><router-link class="dropdown-item" :to="{name: 'Faq'}">Daftar sebagai Delaer</router-link></li>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <router-link class="nav-link" routerLinkActive="active" :to="{name: 'Frenchise'}" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Franchise
                                </router-link>                            
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><router-link class="dropdown-item" :to="{name: 'Tentang'}">Tentang Kami</router-link></li>
                                    <li><router-link class="dropdown-item" :to="{name: 'Faq'}">FAQ</router-link></li>
                                    <li><router-link class="dropdown-item" :to="{name: 'Artikel'}">Artikel</router-link></li>
                                    <li><router-link class="dropdown-item" :to="{name: 'Hubungi'}">Hubungi Kami</router-link></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="header-right">
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a data-bs-toggle="modal" data-bs-target="#LoginModal" id="login" class="nav-link" aria-haspopup="true" aria-expanded="false"><i class="flaticon-logout"></i> Daftar/Masuk</a> 
                            </li>
                    </ul>
                    </div>
                    
                </div> 
        </nav>
    </header>
    
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
<style>
    a.active {
        color: #0A043C!important;
        border-bottom: solid 3px #0A043C;
    }
</style>
  
