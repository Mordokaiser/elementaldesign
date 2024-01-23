<template>
    <div class="poto">
        <h2 class="textSebaServicios">NUESTROS <spam> SERVICIOS </spam></h2>
        <br><br><br>
        <div class="d-flex justify-content-evenly">
            <div class="p-2"><img class="imagenServicio" :src="web"></div>
            <div class="p-2"><img class="imagenServicio" :src="compra"></div>
            <div class="p-2"><img class="imagenServicio" :src="seguridad"></div>
            <div class="p-2"><img class="imagenServicio" :src="optimizacion"></div>
            <div class="p-2"><img class="imagenServicio" :src="diseno"></div>
        </div>
        <br>
        <br>
    </div>
</template>

<script setup>
const web = '/images/landing/servicioWeb.png';
const compra = '/images/landing/servicioCompra.png';
const seguridad = '/images/landing/servicioSeguridad.png';
const optimizacion = '/images/landing/servicioOptimizacion.png';
const diseno = '/images/landing/servicioDiseno.png';
</script>
<style>
.textSebaServicios {
    padding-top: 50px;
    font-family: 'Inter';
    font-size: 20px;
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    letter-spacing: 0.2rem;

}

.textSebaServicios spam {
    background-color: rgb(0, 141, 213);
    font-family: 'inter';
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
}
.poto {
    padding: 10%;
    text-align: center;
    background-image: url('/images/backgrounds/landingBackground2.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;
    width: 100%;
    
    align-items: center;
    background-blend-mode: color;
    background-color: rgba(0, 0, 0, 0.5);
    /* Cambia el valor de transparencia según tus necesidades */
}
.imagenServicio{
    max-width: 240px;
    max-height: 240px;
}
</style>