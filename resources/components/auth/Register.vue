<template>
    <div id="register">
        <div class="auto-form-wrapper">
            <img class="rounded mx-auto d-block" src="/images/logo-kemendikbud.png" alt="Logo KEMENDIKBUD"
                width="80" height="80">
            <h2 class="text-center mt-2">REGISTER SIPATEN</h2>
            <h5 class="text-center mb-5 text-muted">Sistem Informasi Kepangkatan Dosen</h5>
            <form action="#">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <div class="form-check form-check-flat mt-0">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" checked=""> I agree to the terms <i
                                class="input-helper"></i></label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                    <router-link to="/" class="text-black text-small">Login</router-link>
                </div>
            </form>
        </div>

        <p class="footer-text text-center" style="margin-top:20px">Copyright © {{ currentYear }} SIPATEN - LLDIKTI1
            Sumatera Utara. <br>All rights reserved.</p>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                currentYear: new Date().getFullYear(),
            }
        },
        mounted() {
            console.log('mounted register')
        }
    }

</script>
