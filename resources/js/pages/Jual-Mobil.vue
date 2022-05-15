<template>
    <section class="mt-20">
        <div class="relative md:flex md:justify-end md:items-center">
            <div class="w-screen relative h-[300px] sm:h-[400px] md:h-full md:absolute">
                <div class="absolute w-full h-full">
                    <img class="h-full w-full object-cover" src="images\sell-hero-1.png" alt="">
                </div>
                <div class="absolute w-full md:h-full md:w-1/2 md:flex md:items-center md:-translate-y-16">
                    <div
                        class="p-10 text-center w-full lg:p-16 xl:p-20">
                        <h1
                            class="text-white text-2xl text-center font-bold mt-4 mb-2 capitalize sm:text-4xl md:text-left md:text-3xl xl:text-5xl">
                            Mau jual mobil dengan <br> harga Terbaik ?</h1>
                        <h2 class="text-center font-bold text-3xl text-yellow-300 sm:text-3xl md:text-left md:text-6xl md:mt-8 lg:text-7xl xl:text-8xl">
                            TAV
                            Mobil<br>
                            <span class="text-yellow-300 text-center text-xl md:text-4xl lg:text-5xl xl:text-6xl">
                                Solusinya</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="relative md:top-1 m-10 md:right-2 md:bg-white md:rounded md:w-[40%] md:p-10 xl:p-16">
                <div class=" text-2xl text-blue-900 text-center capitalize font-semibold m-auto md:text-2xl md:mt-5 xl:text-3xl">
                    Silahkan masukan
                    data di bawah
                    ini untuk kami hubungi
                </div>
                <div class="md:text-xl xl:text-2xl">
                    <div class="my-4">
                        <label for="merk" class="text-md">Merk</label>
                        <select name="merk" id="merk" class="text-md w-full px-2 py-1 border-2 rounded mt-1">
                            <option selected>Pilih Merk</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="model" class="text-md">Model</label>
                        <select name="model" id="model" class="text-md w-full px-2 py-1 border-2 rounded mt-1">
                            <option selected>Pilih Model</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="Tahun" class="text-md">Tahun</label>
                        <select name="Tahun" id="Tahun" class="text-md w-full px-2 py-1 border-2 rounded mt-1">
                            <option selected>Pilih Tahun</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="Kota" class="text-md">Kota</label>
                        <select name="Kota" id="Kota" class="text-md w-full px-2 py-1 border-2 rounded mt-1">
                            <option selected>Pilih Kota</option>
                        </select>
                    </div>
                    <div class="my-3">
                        <label for="Kota" class="text-md">Handphone/Whatsapp</label>
                        <input class="text-md w-full px-2 py-1 border-2 rounded mt-1" type="text"
                            placeholder="081234567890">
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-900 rounded-md font-semibold h-12 tracking-widest my-3 hover:bg-blue-700">Mulai</button>
                </div>
            </div>
        </div>
        <div class="bg-slate-200 p-10">
            <h3 class="mb-7 text-blue-900 text-center text-2xl font-bold sm:text-3xl sm:mt-10 md:text-4xl md:mt-12 lg:text-5xl lg:mt-14">Semakin Mudah Menjual Mobil Di TAV</h3>
            <div class="sm:grid sm:grid-cols-2 sm:gap-4 lg:grid-cols-4 mt-7">
                <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
                    <div
                        class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
                        <h2 class=" translate-x-3 translate-y-3 text-white">1</h2>
                    </div>
                    <div class="w-full h-full">
                        <div class="w-full h-[65%]">
                            <img src="/images/illustration/Coding _Outline.svg" class=" object-contain w-full h-full"
                                alt="input-data">
                        </div>
                        <h2 class="text-blue-900 text-xl text-center font-semibold text-shadow-sm">
                            Input Data Mobil Anda
                        </h2>
                    </div>
                </div>

                <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
                    <div
                        class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
                        <h2 class=" translate-x-3 translate-y-3 text-white">2</h2>
                    </div>
                    <div class="w-full h-full">
                        <div class="w-full h-[65%]">
                            <img src="/images/illustration/Mobile Phone_Outline.svg"
                                class=" object-contain w-full h-full" alt="input-data">
                        </div>
                        <h2 class="text-blue-900 text-xl text-center font-semibold text-shadow-sm">
                            TAV Menghubungi anda
                        </h2>
                    </div>
                </div>

                <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
                    <div
                        class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
                        <h2 class=" translate-x-3 translate-y-3 text-white">3</h2>
                    </div>
                    <div class="w-full h-full">
                        <div class="w-full h-[65%]">
                            <img src="/images/illustration/Car_Two Color.svg" class=" object-contain w-full h-full"
                                alt="input-data">
                        </div>
                        <h2 class="text-blue-900 text-xl text-center font-semibold text-shadow-sm">
                            Inspeksi mobil anda
                        </h2>
                    </div>
                </div>
                <div class="w-full bg-white rounded-md shadow-2xl p-10 h-56 relative overflow-hidden my-4 sm:my-0">
                    <div
                        class="w-28 h-28 bg-blue-900 flex justify-center items-center rounded-full absolute top-[-40px] left-[-40px] text-2xl font-bold">
                        <h2 class=" translate-x-3 translate-y-3 text-white">4</h2>
                    </div>
                    <div class="w-full h-full">
                        <div class="w-full h-[65%]">
                            <img src="/images/illustration/Bank note_Isometric.svg" class="h-full w-full object-contain"
                                alt="input-data">
                        </div>
                        <h2 class="text-blue-900 text-center font-semibold text-shadow-sm text-lg ">
                            Dapatkan harga terbaik dan pembayaran dalam waktu singkat
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-7 mx-auto w-[90%] lg:my-12">
            <div
                class="m-7 text-center text-2xl font-bold sm:text-3xl sm:mt-10 md:text-4xl md:mt-12 lg:text-5xl lg:mt-14">
                <h2 class="text-blue-900">Kenapa Jual Mobil di TAV?</h2>
            </div>

            <div class="lg:grid lg:grid-cols-2 lg:gap-4">
                <div class="grid-why-sell mt-4">
                    <div class="flex items-center">
                        <img src="images/illustration/Handshake_Outline.svg" alt="">
                    </div>
                    <div class="ml-1 flex flex-col justify-center">
                        <h2 class="font-semibold text-lg text-slate-600 sm:text-xl md:text-2xl lg:text-3xl">Aman dan
                            Terpercaya</h2>
                        <p class="text-slate-400 sm:text-md md:text-xl md:mt-2 lg:text-2xl">Inspektor profesional kami
                            melakukan pemeriksaan mobil secara
                            menyeluruh
                            untuk mengetahui harga
                            yang sesuai dengan kondisi mobil Anda.</p>
                    </div>
                </div>
                <div class="grid-why-sell mt-4">
                    <div class="flex items-center">
                        <img src="images/illustration/Handshake_Two Color.svg" alt="">
                    </div>
                    <div class="ml-1 flex flex-col justify-center">
                        <h2 class="font-semibold text-lg text-slate-600 sm:text-xl md:text-2xl lg:text-3xl">Penawaran
                            Terbaik</h2>
                        <p class="text-slate-400 sm:text-md md:text-xl md:mt-2 lg:text-2xl">Kami memberikan harga yang
                            sesuai dan kami pastikan memberikan
                            penawaran
                            terbaik untuk Anda.</p>
                    </div>
                </div>
                <div class="grid-why-sell mt-4">
                    <div class="flex items-center">
                        <img src="images/illustration/Entrepreneurs_Isometric.svg" alt="trustworthy">
                    </div>
                    <div class="ml-1 flex flex-col justify-center">
                        <h2 class="font-semibold text-lg text-slate-600 sm:text-xl md:text-2xl lg:text-3xl">Proses Mudah
                        </h2>
                        <p class="text-slate-400 sm:text-md md:text-xl md:mt-2 lg:text-2xl">Dapatkan pengalaman yang
                            mudah & nyaman mulai dari proses inspeksi
                            mobil
                            hingga proses
                            kepengurusan semua dokumen Anda.</p>
                    </div>
                </div>
                <div class="grid-why-sell mt-4">
                    <div class="flex items-center">
                        <img src="images/illustration/Rocket Boy_Flatline.svg" alt="trustworthy">
                    </div>
                    <div class="ml-1 flex flex-col justify-center">
                        <h2 class="font-semibold text-lg text-slate-600 sm:text-xl md:text-2xl lg:text-3xl">Pembayaran
                            Cepat</h2>
                        <p class="text-slate-400 sm:text-md md:text-xl md:mt-2 lg:text-2xl">Kami tidak main-main.
                            Setelah kesepakatan dibuat, kami membayar mobil
                            Anda
                            secepatnya.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-52 relative sm:h-72 md:h-80 lg:h-96 xl:h-[500px]">
            <div class="absolute left-0 top-0 w-full h-full">
                <img class="w-full h-full object-cover" src="images/sean-kong-r2WhdAwJPxM-unsplash.jpg" alt="">
            </div>
            <div class="absolute p-5 bottom-0 w-full">
                <h1
                    class="text-xl text-white font-bold text-shadow-xl text-center sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
                    Punya pertanyaan lebih lanjut ?
                </h1>
                <div class="w-full flex justify-center md:mt-2 lg:mt-3 xl:mt-4">
                    <h1 class="text-white text-lg text-shadow-md sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl">
                        Hubungi
                        Kami
                        <span class="text-white"><a href="#"><i class="fa fa-whatsapp"></i></a></span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
</template>

<style>
        .grid-why-sell {
            display: grid;
            grid-template-columns: 1fr 3fr;
        }
</style>