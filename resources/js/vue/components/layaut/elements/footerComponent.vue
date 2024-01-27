<template>
    <!--
    <div class="d-flex justify-content-around h-25 align-items-center " id="footer-flex-container">
        <div class="footer-item">
            <a class="navbar-brand ms-auto" href="#">
                <img :src="logoUrl" alt="Logo" class="footer-img">
            </a>
            <br>
            <p class="text-start">Somos un pequeño grupo de desarrolladores que tiene como objetivo ayudar a empresas
                pequeñas a desarrollar un
                sitio web para su negocio</p>
        </div>
        <div class="footer-item">
            <h5>LEGAL:</h5>
            <ul>
                <li class="text-start ">Aviso Legal</li>
                <li class="text-start ">Políticas de Privacidad</li>
                <li class="text-start ">Políticas de Cookies</li>
            </ul>
        </div>
        <div class="footer-item encuentranos">
            <h5>ENCUENTRANOS EN:</h5>
            <div class="social-icon">
                <img :src="facebookIconUrl" alt="User Icon" class="network-icon">
                <img :src="instagramIconUrl" alt="User Icon" class="network-icon">
                <img :src="youtubeIconUrl" alt="User Icon" class="network-icon">
            </div>
            <br><br>
        </div>
    </div>
    <div class="d-flex justify-content-around align-items-center ">
        <div class="footer-item">
            <p class="copyright text-start ">©Equipo de desarrollo de Elemental Design</p>
        </div>
    </div>
-->
    <div class="text-center" id="footer-flex-container">
        <div class="row row-cols-3">
            <div class="footer-item">
                <a class="navbar-brand ms-auto" href="#">
                    <img :src="logoUrl" alt="Logo" class="footer-img">
                </a>
                <br>
                <p class="text-start">Somos un pequeño grupo de desarrolladores que tiene como objetivo ayudar a empresas
                    pequeñas a desarrollar un
                    sitio web para su negocio</p>
            </div>
            <div class="footer-item">
                <h5>LEGAL:</h5>
                <ul>
                    <li class="text-start ">Aviso Legal</li>
                    <li class="text-start ">Políticas de Privacidad</li>
                    <li class="text-start ">Políticas de Cookies</li>
                </ul>
            </div>
            <div class="footer-item encuentranos">
                <h5>ENCUENTRANOS EN:</h5>
                <div class="social-icon">
                    <img :src="facebookIconUrl" alt="User Icon" class="network-icon">
                    <img :src="instagramIconUrl" alt="User Icon" class="network-icon">
                    <img :src="youtubeIconUrl" alt="User Icon" class="network-icon">
                </div>
                <br><br>
            </div>
        </div>
    </div>
</template>
<script setup>
const logoUrl = '/images/logos/Logo avanzado para fondos oscuros v2 1.png';
const facebookIconUrl = '/images/icons/facebook.svg';
const instagramIconUrl = '/images/icons/instagram.svg';
const youtubeIconUrl = '/images/icons/youtube.svg';

</script>

<style>
#footer-flex-container {
    height: 15%;
    background-color: rgb(0, 0, 0);
}

.footer-item {
    padding: 2.5%;
    width: 33%;
    color: aliceblue;
    text-align: center;
}

.footer-item .encuentranos {
    margin-bottom: px;

}

.footer-img {
    padding: 10px;
    max-height: 65px;
}

.network-icon {
    margin-left: 5px;
    margin-right: 5px;
    max-height: 36px;
    padding-left: 15px;
}


.text-start {
    font-family: Inter;
    font-size: 15px;
    font-weight: 500;
    line-height: 18px;
    letter-spacing: 0em;
    text-align: left;
}

.copyright {
    color: white;
}
</style>