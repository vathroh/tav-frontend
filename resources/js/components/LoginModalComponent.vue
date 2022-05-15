<template>
    <div class="login-1" >
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content form-inner ">
                    <div class="modal-header align-self-center">
                        <h3>Daftar/Masuk</h3>
                    </div>
                    <div class="model-body">
                                <form action="#" method="GET">         
                                    <div class="form-group clearfix pad-2">
                                        <input name="noHp" type="number" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telpon">
                                    </div>
                                    <div class="form-group pad-2">
                                        <button type="submit" class="btn button-theme btn-md w-100">Kirim Kode OTP</button>
                                    </div>
                                <div class="extra-login form-group clearfix pad-20">
                                    <span>Atau</span>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="social-list clearfix">
                                    <li>
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i> Google</a>
                                    </li>
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
</template>