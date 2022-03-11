<template>
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img src="assets/images/icon1.png" height="50px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto ul-navbar float-end">
                    <li class="nav-item px-3 px-md-0 active">
                        <a class="nav-link" href="./">Travel Blog</a>
                    </li>
                    <li class="nav-item px-3 px-md-0" v-if="!auth.data">
                        <a class="nav-link" href="register.html">สมัครสมาชิก</a>
                    </li>
                    <li class="nav-item px-3 px-md-0" v-if="!auth.data">
                        <a class="nav-link" href="login.html">เข้าสู่ระบบ</a>
                    </li>
                    <li class="nav-item dropdown" v-if="auth.data">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="profile-img" src="assets/images/uploads/avatar.png" width="40px" height="40px" alt="Avatar">
                            FirstName
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mb-3" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="profile.html">
                                <div class="d-flex align-items-center">
                                    <img class="profile-img" src="assets/images/uploads/avatar.png" width="40px" height="40px" alt="Avatar">
                                    <div class="lh-sm p-3">
                                        <span class="fw-bold">FirstName LastName</span><br>
                                        <small>ดูโปรไฟล์ของคุณ</small>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="#" @click="logout">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="progressContainer">
            <div class="progressBar"></div>
        </div>
    </nav>
</template>
 
<script>
    module.exports = {
        props: ['auth'],
        mounted() {
             window.addEventListener('scroll', function(){
                let winTop = this.scrollY
                let navbar = document.querySelector(".navbar")

                let winHeight = this.innerHeight
                let docHeight = document.querySelector("body").offsetHeight
                let totalScroll = (winTop / (docHeight - winHeight)) * 100
                let bar = document.querySelector(".progressBar")
                bar.style.width = `${totalScroll}%`
                
                if(winTop > 300) {
                    navbar.classList.remove("navbar-dark", "bg-transparent")
                    navbar.classList.add("navbar-dark", "bg-dark")
                } else {
                    navbar.classList.remove("navbar-dark", "bg-dark")
                    navbar.classList.add("navbar-dark", "bg-transparent")
                }
            });
        },
        methods: {
            logout() {
                localStorage.clear();
                location.assign('./');
            }
        }

    }

</script>
 
<style>

</style>