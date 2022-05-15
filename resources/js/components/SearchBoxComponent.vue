<template>
    <section class="home-page_entrance">
        <div class="search-box-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <h1>
                            <a class="h1">Jual Mobil <i class="fa fa-angle-right"></i></a>
                        </h1>
                        <form method="GET" class="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">                        
                                    <div class="form-group">
                                        <select name="select-merek " class="form-select">
                                            <option value="">Merek</option>
                                            <option>Toyota</option>
                                            <option>Dhaihatsu</option>
                                            <option>BMW</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-select" name="select-model">
                                            <option value="">Model</option>
                                            <option>Avanza</option>
                                            <option>Yaris</option>
                                            <option>Agya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-select" name="select-model">
                                            <option value="">Tahun</option>
                                            <option>2010</option>
                                            <option>2019</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">                     
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="No. Hp/WhatsApp">
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button class="btn w-100 button-theme btn-md">
                                            Mulai Jual Disini
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <h1>
                            <a class="h1" >Beli Mobil <i class="fa fa-angle-right"></i></a>
                        </h1>
                        <form method="GET" class="form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                     
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cari Mobil Berdasarkan Merk, Model atau Kata Kunci">
                                        <button class="btn btn-md button-theme">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-year">
                                            <option>Pilih Tahun</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-type">
                                            <option>Pilih Tipe Mobilr</option>
                                            <option>Mobil Baru</option>
                                            <option>Mobil Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-type">
                                            <option>Pilih Tipe Mobilr</option>
                                            <option>Mobil Baru</option>
                                            <option>Mobil Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="select-type">
                                            <option>Pilih Tipe Mobilr</option>
                                            <option>Mobil Baru</option>
                                            <option>Mobil Bekas</option>
                                        </select>
                                    </div>
                                </div>
                                 -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <form method="GET" class="form">
                    <div class="row">
                        <div class="col-md-8">                     
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cari Mobil Berdasarkan Brand atau Tipe">
                            </div>
                        </div>
                        <div class="col-md-2">                        
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-make">
                                    <option>Pilih Model</option>
                                    <option>BMW</option>
                                    <option>Honda</option>
                                    <option>Lamborghini</option>
                                    <option>Sports Car</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-location">
                                    <option>Pilih Lokasi</option>
                                    <option>Semarang</option>
                                    <option>Jakarta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-year">
                                    <option>Pilih Tahun</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="select-type">
                                    <option>Pilih Tipe Mobilr</option>
                                    <option>Mobil Baru</option>
                                    <option>Mobil Bekas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="transmission">
                                    <option>Transmisi</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="transmission">
                                    <option>Transmisi</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button class="btn w-100 button-theme btn-md">
                                    <i class="fa fa-search"></i> Cari
                                </button>
                            </div>
                        </div>
                    </div>
                </form> -->
            </div>
        </div>
    </section>
</template>