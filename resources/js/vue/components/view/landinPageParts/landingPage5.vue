<template>
    <div class="contenidoFinal">
        <div class="row">
            <p class="textSeba">Envianos <spam>UN Mensaje</spam>
            </p>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center ">
                <contactForm></contactForm>
            </div>
        </div>
    </div>

    
</template>
<script setup>
//importar formulario de contacto
import contactForm from '../../forms/principal/contactForm.vue';
</script>
<style>
.contenidoFinal {
    background-image: url('/images/backgrounds/landingBackground2.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;

}

.fake-footer {
    height: 220px;

}
</style>