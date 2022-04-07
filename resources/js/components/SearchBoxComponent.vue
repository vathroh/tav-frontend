<template>
    <div class="search-box-3">
        <div class="container">
            <form method="GET">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="select-brand">
                                <option>Pilih Merk</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Honda</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="select-location">
                                <option>Pilih Lokasi</option>
                                <option>Semarang</option>
                                <option>Jakarta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="select-type">
                                <option>Pilih Tipe Mobilr</option>
                                <option>Mobil Baru</option>
                                <option>Mobil Bekas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="transmission">
                                <option>Transmisi</option>
                                <option>Automatic</option>
                                <option>Manual</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                            <div class="range-slider">
                                <div data-min="0" data-max="150000" data-unit="IDR" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="form-group">
                            <button class="btn w-100 button-theme btn-md">
                                <i class="fa fa-search"></i> Cari
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>