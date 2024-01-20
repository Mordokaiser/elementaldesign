<template>
    <div class="contenidoFinal">
        <contactForm></contactForm>
    </div>

    <div class="fake-footer"> <!--parche del footer xD--></div>
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
    display: flex;
    justify-content: center;
}
.fake-footer{
    height: 220px;

}
</style>