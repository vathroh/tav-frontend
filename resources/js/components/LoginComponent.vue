<template>
    <div class="login-1">
        <div class="container-fluid">
            <div class="row login-box">
                <div class="col align-self-center pad-0 form-section">
                    <div class="form-inner">
                        <a href="index.html" class="logo">
                            <img :src="gambar" alt="logo">
                        </a>
                        <h3>Daftar/Masuk</h3>
                        <form action="#" method="GET">
                            <div class="form-group clearfix">
                                <input name="noHp" type="number" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-theme btn-md w-100">Kirim Nomor OTP</button>
                            </div>
                            <div class="extra-login form-group clearfix">
                                <span>Atau Masuk Dengan</span>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="social-list clearfix">
                                <!-- <li><a href="#" class="facebook-bg">Facebook</a></li>
                                <li><a href="#" class="twitter-bg">Twitter</a></li> -->
                                <li><a href="#" class="google-bg"><i class="fa fa-google"> </i> Google</a></li>
                            </ul>
                        </form>

                        <div class="clearfix"></div>
                        <p>Don't have an account? <a href="signup.html" class="thembo"> Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import image from '../../../public/style/img/logo-tav.png'
export default {
    data(){
        return{
            gambar: image
        }
    }
    
}
</script>