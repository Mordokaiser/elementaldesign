<template>
    <!--footer del mordo-->
    <footer class="container "  style="background-color: black;  max-width: 100%; margin-inline: 0px; color: white;">
        <div class="row" style=" width: 100%;">
            <div class="col-sm" >
                
            </div>
        </div>
        <div class="row" style=" width: 100%;" >
            <div class="col-sm" >
                <a class="navbar-brand ms-auto" href="#" >
                    <img :src="logoUrl" alt="Logo" class="footer-img" id="footer-elemental-logo">
                </a>
                <p class="text-start">Somos un pequeño grupo de desarrolladores que tiene como objetivo ayudar a empresas
                    pequeñas a desarrollar un
                    sitio web para su negocio</p>
            </div>
            <div class="col-sm" style="padding-top:3%;">
    <h5 class="footer-title">LEGAL:</h5>
    <ul>
        <li class="text-start">Aviso Legal</li>
        <li class="text-start">Políticas de Privacidad</li>
        <li class="text-start">Políticas de Cookies</li>
    </ul>
</div>
<div class="col-sm" style="padding-top: 3%;">
    <h5 class="footer-title">ENCUENTRANOS EN:</h5>
    <div class="social-icon">
        <img :src="facebookIconUrl" alt="User Icon" class="network-icon">
        <img :src="instagramIconUrl" alt="User Icon" class="network-icon">
        <img :src="youtubeIconUrl" alt="User Icon" class="network-icon">
    </div>
</div>

        </div>
        <div class="row"  style="text-align: center; max-width: 100%;"><p>©Equipo de desarrollo de Elemental Design</p></div>
    </footer>
</template>
<script setup>
const logoUrl = '/images/logos/Logo avanzado para fondos oscuros v2 1.png';
const facebookIconUrl = '/images/icons/facebook.svg';
const instagramIconUrl = '/images/icons/instagram.svg';
const youtubeIconUrl = '/images/icons/youtube.svg';

</script>

<style>


#footer-elemental-logo{
    max-height: 100%;
    max-width: 100%;
}

#footer-flex-container {
    height: 15%;
    background-color: rgb(0, 0, 0);
}

#text-copyright{
    color: aliceblue;
    padding: 5px;
}

.footer-item {
    padding: 2.5%;
    width: 33%;
    color: aliceblue;
    text-align: center;
}

.footer-title{
    font-size: 85%;
}

.footer-img {
    padding: 10px;
    max-height: 65px;
}

.network-icon {
    margin-left: 5px;
    margin-right: 5px;
    margin-top: 5px;
    max-height: 64px;
    padding-left: 15px;
}


.text-start {
    padding: 5px;
    font-family: Inter;
    font-size: 85%;
    font-weight: 500;
    line-height: 18px;
    letter-spacing: 0em;
    text-align: justify;
}

.copyright {
    color: white;
}

</style>