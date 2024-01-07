<template>
    <div class="d-flex justify-content-between align-items-center mb-3 fixed-bottom" id="footer-flex-container">
        <div class="footer-item">
            <a class="navbar-brand ms-auto" href="#">
                <img :src="logoUrl" alt="Logo" class="footer-img">
            </a>
            <br>
            <p class="text-start">Somos un pequeño grupo de desarrolladores que tiene como objetivo ayudar a empresas pequeñas a desarrollar un
                sitio web para su negocio</p>
        </div>
        <div class="footer-item">
            <h3>Legal:</h3>
        </div>
        <div class="footer-item">Around</div>
    </div>
</template>
<script setup>
const logoUrl = '/images/logos/Logo avanzado para fondos oscuros v2 1.png';
</script>
<style>
#footer-flex-container {
    height: 220px;
    background-color: rgb(0, 0, 0);
    padding-left: 20px;
    padding-right: 20px;
    margin: 20px;
}

.footer-item{
    width: 200px;
    max-height: 180px;
    color: aliceblue;
}

.footer-img {
    padding: 10px;
    max-height: 80px;
}
</style>